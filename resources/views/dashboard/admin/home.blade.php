<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-6 mt-5">
            <h4>Admin Dashboard</h4> <hr>
            <table class="table table-bordered">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
                <tr>
                    <td>{{ Auth::guard('admin')->user()->name }}</td>
                    <td>{{ Auth::guard('admin')->user()->email }}</td>
                    <td>
                        <a class="btn btn-sm btn-info" href="{{ route('admin.logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                        <form action="{{ route('admin.logout') }}" method="post" class="d-none" id="logout-form">@csrf</form>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</div>
</body>
</html>
