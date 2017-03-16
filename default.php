<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');

$c = Page::getCurrentPage();

$background_image = $c->getAttribute('background_image');
if($background_image){
	$fv = $background_image->getApprovedVersion();
	$background_image_url = $fv->getURL();
} else {
	$background_image_url = '';
}

$this->inc('elements/navigation.php');
?>

<div class="background-image" style="background-image: url(<?php echo $background_image_url; ?>);">
	<div class="header-logo">
		<p>
			<?php
			$st = Stack::getByName('Logo');
			$st->display();
			?>
		</p>
	</div>
	<div class="inside-h1">
		<div class="inside-content">
			<h1><?php echo $c->getCollectionName(); ?></h1>
		</div>
	</div>
</div>

<?php
$a = new Area('Main');
$a->setCustomTemplate('content','inside_content.php');
$a->display($c);
?>

<div class="inside-content difference-awards">
	<div class="left-inside-content">
		<?php
		$a = new Area('Main Left');
		$a->display($c);
		?>
	</div>
	<div class="right-inside-content">
		<?php
		$a = new Area('Main Right');
		$a->display($c);
		?>
	</div>
</div>

<?php
$a = new Area('Main Bottom');
$a->setCustomTemplate('content','inside_content.php');
$a->display($c);
?>

<?php $this->inc('elements/footer.php'); ?>