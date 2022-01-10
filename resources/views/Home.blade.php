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
                <li class="nav-item"><a class="nav-link" href="./login.html">Login</a></li>
                <li class="nav-item"><a class="nav-link" href="./signup.html">Signup</a></li>
<!--                <li style="display: none" class="nav-item"><a class="nav-link" href="./settings.html">Profile</a></li>-->
<!--                <li style="display: none" class="nav-item"><a class="nav-link" href="./statistics.html">Statistics</a></li>-->
<!--                <li style="display: none" class="nav-item"><a class="nav-link" href="#!">Logout</a></li>-->
            </ul>
<!--            <form class="d-flex">-->
<!--                <button class="btn btn-outline-dark" type="submit">-->
<!--                    <i class="bi-cart-fill me-1"></i>-->
<!--                    Cart-->
<!--                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>-->
<!--                </button>-->
<!--            </form>-->
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
    <div onclick="location.href = './Signup.html';" class="col-lg-3 col-md-6 text-center">
        <div style="cursor: pointer" class="mt-5">
            <div class="mb-2"><i class="bi bi-person-plus fs-1" style="color: #c6734d"></i></div>
            <h3 class="h4 mb-2">Create an Account</h3>
            <p class="text-muted mb-0">Still have no account..</p>
            <p class="text-muted mb-0">It's a Fast and easy process</p>
        </div>
    </div>
    <div onclick="location.href = './Login.html';" class="col-lg-3 col-md-6 text-center">
        <div style="cursor: pointer" class="mt-5">
            <div class="mb-2"><i class="bi-laptop fs-1" style="color: #c6734d"></i></div>
            <h3 class="h4 mb-2">Sign In</h3>
            <p class="text-muted mb-0">Go and start shopping your favorite kind of books!</p>
        </div>
    </div>
</div>
<!-- Section-->
<!--<section class="py-5">-->
<!--    <div class="container px-4 px-lg-5 mt-5">-->
<!--        <div style="display:inline-block;width: 20%">-->
<!--            <div>-->
<!--                <button class="btn btn-primary" >Search</button>-->
<!--            </div>-->
<!--            <ul class="nav flex-column">-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link active" href="#">Art</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Geography</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">History</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Religion</a>-->
<!--                </li>-->
<!--                <li class="nav-item">-->
<!--                    <a class="nav-link" href="#">Science</a>-->
<!--                </li>-->
<!--            </ul>-->

<!--        </div>-->
<!--        <div style=" float:right; width: 80%">-->
<!--            <div style=" display:none;float:right">-->
<!--                <button class="btn btn-primary" >Promote user</button>-->
<!--                <button class="btn btn-primary" >+ Add new book</button>-->

<!--            </div>-->
<!--            <br><br>-->
<!--            <div  class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="col mb-5">-->
<!--                <div class="card h-100">-->
<!--                    &lt;!&ndash; Product image&ndash;&gt;-->
<!--                    <img class="card-img-top" src="assets/book.jpg" alt="..." />-->
<!--&lt;!&ndash;                    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />&ndash;&gt;-->
<!--                    &lt;!&ndash; Product details&ndash;&gt;-->
<!--                    <div class="card-body p-4">-->
<!--                        <div class="text-center">-->
<!--                            &lt;!&ndash; Product name&ndash;&gt;-->
<!--                            <h5 class="fw-bolder">Fancy Product</h5>-->
<!--                            &lt;!&ndash; Product price&ndash;&gt;-->
<!--                            $40.00 - $80.00-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    &lt;!&ndash; Product actions&ndash;&gt;-->
<!--                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">-->
<!--                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


<!--            <div class="form-group">-->
<!--            <input type="button" style="background-color: #1a1e21; color: white" class="btn btn-block create-account" value="<Previous">-->
<!--            <input type="button" style="background-color: #1a1e21; color: white" class="btn btn-block create-account" value="Next>">-->
<!--            </div>-->
<!--        </div>-->
<!--        </div>-->
<!--        <div><br></div>-->
<!--    </div>-->

<!--</section>-->
<!--<section style="display:none" id="addingBook" class="py-5">-->
<!--    <div class="registration-form">-->
<!--        <form>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="ISBN" placeholder="Book ISBN">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="title" placeholder="Title">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="price" placeholder="Price">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="publisher" placeholder="Publisher">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="year" placeholder="Publication Year">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="threshold" placeholder="Threshold">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="copies" placeholder="Copies Available">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="category" placeholder="Book Category">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="author" placeholder="Author 1">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <button type="button" style="margin-left: 140px" class="btn btn-block create-account">Add Book</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</section>-->
<!--<section style="display:none" id="editBook" class="py-5">-->
<!--    <div class="registration-form">-->
<!--        <form>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="ISBN" placeholder="Book ISBN">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="title" placeholder="Title">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="price" placeholder="Price">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="publisher" placeholder="Publisher">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="year" placeholder="Publication Year">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="threshold" placeholder="Threshold">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="copies" placeholder="Copies Available">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="category" placeholder="Book Category">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="author" placeholder="Author 1">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <button type="button" style="margin-left: 140px" class="btn btn-block create-account">Edit Book</button>-->
<!--            </div>-->
<!--        </form>-->
<!--    </div>-->
<!--</section>-->

<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
<script src="js/router.js"></script>
</body>
</html>
