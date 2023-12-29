<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap.min.css') }}">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 p-4" style="margin-top: 200px; border: 1px solid green">
                <h4 class="text-center">User Login</h4><hr>
                <form action="{{ route('user.check') }}" method="post">
                    
                    @if(Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                    @endif

                    @csrf
                    <div class="form-group my-2">
                        <label for="email">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" id="email" class="form-control mt-2" placeholder="Enter email address">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" value="{{ old('password') }}" id="password" class="form-control mt-2" placeholder="Enter password">
                        <span class="text-danger">@error('password'){{ $message }}@enderror</span>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success" type="submit">Login</button>
                    </div>
                </form>
                <p class="mt-3" style="font-family: Arial, Helvetica, sans-serif; font-size:14px; color:rgb(139, 133, 133);"><a href="">Forget Your Password</a>!</p>
                <p class="mt-2" style="font-family: Arial, Helvetica, sans-serif; font-size:14px; color:rgb(139, 133, 133);">You don't hava any Account. Please <a href="{{ route('user.register') }}">Register Now</a>!</p>
            </div>
        </div>
    </div>
</body>
</html>
