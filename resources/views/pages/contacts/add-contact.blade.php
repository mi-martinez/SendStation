@extends('layout.master')

@push('plugin-styles')
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
@endpush

@section('title','Añadir Contacto ')

@section('content')

<div class="d-flex justify-content-center align-items-center flex-wrap grid-margin">
    <div>
        <h4 class="mb-3 mb-md-0">Nueva Contacto</h4>
    </div>
</div>


<div class="row d-flex justify-content-center">
    <div class="col-lg-6 col-xl-6 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-baseline mb-2">
                    <h6 class="card-title mb-0">Crear Nuevo Contacto</h6>
                </div>
                <p class="text-muted mb-4">Utiliza este archivo como plantilla. <a href="#">Descargar CSV</a></p>

                <form action="" method="post" action="">
                    @csrf
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Nombre</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" maxlength="30" name="name-list" id="defaultconfig" type="text"
                                placeholder="Nombre" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Correo Electronico</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" maxlength="30" name="name-list" id="defaultconfig" type="text"
                                placeholder="Correo Electronico" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">Teléfono</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" maxlength="30" name="name-list" id="defaultconfig" type="text"
                                placeholder="Teléfono" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-lg-3">
                            <label class="col-form-label">WhatsApp</label>
                        </div>
                        <div class="col-lg-9">
                            <input class="form-control" maxlength="30" name="name-list" id="defaultconfig" type="text"
                                placeholder="+57 322000000" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-lg-12 list-bck">
                        <label>Lista o Segmento</label>
                            <select class="js-example-basic-single">
                                <option value="TX">Texas</option>
                                <option value="NY">New York</option>
                                <option value="FL">Florida</option>
                                <option value="KN">Kansas</option>
                                <option value="HW">Hawaii</option>
                            </select>
                        </div>
                    </div>
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
 <script src="{{ asset('assets/plugins/select2/select2.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/form-validation.js') }}"></script>
  <script src="{{ asset('assets/js/select2.js') }}"></script>
@endpush