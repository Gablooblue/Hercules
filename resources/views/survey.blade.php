@extends("layout.toolbar")

@section('content')
<div class = "container">
	<div class = "row">
		<div class = "col-md-8 col-md-offset-2">
			<div class = "panel panel-default">
				<div class = "panel-heading">User info </div>
			<div class= "panel-body">
				{{ csrf_field() }}
				<form class="form-horizontal" role="form" method="POST" action="{{ route('info') }}">
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
				<div class = "col md-4">
					<input id="gender" type = 'radio' class = "form-control" name="gender" value = "Male">Male</input>
				</div>
				<div class = "col md-4">
					<input id="gender" type="radio" class = "form-control" name="gender" value = "Female">Female</input>
				</div>
			</form>
@endsection	
