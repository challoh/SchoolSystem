{{-- <link rel="stylesheet" href="student.css">
<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for staffs') }}
        </h2>
    </x-slot>

  <!-- The sidebar -->
  <div class="sidebar">
    <a class="active" href="#home">Home</a>
    <br>
    <a href="{{ route('timetable') }}">TimeTable</a>
    <br>
    <a href="#NextExams">NextExams/Cats</a>
    <br>
    <a href="{{ route('results') }}">Results</a>
    <br>
    <a href="{{ route('logout') }}">Logout</a>

  </div>

    <div class="content-container">
          <h2>welcome $user</h2>

    </div>


</x-app-layout> --}}

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


     <!-- The sidebar -->
  <div class="sidebar">
    <a class="active" href="#home">Home</a>
    <br>
    <a href="{{ route('timetable') }}">TimeTable</a>
    <br>
    <a href="#NextExams">NextExams/Cats</a>
    <br>
    <a href="{{ route('results') }}">Results</a>
    <br>
    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        {{ __('Logout') }}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

  </div>

    <div class="content-container">
          <h2>welcome $user</h2>

    </div>


</body>
</html>
