@extends('layouts.app')
@section('styles')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="css/login/loginstyle.css">
@stop

@section('scripts')
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
@stop
@section('content')
<div class="container">
    
	<div class="d-flex justify-content-center h-100">
		<div class="card mt-3">
			<div class="card-header mt-3">
				<h3> {{ __('Login') }} </h3>
				<div class="d-flex justify-content-end social_icon">
					<span><i class="fab fa-facebook-square"></i></span>
					<span><i class="fab fa-google-plus-square"></i></span>
					<span><i class="fab fa-twitter-square"></i></span>
				</div>
			</div>
			<div class="card-body">
				@include('includes._login-form')
			</div>
			<div class="card-footer">
				<div class="d-flex justify-content-center links">
					حساب کاربری ندارید ؟ <a href="{{ route('register') }}">&nbsp; ثبت نام </a>
				</div>
				<div class="d-flex justify-content-center">
					@if(Route::has('password.request'))
					<a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('Forgot Your Password?') }}  </a>
					@endif
				</div>
			</div>
		</div>
	</div>
	

	
	

</div>
@endsection
