<?php

namespace DataImport\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Collection;
use TCG\Voyager\Facades\Voyager;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\DataImportRequest;

use App\ImportData;
use App\User;
use TCG\Voyager\Models\Role;


class ImportController extends Controller
{

  public function index()
  {
    return view('data-import::index');
  }

  public function parseImport(DataImportRequest $request)
  {
    $path = $request->file('file')->getRealPath();

    if ($request->has('header')) {
      $data = Excel::load($path, function($reader) {})->get()->toArray();
      } else {
        $data = array_map('str_getcsv', file($path));
      }
      if (count($data) > 0) {
        if ($request->has('header')) {
          $header_fields = [];
          foreach ($data[0] as $key => $value) {
            $header_fields[] = $key;
          }
          $data = array_slice($data, 1, 101);
        }

        $import_data = ImportData::create([
          'filename' => $request->file('file')->getClientOriginalName(),
          'action'   => $request->input('action'),
          'header'   => $request->has('header'),
          'type'     => $request->input('type'),
          'data'     => $data
        ]);

      } else {
        return redirect()->back();
      }

      return view('data-import::import_fields', compact('import_data'));
    }

    public function processUsers(Request $request)
    {
      $import_data = ImportData::find($request->id);

      $errors = collect();

      $admin_role       = Role::where('name', 'admin')->firstOrFail();
      $power_role       = Role::where('name', 'power')->firstOrFail();
      $trade_role       = Role::where('name', 'trade')->firstOrFail();
      $financial_role   = Role::where('name', 'financial')->firstOrFail();
      $sponsorship_role = Role::where('name', 'sponsorship')->firstOrFail();
      $conference_role  = Role::where('name', 'conference')->firstOrFail();

      // if header is set proceed to insert or update users an paxes
      if ($import_data->header) {
        foreach ($import_data->data as $row) {
          if ($row['email'] != null) {
            $user = User::firstOrNew(['email' => $row['email']]);

            if (!$user->exists) {
              $user->fill([
                'name'           => ucwords(strtolower($row['name'])),
                'password'       => bcrypt(preg_replace('/[^0-9.]/', '', $row['cpf']))
              ]);
              
              if ($user->save()) {
                switch ($row['role']) {
                  case 'trade':
                    $user->roles()->sync([$trade_role->id, $sponsorship_role->id, $conference_role->id]);

                  case 'sponsorship':
                    $user->roles()->sync([$trade_role->id, $sponsorship_role->id]);
                    break;

                  case 'conference':
                    $user->roles()->sync([$trade_role->id,  $conference_role->id]);

                  case 'financial':
                    $user->roles()->sync($financial_role);
                  default:
                    break;
                }

              } else {
                $errors->push($row['email']);
              }
            }
          }
        }
      }

      // TODO: dynamic fields if header is not set

      $errors = $errors->unique();
      return view('data-import::import_result', compact('errors'));
    }
  }
