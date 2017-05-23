<?php
$cat = Url::getParam('category');

if(empty($cat)) {
	require_once("error.php");
} else {

	$objCatalogue = new Catalogue();
	$category = $objCatalogue->getCategory($cat);
	
	if(empty($category)) {
		require_once("error.php");
	} else {
	 
		$rows = $objCatalogue->getProducts($cat);
		
		// instantiate paging class
		$objPaging = new Paging($rows, 16);
		$rows = $objPaging->getRecords();
		
		require_once("_header.php");
?>
<h1> <?php echo $category['name']; ?></h1>
<div class="container">
	<div class="row">
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
		//	$width = $width > 120 ? 120 : $width;
			
		?>
		<a href="/?page=catalogue-item&amp;category=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>"><img src="<?php echo $image; ?>" alt="<?php echo Helper::encodeHtml($row['name'], 1); ?>" width="<?php echo $width; ?>" /></a>
		<h4><a href="/?page=catalogue-item&amp;category=<?php echo $category['id']; ?>&amp;id=<?php echo $row['id']; ?>"><?php echo Helper::encodeHtml($row['name'], 1); ?></a></h4>
		<h4>Price: <?php echo Catalogue::$_currency; echo number_format($row['price'], 2); ?></h4>
		<p><?php //echo Helper::shortenString(Helper::encodeHtml($row['description'])); ?></p>
		<p ><?php echo Basket::activeButton($row['id']); ?></p>
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
		
?>

</div>
</div>

<?php		require_once("_footer.php");
	
	}
}
?>