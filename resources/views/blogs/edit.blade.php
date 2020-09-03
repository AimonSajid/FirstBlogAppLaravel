
@extends('layouts.app')

@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.tiny.cloud/1/26mkrl2yfwi1na37pirvmxhnarb2lm3ws3uhyg27d41qvcd4/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script>
  tinymce.init({
    selector: 'textarea#editor',
    menubar: false
  });
</script>


<div class="jumbotron">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-10">
	<div class="card border-dark  mb-3" style="max-width: 60rem;">
<form action="{{ route('update_blog_path',['id' => $blog->id ]) }}" method="post" enctype="multipart/form-data">
	@csrf
	@method('PUT')

	<div class="card-header text-white bg-warning">Edit Blog Post</div>
	<div class="card-body">
	<div class="form-group">
		<label for="title">Title</label>
		<input type="text" name="title" class="form-control" value="{{ $blog->title }}" required>
		
	</div>

	<div class="form-group">
		<label for="content">Content</label>
		<textarea name="content" id="editor" class="form-control" rows="20">{{ $blog->content }}</textarea>
	</div>
	<div class="form-group">
		<input type="file" name="images" class="form-control-file" >
	</div>

	<div class="form-group">
		<input type="submit" class="btn btn-primary float-right mb-3" value="Edit Blog Post">
	</div>
</div>
</form>
</div>
</div>
<div class="col-1"></div>
</div>
</div>

@endsection