@extends('layouts.app')

@section('content')
<h3>Create new user</h3>
<form method="POST" action="{{ url('/') }}">
    @csrf
    <div class="elem">
        <label for="name">Name:</label><br>
        <input type="text" name="name" id="name">
        @error('name')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="elem">
	<label for="gender">Gender:</label><br>
	<select id="gender" name="gender">
    	    <option value="male">Male</option>
    	    <option value="female">Female</option>
    	    <option value="other">Other</option>
  	</select>
        @error('gender')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="elem">
	<label for="role">Role:</label><br>
	<select id="role" name="role">
    	    <option value="teacher">Teacher</option>
    	    <option value="student">Student</option>
    	    <option value="admin">Admin</option>
  	</select>
        @error('role')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="elem">
        <label for="phone">Phone:</label><br>
        <input type="phone" name="phone" id="phone">
        @error('phone')
            <div>{{ $message }}</div>
        @enderror
    </div>
    <div class="elem">
        <label for="email">Email:</label><br>
        <input type="email" name="email" id="email">
        @error('email')
            <div>{{ $message }}</div>
        @enderror
    </div>
	<div class="elem">
        <label for="password">Password:</label><br>
        <input type="password" name="password" id="password">
        @error('password')
            <div>{{ $message }}</div>
        @enderror
    </div>    
    <button type="submit">Create</button>
</form>
@endsection
