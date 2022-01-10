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
<div id="light" class="white_content"></div>
<div id="fade" class="black_overlay"></div>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" style="cursor: pointer">Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="Home.html">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="./settings.html">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="./statistics.html">Statistics</a></li>
                <li class="nav-item"><a class="nav-link" href="./Home.html">Logout</a></li>
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

<div style="float:right; margin-right: 20px; margin-top: 20px">
    <button class="btn btn-primary" >Promote user</button>
    <button class="btn btn-primary" >+ Add new book</button>
</div>

<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div style="display:inline-block; width: 15%; border-right: 1px solid #8a6e5a; height: 500px">
            <div>
                <button class="btn btn-primary" >Search</button>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Art</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Geography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Religion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Science</a>
                </li>
            </ul>

        </div>
        <div style=" float:right; width: 80%">
            <div  class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <div class="col mb-5">
                    <div  class="card h-100">
                        <!-- Product image-->
                        <img class="card-img-top" src="assets/cover2.jpeg" alt="..." />
                        <!-- Product details-->
                        <div class="card-body">
                            <div class="text-center">
                                <!-- Product name-->
                                <h5 class="fw-bolder">Book Title</h5>
                                <!-- Product price-->
                                <a>$40.00</a><br>
                                <!-- Product category-->
                                <a>Category</a><br>
                                <!-- Product authors-->
                                <a>Author(s)</a><br>
                                <!-- Product publisher-->
                                <a>Publisher</a><br>
                            </div>
                        </div>
                        <!-- Product actions-->
                        <div class="card-footer  bg-transparent" style="background-color: #faf0ea6e">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto dark" href="#">Add to cart</a>
                                <a class="btn btn-outline-dark mt-auto dark" href="#">Edit</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="form-group" style="margin-bottom: 20px; align-content: center; padding-left: 350px; position: fixed; bottom: 0">
                <input type="button" style="background-color: #1a1e21; color: white" class="btn btn-block create-account" value="<Previous">
                <input type="button" style="background-color: #1a1e21; color: white" class="btn btn-block create-account" value="Next>">
            </div>
        </div>
    </div>
</section>
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
<!--                <input type="text" class="form-control item" id="ISBN2" placeholder="Book ISBN">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="title2" placeholder="Title">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="price2" placeholder="Price">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="publisher2" placeholder="Publisher">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="year2" placeholder="Publication Year">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="threshold2" placeholder="Threshold">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="copies2" placeholder="Copies Available">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="category2" placeholder="Book Category">-->
<!--            </div>-->
<!--            <div class="form-group">-->
<!--                <input type="text" class="form-control item" id="author2" placeholder="Author 1">-->
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
