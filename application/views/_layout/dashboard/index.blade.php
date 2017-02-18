<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-KELURAHAN | @yield('title')</title>
	<link rel="stylesheet" href="{{base_url('assets/plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/plugins/fontawesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/css/theme.css')}}">
	<link rel="stylesheet" href="{{base_url('assets/css/theme-helper.css')}}">
	@yield('style')
</head>
<body>
	<div class="container-fluid" id="wrapper">
		<!-- SIDEBAR -->
		@if($this->config->item('coder') == 'front')
			@include('_layout/dashboard/sidebar-ui')
		@else
			@include('_layout/dashboard/sidebar')
		@endif
		<div id="content">
			<div class="content-nav">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<div class="navbar-header">
							<!-- Navbar toggle button -->
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">
								<i class="fa fa-bars"></i>
							</button>
							<!-- Sidebar toggle button -->
							<button type="button" class="sidebar-toggle">
								<i class="fa fa-bars"></i>
							</button>
							<a class="navbar-brand text-size-24" href="#">@yield('title')</a>
						</div>
						<div class="collapse navbar-collapse" id="menu">
							<form class="navbar-form navbar-right">
								<div class="input-group">
									<input type="text" class="form-control round" placeholder="Search">
									<span class="input-group-btn">
										<button type="submit" class="btn btn-default round"><i class="fa fa-search"></i></button>
									</span>
								</div>
							</form>
							<ul class="nav navbar-nav navbar-right">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ainul Yaqin <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="#">Action</a></li>
										<li><a href="#">Another action</a></li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</nav>
			</div>
			<div class="container-fluid">
				@yield('content')
			</div>
		</div>
	</div>
	@yield('modal')
</body>
<script src="{{base_url('assets/plugins/jquery/jquery-3.1.1.min.js')}}"></script>
<script src="{{base_url('assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{base_url('assets/js/theme.js')}}"></script>
<script>
	$("button.reload").click(function(){location.reload();});
</script>
@yield('javascript')
</html>