
@extends('layouts.app')

@section('content')
<form action="{{ route('store_blog_path') }}" method="post" enctype="multipart/form-data">
	@csrf


	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control">
		
	</div>

	<div class="form-group">
		<label for="content">Content</label>
		<textarea name="content" class="form-control" rows="10"></textarea>
	</div>

	<div class="form-group">
		<input type="file" name="images" class="form-control">
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-outline-primary" value="Add Blog Post">
	</div>
</form>

@endsection