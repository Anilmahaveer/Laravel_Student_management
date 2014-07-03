@layout('layouts.default')

@section('content') 
	<body style="margin:0;">
	<div style="width:100%;height:50px;background-color:black;padding-top:20px;" >
		<span style="color:white;font-size:23px;">Student Record:</span>
    </div>
	<div >
		
		
	</div>
	<h1>groups Home Page</h1>
	<ul>
	@foreach($authors as $author)
		
			<li> {{ $author->name }} </li>
		
	@endforeach	
	</ul>
	<p>{{ HTML::link_to_route('new_group', 'New group') }}</p>
	</body>
@endsection