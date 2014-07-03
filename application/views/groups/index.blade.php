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
	<h1>groups Home Page</h1>
	<table border="1">
		<thead>
			<th>Student Name:</th>
			<th>Group Name:</th>
			<th>Action:</th>
		</thead>
		<tbody>
	<ul>
	@foreach($groups as $group)
		<tr>
			<td>{{ $group->student_name }}</td>
			<td>{{ $group->group_name }}</td>
			<td>{{ Form::open('group/delete', 'DELETE', array('style'=>'display: inline;'))}}
				{{ Form::hidden('id', $group->id) }}
				{{ Form::submit('Delete') }}
			</td>
		</tr>
	@endforeach
		</tbody>
	</table>	
	</body>
@endsection