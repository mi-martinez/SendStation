@extends('layout.master2')

@section('content')
<div class="page-content d-flex align-items-center justify-content-center">

  <div class="row w-100 mx-0 auth-page">
    <div class="col-md-8 col-xl-6 mx-auto">
      <div class="card">
        <div class="row">
          <div class="col-md-4 pr-md-0">
            <div class="auth-left-wrapper" style="background-image: url('/assets/images/bck-login.jpg')">

            </div>
          </div>
          <div class="col-md-8 pl-md-0">
            <div class="auth-form-wrapper px-4 py-5">
               <img src="/assets/images/sendstation.png" alt="" class="logo-ss">
              <h5 class="text-muted font-weight-normal mb-4">¡Bienvenido! Ingresa a tu cuenta.</h5>
              <form class="forms-sample">
                <div class="form-group">
                  <label for="exampleInputEmail1">Correo Electrónico</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Contraseñá</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" autocomplete="current-password" placeholder="Password">
                </div>
                <div class="form-check form-check-flat form-check-primary">
                  <label class="form-check-label">
                    <input type="checkbox" class="form-check-input">
                      Mantenerme conectado
                  </label>
                </div>
                <div class="mt-3">
                  <a href="{{ url('/') }}" class="btn btn-primary mr-2 mb-2 mb-md-0">Iniciar Sesión</a>

                </div>
                <!-- <a href="{{ url('/auth/register') }}" class="d-block mt-3 text-muted">Not a user? Sign up</a> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>
@endsection