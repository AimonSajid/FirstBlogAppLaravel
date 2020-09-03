
@extends('layouts.app')

@section('content')
<form action="{{ route('update_blog_path',['id' => $blog->id ]) }}" method="post">
	@csrf
	@method('PUT')


	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" value="{{ $blog->title }}">
		
	</div>

	<div class="form-group">
		<label for="content">Content</label>
		<textarea name="content" class="form-control" rows="10">{{ $blog->content }}</textarea>
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-outline-primary" value="Edit Blog Post">
	</div>
</form>

@endsection