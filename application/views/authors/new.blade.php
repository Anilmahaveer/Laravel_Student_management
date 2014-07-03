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
	<h1>Register Students:</h1>

	{{ render('common.author_errors') }}

	{{ Form::open('authors/create', 'POST') }}
	<table>
		<tr>
			<td>
					{{ Form::label('name', 'Name:') }}
			</td>
			<td>	
					{{ Form::text('name', Input::old('name')) }}
			</td>
		</tr>
		<tr>
			<td>
					{{ Form::label('phone_number', 'Phone Number:') }}
			</td>
			<td>	
					{{ Form::text('phone_number', Input::old('phone_number')) }}
			</td>
		</tr>
		<tr>	
			<td>
					{{ Form::label('city', 'City:') }}
			</td>
			<td>	
					{{ Form::text('city', Input::old('city')) }}
			</td>
		</tr>
		<tr>	
			<td>
					{{ Form::label('branch', 'Branch:') }}
			</td>
			<td>	
					{{ Form::text('branch', Input::old('branch')) }}
			</td>
		</tr>	
		<tr>		
			<td> 	
			{{ Form::submit('Register') }}
			</td>
		</tr>
	</table>	
	{{ Form::close() }}
@endsection