<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
</head>
<body>
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
</body>
</html>