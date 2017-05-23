 <?php 
$cat = Url::getParam('category');
$pro = Url::getParam('product');


$objBanner = new Banner();
  $banners = $objBanner->getBanners();

  $advs = $objBanner->getAdvs();
  $max_key=1;
  foreach ($advs as $adv) {
    $max_key=max($adv['id'],$max_key);
  }
 require_once('_header.php'); 
?>


 <div class="slider-area" style="background: #f1f1f1">
   <!-- Slider -->
   <div class="container"> 
   <div class="">
   <div class="col-md-8" >
     <div class="block-slider block-slider4">
        <ul class="" id="bxslider-home4">
        <?php
        foreach($banners as $banner){
           echo "<li><img src=\"media/banner/".$banner['name']."\" alt=\"Slide\">"; ?>
              <div class="caption-group">
               
            </div>
        </li>
        <?php
        }
        ?>
   
</ul>
</div>
</div>
 <div class="col-md-4">
    <div class="them-ngoai" style="margin-left: 13px" >
       <ul class=" list-info">
       <?php 
        foreach($banners as $banner){
           echo "<li > <a href=\"#\" >";
           echo Helper::shortenString2(Helper::encodeHtml($banner['title']));
           echo "</a> <p>";
           echo Helper::shortenString2(Helper::encodeHtml($banner['description']));
           echo "</p></li>";
          ?>
           <?php
         }
         ?>
           
       </ul>
   </div>
</div>

</div> 
</div>
<!-- ./Slider -->
</div> <!-- End slider area -->


<div class="maincontainer">
<div class="container">
    <div class="">


    <div class="col-md-12">
       <?php
        foreach($advs as $adv){
          if($adv['id']==$max_key){
           echo "<a href=\"#\" ><img src=\"media/adv/".$adv['name']."\" alt=\"Slide\"> </a>";
              }
           ?>
        <?php
        }
        ?>
    </div> 
    </div>

<?php

    if(empty($cat)) {
  require_once("error.php");
} else {

  $objCatalogue = new Catalogue();
 
 // $category = $objCatalogue->getCategory($cat);
   
    $rows = $objCatalogue->getAllProducts($pro);
    
    // instantiate paging class
    $objPaging = new Paging($rows, 16);
    $rows = $objPaging->getRecords();
    
    require_once("_header.php");
?>

<?php
    if(!empty($rows)) {
      foreach($rows as $row) {
?>
<div class="col-sm-6 col-md-3">

  <div class="thumbnail">
   <?php
    
      $image = !empty($row['image']) ? 
      $objCatalogue->_path.$row['image'] :
      $objCatalogue->_path.'unavailable.png';
      
      $width = Helper::getImgSize($image, 0);
     // $width = $width > 120 ? 120 : $width;
      
    ?>
    <a href="/?page=catalogue-item&amp;category=&amp;id=<?php echo $row['id']; ?>"><img src="<?php echo $image; ?>" alt="<?php echo Helper::encodeHtml($row['name'], 1); ?>" width="<?php echo $width; ?>" /></a>
    <h4><a  href="/?page=catalogue-item&amp;category=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>"><?php echo Helper::encodeHtml($row['name'], 1); ?></a></h4>
    <h4><?php echo number_format($row['price'], 0) ;echo Catalogue::$_currency;  ?>
      
    <span class="sale-tag sale-tag-square"><!-- react-text: 93 -->-<!-- /react-text --><!-- react-text: 94 -->20<!-- /react-text --><!-- react-text: 95 -->%<!-- /react-text --></span>
    </h4>
    <span class="pre_price"> <?php echo number_format($row['pre_price'],0);echo Catalogue::$_currency;  ?> </span>
    <p><?php // echo Helper::shortenString(Helper::encodeHtml($row['description'])); ?></p>
    <p class="add_to_basket"><?php echo Basket::activeButton($row['id']); ?></p>
  </div>
  </div> 


<?php 
      }

     echo $objPaging->getPaging();

    
    }

     else 
     {

?> 

<p>There are no products in this category.</p>


<?php   
    }

    }
?>

</div>
</div>



  

<div class="listpresentation">
    <ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="#">Phụ Kiện Giá Rẻ</a></li>
  <li role="presentation"><a href="#"> Ốp lưng </a></li>
  <li role="presentation"><a href="#"> Tai Nghe </a></li>
  <li role="presentation"><a href="#"> Chuột </a></li>
  <li role="presentation"><a href="#"> Bàn phím </a></li>
  <li role="presentation"><a href="#"> Miếng dán </a></li>
  <li role="presentation"><a href="#"> Sạc </a></li>
  <li role="presentation"><a href="#"> Loa </a></li>
  <li role="presentation"><a href="#"> USB </a></li>
  <li role="presentation"><a href="#">  Pin dự phòng </a></li>
  <li role="presentation"><a href="#"> Phụ kiện khác </a></li>
</ul>
<br>
<div class="row">
<div class="col-md-2">
  <div class="thumbnail2">
      <img src="media/catalogue/product-thumb-2.jpg" alt="...">
      <div class="caption">
        <h4>Thumbnail label</h4>
        <p><a href="#"> 30.000 VND </a></p>
    </div>

</div>
</div>

<div class="col-md-2">
  <div class="thumbnail2">
      <img src="media/catalogue/product-thumb-2.jpg" alt="...">
      <div class="caption">
        <h4>Thumbnail label</h4>
        <p><a href="#"> 30.000 VND </a></p>
    </div>

</div>
</div>
<div class="col-md-2">
  <div class="thumbnail2">
      <img src="media/catalogue/product-thumb-2.jpg" alt="...">
      <div class="caption">
        <h4>Thumbnail label</h4>
        <p><a href="#"> 30.000 VND </a></p>
    </div>

</div>
</div>
<div class="col-md-2">
  <div class="thumbnail2">
      <img src="media/catalogue/product-thumb-2.jpg" alt="...">
      <div class="caption">
        <h4>Thumbnail label</h4>
        <p><a href="#"> 30.000 VND </a></p>
    </div>

</div>
</div>
<div class="col-md-2">
  <div class="thumbnail2">
      <img src="media/catalogue/product-thumb-2.jpg" alt="...">
      <div class="caption">
        <h4>Thumbnail label</h4>
        <p><a href="#"> 30.000 VND </a></p>
    </div>

</div>
</div>
<div class="col-md-2">
  <div class="thumbnail2">
      <img src="media/catalogue/product-thumb-2.jpg" alt="...">
      <div class="caption">
        <h4>Thumbnail label</h4>
        <p><a href="#"> 30.000 VND </a></p>
    </div>

</div>
</div>

</div>
</div>

<div class="product-widget-area">
    <div class="zigzag-bottom"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Bán chạy nhất</h2>
                    <a href="" class="wid-view-more">Xem tất cả</a>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Iphone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>12.000.000VND</ins> <del>13.550.000VND</del>
                        </div>                            
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>8.000.000VND</ins>
                        </div>                            
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">DELL VOSTRO 5560</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>14.000.000VND</ins> <del>16.250.000VND</del>
                        </div>                            
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Đã xem gần đây</h2>
                    <a href="#" class="wid-view-more">Xem tất cả</a>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Tivi Sony playstation microsoft</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>20.000.000vnd</ins> <del>24.250.000vnd</del>
                        </div>                            
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Iphone 6</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>12.000.000VND</ins> <del>13.550.000VND</del>
                        </div>                            
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-2.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>8.000.000vnd</ins> 
                        </div>                            
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="single-product-widget">
                    <h2 class="product-wid-title">Sản phẩm mới</h2>
                    <a href="#" class="wid-view-more">Xem tất cả</a>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-3.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">DELL VOSTRO 5560</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                            <ins>14.000.000VND</ins> <del>16.250.000VND</del>
                        </div>                            
                    </div>
                    <div class="single-wid-product">
                        <a href="single-product.html"><img src="media/catalogue/product-thumb-4.jpg" alt="" class="product-thumb"></a>
                        <h2><a href="single-product.html">Samsung gallaxy note 4</a></h2>
                        <div class="product-wid-rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                        <div class="product-wid-price">
                          <ins>20.000.000vnd</ins> <del>24.250.000vnd</del>
                      </div>                            
                  </div>
                  <div class="single-wid-product">
                    <a href="single-product.html"><img src="media/catalogue/product-thumb-1.jpg" alt="" class="product-thumb"></a>
                    <h2><a href="single-product.html">Iphone</a></h2>
                    <div class="product-wid-rating">
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <div class="product-wid-price">
                        <ins>12.000.000vnd</ins> <del>13.550.000vnd</del>
                    </div>                            
                </div>
            </div>
        </div>
    </div>
</div>
</div> <!-- End product widget area -->



    
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
    <script type="text/javascript" src="js/script.slider.js"></script>

<?php    require_once("_footer.php"); 
?>