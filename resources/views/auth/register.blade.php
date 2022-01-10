<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Signup</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="/css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./home">Book Me</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="./home">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./login">Login</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="./register">Signup</a></li>
                <li style="display: none" class="nav-item"><a class="nav-link" href="./settings">Profile</a></li>
                <li style="display: none" class="nav-item"><a class="nav-link" href="./statistics">Statistics</a></li>
                <li style="display: none" class="nav-item"><a class="nav-link" href="#!">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Section-->
<section class="py-5">
    <div class="registration-form">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="form-group">
                <input type="text" name="first_name" class="form-control item" id="firstname" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" name="last_name" class="form-control item" id="lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" name="user_name" class="form-control item" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" name="email" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" name="password" class="form-control item" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" autocomplete="new-password" class="form-control item" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="text" name="phone_number" class="form-control item" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" name="shipping_address" class="form-control item" id="address" placeholder="Shipping Address">
            </div>
            <div class="form-group">
                <button type="submit" style="margin-left: 140px" class="btn btn-block create-account">Create Account</button>
            </div>
        </form>
    </div>
</section>

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="js/router.js"></script>
</body>
</html>
