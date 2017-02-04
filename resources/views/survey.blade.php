@extends("layouts.toolbar")

@section('content')
<div class = "container" style="padding-top:60px;">
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<div class = "panel panel-default">
				<div class = "panel-heading">User info</div>
			<div class= "panel-body">
				
				<form class="form-horizontal" role="form" method="POST"> 
				{{ csrf_field() }}
				<div class="form-group{{ $errors->has('age') ? ' has-error' : '' }}">
                            <label for="age" class="col-md-4 control-label">Age</label>

                        	<div class="col-md-6">
					<input id="age" type="age" class="form-control" name="age" value="{{ old('age') }}" required autofocus>

					@if ($errors->has('age'))
					    <span class="help-block">
						<strong>{{ $errors->first('age') }}</strong>
					    </span>
					@endif
				    </div>
				</div>
				<div class="form-group{{ $errors->has('height') ? ' has-error' : '' }}">
                            <label for="height" class="col-md-4 control-label">Height</label>

                            <div class="col-md-6">
                                <input id="height" type="height" class="form-control" name="height" value="{{ old('height') }}" required autofocus>

                                @if ($errors->has('height'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('height') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
				<div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
                            <label for="weight" class="col-md-4 control-label">Weight</label>

                            <div class="col-md-6">
                                <input id="weight" type="weight" class="form-control" name="weight" value="{{ old('weight') }}" required autofocus>

                                @if ($errors->has('weight'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('weight') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
			<div class ="form-group {{ $errors->has('gender') ? ' has-error' : '' }}">
				<label for="gender" class="col-md-4 control-label">Gender</label>
				<div class = "col md-4" >
					<select>
						<option selected disabled> </option>	
						<option value= "M">Male</option>
						<option value"F">Female</option>
					</select>
				</div>
				<div class="col-md-8 col-md-offset-6">
					<button type="submit" class"btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection	
