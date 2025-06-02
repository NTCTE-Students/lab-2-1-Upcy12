<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}">Create New Post</a>
    <ul>
        @foreach ($posts as $post)
            <li>
                {{ $post->title }}
                <a href="{{ route('posts.edit', [$post]) }}"> Edit post</a>
                <a href="{{route('post.delete', [$post])}}"> Delete</a>
                <a href="{{route('post.show', [$post])}}">show post</a>
            </li>
        @endforeach
    </ul>
</body>
</html>