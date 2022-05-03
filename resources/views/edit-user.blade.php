<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('blank')
    <link rel="stylesheet" href="student.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
@if (Session::has('update_user'))
<span>{{Session::get('update_user')}}</span>

@endif
<form method='post' action='{{route('update.user', $id)}}'>
@csrf
<input type='hidden' name='id' value='{{$users->id}}'> <br>
user: <br> <input type='text' name='name' value='{{$users->name}}'> <br>
Email: <br> <input type='text' name='email' value='{{$users->email}}'> <br>
<input type='submit' value='Submit'>
</form>

</body>
</html>

