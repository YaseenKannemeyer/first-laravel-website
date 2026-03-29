<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Post</h1>

    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <lable>Title:</lable>
        <input type="text" name ="title" value ="{{ old('title', $post->title) }}">
        <br><br>
        <lable>Body</lable>
        <textarea name="body">{{ old('body', $post->body) }}</textarea>
        <br><br>
        <button type="submit">Update Post</button>
    </form>

     @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>   
    @endif
</body>
</html>