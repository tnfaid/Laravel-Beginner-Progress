<!DOCTYPE html>
<html>
<head>
	<title>Laravel Blog | @yield('title')</title>
</head>
<body>
	@include('layout.menu')
	@yield('body')

	@yield('script')
</body>
</html>