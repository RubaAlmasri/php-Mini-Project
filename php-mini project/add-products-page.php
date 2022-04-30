

<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
    <title>Add Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body {
            background-color: rgb(252, 246, 239);
        }

        .container {
            background-color: white;
            border: 1px;
            border-radius: 50px;
            margin-top: 7%;
            margin-bottom: 3%;
            padding: 5%;
        }
        #table-div{
            background-color: white;
        }

        .table {
            border: 1px solid;
            border-radius: 50px;
        }

        #logo {
            width: 30%;
            height: 20%;
        }

        #flogo {
            width: 40%;
            height: 50%;
        }

        .fa {
            padding: 20px;
            font-size: 30px;
            width: 50px;
            text-align: center;
            margin-right: 5%;
            color: white;
        }
        /* .nav-link
{
text-align:center;
} */
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm navbar-light" style="background-color: #d1c093; ">

        <!-- Brand/logo -->
        <a class="navbar-brand" href="#">
            <img src="Images/logo.png" alt="logo" id="logo">
        </a>
        <button class="navbar-toggler mr-auto" type="button" data-toggle="collapse" data-target="#coll"
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
                    <a class="nav-link" href="view-products-page.php" style="color: white; font-weight: bold; font-size: 17px;">Products</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">

        <form action="" method="post">
            <div class="form-group">
                <label for="prod">Product Name: </label>
                <input type="text" class="form-control" id="prod" name="pname" Required>
            </div>
            <div class="form-group">
                <label for="pri">Price: </label>
                <input type="text" class="form-control" id="pri" name="price" Required>
            </div>
            <div class="form-group">
                <label for="desc">Description: </label>
                <textarea name="description" id="desc" cols="30" rows="10" class="form-control" Required></textarea>
            </div>
            <div class="form-group">
                <label for="pic">Product Picture: </label>
                <input type="file" class="form-control-file" id="pic" name="picture" accept="image/*" required>
                <small>jpg,jpeg,png...</small>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="add" id="add" >Add Item</button>
            <button class="btn btn-primary" id="btn" style="display: inline-block;"><a href="view-products-page.php"style="color: white; text-decoration:none;">Show Items</a></button>
        </form>
        <br>
        

    </div>
    
    <div class="table-responsive" id="table-div">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Product Picture</th>
                </tr>
            </thead>
            <tbody id="info">
            <?php 
                
                if(isset($_POST['add'])){
                    $_SESSION['n'].=$_POST['pname'].'<br>';
                    $_SESSION['p'].=$_POST['price'].'<br>';
                    $_SESSION['d'].=$_POST['description'].'<br>';
                    $_SESSION['ph'].=$_POST['picture'].'<br>';
                    echo ('<tr><td>' . $_SESSION['n'] . '</td><td>' . $_SESSION['p'] . '</td><td>' . $_SESSION['d'] . '</td><td>' . $_SESSION['ph']. '</td></tr>');
                }
                // session_unset();
            ?>
            </tbody>
        </table>
    </div>

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

    <!-- <script>
        var b=[];
        document.getElementById('btn').addEventListener('click', function () {

            if (document.getElementById('prod').value == '' || document.getElementById('pri').value == '' || document.getElementById('desc').value == '') {
                window.alert('Please Fill All The Fields!!!');
            }
            else {
                var i = '';
                var n = document.getElementById('prod').value;
                var p = document.getElementById('pri').value;
                var d = document.getElementById('desc').value;
                var ph = 'RM-logos_transparent.png';
                
                b.push([n,p,d,ph]);
                document.getElementById('info').innerHTML += '<tr><td>' + n + '</td><td>' + p + '</td><td>' + d + '</td><td>' + ph + '</td></tr>';
                console.log(b);
            }

        })
    </script> -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js">
    </script>
    
</body>

</html>