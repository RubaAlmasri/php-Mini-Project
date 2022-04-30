
<?php
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: rgb(252, 246, 239);
        }
      #logo{
            width: 30%;
            height: 20%;
        }
        #flogo {
            width: 40%;
            height: 50%;
        }

        .fa-facebook, .fa-twitter , .fa-instagram {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            margin-right: 5%;
            color: white;
        }
        .star {
            color: rgba(193, 178, 137, 0.5);
        }
        #error {
            background-color: white;
            border: 1px;
            border-radius: 50px;
            margin-top: 7%;
            margin-bottom: 3%;
            padding-top: 20%;
            padding-bottom: 20%;
        }
    </style>
  </head>
  <body>
      
  <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #d1c093; ">

<!-- Brand/logo -->
<a class="navbar-brand" href="#">
    <img src="Images/logo.png" alt="logo" id="logo">
</a>
<button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#coll"
    style="border-color: white;">
    <span class="navbar-toggler-icon navbar-light" style="background-color: white;"></span>
</button>

<!-- Links -->
<div class=" navbar-collapse collapse" id="coll">
    <ul class="navbar-nav ml-auto">
        <li class="nav-item">
            <a class="nav-link active" href="" style="color: white; font-weight: bold; font-size: 17px;">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#" style="color: white; font-weight: bold; font-size: 17px;">Products</a>
        </li>
    </ul>
</div>
</nav>


<div class="container d-flex justify-content-center mt-50 mb-50">
    <div class="row">
        <?php
    
    if(!empty($_SESSION['n']) || !empty($_SESSION['p']) || !empty($_SESSION['d'])){
        $_SESSION['n'];
        $_SESSION['p'];
        $_SESSION['d'];
        $_SESSION['ph'];
        $arr1=explode("<br>",$_SESSION['n']);
        $arr2=explode("<br>",$_SESSION['p']);
        $arr3=explode("<br>",$_SESSION['d']);
        $arr4=explode("<br>",$_SESSION['ph']);
    for($i=0; $i<count($arr1)-1; $i++){
        echo ('<div class="col-md-4 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-img-actions"> <img src="images/RM-logos_black.png" class="card-img img-fluid" width="96" height="350" alt="Image"> </div>
            </div>
            <div class="card-body bg-light text-center">
                <div class="mb-2">
                    <h5 class="font-weight-semibold mb-2" style="color:#80765c;">' . $arr1[$i] . '</h5><p class="text-muted" data-abc="true">' . $arr3[$i] . '</p>
                    </div>
                    <h4 class="mb-0 font-weight-semibold">$' . $arr2[$i] . '</h4>
                    <div> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i> <i class="fa fa-star star"></i></div>
                    <div class="text-muted mb-3"></div> <button type="button"  class="btn bg-cart btn-primary"><i class="fa fa-cart-plus mr-2"></i> Add to cart</button>
                </div>
            </div>
        </div>');
    }
}
else{
    echo('<div class="container" id="error"> <h2>There are no products to display!!! </h2></div>');
}
    ?>
    </div>
</div>





<!-- PHP -->












<!-- Footer -->
<footer class="page-footer font-small blue pt-4">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left" style="background-color: rgba(209, 192, 147, 0.8) ; padding-top: 5%;">

    <!-- Grid row -->
    <div class="row" style=" height: 10%;">

        <!-- Grid column -->
        <div class="col-md-5 mb-md-0 mb-3">

            <!-- Content -->
            <img src="images/flogo.png" alt="" id="flogo">


        </div>
        <!-- Grid column -->

        <!-- <hr class="clearfix w-100 d-md-none pb-3"> -->

        <!-- Grid column -->
        <div class="col-md-4 mb-md-0 mb-3">

            <!-- Twitter -->
            <a href="#" class="fa fa-facebook" ></a>
            <a href="#" class="fa fa-twitter" ></a>
            <a href="#" class="fa fa-instagram" ></a>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 mb-md-0 mb-3">

            <!-- Links -->
            <h4 class="text-uppercase">Links</h4>

            <ul class="list-unstyled">
                <li>
                    <a href="#!" style="color: white;">Home</a>
                </li>
                <li>
                    <a href="#!" style="color: white;">Products</a>
                </li>
            </ul>

        </div>
        <!-- Grid column -->

    </div>
    <!-- Grid row -->
</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" style="background-color: rgba(193, 178, 137, 0.8); font-size: 20px;">© 2022 Copyright|
    <a href="view-products-page.php"> R.M</a>. All rights reserved.
</div>
<!-- Copyright -->

</footer>
<!-- Footer -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>

  </body>
</html>