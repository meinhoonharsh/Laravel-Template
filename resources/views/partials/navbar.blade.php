<nav class="navbar navbar-expand-lg fixed-top navbar-light imp-bg-nav-1" id="mainnavbar" style="box-shadow:none;">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><img src="{{ asset('assets/img/logo.png') }}" height="40px" alt="rentawall"/></a>
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarNav"
      aria-controls="navbarNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item mt-md-2">
          <a class="px-2 text-black" href="/">Home</a>
        </li>
        <li class="nav-item mt-md-2">
          <a class="px-2 text-black" href="{{ route('register') }}">Blogs</a>
        </li>
        <li class="nav-item mt-md-2">
          <a class="px-2 text-black" href="{{ route('register') }}">E-Books</a>
        </li>
        <li class="nav-item mt-md-2">
          <a class="px-2 text-black" href="{{ route('register') }}">About</a>
        </li>
        <li class="nav-item mt-md-2">
          <a class="px-2 text-black" href="{{ route('register') }}">Contact</a>
        </li>
        @if (Route::has('login'))
          @auth
              <li class="nav-item dropdown mt-md-2">
                <a
                  class="dropdown-toggle"
                  href="#"
                  id="navbarDropdown"
                  role="button"
                  data-mdb-toggle="dropdown"
                  aria-expanded="false"
                >
                <button class="btn btn-warning" style="margin-top:-4px;">
                <i class="bx bx-user-circle"></i> {{ Auth::user()->name }}
                </button>
                </a>
                <!-- Dropdown menu -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="{{ route('dashboard') }}">Dashboard</a></li>
                  <li><a class="dropdown-item" href="{{ route('profile.show') }}">Profile</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <input class="dropdown-item" type="submit" value="{{ __('Logout') }}">
                    </form>
                  </li>
                </ul>
              </li>
          @else
              <li class="nav-item">
                <a class="text-black" href="{{ route('login') }}"><button class="btn btn-warning"><i class="bx bx-user"></i> Login</button></a> <a class="text-black" href="{{ route('register') }}"><button class="btn btn-outline-dark"><i class="bx bx-log-in-circle"></i> Register</button></a>
			  </li>
          @endauth
        @endif
      </ul>
    </div>
  </div>
</nav>
<script>
window.addEventListener("scroll", changeScroll);
function changeScroll(){
  if(window.scrollY > 360)
  {
    document.getElementById('mainnavbar').classList.add('imp-bg-nav-2');
    document.getElementById('mainnavbar').classList.remove('imp-bg-nav-1');
  }
  else
  {
    document.getElementById('mainnavbar').classList.add('imp-bg-nav-1');
    document.getElementById('mainnavbar').classList.remove('imp-bg-nav-2');
  }
}
</script>