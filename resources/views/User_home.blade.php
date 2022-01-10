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
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="settings">Profile</a></li>
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
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div style="display:inline-block; width: 15%; border-right: 1px solid #8a6e5a; height: 500px">
            <div>
                <button class="btn btn-primary" id="search">Search</button>
            </div>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="/getArt">Art</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/getGeo">Geography</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/getHist">History</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/getRel">Religion</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/getScience">Science</a>
                </li>
            </ul>

        </div>
        <div style=" float:right; width: 80%">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @if($cats !== "" )
                    @foreach( $cats as $cat )

                            <div class="col mb-5">
        {{--                        @foreach($cats as $cat)--}}
                                    <div  class="card h-100">
                                    <img class="card-img-top" src="assets/cover2.jpeg" alt="..." />
                                    <div class="card-body">
                                                <div class="text-center">
    {{--                                                <h5 class="fw-bolder">$cats.title</h5>--}}
                                                    <a>{{$cat->title}}</a><br>
                                                    <a>{{$cat->selling_price}}</a><br>
                                                    <a>Author(s)</a><br>
                                                    <a>{{$cat->publisher_name}}</a><br>
                                                </div>
                                    </div>
                                    <div class="card-footer bg-transparent" style="background-color: #faf0ea6e">
                                        <div class="text-center">
                                            <a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a>
                                        </div>
                                    </div>
                                </div>
        {{--                        @endfor--}}
                         </div>

                    @endforeach
            @endif
            </div>
            <div class="form-group" style="margin-bottom: 20px; align-content: center; padding-left: 350px; position: fixed; bottom: 0">
                <input type="button" style="background-color: #1a1e21; color: white" class="btn btn-block create-account" value="<Previous">
                <input type="button" style="background-color: #1a1e21; color: white" class="btn btn-block create-account" value="Next>">
            </div>
        </div>
    </div>
</section>

<div id="lightS" class="white_content">
    <div class="registration-form">
        <form>
            <div class="form-group">
                <input type="text" name="e-mail" class="form-control item" id="username" placeholder="Key Word">
                <div>
                    <input style="float: left" name="searchSelect" type="radio" id="title"> <label style="float: left; margin-left: 10px" for="title">Title</label><br>
                    <input style="float: left" name="searchSelect" type="radio" id="isbn"> <label style="float: left; margin-left: 10px" for="isbn">ISBN</label><br>
                    <input style="float: left" name="searchSelect" type="radio" id="publisher"> <label style="float: left; margin-left: 10px" for="publisher">Publisher</label><br>
                    <input style="float: left" name="searchSelect" type="radio" id="pYear"> <label style="float: left; margin-left: 10px" for="pYear">Publication Year</label><br>
                    <input style="float: left" name="searchSelect" type="radio" id="author"> <label style="float: left; margin-left: 10px" for="author">Author</label><br>
                </div>
            </div>
            <div class="form-group">
                <button style="margin-left: 180px" class="btn btn-block create-account">Search</button>
            </div>
        </form>
    </div>
</div>
<div id="fadeS" class="black_overlay"></div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    $('#search').on("click", function () {
        document.getElementById('lightS').style.display = "block";
        document.getElementById('fadeS').style.display = "block";
    })
    $('#fadeS').on("click", function () {
        document.getElementById('lightS').style.display = "none";
        document.getElementById('fadeS').style.display = "none";
    })
</script>
</body>
</html>
