<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');

$c = Page::getCurrentPage();

$this->inc('elements/navigation.php');
?>

<div class="cabinetry-bg">
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
Loader::element('system_errors', array('error' => $error));
print $innerContent;
?>

<?php $this->inc('elements/footer.php'); ?>