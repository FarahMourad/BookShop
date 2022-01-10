<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico">
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet">
</head>
<body>
<div id="light" class="white_content"></div>
<div id="fade" class="black_overlay"></div>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" style="cursor: pointer" href="/">Book Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                <li class="nav-item"><a class="nav-link" aria-current="page" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="settings">Profile</a></li>
                <li class="nav-item"><a class="nav-link" style="cursor: pointer">Logout</a></li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-dark" type="button">
                    <i class="bi-cart-fill me-1"></i>
                    Cart
                    <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                </button>
            </form>
        </div>
    </div>
</nav>
<section>
    <div class="wrapper">
        <div id="table" class="bg-white rounded">
            <div class="d-md-flex align-items-md-center px-3 pt-3">
            </div>
            <hr>
            <div class="table-responsive">
                <table class="table activitites">
                    <thead>
                    <tr>
                        <th scope="col" class="text-uppercase header">item</th>
                        <th scope="col" class="text-uppercase">Quantity</th>
                        <th scope="col" class="text-uppercase">price each</th>
                        <th scope="col" class="text-uppercase">total</th>
                    </tr>
                    </thead>
                    <tbody id="orderTable">
                    <tr>
                        <td>
                            Inverting The Pyramid
                        </td>
                        <td>120</td>
                        <td>$21.40 </td>
                        <td> $249 </td>
                        <td>
                            <button onclick="orders()" type="button" class="btn btn-danger">× Remove Item</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <button style="margin-left: 500px" class="btn btn-danger">Clear Cart</button>
                <button style="margin-left: 100px" class="btn btn-success">Checkout</button>
            </div>
        </div>
    </div>
</section>

<script>
    function orders() {
        let t =document.getElementById("orderTable");
        let row = document.createElement("tr");
        let td1 = document.createElement("td");
        td1.innerHTML=order.name;
        let td2 = document.createElement("td");
        td2.innerHTML=order.quantity;
        let td3 = document.createElement("td");
        td3.innerHTML=order.price;
        let td4 = document.createElement("td");
        td4.innerHTML=order.total;
        let td5 = document.createElement("td");
        let remove= document.createElement("button");
        remove.type="button";
        remove.className="btn btn-danger";
        remove.innerHTML="Remove Item";
        remove.onclick=function (){
            t.removeChild(row);
        }
        row.insertBefore(td1,null);
        row.insertBefore(td2,null);
        row.insertBefore(td3,null);
        row.insertBefore(td4,null);
        td5.insertBefore(remove,null);
        row.insertBefore(td5,null);
        t.insertBefore(row,null);
    }
</script>
</body>
</html>
