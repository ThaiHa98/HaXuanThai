<nav class="navbar navbar-expand-sm bg-dark">
    <div class="container-fluid">
      <!-- Links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a
            class="nav-link {{ request()->is('/') ? 'active' : '' }}"
            href="/user">Home
          </a>
        </li>
        <li class="nav-item">
          <a
          class="nav-link {{ request()->is('about') ? 'active' : '' }}"
            href="/categories">Categories
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/foods">foods</a>
        </li>

      </ul>
    </div>
  </nav>

{{--<form action="{{ route('login') }}" method="post">--}}
{{--    <section class="vh-100">--}}
{{--        <div class="container py-5 h-100">--}}
{{--            <div class="row d-flex align-items-center justify-content-center h-100">--}}
{{--                <div class="col-md-8 col-lg-7 col-xl-6">--}}
{{--                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"--}}
{{--                         class="img-fluid" alt="Phone image">--}}
{{--                </div>--}}
{{--                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">--}}
{{--                    <form>--}}
{{--                        <!-- Email input -->--}}
{{--                        <div class="form-outline mb-4">--}}
{{--                            <input type="name" id="form1Example13" class="form-control form-control-lg" />--}}
{{--                            <label class="form-label" for="form1Example13">Name</label>--}}
{{--                        </div>--}}

{{--                        <!-- Password input -->--}}
{{--                        <div class="form-outline mb-4">--}}
{{--                            <input type="password" id="form1Example23" class="form-control form-control-lg" />--}}
{{--                            <label class="form-label" for="form1Example23">Password</label>--}}
{{--                        </div>--}}

{{--                        <div class="d-flex justify-content-around align-items-center mb-4">--}}
{{--                            <!-- Checkbox -->--}}
{{--                            <div class="form-check">--}}
{{--                                <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />--}}
{{--                                <label class="form-check-label" for="form1Example3"> Remember me </label>--}}
{{--                            </div>--}}
{{--                            <a href="#!">Forgot password?</a>--}}
{{--                        </div>--}}

{{--                        <!-- Submit button -->--}}
{{--                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>--}}

{{--                        <div class="divider d-flex align-items-center my-4">--}}
{{--                            <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>--}}
{{--                        </div>--}}

{{--                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998" href="#!"--}}
{{--                           role="button">--}}
{{--                            <i class="fab fa-facebook-f me-2"></i>Continue with Facebook--}}
{{--                        </a>--}}
{{--                        <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee" href="#!"--}}
{{--                           role="button">--}}
{{--                            <i class="fab fa-twitter me-2"></i>Continue with Twitter</a>--}}

{{--                    </form>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </section>--}}
{{--</form>--}}
