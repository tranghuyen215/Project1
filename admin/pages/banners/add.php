<?php 
$objForm = new Form();
$objValid = new Validation($objForm);

$objBanner = new Catalogue();
$banners = $objBanner->getBanner(1);

if ($objForm->isPost('name')) {
	
	$objValid->_expected = array(
		'name',
		'title',
		'description',
	);
	
	$objValid->_required = array(
		'name',
		'title',
		'description',
	);
	
	if ($objValid->isValid()) {
		
		if ($objBanner->addBanner($objValid->_post)) {
		
			$objUpload = new Upload();
			
			if ($objUpload->upload(BANNER_PATH)) {
				$objBanner->updateBanner(array('name' => $objUpload->_names[0]), $objBanner->_id);
				Helper::redirect('/admin'.Url::getCurrentUrl(array('action', 'id')).'&action=added');
			} else {
				Helper::redirect('/admin'.Url::getCurrentUrl(array('action', 'id')).'&action=added-no-upload');
			}
			
		} else {
			Helper::redirect('/admin'.Url::getCurrentUrl(array('action', 'id')).'&action=added-failed');
		}
		
	}
	
}

require_once('template/_header.php'); 
?>

<h1>Banners :: Add</h1>

<form action="" method="post" enctype="multipart/form-data">
	
	<table cellpadding="0" cellspacing="0" border="0" class="tbl_insert">
		
		
		<tr>
			<th><label for="title">Title: *</label></th>
			<td>
				<?php echo $objValid->validate('title'); ?>
				<input type="text" name="title" id="title" 
					value="<?php echo $objForm->stickyText('title'); ?>" class="fld" />
			</td>
		</tr>
		
		<tr>
			<th><label for="description">Description: *</label></th>
			<td>
				<?php echo $objValid->validate('description'); ?>
				<textarea name="description" id="description" cols="" rows=""
					class="tar_fixed"><?php echo $objForm->stickyText('description'); ?></textarea>
			</td>
		</tr>
		
		
		
		<tr>
			<th><label for="name">Image:</label></th>
			<td>
				<?php echo $objValid->validate('name'); ?>
				<input type="file" name="image" id="image" size="30" onchange="loadImage(event)"/>
				<img src="" width="100" id="preview" alt="">
<script>
  var loadImage = function(event) {
    var preview = document.getElementById('preview');
	preview.src = URL.createObjectURL(event.target.files[0]);
  };
</script>

			</td>
		</tr>
		

		
		<tr>
			<th>&nbsp;</th>
			<td>
				<label for="btn" class="sbm sbm_blue fl_l">
					<input type="submit" id="btn" class="btn" value="Add" />
				</label>
			</td>
		</tr>
		
		
	</table>
	
</form>

<?php require_once('template/_footer.php'); ?>



