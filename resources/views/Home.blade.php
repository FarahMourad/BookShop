<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Homepage</title>
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
        <a class="navbar-brand" style="cursor: pointer">Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link active" aria-current="page" style="cursor: pointer">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="signup">Signup</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Header-->
<header class="bg-dark py-5" style="background: url(assets/cover.jfif) no-repeat center center; background-size: cover">
    <div class="container px-4 px-lg-5 my-5">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bolder">Welcome to Book Store</h1>
            <p class="lead fw-normal text-white-50 mb-0">Your online bookshop to get any book you want</p>
        </div>
    </div>
</header>
<div class="row gx-4 gx-lg-5">
    <div class="col-lg-3 col-md-6 text-center"></div>
    <div onclick="location.href = 'register';" class="col-lg-3 col-md-6 text-center">
        <div style="cursor: pointer" class="mt-5">
            <div class="mb-2"><i class="bi bi-person-plus fs-1" style="color: #c6734d"></i></div>
            <h3 class="h4 mb-2">Create an Account</h3>
            <p class="text-muted mb-0">Still have no account..</p>
            <p class="text-muted mb-0">It's a Fast and easy process</p>
        </div>
    </div>
    <div onclick="location.href = 'login';" class="col-lg-3 col-md-6 text-center">
        <div style="cursor: pointer" class="mt-5">
            <div class="mb-2"><i class="bi-laptop fs-1" style="color: #c6734d"></i></div>
            <h3 class="h4 mb-2">Sign In</h3>
            <p class="text-muted mb-0">Go and start shopping your favorite kind of books!</p>
        </div>
    </div>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="js/router.js"></script>
</body>
</html>
