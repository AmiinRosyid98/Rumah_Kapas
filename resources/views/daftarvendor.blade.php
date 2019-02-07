<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi User Rumah Kapas</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="daftar/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="daftar/css/style.css">
</head>
<body>

    <div class="main">
        <style>
        .error{
            color: red;
        }    
        </style>

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign Up</h2>
                        <form action="/daftarvendor/store" " class="store" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}"/>
                                <span class="error">{{ $errors->first('email') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" value="{{ old('name') }}"/>
                                <span class="error">{{ $errors->first('name') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="pass" id="pass" placeholder="Password"/>
                                <span class="error">{{ $errors->first('pass') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                                <span class="error">{{ $errors->first('re_pass') }}</span>
                            </div>
                            <div class="form-group">
                                <label for="phone"><i class="zmdi zmdi-phone"></i></label>
                                <input type="phone" name="phone" id="phone" placeholder="Phone Number" value="{{ old('phone') }}"/>
                                <span class="error">{{ $errors->first('phone') }}</span> 
                            </div>
                            <div class="form-group form-button"><center>
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/></center>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="daftar/images/gambar2.png" alt="sing up image"></figure>
                        <a href="signin" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>