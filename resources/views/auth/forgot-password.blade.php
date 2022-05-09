<x-guest-layout>
        <x-slot name="logo">
            
        </x-slot>
        <div class="container">
			<div class="row">
				<div class="col-md-5" style="padding:4%;">
					<div class="card p-4" style="border-radius:40px;border:solid 1px #E9EAEC;">
						<h6 class="card-header text-center" style="border-bottom:none;">Forgot Password</h6>
                        <span style="font-family:Roboto;font-size:12px;">No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.</span>
						<div class="card-body">
							<x-jet-validation-errors class="mb-4" />

						@if (session('status'))
							<div class="mb-4 font-medium text-sm text-green-600">
								{{ session('status') }}
							</div>
						@endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <div class="block">
                                    {{ __('Email') }}
                                    <input id="email" class="custom-form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <button class="ml-4 btn btn-warning">
                                        {{ __('Email Password Reset Link') }}
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
