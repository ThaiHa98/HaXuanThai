@extends('layouts.app')

@section('content')
    <div class="login-container">
{{--        <h2>Login Form</h2>--}}
        <form action="{{ route('login') }}" method="post">
            @csrf
            <section class="vh-100">
                    <div class="container py-5 h-100">
                        <div class="row d-flex align-items-center justify-content-center h-100">
                            <div class="col-md-8 col-lg-7 col-xl-6">
                                <img src="https://cdn.pixabay.com/photo/2019/08/30/15/48/lock-4441691_1280.png"
                                     class="img-fluid" alt="Phone image">
                            </div>
                            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                                <form   >
                                    <!-- Email input -->

                                    <div class="form-form-outline mb-4">
                                        <label for="name">Name:</label>
                                        <input type="name" name="name" id="name" required class="form-control form-control-lg">
                                    </div>

                                    <!-- Password input -->
                                    <div class="form-form-outline mb-4">
                                        <label for="password">Password:</label>
                                        <input type="password" name="password" id="password" required class="form-control form-control-lg">
                                    </div>

                                    <div class="d-flex justify-content-around align-items-center mb-4">
                                        <!-- Checkbox -->
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                                        </div>
                                        <a href="#!">Forgot password?</a>
                                    </div>

                                    <!-- Submit button -->
                                    <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="{{ route('user.create') }}"
                                       role="button">
                                        <i class="fab fa-facebook-f me-2"></i>Create Account
                                    </a>
                                    <div class="divider d-flex align-items-center my-4">
                                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                                    </div>

                                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"
                                       role="button">
                                        <i class="fab fa-facebook-f me-2"></i>Continue with Facebook
                                    </a>
                                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"
                                       role="button">
                                        <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>

                                </form>
                            </div>
                        </div>
                    </div>
                </section>
        </form>
    </div>
@endsection

