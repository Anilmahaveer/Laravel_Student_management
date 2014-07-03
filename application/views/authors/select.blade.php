@layout('layouts.default')

@section('content') 
	<body style="margin:0;">
	<div style="width:100%;height:50px;background-color:black;padding-top:20px;" >
		<span style="color:white;font-size:23px;">Student Record:</span>
    </div>
	<div >
		<button style="height:30px;">{{ HTML::link_to_route('new_author', 'Register Student') }}</button>
		<button style="height:30px;">{{ HTML::link_to_route('new_group', 'Create Group') }}|</button>
		<button style="height:30px;">{{ HTML::link_to_route('authors', 'Student Details') }}|</button>
		<button style="height:30px;">{{ HTML::link_to_route('groups', 'Group Details') }}|</button>
		<button style="height:30px;">{{ HTML::link_to_route('select_author', 'Add student to group') }}</button>
	</div>
	<h1>Student Details:</h1>
	
	{{ Form::open('authors/insert', 'POST') }}
	<table cellspacing="15">
		<tr>
			<td>Students Name:</td>
			<td>
				<select name='selectedstudentid' id='selectedstudentid'>
				<option value='volvo'>Select Name:</option>	
				@foreach($authors as $author)
					<option value='{{$author->name }}'>{{ $author->name }}</option>
				@endforeach
				<select>
			</td>
		</tr>
		<tr>
			<td>Groups Name:</td>
			<td>
				<select name='selectedgroupid' id='selectedgroupid'>
				<option value='volvo'>Select Name:</option>	
				@foreach($groups as $group)
					<option value='{{  $group->group_name }}'>{{ $group->group_name }}</option>
				@endforeach
				<select>
			</td>
		</tr>
		<tr>		
			<td> 	
			{{ Form::submit('Submit') }}
			</td>
		</tr>
	</table>
	{{ Form::close() }}			
	</body>
@endsection