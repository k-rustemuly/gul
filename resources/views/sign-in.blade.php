@extends('app')

@section('title', __('Sign in title'))

@section('body')
    @parent
	<div class="d-flex flex-column flex-root">
		<div class="d-flex flex-column flex-column-fluid bgi-position-y-bottom position-x-center bgi-no-repeat bgi-size-contain bgi-attachment-fixed" style="background-image: url(assets/media/illustrations/sketchy-1/14.png">
			<div class="d-flex flex-center flex-column flex-column-fluid p-10 pb-lg-20">
				<a href="{{ route('main') }}" class="mb-12">
					<img alt="Logo" src="assets/media/logos/logo-2.svg" class="h-40px" />
				</a>
				<div class="w-lg-500px bg-body rounded shadow-sm p-10 p-lg-15 mx-auto">
					<form class="form w-100" novalidate="novalidate" 
						id="kt_sign_in_form" 
						data-kt-redirect-url="{{route('dashboard')}}" 
						data-email-not-empty="{{ __('Email address is required') }}" 
						data-email-address="{{ __('The value is not a valid email address') }}" 
						data-password-required="{{ __('The password is required') }}"
						data-some-error="{{ __('Sorry, looks like there are some errors detected, please try again') }}"
						data-url="{{ route('auth') }}"
						action="#">
						<div class="text-center mb-10">
							<h1 class="text-dark mb-3">{{ __('Sign in welcome') }}</h1>
							<div class="text-gray-400 fw-bold fs-4">{{ __('New here?')}}
							<a href="{{ route('auth.sign_up') }}" class="link-primary fw-bolder">{{ __('Sign up') }}</a></div>
						</div>
						<div class="fv-row mb-10">
							<label class="form-label fs-6 fw-bolder text-dark">{{ __('Email') }}</label>
							<input class="form-control form-control-lg form-control-solid" type="text" name="email" autocomplete="off" />
						</div>
						<div class="fv-row mb-10">
							<div class="d-flex flex-stack mb-2">
								<label class="form-label fw-bolder text-dark fs-6 mb-0">{{ __('Password') }}</label>
								<a href="{{ route('auth.forgot_password') }}" class="link-primary fs-6 fw-bolder">{{ __('Forgot password') }}</a>
							</div>
							<input class="form-control form-control-lg form-control-solid" type="password" name="password" autocomplete="off" />
						</div>
						<div class="text-center">
							<button type="submit" id="kt_sign_in_submit" class="btn btn-lg btn-primary w-100 mb-5">
								<span class="indicator-label">{{ __('Sign in') }}</span>
								<span class="indicator-progress">{{ __('Please wait') }}
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
							</button>
							<div class="text-center text-muted text-uppercase fw-bolder mb-5">{{ __('Or') }}</div>
							<a href="#" class="btn btn-flex flex-center btn-light btn-lg w-100 mb-5"><img alt="Logo" src="assets/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />{{ __('Google') }}</a>
						</div>
					</form>
				</div>
			</div>
			@include('app.footer')
		</div>
	</div>
@endsection

@section('js')
    @parent
	<script src="assets/js/custom/authentication/sign-in/general.js"></script>
@endsection