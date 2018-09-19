@extends('voyager::master')

@section('css')
@endsection

@section('page_header')
  <div class="container-fluid">
    <h1 class="page-title">
      <i class="voyager-file-text"></i> Importação de Dados
    </h1>
  </div>
@endsection

@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 col-md-6">
        @include('data-import::partials.card_user', ['title' => 'Importar Uusários', 'type' => 'user'])
      </div>
    </div>
  </div>
@endsection

@section('javascript')
  <script type="text/javascript">
    // Whipping File Inputs Into Shape with Bootstrap by Cory Lavista
    $(function() {
      // We can attach the `fileselect` event to all file inputs on the page
      $(document).on('change', ':file', function() {
        var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
        input.trigger('fileselect', [numFiles, label]);
      });

      // We can watch for our custom `fileselect` event like this
      $(document).ready( function() {
        $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text');

          if( input.length ) {
            input.val(label);
          }
        });
      });
    });
  </script>
@endsection
