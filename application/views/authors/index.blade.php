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

	<table border="1">
		<thead>
			<th>Name:</th>
			<th>Phone Number:</th>
			<th>City:</th>
			<th>Branch:</th>
			<th>Action:</th>
		</thead>
		<tbody>
			
	@foreach($authors as $author)
		<tr>
			<td>{{ $author->name }}</td>
			<td>{{ $author->phone_number }}</td>
			<td>{{ $author->city }}</td>
			<td>{{ $author->branch }}</td>
			<td>
			{{ HTML::link_to_route('edit_author', 'Edit', array($author->id)) }}		
			{{ Form::open("author/delete", 'DELETE', array('style'=>'display: inline;'))}}
			{{ Form::hidden('id', $author->id) }}
			{{ Form::submit('Delete') }}</td>
		</tr>
	@endforeach
			
		</tbody>
		<table>
	</body>
@endsection
