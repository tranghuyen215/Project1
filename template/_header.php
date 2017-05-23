<?php
$objCatalogue = new Catalogue();
$cats = $objCatalogue->getCategories();

$objBusiness = new Business();
$business = $objBusiness->getBusiness();

?>

<!DOCTYPE html>
<html>
<head>
<meta name="description" content="Ecommerce website project" />
<meta name="keywords" content="Ecommerce website project" />
<meta http-equiv="imagetoolbar" content="no" />
<link href="css/core1.css" rel="stylesheet" type="text/css" />
   <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

     <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/responsive.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <title> Dophin Moblie</title>
  <link rel="stylesheet" type="text/css" href="css/core.css">
  <script src="./js/login1.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  
</head>
<body>
<header class="header">
  <div class="header_top">
    <div class="container">
      <div class="row">
        <div id="discount">
          <a class="big-discount" href="#" title="Discount"> <span class="glyphicon glyphicon-play"> </span> Giam gia shock tren Dodo App</a>
        </div>
        <div id="personal_discount">
          <a class="personal-discount" href="#" title="Giam gia cho chu the"> <span class="glyphicon glyphicon-gift"></span> Giam 20% cho chu the DVC </a>
        </div>
        <div id="promote">
          <a class="hot-discount" href="#" title="Khuyen Mai Hot"> <span style="color: #fdd835" class="glyphicon glyphicon-fire"></span> Khuyen Mai Hot </a>
        </div>
      </div>
    </div>
  </div>

  <div class="header_bottom" style="top: 0px; left: 0px; right: 0px; position: relative; z-index: 1030;">
    <div class="">
      <div class="">
        <div id="menu">
            <ul>
                        <li id="home"> <a href="/" ><i class="fa fa-home"></i> </a></li>
              <?php
              foreach($cats as $cat){
                        
                        echo "<li id=\" home \" ><a href=\"/?page=catalogue&amp;category=".$cat['id']."\"";
                        echo Helper::getActive(array('category' => $cat['id']));
                        echo "> <i class=\" ".$cat['icon']." \" > </i>";
                       
                        echo Helper::encodeHtml($cat['name']);
                        echo "</a></li>";
                       
              
                 }       

           ?>
       
            </ul> 
        </div>
        <div id="searchbox">
          <form id="box" action="" >
                         <input id="search" type="text" placeholder="Search here ">
                         <input id="submit" type="submit" value="Tim">
                     </form>
          
        </div>

        <div class="cart_outside" >
        <?php
          echo '<a href="/?page=orders"> <img class="fa fa-shopping-cart" src="css/giohang.png"> </img></a>';
          ?>
        </div>
       
        </div> 
      </div>
    </div>

</header>






