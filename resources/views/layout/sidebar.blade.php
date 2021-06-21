<nav class="sidebar">
  <div class="sidebar-header">
    <a href="#" class="sidebar-brand">
      <img src="/assets/images/logo.png" alt="">
    </a>
    <div class="sidebar-toggler not-active">
      <span></span>
      <span></span>
      <span></span>
    </div>
  </div>
  <div class="sidebar-body">
    <ul class="nav">
      <li class="nav-item nav-category">INICIO</li>
      <li class="nav-item {{ active_class(['dashboard']) }}">
        <a href="{{ url('/dashboard') }}" class="nav-link">
          <i class="link-icon" data-feather="box"></i>
          <span class="link-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item nav-category">MÓDULOS</li>
      <li class="nav-item {{ active_class(['contacts/*']) }}">
        <a class="nav-link" data-toggle="collapse" href="#email" role="button" aria-expanded="{{ is_active_route(['contacts/*']) }}" aria-controls="email">
          <i class="link-icon" data-feather="user"></i>
          <span class="link-title">Contactos</span>
          <i class="link-arrow" data-feather="chevron-down"></i>
        </a>
        <div class="collapse {{ show_class(['contacts/*']) }}" id="email">
          <ul class="nav sub-menu">
            <li class="nav-item">
              <a href="{{ url('/contacts/all-list-contacts') }}" class="nav-link {{ active_class(['contacts/all-list-contacts']) }}">Todas las listas</a>
            </li>
            <li class="nav-item">
              <a href="{{ url('/contacts/all-contacts') }}" class="nav-link {{ active_class(['contacts/all-contacts']) }}">Todos los contactos</a>
            </li>
          </ul>
        </div>
      </li>
     
      <li class="nav-item nav-category">CAMPAÑA</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="mail"></i>
          <span class="link-title">Correo Electrónico</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="smartphone"></i>
          <span class="link-title">SMS</span>
        </a>
      </li>

      <li class="nav-item nav-category">FACTURACIÓN</li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="send"></i>
          <span class="link-title">Plan Contratado</span>
        </a>
      </li>
      <li class="nav-item">
        <a href="#" class="nav-link">
          <i class="link-icon" data-feather="dollar-sign"></i>
          <span class="link-title">Facturación</span>
        </a>
      </li>
    </ul>
  </div>
</nav>