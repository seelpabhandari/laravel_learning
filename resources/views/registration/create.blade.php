@extends('layouts.master')

@section('content')
 	<div class="col-sm-8">
 		<h1>Register</h1>

 		<form method="POST" action="/register">
  		  {{ csrf_field() }}
  			
  			<div class="form-group">
  				<label for="name">Name:</label>
  				<input class="form-control" id="name" type="text" name="name"></input>
  			</div>
  			<div class="form-group">
  				<label for="email">Email:</label>
  				<input class="form-control" id="email" type="text" name="email"></input>
  			</div>	
  			<div class="form-group">
  				<label for="password">Password:</label>
  				<input class="form-control" id="password" type="password" name="password"></input>
  			</div>
  			<div class="form-group">
  				<label for="password_confirmation">Password confirmation:</label>
  				<input class="form-control" id="password_confirmation" type="password" name="password_confirmation"></input>
  			</div>
  			<div class="form-group">
  				<button type="submit" class="btn btn-primary">Register</button>
  				
  			</div>
  	
  				@include('layouts.error')
  			
 		</form>

 	</div>

@endsection