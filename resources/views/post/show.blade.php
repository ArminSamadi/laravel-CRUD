@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Post</title>

</head>

<body>
    <div class="show-post">

        <strong>:شناسه</strong>
        <P>{{$post->id}}</P>
        <hr>
        <strong>:عنوان</strong>
        <P>{{$post->title}}</P>
        <hr>
        <strong>:نویسنده</strong>
        <P>{{$post->user_id}}</P>

    </div>

    <a href="{{ route('post.index') }}">بازگشت</a>

</body>

</html>












@endsection