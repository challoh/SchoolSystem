


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
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>


    <!-- The sidebar -->
  <div class="sidebar">
    <a  href="{{ route('dashboard') }}"><i class="fa fa-fw fa-home"></i>Dashboard </a>
    <br>
    <a href="{{ route('full-calender') }}"target='_blank'><i class="fa fa-lock" aria-hidden="true"></i>Roles</a>
    <br>
    <a class="active" href="#home"><i class="fa fa-user" aria-hidden="true"></i> Users</a>
    <br>
     <a href="#home"><i class="fa fa-fw fa-wrench" aria-hidden="true"></i> Settings</a>
    <br>
    <a href="{{ route('results') }}" target='_blank'><i class="fa fa-file-text" aria-hidden="true"></i> Results</a>
    <br>
    <a href="{{ route('logout') }}" ><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a>

  </div>

    <div class="content-container">
    @if (Session::has('delete-user'))
<span>{{Session::get('delete-user')}}</span>

@endif
       <a href="{{ route('add-user') }}" ><i class="fa fa-user-plus" aria-hidden="true"></i> add_user</a>
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                      <tr>
                        <th> ID</th>
                        <th> First</th>
                        <th> Email</th>
                        <th> Edit</th>
                        <th> Delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          @foreach ($users as $userdata)
                            <th>{{ $userdata->id }}</th>
                            <td>{{ $userdata->name }}</td>
                            <td>{{ $userdata->email}}</td>

                            <td>
                                {{-- <a href="{{ url('/edit-user' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a> --}}
                                <a href="{{ url('/edit-user') }}" title="Edit user"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                <form method="POST" action="{{ url('/delete-user' . '/' . $userdata->id) }}" accept-charset="UTF-8" style="display:inline">
                                @csrf
                                @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" title="Delete Contact" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                </form>

                            </td>
                      </tr>
                          @endforeach

                    </tbody>
                  </table>
            </div>
          </div>


    </div>


</body>
</html>
