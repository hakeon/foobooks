@extends('_master')

@section('content')

	<form method="GET" action="/list">
		<label for="query">Search</label>
		<input type="text" name="query" id="query">
		<input type="submit" value="Search">
	</form>

	<div class="form-group">
	{{ Form::open(array('url' => '/list', 'method' => 'GET')); }}
		{{ Form::label('query','Search') }}
		{{ Form::text('query'); }}
		{{ Form::submit('Go!', array('class' => 'btn btn-primary')); }}
	{{ Form::close() }}
	</div>

@stop