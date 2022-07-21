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
        @include('layouts/partials/error')
        <form action="{{ route('post.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="title" class="input" placeholder="عنوان"><br>
            <input type="text" name="user_id" class="input" placeholder="نویسنده"><br>
            <!-- <input type="file" name="image"><br> -->
            <input type="submit" class="btn" value="ثبت"><br>
        </form>
    </div>

    <a href="{{ route('post.index') }}">بازگشت</a>

</body>
</html>



@endsection
