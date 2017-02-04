@extends('layouts.toolbar')

@section('content')
<div class = "container" style="padding-top:200px;">
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<div class= "panel-body">
				
				<form class="form-horizontal" role="form" method="POST" > 
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">

                        	<div class="col-md-8 col-md-offset-2">
					<input id="title" type="title" class="form-control" name="title" value="{{ old('title') }}" placeholder="Title" required autofocus>

					@if ($errors->has('title'))
					    <span class="help-block">
						<strong>{{ $errors->first('title') }}</strong>
					    </span>
					@endif
				    </div>
				</div>
				<div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">

                            <div class="col-md-8 col-md-offset-2">
                                <textarea id="post" rows="10" cols="50"class="form-control" name="post" value="{{ old('post') }}" placeholder="Exercises" required autofocus></textarea> 

                                @if ($errors->has('post'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('post') }}</strong>
                                    </span>
                                @endif
			    </div>
			</div>
			<div class = "form-group">
				<div class ="col-md-8 col-md-offset-2">
					<button type="submit" class= "btn btn-primary">Submit</button>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>	
@endsection
