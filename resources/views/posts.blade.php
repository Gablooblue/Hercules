@extends('layouts.toolbar')

@section('content')
<div class = "container" >
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2" style="padding-left:30px;">
			Intensity: 
			<a href= "?intensity=Low">Low</a>&nbsp|&nbsp
			<a href= "?intensity=Medium">Medium</a>&nbsp|&nbsp
			<a href= "?intensity=High">High</a>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
				<a href="/create"class="btn btn-primary" >Create routine</a>

		</div>
	</div>
</div>
<br>
<div class = "container">
	<div class ="col-md-8 col-md-offset-2">
		@foreach($posts as $post)
		<div class = "panel panel-default">
			<div class="panel-body">
				<h2> {{ $post->title }} </h2>
				<h4> {{ $post->intensity  }} intensity workout for {{ $post->goal}} </h4>
				<p> {{ $post->post}} </p>
			</div>
			<div class = "panel-footer">
				<p class = "pull-left">
					<button><span class = "glyphicon glyphicon-thumbs-up"></span></button>
				{{ $post->likes }}  
				&nbsp
				<button><span class = "glyphicon glyphicon-thumbs-down"></span></button>
				 {{ $post->dislikes }}
				&nbsp
				 </p> 
				<p class = "pull-right">
					Posted by: <a href="\account\{{$post->author}}">{{ $post->author }}</a>
				</p>
				<div class = "clearfix"></div>
				
			</div>
		</div>
		@endforeach
	</div>
</div>
@endsection
