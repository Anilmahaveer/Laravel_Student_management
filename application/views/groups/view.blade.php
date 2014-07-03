@layout('layouts.default')

@section('content')
	<h1>{{ $group->group_name }}</h1>

	<p>{{ $group->group_desc }}</p>

	<p><small>{{ $group->updated_at }}</small></p>

	<span>
		{{ HTML::link_to_route('groups', 'Groups') }} | 
		{{ HTML::link_to_route('edit_group', 'Edit', array($group->id)) }} | 
		{{ Form::open('group/delete', 'DELETE', array('style'=>'display: inline;'))}}
		{{ Form::hidden('id', $group->id) }}
		
		{{ Form::submit('Delete') }}
		{{ Form::close() }}
	</span>
@endsection