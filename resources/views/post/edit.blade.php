@extends('layouts.master')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>

    <div class="form">
    <strong> شناسه : {{ $post->id }}</strong>
        <form action="{{ route('post.update',$post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <input type="text" name="title" class="input" value="{{ $post->title }}" placeholder="عنوان"><br>
            <input type="text" name="user_id" class="input" value="{{ $post->user_id }}" placeholder="نویسنده"><br>
            <input type="submit" class="btn" value="اعمال"><br>
        </form>
    </div>

    <a href="{{ route('post.index') }}">بازگشت</a>

</body>
</html>



@endsection
