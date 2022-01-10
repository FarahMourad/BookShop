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
    <link th:href="@{/css/styles.css}" rel="stylesheet" />
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="./home.html">Book Me</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" href="./home.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./login.html">Login</a></li>
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="./signup.html">Signup</a></li>
                <li style="display: none" class="nav-item"><a class="nav-link" href="./settings.html">Profile</a></li>
                <li style="display: none" class="nav-item"><a class="nav-link" href="./statistics.html">Statistics</a></li>
                <li style="display: none" class="nav-item"><a class="nav-link" href="#!">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Section-->
<section class="py-5">
    <div class="registration-form">
        <form method="post" th:action="@{/process}" th:object="${user}">
            <div class="form-group">
                <input type="text" th:field="*{first_name}" class="form-control item" id="firstname" placeholder="First Name">
            </div>
            <div class="form-group">
                <input type="text" th:field="*{last_name}" class="form-control item" id="lastname" placeholder="Last Name">
            </div>
            <div class="form-group">
                <input type="text" th:field="*{user_name}" class="form-control item" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="email" th:field="*{email}" class="form-control item" id="email" placeholder="Email">
            </div>
            <div class="form-group">
                <input type="password" th:field="*{password}" class="form-control item" id="password" placeholder="Password">
            </div>
            <div class="form-group">
                <input type="text" th:field="*{phone_number}" class="form-control item" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <input type="text" th:field="*{shipping_address}" class="form-control item" id="address" placeholder="Shipping Address">
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
