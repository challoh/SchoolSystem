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
    <a class="active" href="#home"><i class="fa fa-fw fa-home"></i> Home</a>
    <br>
    <a href="{{ route('full-calender') }}"target='_blank'><i class="fa fa-calendar" aria-hidden="true"></i>full-calender</a>
    <br>
    {{-- <a href="{{ route('exams') }}"><i class="fa fa-pencil-square" aria-hidden="true"></i>NextExams/Cats</a> --}}
    <br>
    <a href="{{ route('results') }}" target='_blank'><i class="fa fa-file-text" aria-hidden="true"></i> Results</a>
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
