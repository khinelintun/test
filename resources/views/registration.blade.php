

@extends('layouts.register')
<body>

<div class="container">
    <form class="row g-3" action="registration.php" method="post">

        <div class="title">
            <label for="">Create Your Account</label>
        </div>
        <div class="col-md-6">
            <input type="text" name="firstname" class="form-control item"  placeholder="First name" required >
        </div>
        <div class="col-md-6">
            <input type="text" name="lastname" class="form-control item"  placeholder="Last name" required>
        </div>
        <div class="col-12">
            <input type="email" name="contactname" class="form-control item"  placeholder="Mobile name or email address" required>
        </div>
        <div class="col-md-6">
            <input type="password" name="$password_1" class="form-control item"  placeholder="New password" required>
        </div>
        <div class="col-md-6">
            <input type="password" name="$password_2" class="form-control item"  placeholder="Confirm password" required>
        </div>
        <!--        <label>Date of birth</label>-->
        <div class="col-md-12">
            <input type="date" name="date" class="form-control item"  placeholder="dd/mm/yyyy" style="color: rgba(10,10,10,0.6)" required>
        </div>
        <div class="col-md 6">
            <button type="submit" name="create" class="submit form-control">Sign Up</button>
        </div>
        <div class="col-md 6 sign_in">
            <span>Already a member?</span>
            <a href="admin_login.php" id="sign_in">Sing In</a>
        </div>
    </form>
</div>


</body>
</html>
