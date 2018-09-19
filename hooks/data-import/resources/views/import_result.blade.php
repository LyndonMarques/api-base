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
      <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-bordered panel-primary">
          <div class="panel-heading">
            <h3 class="panel-title">
              Resultado
            </h3>
          </div>

          <div class="panel-body">
            @if ($errors->isEmpty())
              <p>
                Dados importados com sucesso.
              </p>
            @else
              <p>
                Ocorreram erros de importação nos seguintes Pax:
              </p>

              <ul>
                @foreach ($errors as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            @endif

            <br>

            <a href="{{ url('admin/import/') }}" class="btn btn-primary">
              Voltar
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
