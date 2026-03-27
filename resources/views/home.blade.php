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
    <p>Welcome to the home page!</p>
    <a href="{ { route("testpage") } }">Go to Test Page</a>
    
</body>
</html>