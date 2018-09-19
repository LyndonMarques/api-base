@extends('voyager::master')

@section('page_header')
  <div class="container-fluid">
    <h1 class="page-title">
      <i class="voyager-file-text"></i> Importação de Dados
    </h1>
  </div>
@endsection

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="panel panel-bordered panel-dark">
          <div class="panel-heading">
            <h3 class="panel-title">
              Revisão da Tabela
            </h3>
          </div>

          <div class="panel-body">
            <form class="form-horizontal" method="POST" action="{{ url("admin/import/process-{$import_data->type}") }}">
              {{ csrf_field() }}
              <input type="hidden" name="id" value="{{ $import_data->id }}" />

              <table class="table">
                <tr>
                  @if ($import_data->header)
                    @foreach (config("app.{$import_data->type}_fields") as $field => $label)
                      <th>{{ $label }}</th>
                    @endforeach
                  @else
                    @foreach ($import_data->data[0] as $key => $data)
                      <th>
                        <select name="fields[{{ $key }}]" class="form-control">
                          <option value="ignore">Ignorar</option>
                          @foreach (config('app.user_fields') as $user_field => $label)
                            <option value="{{ $user_field }}">
                              {{ $label }}
                            </option>
                          @endforeach
                        </select>
                      </th>
                    @endforeach
                  @endif
                </tr>

                <tr>
                  @foreach ($import_data->data[0] as $data)
                    <td>{{ $data }}</td>
                  @endforeach
                </tr>
              </table>

              <button type="submit" class="btn btn-success">
                Importar
              </button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
