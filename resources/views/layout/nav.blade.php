<nav class="navbar navbar-expand-xl" style=" width:100%; background-color: #e3f2fd; box-shadow: 2px 2px 4px #198754; position:relative; z-index: 999">
    <div class="container-fluid mx-4">
      @include('componen.web-icon')
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        @include('componen.nav-menu')
        @include('componen.search')
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ auth()->user()->name }}
              @include('componen.user-icon')
            </a>
            <ul class="dropdown-menu p-4">
              <li>
                <a class="nav-link" href="/profile">
                  @include('componen.profile-icon')
                  Profile
                </a>
              </li>
              <li>
                <a class="nav-link" href="/posts/barang">
                  @include('componen.profile-icon')
                  MyBarang
                </a>
              </li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item">
                    @include('componen.logout-icon')
                    Logout
                  </button>
                </form>
              </li>
            </ul>
          </li>  
          @else
        </ul>
        @include('componen.login&register')
        @endauth
      </div>
    </div>
</nav>