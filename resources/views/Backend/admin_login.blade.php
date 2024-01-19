<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset("/squadfree/assets/img/logo1.png") }}">

    <title>Admin - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset("/backend/main-dark/css/vendors_css.css") }}">

	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset("/backend/main-dark/css/style.css") }}">
	<link rel="stylesheet" href="{{ asset("/backend/main-dark/css/skin_color.css") }}">	

</head>
<body class="hold-transition theme-primary bg-gradient-secondary" >
	
  @if (Session::has('error'))
        <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <h4><i class="icon fa fa-ban"></i> Alert!</h4>
        <strong>{{ session::get('error')}}</strong>
        </div>
                @endif
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
              <img src="{{ asset('/squadfree/assets/img/logo.png')}}" class="img-fluid mb-5" alt="">
							<p class="text-white-50 mt-5">Sign in to start your session</p>							
						</div>
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
							<form action="{{ route('admin.login')}}" method="post">
                @csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
										</div>
										<input type="email" name="email" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Password">
									</div>
								</div>
									<!-- /.col -->
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>
							<div class="text-center">
								<p class="mt-15 mb-0 text-white">Don't have an account? <a href="{{ route('register') }}" class="text-info ml-5">Sign Up</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset("/backend/main-dark/js/vendors.min.js") }}"></script>
    <script src="{{ asset("/backend/assets/icons/feather-icons/feather.min.js") }}"></script>	

</body>
</html>
