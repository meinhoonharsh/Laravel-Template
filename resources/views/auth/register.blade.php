{{-- <x-guest-layout>
	<x-slot name="logo">
		
	</x-slot>
	<div class="container">
		<div class="row">
			<div class="col-md-7" style="padding:4%;">
				<div class="full-h-fl-cent">
					<div class="card p-4" style="border-radius:10px;border:solid 1px #E9EAEC;">
						<h6 class="card-header text-center" style="border-bottom:none;">SignUp Using Social Media</h6>
						<div class="container">
							<div class="row">
								<div class="col-6">
									<a href=""><button class="btn btn-block btn-danger"><i class="bx bxl-google bx-xs"></i></button></a>
								</div>
								<div class="col-6">
									<a href=""><button class="btn btn-block btn-primary"><i class="bx bxl-facebook-square bx-xs"></i></button></a>
								</div>
							</div>
						</div>
						<div class="text-center">
							OR
						</div>
						<div class="card-body">
							<x-jet-validation-errors class="mb-4" />

						@if (session('status'))
							<div class="mb-4 font-medium text-sm text-green-600">
								{{ session('status') }}
							</div>
						@endif

							<form method="POST" action="{{ route('register') }}">
								@csrf

								<div>
									Full Name
									<input id="name" class="custom-form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
								</div>

								<div class="row mt-4">
									<div class="col-md-6">
										{{ __('Email') }}
										<input id="email" class="custom-form-control" type="email" name="email" :value="old('email')" required />
									</div>
									<div class="col-md-6">
										Mobile Number
										<input id="phone" class="custom-form-control" type="text" name="phone" :value="old('phone')" required />
									</div>
								</div>

								<div class="row mt-4">
									<div class="col-md-6">
										{{ __('Password') }}
										<input id="password" class="custom-form-control" type="password" name="password" required autocomplete="new-password" />
									</div>
									<div class="col-md-6">
										{{ __('Confirm Password') }}
										<input id="password_confirmation" class="custom-form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
									</div>
								</div>

								@if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
									<div class="mt-4">
										<x-jet-label for="terms">
											<div class="flex items-center">
												<x-jet-checkbox name="terms" id="terms"/>

												<div class="ml-2">
													{!! __('I agree to the :terms_of_service and :privacy_policy', [
															'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
															'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
													]) !!}
												</div>
											</div>
										</x-jet-label>
									</div>
								@endif

								<div class="flex items-center justify-end mt-4">
									<button class="ml-4 btn btn-warning">
										Sign-up
									</button>
									<a class="text-warning" href="{{ route('login') }}">
										{{ __('Already registered?') }}
									</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-5 d-none d-md-inline">
				<div class="full-h-fl-cent">
					<img width="100%" src="{{ asset('assets/img/books.png') }}" alt="books">
				</div>
			</div>
		</div>
	</div>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Register</h3>
                <form>
                  <div class="form-group">
                    <label>Username</label>
                    <input name="name" type="text" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input name="email" type="email" class="form-control p_input">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input name="password" type="password" class="form-control p_input">
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input type="checkbox" class="form-check-input"> Remember me </label>
                    </div>
                    <a href="#" class="forgot-pass">Forgot password</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                  <div class="d-flex justify-content-center">
                    <a href="{{route('redirectToGithub')}}" class=" mr-0 btn btn-md m-1 btn-github  mr-2">
                      <i class="mdi h4 mdi-github-circle"></i></a>
					  <a href="{{route('redirectToGoogle')}}"class=" mr-0 btn btn-md m-1 btn-google mr-2">
						<i class="mdi h4 mdi-google"></i></a>
						<a href="{{route('redirectToLinkedin')}}"class=" mr-0 btn btn-md m-1 btn-linkedin">
						  <i class="mdi h4 mdi-linkedin"></i></a>
                  </div>
                  <p class="sign-up text-center">Already have an Account?<a href="#"> Sign Up</a></p>
                  <p class="terms">By creating an account you are accepting our<a href="#"> Terms & Conditions</a></p>
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
  </body>
</html>