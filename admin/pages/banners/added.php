<?php
$url = '/admin'.Url::getCurrentUrl(array('action', 'id'));
require_once('template/_header.php');
?>
<h1>Banners :: Add</h1>
<p>The new record has been added successfully.<br />
<a href="<?php echo $url; ?>">Go back to the list of products.</a></p>
<?php require_once('template/_footer.php'); ?>