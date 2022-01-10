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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./home.html">Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="./home.html">Home</a></li>
<!--                <li class="nav-item"><a class="nav-link" href="./login.html">Login</a></li>-->
<!--                <li class="nav-item"><a class="nav-link" href="./signup.html">Signup</a></li>-->
<!--                <li style="display: none" class="nav-item"><a class="nav-link active" aria-current="page" href="./settings.html">Profile</a></li>-->
<!--                <li style="display: none" class="nav-item"><a class="nav-link" href="./statistics.html">Statistics</a></li>-->
                <li style="display: none" class="nav-item"><a class="nav-link" href="#!">Logout</a></li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="submit">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>
<!-- Section-->
<section class="py-5" style="background: url(assets/cover.jfif) no-repeat center center; background-size: cover; height: 665px">
    <div class="registration-form" style="padding: unset">
        <form style="margin-top: unset; padding: 30px 50px">
            <div class="form-group">
                <input type="text" class="form-control item" id="firstname" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="oldpassword" placeholder="Old Password">
            </div>
            <div class="form-group">
                <input type="password" class="form-control item" id="newpassword" placeholder="New Password">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="address" placeholder="Shipping Address">
            </div>
            <div class="form-group">
                <button type="button" style="margin-left: 160px; margin-top: 0" class="btn btn-block create-account">Update Profile</button>
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
