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
    @if($message = Session::get('success'))
        {{ $message }}
    @endif

    <table id="customers">
        <h1>پست های سایت ما</h1>
        <a href="{{ route('post.create') }}">افزودن پست جدید</a>
        <br><br>
        <tr>
            <th>شناسه</th>
            <th>عنوان</th>
            <th>نویسنده</th>
            <th>تاریخ انتشار</th>
            <th>نمایش - ویرایش - حذف</th>
        </tr>


        @foreach($posts as $post)

        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->user_id}}</td>
            <td>{{$post->started_at}}</td>
            
            <td>
                <form action="{{ route('post.destroy',$post->id) }}" method="POST">
                    <a href="{{ route('post.show',$post->id) }}">نمایش</a>
                    <a href="{{ route('post.edit',$post->id) }}">ویرایش</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit">حذف</button>
                </form>
            </td>
        </tr>

        @endforeach

    </table>
</body>

</html>



@endsection