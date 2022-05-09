<div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
    <ul class="nav flex-column text-white w-100">
      <a href="/" class="nav-link h3 text-white my-2">
	  	<img src="{{ asset('assets/img/logo_white.png') }}" height="40px" alt="rentawall"/>
      </a>
      <li class="nav-link">
 		<a href="{{ route('login') }}" class="text-light">
			<i class="bx bxs-dashboard"></i>
			<span class="mx-2">Dashboard</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminbanners') }}" class="text-light">
			<i class="bx bx-book-add"></i>
			<span class="mx-2">Banners</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminaddebook') }}" class="text-light">
			<i class="bx bx-book-add"></i>
			<span class="mx-2">Add E-Book</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminaddaudiobook') }}" class="text-light">
			<i class="bx bx-book-add"></i>
			<span class="mx-2">Add Audio Book</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminaddbook') }}" class="text-light">
			<i class="bx bx-book-add"></i>
			<span class="mx-2">Add Book</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminebooks') }}" class="text-light">
			<i class="bx bx-box"></i>
			<span class="mx-2">E-Books</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminaudiobooks') }}" class="text-light">
			<i class="bx bx-disc"></i>
			<span class="mx-2">Audio Books</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminbooks') }}" class="text-light">
			<i class="bx bx-layer"></i>
			<span class="mx-2">All Books</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminbooks') }}" class="text-light">
			<i class="bx bx-layer"></i>
			<span class="mx-2">Pending Books</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminbooks') }}" class="text-light">
			<i class="bx bx-layer"></i>
			<span class="mx-2">Approved Books</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('adminbooks') }}" class="text-light">
			<i class="bx bx-layer"></i>
			<span class="mx-2">My Books</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('addbook') }}" class="text-light">
			<i class="bx bx-wallet-alt"></i>
			<span class="mx-2">My Wallet</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('addbook') }}" class="text-light">
			<i class="bx bx-cart-alt"></i>
			<span class="mx-2">Orders</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('addbook') }}" class="text-light">
			<i class="bx bx-conversation"></i>
			<span class="mx-2">Messages</span>
		</a>
      </li>
      <li class="nav-link">
 		<a href="{{ route('profile.show') }}" class="text-light">
			<i class="bx bx-user-check"></i>
			<span class="mx-2">Profile</span>
		</a>
      </li>
    </ul>
  </div>