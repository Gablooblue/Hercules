@extends("layouts.toolbar")

@section('content')
<head>
	<link rel="stylesheet" href="resources/views/fuck.css" />
</head>
<body>
<div class = "container" style="padding-top:200px;">
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<div class= "panel-body">
				
				<form class="form-horizontal" role="form" method="POST"> 
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">

                        	<div class="col-md-8 col-md-offset-2">
					<input id="age" type="age" class="form-control" name="age" value="{{ old('age') }}" placeholder="Age" required autofocus>

					@if ($errors->has('age'))
					    <span class="help-block">
						<strong>{{ $errors->first('age') }}</strong>
					    </span>
					@endif
				    </div>
				</div>
				<div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">

                            <div class="col-md-8 col-md-offset-2">
                                <input id="height" type="height" class="form-control" name="height" value="{{ old('height') }}" placeholder="Height (cm)" required autofocus>

                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
				<div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">

                            <div class="col-md-8 col-md-offset-2">
                                <input id="weight" type="weight" class="form-control" name="weight" value="{{ old('weight') }}" placeholder= "Weight (kg)"required autofocus>

                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
			<div class ="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
				<div class = "col md-8 col-md-offset-2" style = "padding-left:20px;">
					<select>
						<option selected disabled>Gender</option>	
						<option value= "M">Male</option>
						<option value= "F">Female</option>
					</select>
				</div>
				<br>
				<div class="col-md-8 col-md-offset-2" style="padding-left:20px;">
					<button type="submit" class="btn btn-primary">
Submit</button>
				</div>
			</div>
			</form>
			</div>
		</div>
</div>

</body>
@endsection	
