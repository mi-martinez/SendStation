@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/datatables-net/dataTables.bootstrap4.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/plugins/prismjs/prism.css') }}" rel="stylesheet" />
@endpush

@section('title','Contactos ')

@section('content')
<nav class="page-breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="#">Contactos</a></li>
    <li class="breadcrumb-item active" aria-current="page">Todos los contactos</li>
  </ol>
</nav>

<div class="d-flex justify-content-between align-items-center flex-wrap grid-margin">
  <div>
    <h4 class="mb-3 mb-md-0">Todos los contactos</h4>
  </div>
  <div class="d-flex align-items-center flex-wrap text-nowrap">
  <a href="{{ url('/contacts/add-contact') }}">
      <button type="button" class="btn btn-primary btn-icon-text mb-2 mb-md-0">
        NUEVO CONTACTO
      </button>
  	</a>
  </div>
</div>
<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
          <div class="table-responsive">
          <table id="dataTableExample" class="table">
            <thead>
              <tr>
                <th>Correo Electrónico</th>
                <th>Enviados</th>
                <th>Entregados</th>
                <th>Añádido</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>demo@demo.com</td>
                <td>1</td>
                <td>1</td>
                <td>26/04/2021</td>
                <td>
                  <div class="dropdown d-flex justify-content-end">
                    <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="gestion">Gestionar </span><i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">Ver</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Editar</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Eliminar</span></a>
                    </div>
                  </div>
              </td>
              </tr>
              <tr>
                <td>demo@demo.com</td>
                <td>1</td>
                <td>1</td>
                <td>26/04/2021</td>
                <td>
                  <div class="dropdown d-flex justify-content-end">
                    <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="gestion">Gestionar </span><i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">Ver</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Editar</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Eliminar</span></a>
                    </div>
                  </div>
              </td>
              </tr>
              <tr>
                <td>demo@demo.com</td>
                <td>1</td>
                <td>1</td>
                <td>26/04/2021</td>
                <td>
                  <div class="dropdown d-flex justify-content-end">
                    <button class="btn p-0" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="gestion">Gestionar </span><i class="icon-lg text-muted pb-3px" data-feather="more-horizontal"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="eye" class="icon-sm mr-2"></i> <span class="">Ver</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="edit-2" class="icon-sm mr-2"></i> <span class="">Editar</span></a>
                      <a class="dropdown-item d-flex align-items-center" href="#"><i data-feather="trash" class="icon-sm mr-2"></i> <span class="">Eliminar</span></a>
                    </div>
                  </div>
              </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

 
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/datatables-net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables-net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('assets/plugins/prismjs/prism.js') }}"></script>
  <script src="{{ asset('assets/plugins/clipboard/clipboard.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/data-table.js') }}"></script>
@endpush