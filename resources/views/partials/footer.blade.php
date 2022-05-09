<div class="p-4 m-0" style="background-color:#2b2b2b;font-family:Roboto">
	<div class="container-fluid text-left text-light">
		<div class="row">
			<div class="col-md-6">
				<img src="{{ asset('assets/img/logo.png') }}" width="60%" alt="Vedarex"/>
			</div>
			<div class="col-md-6">
				<h3 style="color:#fff;font-family: 'PT Sans Narrow', sans-serif;letter-spacing: 1.6px;">Subscribe To<br/>Vedarex Newsletter & Updates</h3>
				@if($errors->any())
				<h4 class="text-white">{{$errors->first()}}</h4>
				@endif
				<form action="{{ route('addnewsletter') }}" method="post">
					<div class="input-box">
						@csrf
						<input type="email" name="email" placeholder="Enter Your Email ID" required />
						<button type="submit">SUBSCRIBE</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="p-2 m-0 text-center" style="background-color:#9e9e9e;font-family:Roboto">
	<h6 class="text-center m-0">Copyright &copy; 2021 Vedarex LLP. All Rights Reserved</h6>
</div>