@if(auth()->user()->role == '1')
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{asset('assets/auth/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">APP RH</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-primary" href="/dashboard">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white collapsed" href="../pages/dashboard.html">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">list</i>
          </div>
          <span class="nav-link-text ms-1">Liste des Demandes</span>
        </a>
      </li>
      
      <!--<li class="nav-item">
        <a class="nav-link text-white" href="../pages/dashboard.html">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">manage_accounts</i>  --Remplacez 'manage_accounts' par l'icône que vous souhaitez utiliser
          </div>
          <span class="nav-link-text ms-1">Gérer Utilisateur</span>
        </a>
      </li>-->
      <li class="nav-item">
        <a class="nav-link text-white collapsed" href="#submenuUsers" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="submenuUsers">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">manage_accounts</i> <!-- Remplacez 'manage_accounts' par l'icône que vous souhaitez utiliser -->
          </div>
          <span class="nav-link-text ms-1">Gérer Utilisateur</span>
        </a>
        <div class="collapse" id="submenuUsers">
          <ul class="nav nav-sm flex-column">
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('users.create')}}">
                <i class="material-icons me-2">person_add</i> Ajouter Utilisateur
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="{{route('users.index')}}">
                <i class="material-icons me-2">people</i> Liste des Utilisateurs
              </a>
            </li>
          </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">notifications</i>
          </div>
          <span class="nav-link-text ms-1">Notifications</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('profileadmin.index')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <div class="dropdown-divider"></div>
              <a class="nav-link text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">logout</i>
                        </div>
                        <span class="nav-link-text ms-1">Déconnexion</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </div>
      </li>
    </ul>
  </div>
</aside>
@elseif(auth()->user()->role == '0')
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
      <img src="{{asset('assets/auth/img/logo-ct.png')}}" class="navbar-brand-img h-100" alt="main_logo">
      <span class="ms-1 font-weight-bold text-white">APP RH</span>
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white active bg-gradient-primary" href="/dashboard">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">dashboard</i>
          </div>
          <span class="nav-link-text ms-1">Dashboard</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white collapsed" href="#submenuDemandes" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="submenuDemandes">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                <i class="material-icons opacity-10">assignment</i>
            </div>
            <span class="nav-link-text ms-1">Demandes</span>
        </a>
        <div class="collapse" id="submenuDemandes">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('demandes.create')}}">
                        <i class="material-icons me-2">note_add</i> Ajouter Demande
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{route('demandes.index')}}">
                        <i class="material-icons me-2">list</i> Liste des Demandes
                    </a>
                </li>
            </ul>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">notifications</i>
          </div>
          <span class="nav-link-text ms-1">Notifications</span>
        </a>
      </li>
      <li class="nav-item mt-3">
        <h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="{{route('profile.index')}}">
          <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
            <i class="material-icons opacity-10">person</i>
          </div>
          <span class="nav-link-text ms-1">Profile</span>
        </a>
      </li>
      <li class="nav-item">
        <div class="dropdown-divider"></div>
              <a class="nav-link text-white" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
                          <i class="material-icons opacity-10">logout</i>
                        </div>
                        <span class="nav-link-text ms-1">Déconnexion</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
        </div>
      </li>
    </ul>
  </div>
</aside>
@endif
