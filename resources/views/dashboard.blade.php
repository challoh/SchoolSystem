{{--

<x-app-layout>

  <!-- The sidebar -->
   <div class="sidebar">
    <a class="active" href="{{ route('dashboard') }}"><i class="fa fa-fw fa-home"></i>Dashboard </a>
    <br>
    <a class="active"  href="{{ route('full-calender') }}"target='_blank'><i class="fa fa-lock" aria-hidden="true"></i>Roles</a>
    <br>
    <a class="active" href="{{ route('users') }}"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
    <br>
     <a class="active" href="#home"><i class="fa fa-fw fa-wrench" aria-hidden="true"></i> Settings</a>
    <br>
    <a class="active"  href="{{ route('results') }}" target='_blank'><i class="fa fa-file-text" aria-hidden="true"></i> Results</a>
    <br>
    <a class="active"  href="{{ route('logout') }}" ><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

  </div>

    <div class="content-container">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard for Admin') }}
        </h2>


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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

      <!-- The sidebar -->
   <div class="sidebar">
       <h1>inceptor academy</h1>
    <a class="active" href="{{ route('dashboard') }}"><i class="fa fa-fw fa-home"></i>Dashboard </a>
    <br>
    <a   href="{{ route('full-calender') }}"target='_blank'><i class="fa fa-lock" aria-hidden="true"></i>Roles</a>
    <br>
    <a  href="{{ route('users') }}"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
    <br>
     <a  href="#home"><i class="fa fa-fw fa-wrench" aria-hidden="true"></i> Settings</a>
    <br>
    <a   href="{{ route('results') }}" target='_blank'><i class="fa fa-file-text" aria-hidden="true"></i> Results</a>
    <br>
    <a class="dropdown-item"  href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="fa fa-sign-out" aria-hidden="true"></i>
        {{ __('Logout') }}
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>

  </div>




    <div class="container-stats">

        <div class="row">
            <div class="col-6 col-md-4">
                <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Students</div>
                    <div class="card-body">
                      <h5 class="card-title">
                          {{$users }}
                      </h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>

            <div class="col-6 col-md-4">
                 <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Total Staffs</div>
                <div class="card-body">
                  <h5 class="card-title">
                    {{ $users }}

                  </h5>
                  <p class="card-text"></p>
                </div>
              </div>
            </div>

            <div class="col-6 col-md-4">
                <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                    <div class="card-header">Total Non-Staff</div>
                    <div class="card-body">
                      <h5 class="card-title">
                        {{ $users }}

                      </h5>
                      <p class="card-text"></p>
                    </div>
                  </div>
            </div>
          </div>







    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>


