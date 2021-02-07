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
                    <form action='/register' method='POST'>
                        <div class='row register'>
                            <div class='col-12 col-lg-6 mb-3'>
                                <div class='form-floating'>
                                    <input type='text' name='fnameInput' id='fnameInput' class='form-control' placeholder='First Name'>
                                    <label for='fnameInput'>First Name</label>
                                </div>
                            </div>
                            <div class='col-12 col-lg-6 mb-3'>
                                <div class='form-floating'>
                                    <input type='text' name='lnameInput' id='lnameInput' class='form-control' placeholder='Last Name'>
                                    <label for='lnameInput'>Last Name</label>
                                </div>
                            </div>
                        </div>
                        <div class='row register'>
                            <div class='col-12 col-lg-12 mb-3 px-2'>
                                <div class='form-floating'>
                                    <input type='email' name='emailInput' id='emailInput' class='form-control' placeholder='Email Address'>
                                    <label for='emailInput'>Email Address</label>
                                </div>
                            </div>
                        </div>
                        <button class='btn btn-primary btn-lg btn-block' type='submit' value='Log In'>
                            Sign Up
                        </button>
                    </form>
                    <a href='/manager/login'>
                        Already Signed Up? <span>Log In</span>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>