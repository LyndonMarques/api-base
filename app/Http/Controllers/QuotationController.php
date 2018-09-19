<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\User;
use App\Sponsorship;
use App\Conference;
use App\ServiceCategory;

use App\Mail\NewQuotation;

class QuotationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = User::find($request->input('id'));
        if ($user) {
          $quotation = null;
          $type = $request->input('fields.type');
          if ($type == 'sponsorship') {
            $mailTo = 'patrocinio.zodiac@powertravel.com.br';
            $quotation = new Sponsorship();
          }

          if ($type == 'conference') {
            $mailTo = 'eventos.zodiac@powertravel.com.br';
            $quotation = new Conference();
          }

          $quotation->fields = $request->input('fields');

          $quotation->category()->associate(ServiceCategory::where('slug', $type)->first());
          $quotation->user()->associate($user);

          $quotation->save();

          Mail::to($mailTo)->send(new NewQuotation(array(
            'quotation' => $quotation,
            'context'   => 'power'
          )));

          Mail::to($user->email)->send(new NewQuotation([
            'quotation' => $quotation,
            'context'   => 'zodiac'
          ]));

          if (Mail::failures()) {
            return response()->json(compact('quotation'), 400);
          } else {
            return response()->json(compact('quotation'), 201);
          }
        } else {
          return response()->json(['user not found'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Return all active service categories
     *
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public function categories()
    {
        return ServiceCategory::all()->sortBy('order');
    }
}
