@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-md-12">
		<br>
		<h3>{{ $blog->title }}</h3>
		<p class="lead">

		{{ $blog->content }}
		
	</p>

	<a href="{{ route('blog_edit_path',['id' => $blog->id ]) }}" class="btn btn-outline-primary">Edit</a>
	<a href="{{ route('blogs_path') }}" class="btn btn-outline-secondary">Back</a>
	<form action="{{ route('blog_delete_path',['id' => $blog->id ]) }}" method="POST">
		@csrf
		@method('DELETE')
	<button type="submit" class="btn btn-outline-danger">Delete</button>
	</form>
	
	</div>
	

</div>


@endsection