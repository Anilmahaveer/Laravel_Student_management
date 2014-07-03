@if($errors->has())
	<ul>
		{{ $errors->first('group_name', '<li>:message</li>') }}
		{{ $errors->first('group_desc', '<li>:message</li>') }}
	</ul>
@endif