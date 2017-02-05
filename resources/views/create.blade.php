@extends('layouts.toolbar')

@section('content')
<div class = "container">
	<div class = "text-center">
		<img src='favicon.png' width="200px" height="200px"/>
	</div>
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
			<div class="form-group{{ $errors->has('time') ? ' has-error' : '' }}">

                        	<div class="col-md-8 col-md-offset-2">
					<input id="time" type="text" class="form-control" name="time" value="{{ old('time') }}" placeholder="Estimated duration of exercise" required autofocus>

					@if ($errors->has('time'))
					    <span class="help-block">
						<strong>{{ $errors->first('time') }}</strong>
					    </span>
					@endif
				    </div>
				</div>
			<div class="form-group{{ $errors->has('Frequency') ? ' has-error' : '' }}">

                        	<div class="col-md-8 col-md-offset-2">
					<input id="Frequency" type="text" class="form-control" name="Frequency" value="{{ old('Frequency') }}" placeholder="Frequency of exercise" required autofocus>

					@if ($errors->has('Frequency'))
					    <span class="help-block">
						<strong>{{ $errors->first('Frequency') }}</strong>
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
		<div class="form-group{{ $errors->has('intensity') ? ' has-error' : '' }}">
				<div class ="col-md-8 col-md-offset-2">
					<select name = "intensity"id = "intensity">
						<option disabled selected>Intensity</option>
						<option value="Low">Low</option>
						<option value="Medium">Medium</option>
						<option value="High">High</option>
					</select>
			@if ($errors->has('intensity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('intensity') }}</strong>
                                    </span>
                                @endif
			    </div>
			</div>

			<div class="form-group{{ $errors->has('goal') ? ' has-error' : '' }}">
				<div class ="col-md-8 col-md-offset-2">
					<select name = "goal" id="goal">
						<option disabled selected>Goal</option>
						<option value="bulking up">Bulk up</option>
						<option value="losing weight">Lose weight</option>
						<option value="gaining weight">Gain weight</option>
					</select>
			@if ($errors->has('goal'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('goal') }}</strong>
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
