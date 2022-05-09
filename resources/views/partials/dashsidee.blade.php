<div>
    <div class="text-left py-4 px-2">
	<a href="{{ route('addwall') }}"><button class="btn btn-primary"><i class="fas fa-plus"></i> Add Your Wall</button></a>
	</div>
	<div class="text-left py-4 px-1">
		<a class="text-muted my-2" href="{{ route('login') }}"><img src="{{ asset('assets/icons/home.png') }}" width="30px" class="mx-2" alt="messages"/><span class="hd-span">Dashboard</span></a><br/>
		<a class="text-muted my-2" href="{{ route('messages') }}"><img src="{{ asset('assets/icons/messages.png') }}" width="30px" class="mx-2" alt="messages"/><span class="hd-span">Messages</span></a><br/>
		<a class="text-muted my-2" href="{{ route('lists') }}"><img src="{{ asset('assets/icons/list.png') }}" width="30px" class="mx-2" alt="lists"/><span class="hd-span">Lists</span></a><br/>
		<a class="text-muted my-2" href="{{ route('saved') }}"><img src="{{ asset('assets/icons/list.png') }}" width="30px" class="mx-2" alt="lists"/><span class="hd-span">Saved</span></a><br/>
		<a class="text-muted my-2" href="{{ route('cart') }}"><img src="{{ asset('assets/icons/list.png') }}" width="30px" class="mx-2" alt="lists"/><span class="hd-span">Cart</span></a><br/>
		<a class="text-muted my-2" href="{{ route('orders') }}"><img src="{{ asset('assets/icons/list.png') }}" width="30px" class="mx-2" alt="lists"/><span class="hd-span">Orders</span></a><br/>
		<a class="text-muted my-2" href="{{ route('profile.show') }}"><img src="{{ asset('assets/icons/settings.png') }}" width="30px" class="mx-2" alt="setting"/><span class="hd-span">Setting</span></a><br/>
	</div>
</div>