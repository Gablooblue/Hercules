@extends("layouts.toolbar")

@section('content')
<div class = "container" style="padding-top:60px;">
		<div class = "panel panel-default">
			<div class = 'panel-body'>
				<h1>{{ $user_id->username}} </h1>
				<h3>{{ $user_id->email}}</h3>
				<a href={{url('/info')}}>Update info</a>
			</div>
		</div>
</div>
@endsection
