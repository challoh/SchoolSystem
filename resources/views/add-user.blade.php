{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @include('blank')
</head>
<body>
@if (Session::has('add_user'))
<span>{{Session::get('add_user')}}</span>

@endif
<form method='post' action='{{route('save.user')}}'>
        @csrf
        user: <br> <input type='text' name='name' value=''> <br>
        Email: <br> <input type='text' name='email' value=''> <br>
        password: <br> <input type='password' name='password' value=''> <br>
        <input type='submit' value='Submit'>
</form>

</body>
</html> --}}



{{-- @extends('contacts.layout') --}}
{{-- @section('content') --}}
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">

      <form action="{{ url('users') }}" method="post">
@csrf
        <label>User</label>
        <br>
        <input type="text" name="name" id="name" class="form-control"><br>
        <label>Email</label><br>
        <input type="email" name="address" id="address" class="form-control"><br>
        <label >password</label> <br>
        <input type='password' name='password' value=''> <br>
        <input type="submit" value="Save" class="btn btn-success"><br>

    </form>

  </div>
</div>
{{-- @stop --}}
