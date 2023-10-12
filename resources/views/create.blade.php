@extends('layouts.master')

@section('content')
 <header class="head"><h2>Registration Form</h2></header>
<form action="{{ route('insertregistration') }}" method="post">
    @csrf
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="form-group">
                    <label for="first_name">First Name:</label>
                    <input type="text" id="first_name" value="{{old('first_name')}}" name="first_name" required>
                        @error('first_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="last_name">Last Name:</label>
                   <input type="text" id="last_name" value="{{old('last_name')}}" name="last_name" required>
                        @error('last_name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" value="{{old('email')}}" name="email" required>
                        @error('email')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                </div>
                <div class="form-group">
                    <label for="password">Password:</label>
                    <input type="password" id="password" name="password" required>
                        @error('password')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
               </div>
                <div class="form-group">
                    <label for="confirm_password">Confirm Password:</label>
                    <input type="password" id="confirm_password" name="password_confirmation" required>
                </div>
                <button class="btn btn-success" type="submit">Register</button>
                <a class="btn btn-primary" href="{{ route('indextable')}}">Registered People</a>
            </div>
        </div>
    </div>
</form>
@endsection 
 
 
