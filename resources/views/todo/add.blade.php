@extends('layouts.app')

@section('content')

@include('todo.errors')

	<div class="container">
		<div class="panel-heading">Add Todo</div>
	</div>

	<div>
		<form name="todo_form" method="post" action="{{ route('todo.store') }}"> 
			{{ csrf_field() }}
			<div class="form-group">
				<label for="Name">Name:</label>
				<input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="Enter Name">
			</div>

			<!-- <div class="form-group">
				<label for="lastName">Last Name:</label>
				<input type="text" name="lastName" class="form-control" placeholder="Enter LastName">
			</div> -->

			<div class="form-group">
				<label for="gender">Gender:</label>
				<input type="radio" name="gender"  value="Male">Male
				<input type="radio" name="gender"  value="Female">Female
			</div>

			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" name="email" class="form-control" value="{{ old('email') }}" placeholder="Enter Mail Id">
			</div>

			<div class="form-group">
				<label for="contactNumber">Contact Number:</label>
				<input type="text" name="contact_number" value="{{ old('contact_number') }}" class="form-control" placeholder="Enter Contact Details">
			</div>

			<div class="form-group">
				<label for="salary">Salary:</label>
				<input type="number" name="salary" value="{{ old('salary') }}" class="form-control" placeholder="Enter Salary">
			</div>

			<div class="form-group">
				<label for="address">Address:</label>
				<input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Enter Address">
			</div>

			<div>
				<button type="submit" class="btn btn-primary">Save</button>
			</div>
		</form>
	</div>

@endsection