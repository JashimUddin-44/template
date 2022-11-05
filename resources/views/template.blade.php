<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="{{asset('mycss/app.css')}}">
</head>
<body>
	<div class="container">
		<section class="header">
			<div class="logo">TechGhor</div>
			<div class="menu">
				<ul>
					<li><a href="{{  url('/') }}">Home</a></li>
					<li><a href="{{  url('/about') }}">About Us</a></li>
					<li><a href="{{  route('blogs') }}">Blog</a></li>
					<li><a href="{{  route('contact.us') }}">Contact us</a></li>
				</ul>
			</div>
		</section>
		<section class="content">
			<h1>@yield('title')</h1>
			@yield('content')
		</section>
		<section class="footer">
			Copyright &copy; TechGhor.Com
		</section>
	</div>
</body>
</html>