@extends('layouts.app')

@section('content')
<div class="jumbotron">
<div class="row">
	<div class="col-md-12">
		<div class="card ">
		
		<div class="card-header bg-primary text-white">
		<h3>{{ $blog->title }}</h3>
	</div>
		<p>

			<center><img src="{{ asset($blog->image) }}" class="mt-3" style="height: 200px; width: 500px;"></center>
		<div class="container mt-5  mb-3">{{ $blog->content }}</div>

		
		
	</p>
	<div class="card-footer bg-primary text-white">
		<div class="row">
			<div class="col-1">
	<a href="{{ route('blog_edit_path',['id' => $blog->id ]) }}" class="btn btn-info float-left">Edit</a>
</div>
	<div class="col-1">
	<form action="{{ route('blog_delete_path',['id' => $blog->id ]) }}" method="POST">
		@csrf
		@method('DELETE')
	<button type="submit" class="btn btn-danger">Delete</button>
	</form>
</div>
<div class="col-7">
	</div>
	<div class="col-3">
	<a href="{{ route('blogs_path') }}" class="btn btn-warning float-right">Back</a>
	</div>
	</div>
	</div>
	</div>	
	</div>
	

</div>
</div>

@endsection