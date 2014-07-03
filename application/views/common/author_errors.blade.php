@if($errors->has())
	<ul>
		{{ $errors->first('name', '<li>:message</li>') }}
		{{ $errors->first('phone_number', '<li>:message</li>') }}
		{{ $errors->first('city', '<li>:message</li>') }}
		{{ $errors->first('branch', '<li>:message</li>') }}
	</ul>
@endif