<div class="panel panel-bordered panel-dark">

  <div class="panel-heading">
    <h3 class="panel-title">
      {{ $title }}
    </h3>
  </div>

  <div class="panel-body">
    <form method="POST" action="{{ url('admin/import/parse') }}" enctype="multipart/form-data">
      {{ csrf_field() }}
      <input type="hidden" name="type" value="{{ $type }}">
      <div class="form-group{{ $errors->has('file') ? ' has-error' : '' }}">
        <div class="row">
          <div class="col-12 col-md-8">
            <label for="file" class="control-label">Arquivo CSV</label>
            <br>
            <div class="input-group">
              <label class="input-group-btn">
                <span class="btn btn-primary">
                    Selecionar <input type="file" class="hidden" name="file">
                </span>
              </label>
              <input type="text" class="form-control" readonly style="margin: 5px 0;">
            </div>

            <div class="checkbox">
              <label>
                <input type="checkbox" name="header" checked>
                Possui cabeçalho
              </label>
            </div>
          </div>


          <div class="col-md-4">
            <button type="submit" class="btn btn-success btn-block" style="margin-top: 32px;">
              Importar
            </button>
          </div>

          <div class="col-12">
            @if ($errors->has('csv_file'))
              <span class="help-block">
                <strong>{{ $errors->first('csv_file') }}</strong>
              </span>
            @endif
          </div>
        </div>
      </div>
    </form>

    <p class="text-center">
      <a href="{{ asset('/tables/planilha-modelo-pax.csv') }}" download>Clique aqui</a> para fazer o download da planilha de exemplo.
    </p>
  </div>
</div>
