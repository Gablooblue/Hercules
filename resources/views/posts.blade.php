@extends('layouts.toolbar')

@section('content')
<div class = "container" style="padding-top:60px;">
	<div class ="col-md-8 col-md-offset-2">
		@foreach($posts as $post)
		<div class = "panel panel-default">
			<div class="panel-body">
				<h2> {{ $post->title }} </h2>
				<h3> {{ $post->author }}</h3>
				<p> {{ $post->post}} </p>
			</div>
			<div class = "panel-footer">
				<p>
					<button><span class = "glyphicon glyphicon-thumbs-up"></span></button>
				{{ $post->likes }}  
				&nbsp
				<button><span class = "glyphicon glyphicon-thumbs-down"></span></button>
				 {{ $post->dislikes }}
				&nbsp
				 </p> 
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
