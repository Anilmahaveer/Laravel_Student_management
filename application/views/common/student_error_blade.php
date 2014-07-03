@if($errors->has())
	<ul>
		{{ $errors->first('student_name', '<li>:message</li>') }}
		{{ $errors->first('group_name', '<li>:message</li>') }}
	</ul>
@endif