<?php require_once("db_connection.php");?>
<?php require_once("functions.php");?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <title>home page</title>
</head>
<body>
<style>
    img: not(.carousel-item img){
        height: 40px;
        width: 40px;
    }
    .navbar-brand{
        font-size: 50px;
        font-family: "Bradley Hand ITC";
        font-weight: bold;
    }

    li a:not(.dropdown-item){
        margin: 20px 50px 5px 50px;
    }

    .dropdown-menu {
        margin-left: 50px;
        margin-top:0px;
    }

    #search_img, #searchbar{
        height: 40px;

    }

    #search_img img{
        height: 30px;
        width: 30px;

    }

    .navcontainer{
        width: 100%;
        background-color: #e4b9b9;
    }

    .searchbardiv{
        margin-left: 60px;

    }

    .dropdown-menu{
        width: 350px;

    }
</style>



<div class="navbar  navcontainer">
    <div class="d-flex flex-row justify-content-start">
        <h1 class="navbar-brand">Cl<img src="../images/button.png" style="width: 40px; height: 40px">set</h1>
        <div class="navbar-nav  flex-row nav-pills">
            <div class="dropdown">
                <li class="nav-item ">
                    <a href=# class="nav-link dropdown-toggle" data-toggle="dropdown" >Men</a>
                    <div class="dropdown-menu" >


                        <div><h4 class="dropdown-item">Topwear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">T-shirts</a></li>
                                <li><a>shirts</a></li>
                                <li><a>Jackets</a></li>
                                <li><a>Sweatshirts</a></li>
                                <li><a >Sweaters</a></li>
                                <li><a>Winter Coats</a></li>
                                <li><a >Hoodies</a></li>
                            </ul>
                        </div>

                        <div><h4 class="dropdown-item">Bottomwear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">Jeans</a></li>
                                <li><a>shirts</a></li>
                                <li><a href="#">Casual Trousers</a></li>
                                <li><a>Formal Trousers</a></li>
                                <li><a>Shorts</a></li>
                                <li><a >Track Pants/Joggers</a></li>
                            </ul>
                        </div>


                        <div><h4 class="dropdown-item">Indian & Festivewear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">kurta & Kurta Sets</a></li>
                                <li><a>Sherwanis</a></li>
                                <li><a href="#">Nehru Jackets</a></li>
                                <li><a>Dhoti</a></li>
                            </ul>
                        </div>


                        <div><h4 class="dropdown-item">Fashion Accessories<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">Wallets</a></li>
                                <li><a href="#">Wristwear</a></li>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Caps & Hats</a></li>
                                <li><a href="#">Phone Cases</a></li>
                            </ul>
                        </div>


                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li class="nav-item">
                    <a href= # class="nav-link dropdown-toggle" data-toggle="dropdown">Women</a>
                    <div class="dropdown-menu"  >


                        <div><h4 class="dropdown-item">Topwear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">T-shirts</a></li>
                                <li><a>shirts</a></li>
                                <li><a>Jackets</a></li>
                                <li><a>Sweatshirts</a></li>
                                <li><a >Sweaters</a></li>
                                <li><a>Winter Coats</a></li>
                                <li><a >Hoodies</a></li>
                            </ul>
                        </div>

                        <div><h4 class="dropdown-item">Bottomwear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">Jeans</a></li>
                                <li><a>shirts</a></li>
                                <li><a href="#">Casual Trousers</a></li>
                                <li><a>Formal Trousers</a></li>
                                <li><a>Shorts</a></li>
                                <li><a >Track Pants/Joggers</a></li>
                            </ul>
                        </div>


                        <div><h4 class="dropdown-item">Indian & Festivewear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">kurta & Kurta Sets</a></li>
                                <li><a>Sherwanis</a></li>
                                <li><a href="#">Nehru Jackets</a></li>
                                <li><a>Dhoti</a></li>
                            </ul>
                        </div>


                        <div><h4 class="dropdown-item">Fashion Accessories<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">Wallets</a></li>
                                <li><a href="#">Wristwear</a></li>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Caps & Hats</a></li>
                                <li><a href="#">Phone Cases</a></li>
                            </ul>
                        </div>


                    </div>
                </li>
            </div>
            <div class="dropdown">
                <li class="nav-item">
                    <a href= # class="nav-link dropdown-toggle" data-toggle="dropdown">Kids</a>
                    <div class="dropdown-menu"  >


                        <div><h4 class="dropdown-item">Topwear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">T-shirts</a></li>
                                <li><a>shirts</a></li>
                                <li><a>Jackets</a></li>
                                <li><a>Sweatshirts</a></li>
                                <li><a >Sweaters</a></li>
                                <li><a>Winter Coats</a></li>
                                <li><a >Hoodies</a></li>
                            </ul>
                        </div>

                        <div><h4 class="dropdown-item">Bottomwear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">Jeans</a></li>
                                <li><a>shirts</a></li>
                                <li><a href="#">Casual Trousers</a></li>
                                <li><a>Formal Trousers</a></li>
                                <li><a>Shorts</a></li>
                                <li><a >Track Pants/Joggers</a></li>
                            </ul>
                        </div>


                        <div><h4 class="dropdown-item">Indian & Festivewear<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">kurta & Kurta Sets</a></li>
                                <li><a>Sherwanis</a></li>
                                <li><a href="#">Nehru Jackets</a></li>
                                <li><a>Dhoti</a></li>
                            </ul>
                        </div>


                        <div><h4 class="dropdown-item">Fashion Accessories<a class="link" href="#" class="ml-4"  >+</a></h4>
                            <ul style="list-style-type: none; margin-left: 0px; padding-left: 0px; display: none" class="slidemenu">
                                <li><a href="#">Wallets</a></li>
                                <li><a href="#">Wristwear</a></li>
                                <li><a href="#">Belts</a></li>
                                <li><a href="#">Caps & Hats</a></li>
                                <li><a href="#">Phone Cases</a></li>
                            </ul>
                        </div>


                    </div>
                </li>

            </div>
        </div>
        <form class="form-inline">
            <div class="input-group searchbardiv">
                <input class="form-control" id="searchbar"type="text" value="" name="searchbar" placeholder="Search">
                <span class="input-group-addon" id="search_img"><a href="#" class="">
                        <i class="fa fa-search"></i>
                </span>
            </div>
        </form>
        <div class="dropdown mt-4">
            <a href="#" class="ml-5 mb-0 mt-3 dropdown-toggle" data-toggle="dropdown"><!--<img  src="..\images\user.png">--><i class="fas fa-user" style="font-size: 2em"></i></a>
            <div class="dropdown-menu">
                <h4 class="dropdown-item">Your Account</h4>
                <p class="dropdown-item" style="color: #464a4c">Access account and manage orders</p>
                <div class="dropdown-item container" style="padding-left: 0px">
                    <div class="row justify-content-around">
                        <div class="col-5"><a href="signup.php" class="btn pt-3 btn-outline-info" style="width: 140px; background-color: none; height: 50px; margin-top: 2.5px" ><p >SIGN UP</p></a></div>
                        <div class="col-5"><a href="login.php" class="btn pt-3 btn-outline-info" style="width: 140px; background-color: none; height: 50px; margin-top: 2.5px" ><p>LOGIN</p></a></div>
                    </div>
                </div>



            </div>

        </div>
        <a href="#" class="ml-5 mt-4">
            <!--<img  src="..\images\bag.png">-->
            <i class="fas fa-shopping-bag" style="font-size: 2em"></i></i>
        </a>
    </div>
</div>

<div class="carousel" id="carousel_div" data-ride="carousel" data-wrap="true"><!-- style="width: 90%; height: 400px; background-color: yellow; margin: 25px 80px 10px 80px"-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-div active" data-slide-to="0"></li>
        <li data-target="#carousel-div" data-slide-to="1"></li>
        <li data-target="#carousel-div" data-slide-to="2"></li>


    </ol>
    <div class="carousel-inner">
        <?php
        $flag= true;
        $query = "select * from poster";
        $query.=" where po_type = 'carousel';";
        $result_set= mysqli_query($conn, $query);
        confirm_query($result_set);
        while ($row = mysqli_fetch_assoc($result_set))
        {
                /*echo $row['IMG_SRC'];*/
            ?>

            <?php
            if($flag) {
                echo '<div class="carousel-item active">';
                $flag=false;
            } else {
                echo '<div class="carousel-item ">';
            }?>
                <a href="update_form.php?po_id=<?php echo urlencode($row['PO_ID']);?>&po_type=<?php echo urlencode($row['po_type']);?>"><img src="<?php echo $row['IMG_SRC']; ?>" class="d-block w-100"></a>
            </div>

        <?php
        }
            ?>
       <!-- <div class="carousel-item active">
            <a href="login.php"><img src="../images/picture1.jpg" class="img-fluid"></a>
        </div>
        <div class="carousel-item" >
            <a href="login.php"><img src="../images/picture2.jpg" class="img-fluid"></a>
        </div>
        <div class="carousel-item">
            <a href="login.php"><img src="../images/picture3.jpg" class="img-fluid"></a>
        </div>-->
    </div>
    <a class="carousel-control-prev" href="#carousel_div" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span></a>
    <a class="carousel-control-next" href="#carousel_div" role="button" data-slide="next"><span class="carousel-control-next-icon"></span></a>


</div>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-lg-3">
            <a href="#"><img src="../images/post2.jpg" class="img-fluid"></a>
        </div>
        <div class="col-md-6 col-lg-3">
            <a href="#"><img src="../images/post3.jpg" class="img-fluid"></a>
        </div>
        <div class="col-md-6 col-lg-3">
            <a href="#"><img src="../images/post4.jpg" class="img-fluid"></a>
        </div>
        <div class="col-md-6 col-lg-3">
            <a href="#"><img src="../images/post5.jpg" class="img-fluid"></a>
        </div>
    </div>

</div>


<script src="../jquery/jquery.slim.min.js"></script>
<script src="../jquery/tether.min.js"></script>
<script src="../jquery/bootstrap.min.js"></script>
<script src="../jquery/jquery-3.3.1.min.js"></script>
<script src="../jquery/scripts.js"></script>

<?php if(isset($_SESSION['result']))?>
<script>
    alert("<?php echo $_SESSION['result']; ?>");
</script>
<?php $_SESSION['result']=null; ?>
<script>

</script>
</body>
</html>
