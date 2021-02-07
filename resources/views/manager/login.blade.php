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
                    <form action='/login' method='POST'>
                        <div class='row login'>
                            <label for='emailInput' class='form-label'>
                                Email Address
                            </label>
                            <div class='input-group mb-3'>
                                <span class='input-group-text'>
                                    <i class='fas fa-user'></i>
                                </span>
                                <input type='email' name='emailInput' id='emailInput' class='form-control' placeholder='Email Address'>
                            </div>
                        </div>
                        <div class='row login'>
                            <label for='passwordInput' class='form-label'>
                                Password
                            </label>
                            <div class='input-group mb-3'>
                                <span class='input-group-text'>
                                    <i class='fas fa-lock'></i>
                                </span>
                                <input type='password' name='passwordInput' id='passwordInput' class='form-control' placeholder='Password'>
                            </div>
                        </div>
                        <button class='btn btn-primary btn-lg btn-block' type='submit' value='Log In'>
                            Log In
                        </button>
                    </form>
                    <a href='/manager/register'>
                        New Employee? <span>Sign Up</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>