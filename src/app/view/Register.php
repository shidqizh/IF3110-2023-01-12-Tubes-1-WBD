<!DOCTYPE html>
<html>
<head lang="en" dir ="ltr">
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="/public/css/register.css">
    <title>Sign Up Page</title>
</head>
<body>
    <div class="wrapper">
        <div class="title">
            Get Started
            <div class="sign-in">
                Already have an account?<a href="<? BASEURL ?>/public/login">Log in</a>
            </div>
        </div>
        <form action="<? BASEURL ?>/public/register/cek_register" method="post">
            <div class="field">
                <input type="text" name="username" id="username" required>
                <label>Username</label>
            </div>
            <div class="field">
                <input type="text" name="email" id="email" required>
                <label>Email</label>
            </div>
            <div class="field">
                <input type="text" name="password" id="password" required>
                <label>Password</label>
            </div>
            <div class="sign-in">
                <input type="submit" value="Sign up">
            </div>
        </form>
    </div>
</body>
</html>
