<nav class="navbar top-navbar navbar-light bg-light px-5 py-0" style="box-shadow:none;">
  <a class="btn border-0 my-0" id="menu-btn"><i class="bx bx-menu"></i></a>
  <ul class="navbar-nav py-2">
  @if (Route::has('login'))
    @auth
        <li class="nav-item dropdown">
          <a
            class="dropdown-toggle text-muted hover:text-primary"
            href="#"
            id="navbarDropdown"
            role="button"
            data-mdb-toggle="dropdown"
            aria-expanded="false"
          >
          Hi, {{ Auth::user()->name }}
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
          <a class="text-muted hover:text-primary" href="{{ route('login') }}">Login</a> or <a class="text-muted hover:text-primary" href="{{ route('register') }}">Register</a>
        </li>
    @endauth
  @endif
  </ul>
</nav>
<script>
var menu_btn = document.querySelector("#menu-btn");
var sidebar = document.querySelector("#sidebar");
var container = document.querySelector(".my-container");
menu_btn.addEventListener("click", () => {
  sidebar.classList.toggle("active-nav");
  container.classList.toggle("active-cont");
});
</script>