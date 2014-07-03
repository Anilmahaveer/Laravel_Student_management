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
	<h1>Add New Author</h1>

	{{ render('common.group_errors') }}

	{{ Form::open('groups/create', 'POST') }}

	<p>
		{{ Form::label('group_name', 'Group Name:') }}<br />
		{{ Form::text('group_name', Input::old('group_name')) }}
	</p>

	<p>
		{{ Form::label('group_desc', 'Group Desc:') }}<br />
		{{ Form::textarea('group_desc', Input::old('group_desc')) }}
	</p>

	<p>{{ Form::submit('Add Groups') }}</p>

	{{ Form::close() }}
@endsection