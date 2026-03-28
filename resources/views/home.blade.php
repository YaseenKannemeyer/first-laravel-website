@extends('layouts.default')

@section('header')
        <h1>My App</h1>
       
@endsection

@section('maincontent')
    <h1>Home</h1>
    <br>
    <p>Welcome to the home page!</p>
    <br>
    <a href="{{ route('testpage') }}"> Go to Test Page</a>
    <br><br>
    <form action="{{ route('formsubmitted') }}" method="POST">
        @csrf
        <lable for="name">Name:</label>
        <input type ="text" name="name" placeholder="Enter your name" required>
        <br><br>
        <lable for="name">Email:</label>
        <input type ="text" name="email" placeholder="Enter your email" required>
        <br><br>
        <button type="submit">Submit</button>
       
    </form>
@endsection

@section('footer')
   
        <p>&copy; 2023 My App. All rights reserved.</p>
   @endsection