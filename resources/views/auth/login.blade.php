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
                    <h2>Login to your account</h2>
                    <form action='{{ route('login') }}' method='POST'>
                        @csrf
                        <div class='row login'>
                            <label for='email' class='form-label'>
                                Email Address
                            </label>
                            <div class='input-group mb-3'>
                                <span class='input-group-text'>
                                    <i class='fas fa-user'></i>
                                </span>
                                <input type='email' name='email' id='email' class='form-control @error('email') is-invalid @enderror' placeholder='Email Address'>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='row login'>
                            <label for='password' class='form-label'>
                                Password
                            </label>
                            <div class='input-group mb-3'>
                                <span class='input-group-text'>
                                    <i class='fas fa-lock'></i>
                                </span>
                                <input type='password' name='password' id='password' class='form-control @error('password') is-invalid @enderror' placeholder='Password'>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <button class='btn btn-primary btn-lg btn-block' type='submit' value='Log In'>
                            Log In
                        </button>
                    </form>
                    <a href='/register'>
                        New Employee? <span>Sign Up</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>