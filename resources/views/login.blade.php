

@extends('layouts.master')

<body>

<div class="login-form">
    <form action="admin_login.php" method="post">

        <div class="image">
            <img src="../img/img_1.jpg" class="img-fluid" alt="image">
        </div>
        <div class="form-name">
            <span>Hi, Admin</span>
        </div>
        <div class="sub-title">
            <span>Welcome Back</span>
        </div>
        <div class="form-group">
            <input type="email" class="form-control item"  id="email" placeholder="email" name="email" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control item" id="password" placeholder="Password" name="password" required>
        </div>
        <div class="form-group">
            <button type="submit" name="login_user" class="btn btn-block login-account">Log in</button>
            <a href="#" class="forgot-psw">Forgotten password?</a>
        </div>
{{--        <div class="form-group">--}}
{{--            <a href="registration.php"><img src="../img/arrow-01.png" class="icon" alt="arrow"></a>--}}
{{--        </div>--}}
    </form>
</div>
</body>
</html>

