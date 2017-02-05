<!DOCTYPE html>
<html>
<head>
	<title> {{ config('app.name', 'Hercules') }}</title>
	<link rel="shortcut icon" href="favicon.png">
	<link href="/css/app.css" rel="stylesheet"> 
	<link href="/css/body.css" rel="stylesheet">
	<script type="text/javascript" src="/assets/js/bootstrap.js"></script>
	<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content"{{ csrf_token() }}">
	<script>
		window.Laravel = <?php echo json_encode
		([
			'csrfToken' => csrf_token(),
		]); ?>
	</script>
</head>
<body >
	<nav id = "myToolbar" class = 'navbar navbar-default navbar-top' style="background-color:#F84648; border-style:none; color:#DDDDDD !IMPORTANT;">
		<div class="container" style="color:#DDDDDD !IMPORTANT;">
			<div class = "navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{ url('/') }}"><img src="favicon.png" height="64px" width='64px'/></a>
			</div>
			<ul class ="nav navbar-nav">
				<li><a style="color:#DDDDDD !IMPORTANT;"href="{{url('/posts')}}">Posts</a></li>
			</ul>
			<ul class = "nav navbar-nav navbar-right">	
				@if (Auth::guest())
					<li><a style="color:#DDDDDD !IMPORTANT;" href= "{{url('/login')}}">Login</a></li>
					<li><a style="color:#DDDDDD !IMPORTANT;" href="{{url('/register')}}">Sign Up</a></li>
				@else
				<li> <a style="color:#DDDDDD !IMPORTANT;" href="/account/{{ Auth::user()->username }}">{{Auth::user()->username}}</a></li>
				<li><a style="color:#DDDDDD !IMPORTANT;"href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
 				<form id="logout-form" action = "{{ url('/logout') }}" method="POST" style="display:none;">
				{{ csrf_field() }}
				 </form>
				</li>
			</ul>
				@endif
		</div>	
	</nav>
	@yield('content')
	<br><br>
	<div class="footer">	
		<div class = "container text-center">
					 <a href="{{ url('/about') }}">About us&nbsp</a>
					 <a href="{{ url('/contact') }}">Contact us&nbsp</a>
					 <a href="{{ url('/FAQ') }}">FAQ&nbsp</a>
		</div>
	</div>

</body>

</body>

</html>


