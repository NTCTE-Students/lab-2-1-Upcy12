<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post {{ $post -> id }}</h1>
    <form action="{{ route('posts.update') }}" method="POST">
        @csrf
        <label for="post_id">id:</label>
        <input type="number" name="post_id" readonly value="{{$post -> id}}">
        <br>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" placeholder="{{ $post -> title }}" required>
        <br>
        <label for="content">Content:</label>
        <textarea name="content" id="content" placeholder="{{ $post ->content }}" required></textarea>
        <br>
        <button type="submit">Update</button>
    </form>
</body>
</html>