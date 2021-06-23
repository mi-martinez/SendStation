@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}" rel="stylesheet" /> 
@endpush

@section('title','Añadir Lista ')

@section('content')

<div class="d-flex justify-content-center align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Nueva Lista de Contactos</h4>
  </div>
</div>


<div class="row d-flex justify-content-center">
  <div class="col-lg-6 col-xl-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="d-flex justify-content-between align-items-baseline mb-2">
          <h6 class="card-title mb-0">Subir Lista de Contactos</h6>
        </div>
        <p class="text-muted mb-4">Utiliza este archivo como plantilla. <a href="#">Descargar CSV</a></p>
       
        <form action="" method="post" action="">
          @csrf
        <div class="form-group row">
              <div class="col-lg-3">
              <label class="col-form-label">Título de la Lista.</label>
            </div>
            <div class="col-lg-9">
              <input class="form-control" maxlength="30" name="name-list" id="defaultconfig" type="text" placeholder="Nombre de la lista" required>
            </div>
          </div>
          <label for="name">Subir contactos archivo CSV</label>
          <input type="file" id="dropify-csv" name="file-upload" class="border" data-allowed-file-extensions="csv"/>
          <div class="row-submit">
          <input class="btn btn-primary" type="submit" value="Crear Lista">
          </div>
        </form>
      </div> 
    </div>
  </div>


</div> 
<!-- row -->


@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap-maxlength.js') }}"></script>
  <script src="{{ asset('assets/js/dropify.js') }}"></script>
@endpush