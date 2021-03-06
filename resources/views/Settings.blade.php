<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Profile</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; right: 0; left: 0">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" style="cursor: pointer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Logout</a></li>
            </ul>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="button" onclick="location.href = 'cart';">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- Section-->
<section class="py-5" style="background-image: url(assets/cover.jfif); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
    <div class="registration-form" style="padding: unset">
        <form method="POST" action="{{route('edit')}}">
            <H5 style="font-family: 'Lucida Bright'">Personal information</H5><br>
            @csrf
            <div class="form-group">
                <label style="width: 200px">First Name:</label><input name="first_name" type="text" class="form-control item" id="firstname" placeholder="{{Auth::user()->first_name}}">
            </div>
            <div class="form-group">
                <label style="width: 200px">Last Name:</label><input name="last_name" type="text" class="form-control item" id="lastname" placeholder="{{Auth::user()->last_name}}">
            </div>
            <div class="form-group">
                <label style="width: 200px">E-Mail:</label><input name="email" type="text" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <label style="width: 200px">Old Password:</label><input name="old_password" type="password" class="form-control item" id="oldpassword" placeholder="Old Password">
            </div>
            <div class="form-group">
                <label style="width: 200px">New Password:</label><input name="new_password" type="password" class="form-control item" id="newpassword" placeholder="New Password">
            </div>
            <div class="form-group">
                <label style="width: 200px">Confirmation Password:</label><input name="confirm_password" type="password" class="form-control item" id="confirm_password" placeholder="Confirm Password">
            </div>
            <div class="form-group">
                <label style="width: 200px">Phone Number:</label><input name="phone_number" type="text" class="form-control item" id="phone-number" placeholder="{{Auth::user()->phone_number}}">
            </div>
            <div class="form-group">
                <label style="width: 200px">Shipping Address:</label><input name="shipping_address" type="text" class="form-control item" id="address" placeholder="{{Auth::user()->shipping_address}}">
            </div>
            <div class="form-group">
                <button type="submit" style="margin-left: 160px; margin-top: 0" class="btn btn-block create-account">Update Profile</button>
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
