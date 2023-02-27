<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<form method="post" action="{{route('userReg')}}">
    @if(Session::has('success'))
    <div class="alert alert-success">{{Session::get('success')}}</div>
    @endif
    @if(Session::has('fail'))
    <div class="alert alert-danger">{{Session::get('fail')}}</div>
    @endif
    @csrf
    <fieldset>
    <legend class="col-md-4 col-md-offset-4" style="margin-top:20px;">Enter your registration details</legend>
    <div>
        <label for="username">Username:</label>
        <input type="text" required name="username" id="username" placeholder="Enter Username" value="{{old('username')}}">
        <span class="errormsg">@error('username') {{$message}} @enderror</span>
    </div>
    <div>
        <label for="password">Password:</label>
        <input type="password" required name="password" id="password" placeholder="Enter Password">
        <span class="errormsg">@error('password') {{$message}} @enderror</span>
    </div>
    <div>
        <label for="email">Email:</label>
        <input type="email" required
        name="email" id="email" placeholder="Enter Email" value="{{old('email')}}">
        <span class="errormsg">@error('email') {{$message}} @enderror</span>
    </div>
    <div>
        <label for="url">Webpage URL:</label>
        <input type="url" name="url" id="url" placeholder="URL" value="{{old('url')}}">
        <span class="errormsg">@error('url') {{$message}} @enderror</span>
    </div>
    <div>
        <label for="dob">Date of birth:</label>
        <input type="date" required name="dob" id="dob" value="{{old('dob')}}">
        <span class="errormsg">@error('dob') {{$message}} @enderror</span>
    </div>
    </fieldset>
    <div>
        <button class="btn btn-block btn-primary" type="submit" name="submit" formnovalidate>Submit Details</button>
    </div>
    <br>
    <a href="login">Active User? <br> Login here</a>
</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">

</script>
</html>