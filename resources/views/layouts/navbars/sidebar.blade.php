<div class="sidebar" data-color="azure"   data-background-color="white" data-image="{{ asset('img/fondoimg.jpg') }}" src="{{ asset('img/persona.jpg') }}">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"
 <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      Tip 2: you can also add an image using data-image tag
  -->
 
  <div class="logo">
    <a href="https://creative-tim.com/" class="simple-text logo-normal">
      {{ __('El Canal del AT') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="#">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Home') }}</p>
        </a>
      </li>
    
    
      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample" aria-expanded="false" aria-controls="laravelExample">
          <i><span class="material-icons">
            business
            </span></i>
          <p>{{ __('Busqueda Laboral') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample" aria-expanded="false" aria-controls="collapseExample">
          <ul class="nav">
            
            <li class="nav-item{{ $activePage == 'pacientes' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('pacientes.index')}}">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Gran Bs.As') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Capital Federal') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Zona Sur') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Zona Norte') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Zona Oeste') }} </span>
              </a>
            </li>
           
          </ul>
        </div>
      </li>



      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample32" aria-expanded="true">
          <i><span class="material-icons">
            card_travel
            </span></i>
          <p>{{ __('Acompañante Ter...') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse " id="laravelExample32">
          <ul class="nav">
            <li class="nav-item{{ $activePage == 'card' ? ' active' : '' }}">
              <a class="nav-link" href="{{ route('card.index')}}">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Gran Bs.As') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Capital Federal') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Zona Sur') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Zona Norte') }} </span>
              </a>
            </li>

            <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
              <a class="nav-link" href="#">
                <i class="material-icons">add</i>
                <span class="sidebar-normal">{{ __('Zona Oeste') }} </span>
              </a>
            </li>
            
          </ul>
        </div>
      </li>
      @can('user_index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index')}}">
          <i class="material-icons">content_paste</i>
            <p>Usuarios</p>
        </a>
      </li>
      @endcan
      <li class="nav-item{{ $activePage == 'postulados' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('postulados.index')}}">
          <i class="material-icons">content_paste</i>
            <p> Postulados </p>
        </a>
      </li>
      
      <li class="nav-item{{ $activePage == 'posts' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('posts.index') }}">
          <i class="material-icons">library_books</i>
            <p>{{ __('Post') }}</p>
        </a>
      </li>
     

      <li class="nav-item {{ ($activePage == 'profile' || $activePage == 'user-management') ? ' active' : '' }}">
        <a class="nav-link" data-toggle="collapse" href="#laravelExample21" aria-expanded="false" aria-controls="laravelExample21">
          <i><span class="material-icons">
            build
            </span></i>
          <p>{{ __('Configuracion') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse" id="laravelExample21" aria-expanded="false" aria-controls="collapseExample21">
      <ul class="nav">
      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('genero.index') }}">
          <i class="material-icons">add</i>
          <span class="sidebar-normal">{{ __('Generos') }} </span>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('estado.index') }}">
          <i class="material-icons">add</i>
          <span class="sidebar-normal">{{ __('Estados') }} </span>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('zona.index')}}">
          <i class="material-icons">add</i>
          <span class="sidebar-normal">{{ __('Zonas') }} </span>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('provincias.index') }}">
          <i class="material-icons">add</i>
          <span class="sidebar-normal">{{ __('Provincia') }} </span>
        </a>
      </li>

      <li class="nav-item{{ $activePage == 'profile' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('localidades.index') }}">
          <i class="material-icons">add</i>
          <span class="sidebar-normal">{{ __('Localidades') }} </span>
        </a>
      </li>

      
      @can('permission_index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permissions') }}</p>
        </a>
      </li>
      @endcan
      @can('role_index')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index')}}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
      @endcan
   
      <li class="nav-item{{ $activePage == '' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('card.index')}}">
          <i class="material-icons">card</i>
          <p>{{ __('Card') }}</p>
        </a>
      </li>
      <li class="nav-item{{ $activePage == 'pedido' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('pedido.index')}}">
          <i class="material-icons">language</i>
          <p>{{ __('Pedidos') }}</p>
        </a>
      </li>
    </ul>
  </div>
</li>
   
    </ul>
  </div>
</div>
