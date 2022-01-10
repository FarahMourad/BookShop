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
<nav class="navbar navbar-expand-lg navbar-light bg-light" style="position: fixed; right: 0; left: 0">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" style="cursor: pointer">Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="settings">Profile</a></li>
                <li class="nav-item"><a class="nav-link" href="stat">Statistics</a></li>
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
<section class="py-5" style="background-image: url(assets/cover.jfif); background-position: center; background-size: cover; background-repeat: no-repeat; background-attachment: fixed">
    <div class="registration-form" style="padding: unset">
        <form>
            <H5 style="font-family: 'Lucida Bright'">Statistics</H5><br>
            <div class="form-group">
                <label style="width: 120px">ISBN:</label><input type="text" class="form-control item" id="ISBN2" placeholder="Book ISBN to be edited">
            </div>
            <div class="form-group">
                <label style="width: 120px">Title:</label><input type="text" class="form-control item" id="title2" placeholder="Title">
            </div>
            <div class="form-group">
                <label style="width: 120px">Price:</label><input type="text" class="form-control item" id="price2" placeholder="Price">
            </div>
            <div class="form-group">
                <label style="width: 120px">Publisher:</label><input type="text" class="form-control item" id="publisher2" placeholder="Publisher">
            </div>
            <div class="form-group">
                <label style="width: 120px">Publication Year:</label><input type="text" class="form-control item" id="year2" placeholder="Publication Year">
            </div>
            <div class="form-group">
                <label style="width: 120px">Threshold:</label><input type="text" class="form-control item" id="threshold2" placeholder="Threshold">
            </div>
            <div class="form-group">
                <label style="width: 120px">Quantity:</label><input type="text" class="form-control item" id="copies2" placeholder="Available Copies">
            </div>
            <div class="form-group">
                <label style="width: 120px">Category:</label><input type="text" class="form-control item" id="category2" placeholder="Book Category">
            </div>
            <div class="form-group">
                <label style="width: 120px">Author:</label><input type="text" class="form-control item" id="author2" placeholder="Author">
            </div>
            <div class="form-group">
                <button type="button" style="margin-left: 80px" class="btn btn-block create-account">Add Author</button>
            </div>
        </form>
    </div>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
</script>
</body>
</html>
