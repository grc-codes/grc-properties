<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('includes.metatags-head')
    </head>
    <body class='antialiased'>
        <div class='gradient-wrapper'>
            <div class='container'>
                <h1>
                    <a href='/'>
                        GRC
                        <img src="https://img.icons8.com/emoji/96/000000/house-emoji.png"/>
                    </a>
                </h1>
                <div class='content'>
                    <h2>Sign up for manager access</h2>
                    <form action='{{ route('register') }}' method='POST'>
                        @csrf
                        <div class='row register'>
                            <div class='col-12 col-lg-6 mb-3'>
                                <div class='form-floating'>
                                    <input type='text' name='first_name' id='first_name' class='form-control @error('first_name') is-invalid @enderror' placeholder='First Name' required autocomplete='first_name' autofocus>
                                    @error('first_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                    <label for='first_name'>First Name</label>
                                </div>
                            </div>
                            <div class='col-12 col-lg-6 mb-3'>
                                <div class='form-floating'>
                                    <input type='text' name='last_name' id='last_name' class='form-control @error('last_name') is-invalid @enderror' placeholder='Last Name' required autocomplete='last_name' autofocus>
                                    <label for='last_name'>Last Name</label>
                                    @error('last_name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class='row register'>
                            <div class='col-12 col-lg-12 mb-3 px-2'>
                                <div class='form-floating'>
                                    <input type='email' name='email' id='email' class='form-control @error('email') is-invalid @enderror' placeholder='Email Address' required autocomplete='email'>
                                    <label for='email'>Email Address</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class='row register'>
                            <div class='col-12 col-lg-6 mb-3'>
                                <div class='form-floating'>
                                    <input type='password' name='password' id='password' class='form-control @error('password') is-invalid @enderror' placeholder='Password' required autocomplete='password'>
                                    <label for='password'>Password</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class='col-12 col-lg-6 mb-3'>
                                <div class='form-floating'>
                                    <input type='password' name='password_confirmation' id='password-confirm' class='form-control' placeholder='Confirm Password' required autocomplete='password'>
                                    <label for='password_confirmation'>Confirm Password</label>
                                </div>
                            </div>
                        </div>
                        <button class='btn btn-primary btn-lg btn-block' type='submit' value='Log In'>
                            Register
                        </button>
                    </form>
                    <a href='/login'>
                        Already Registered? <span>Log In</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>