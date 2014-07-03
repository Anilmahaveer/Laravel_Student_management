<!DOCTYPE html>
<html>
<head>
	<title>{{ $title }}</title>
</head>
<body>
@yield('content')
	@if(Session::has('message'))
		<p style="color: green;">{{ Session::get('message') }}</p>
	@endif

	
</body>
</html>