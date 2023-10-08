<!DOCTYPE html>
<html>
<head lang="en" dir ="ltr">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/public/css/login.css">
    <title>Login Page</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            SoundVibes
        </div>
        <form action="<? BASEURL ?>/public/login/cek_login" method="post" >
            <div class="field">
                <input type="text" name="username_or_email" required>
                <label>Username or Email</label>
            </div>
            <div class="field">
                <input type="text" name="password" required>
                <label>Password</label>
            </div>
            <div class="content">
                <div class="checkbox">
                    <input type="checkbox" id="Remember Me">
                    <label for="Remember Me">Remember Me</label>
                    <a href="#">Forgot your password?</a>
                </div>


            </div>
            <div class="field">
                <input type="submit" value="Sign in">
            </div>
            <div class="signup-link">
                Don't have an account yet?<a href="<? BASEURL ?>/public/register">Register now</a>
            </div>
        </form>
    </div>
</body>
</html>
