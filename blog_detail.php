<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');

$nh = Loader::helper('navigation');

$c = Page::getCurrentPage();
$parentPageID = $c->getCollectionParentID();
$parentPage = Page::getByID($parentPageID);
$parentPageURL = $nh->getCollectionURL($parentPage);

$this->inc('elements/navigation.php');
?>

<a href="javascript:history.go(-1)"><div class="back-arrow">&#10094;<span class="back-text">BACK</span></div>

<div class="inside-content">
    <h1><?php echo $c->getCollectionName(); ?></h1>
    <div class="intro-text">
        <?php
        $a = new Area('Blog Intro');
        $a->display($c);
        ?>
    </div>

    <?php
    $a = new Area('Main');
    $a->display($c);
    ?>
</div>

<?php $this->inc('elements/footer.php'); ?>
