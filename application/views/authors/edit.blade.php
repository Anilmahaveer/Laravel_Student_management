@layout('layouts.default')

@section('content')
	<h1>Editing {{ $author->name }}</h1>

	{{ render('common.author_errors') }}

	{{ Form::open('author/update', 'PUT') }}

	<table>
		<tr>
			<td>
				{{ Form::label('name', 'Name:') }}
			</td>
			<td>
				{{ Form::text('name', $author->name) }}
			</td>
		</tr>
		<tr>
			<td>
				{{ Form::label('phone_number', 'Phone Number:') }}
			</td>
			<td>
				{{ Form::text('phone_number', $author->phone_number) }}
			</td>
		</tr>
		<tr>
			<td>
				{{ Form::label('city', 'City:') }}
			</td>
			<td>
				{{ Form::text('city', $author->city) }}
			</td>
		</tr>
		<tr>
			<td>
				{{ Form::label('branch', 'Branch:') }}
			</td>
			<td>
				{{ Form::text('branch', $author->branch) }}
			</td>
		</tr>
		<tr>
			<td>
				{{ Form::hidden('id', $author->id) }}
			</td>
		</tr>
		<tr>
			<td>
				{{ Form::submit('Update Author') }}
			</td>
		</tr>
		</table>
	{{ Form::close() }}
@endsection