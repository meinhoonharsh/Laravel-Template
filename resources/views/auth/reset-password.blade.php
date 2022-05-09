<x-guest-layout>
        <x-slot name="logo">
            
        </x-slot>
        <div class="container">
			<div class="row">
				<div class="col-md-5" style="padding:4%;">
					<div class="card p-4" style="border-radius:40px;border:solid 1px #E9EAEC;">
						<h6 class="card-header text-center" style="border-bottom:none;">Reset Password</h6>
						<div class="card-body">
							<x-jet-validation-errors class="mb-4" />

						@if (session('status'))
							<div class="mb-4 font-medium text-sm text-green-600">
								{{ session('status') }}
							</div>
						@endif

							<form method="POST" action="{{ route('password.update') }}">
								@csrf

								<input type="hidden" name="token" value="{{ $request->route('token') }}">

								<div class="block">
									{{ __('Email') }}
									<input id="email" class="custom-form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
								</div>

								<div class="mt-4">
									{{ __('Password') }}
									<input id="password" class="custom-form-control" type="password" name="password" required autocomplete="new-password" />
								</div>

								<div class="mt-4">
									{{ __('Confirm Password') }}
									<input id="password_confirmation" class="custom-form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
								</div>

								<div class="flex items-center justify-end mt-4">
									<button class="ml-4 btn btn-warning">
										{{ __('Reset Password') }}
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-7 d-none d-md-inline text-center">
					<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
					<lottie-player src="{{ asset('assets/lottie/forgot.json') }}"  background="transparent"  speed="1"  style="width: 60%;"  loop autoplay></lottie-player>
				</div>
			</div>
		</div>
</x-guest-layout>
