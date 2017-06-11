@extends('layouts.master')

@section('content')
	<h1>Publish a task</h1>
	<hr>
	<form method="POST" action="/taskss">
				{{csrf_field()}}

		  <div class="form-group">
		    <label for="title">Title:</label>
		    <input type="text" class="form-control" id="title" name="title" >
		  </div>

		  <div class="form-group">
		    <label for="body">Body</label>
		    <textarea id="body" name="body" class="form-control" ></textarea>
		  </div>

		

		  <button type="submit" class="btn btn-primary">Publish</button>
	@include('layouts.error')
	</form>


@endsection