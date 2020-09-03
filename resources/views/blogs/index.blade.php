@extends('layouts.app')

@section('content')


<div class="row">


@foreach($blogs as $blog)
<div class="col-md-6">

	<div class="card">
		<div class="card-header">
	  <a href="{{ route('blog_path', ['id' => $blog->id ]) }}">{{ $blog->title }}</a>

	</div>
	<div class="card-body">
		<p class="lead">
			Posted 
			{{ $blog->created_at->diffForHumans() }}
		</p>
		<img src="{{ asset($blog->image) }}" class="card-img-top">
		
		<br>
		<br>


		<a href="{{ route('blog_path', ['id' => $blog->id ]) }}" class="btn btn-outline-primary">View Post</a>
	</div>
	</div>

	</div>

@endforeach

</div>


@endsection