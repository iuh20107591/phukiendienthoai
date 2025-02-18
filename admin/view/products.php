<!DOCTYPE html>
<?php

if (!isset($_SESSION['dn'])) {
    echo "<script>alert('Bạn không có quyền truy cập!')</script>";
    header("refresh:0; url='../login.php'");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Product Page - Admin HTML Template</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700" />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="../admin/css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="../admin/css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="../admin/css/templatemo-style.css">
    <!--
  Product Admin CSS Template
  https://templatemo.com/tm-524-product-admin
  -->
</head>

<body id="reportsPage">
    <nav class="navbar navbar-expand-xl">
        <div class="container h-100">
            <a class="navbar-brand" href="../admin/index.php">
                <h1 class="tm-site-title mb-0">Product Admin</h1>
            </a>
            <button class="navbar-toggler ml-auto mr-0" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars tm-nav-icon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto h-100">
                    <li class="nav-item">
                        <a class="nav-link" href="../admin/index.php">
                            <i class="fas fa-tachometer-alt"></i> Dashboard
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="../index.php" id="" role="button"
                                data-toggle="" aria-haspopup="true" aria-expanded="false">
                                <i class="far fa-file-alt"></i>
                                <span>
                                    Home Store
                                </span>
                            </a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="">
                            <i class="fas fa-shopping-cart"></i> Products
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="?accounts">
                            <i class="far fa-user"></i> Accounts
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-cog"></i>
                            <span> Settings <i class="fas fa-angle-down"></i> </span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Profile</a>
                            <a class="dropdown-item" href="#">Billing</a>
                            <a class="dropdown-item" href="#">Customize</a>
                        </div>
                    </li>
                </ul>
                <ul class="navbar-nav">
                <li class="nav-item">
              <?php

                            if (isset($_SESSION["dn"])) {

                                echo '<a class="nav-link d-block" href="?dangxuat"><i class="far fa-user"></i>Admin, <b>Logout</b></a>';
                                if (isset($_REQUEST['dangxuat'])) {
                                    session_destroy();

                                    echo "<script> window.location.href = 'login.php';</script>";
                                }
                            } else {
                                echo '<a class="nav-link d-block" href="login.php"><i class="far fa-user"></i><b> Login</b></a>';
                            }
                            ?>
              </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="row tm-content-row">
            <div class="col-sm-12 col-md-12 col-lg-8 col-xl-8 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-products">
                    <div class="tm-product-table-container">
                        <table class="table table-hover tm-table-small tm-product-table">
                            <thead>
                                <tr>
                                    <th scope="col">&nbsp;</th>
                                    <th scope="col">PRODUCT NAME</th>
                                    <th scope="col">Price</th>
                                    <th scope="col">Cost</th>
                                    <th scope="col">Description</th>


                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                include_once ("controller/cSanpham.php");
                                $p = new cSanpham();
                                $p->xemsanpham();

                                ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- table container -->
                    <a href="?addproduct" class="btn btn-primary btn-block text-uppercase mb-3">Add new product</a>
                    <button class="btn btn-primary btn-block text-uppercase">
                        Delete selected products
                    </button>
                </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-4 col-xl-4 tm-block-col">
                <div class="tm-bg-primary-dark tm-block tm-block-product-categories">
                    <h2 class="tm-block-title">Product Categories</h2>
                    <div class="tm-product-table-container">
                        <table class="table tm-table-small tm-product-table">
                            <tbody>
                                <tr>
                                    <td class="tm-product-name">Product Category 1</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 2</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 3</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 4</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 5</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 6</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 7</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 8</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 9</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 10</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="tm-product-name">Product Category 11</td>
                                    <td class="text-center">
                                        <a href="#" class="tm-product-delete-link">
                                            <i class="far fa-trash-alt tm-product-delete-icon"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <!-- table container -->
                    <button class="btn btn-primary btn-block text-uppercase mb-3">
                        Add new category
                    </button>
                </div>
            </div>
        </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
            <p class="text-center text-white mb-0 px-4 small">
                Copyright &copy; <b>2018</b> All rights reserved.

                Design: <a rel="nofollow noopener" href="https://templatemo.com" class="tm-footer-link">Template Mo</a>
            </p>
        </div>
    </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
    $(function() {
        $(".tm-product-name").on("click", function() {
            window.location.href = "edit-product.php";
        });
    });
    </script>
</body>

</html>