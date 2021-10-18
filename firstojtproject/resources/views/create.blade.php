<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @if (isset($post))

        <form action="{{ url('post/update/' . $post->id) }}" method="Post">
        @csrf
        <textarea name="subject" id="subject" cols="30" rows="10"> {{ $post->subject }}</textarea>
        <button type="submit">Update</button>
     
        </form>

    @else
        <form action="{{ url('post')}}" method="Post">
            @csrf
            <textarea name="subject" id="subject" cols="30" rows="10"></textarea>
            <button type="submit">Post</button>
        </form>

    @endif

</body>
</html>