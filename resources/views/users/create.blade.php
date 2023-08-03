

@extends('layouts.app')

@section('content')
    <!DOCTYPE html>
<html>
<head>
    <title>Create User</title>
    <link rel="stylesheet" href="./css.css">
</head>
<body>
<div class="form-container">
    <h1>Create User</h1>
    <form method="POST" action="/user">
        @csrf
        <div class="form-control">
            Username: <input type="text" name="username" value="" required>
        </div>
        <div class="form-control">
            Password: <input type="text" name="password" value="" required/>
        </div>
        <div class="form-control">
            Email: <input type="email" name="email" value="" required/>
        </div>
        <div class="form-control">
            Phone: <input type="text" name="phone" value="" required/>
        </div>

        <input type="submit" name="dangky" value="Đăng Ký"/>

        <div class="form-control">
            <label for="google">Sign up with Google:</label>
            <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/900px-Facebook_Logo_%282019%29.png">
                <img src="path_to_google_logo.png" alt="Google">
            </a>
        </div>
        <div class="form-control">
            <label for="facebook">Sign up with Facebook:</label>
            <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/0/05/Facebook_Logo_%282019%29.png/900px-Facebook_Logo_%282019%29.png">
                <img src="path_to_facebook_logo.png" alt="Facebook">
            </a>
        </div>
    </form>
</div>
</body>
</html>
@endsection


