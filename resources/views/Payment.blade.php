<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Payment</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/payment.css" rel="stylesheet" />
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
                <li style="display: none" class="nav-item"><a class="nav-link" href="./settings.html">Profile</a></li>
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
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/visa-logo-download-png-21.png" alt=""> </div>
                    <div class="number"> <label class="fw-bold" for="">**** **** **** 1060</label> </div>
                    <div class="d-flex align-items-center justify-content-between"> <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small> <small><span class="fw-bold">Name:</span><span>Kumar</span></small> </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/mastercard-png/file-mastercard-logo-svg-wikimedia-commons-4.png" alt=""> </div>
                    <div class="number"> <label class="fw-bold">**** **** **** 1060</label> </div>
                    <div class="d-flex align-items-center justify-content-between"> <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small> <small><span class="fw-bold">Name:</span><span>Kumar</span></small> </div>
                </div>
            </div>
            <div class="col-lg-4 mb-lg-0 mb-3">
                <div class="card p-3">
                    <div class="img-box"> <img src="https://www.freepnglogos.com/uploads/discover-png-logo/credit-cards-discover-png-logo-4.png" alt=""> </div>
                    <div class="number"> <label class="fw-bold">**** **** **** 1060</label> </div>
                    <div class="d-flex align-items-center justify-content-between"> <small><span class="fw-bold">Expiry date:</span><span>10/16</span></small> <small><span class="fw-bold">Name:</span><span>Kumar</span></small> </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="card p-3">
                    <p class="mb-0 fw-bold h4">Payment Methods</p>
                </div>
            </div>
            <div class="col-12">
                <div class="card p-3">
                    <div class="card-body border p-0">
                        <p> <a class="btn btn-primary w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">PayPal</span> <span class="fab fa-cc-paypal"> </span> </a> </p>
                        <div class="collapse p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-8">
                                    <p class="h4 mb-0">Summary</p>
                                    <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of product</span></p>
                                    <p class="mb-0"><span class="fw-bold">Price:</span><span class="c-green">:$452.90</span></p>
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque nihil neque quisquam aut repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab quis, iste harum ipsum hic, nemo qui!</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body border p-0">
                        <p> <a class="btn btn-primary p-2 w-100 h-100 d-flex align-items-center justify-content-between" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="true" aria-controls="collapseExample"> <span class="fw-bold">Credit Card</span> <span class=""> <span class="fab fa-cc-amex"></span> <span class="fab fa-cc-mastercard"></span> <span class="fab fa-cc-discover"></span> </span> </a> </p>
                        <div class="collapse show p-3 pt-0" id="collapseExample">
                            <div class="row">
                                <div class="col-lg-5 mb-lg-0 mb-3">
                                    <p class="h4 mb-0">Summary</p>
                                    <p class="mb-0"><span class="fw-bold">Product:</span><span class="c-green">: Name of product</span> </p>
                                    <p class="mb-0"> <span class="fw-bold">Price:</span> <span class="c-green">:$452.90</span> </p>
                                    <p class="mb-0">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Atque nihil neque quisquam aut repellendus, dicta vero? Animi dicta cupiditate, facilis provident quibusdam ab quis, iste harum ipsum hic, nemo qui!</p>
                                </div>
                                <div class="col-lg-7">
                                    <form action="" class="form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">Card Number</label> </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">MM / yy</label> </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form__div"> <input type="password" class="form-control" placeholder=" "> <label for="" class="form__label">cvv code</label> </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form__div"> <input type="text" class="form-control" placeholder=" "> <label for="" class="form__label">name on the card</label> </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="btn btn-primary w-100">Sumbit</div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="btn btn-primary payment"> Make Payment </div>
            </div>
        </div>
    </div>
</section>



<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="js/router.js"></script>
</body>
</html>
