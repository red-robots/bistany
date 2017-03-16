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

<!--<a href="<?php //echo $parentPageURL; ?>"> -->
<a href="javascript:history.go(-1)">
    <div class="back-arrow">&#10094;<span class="back-text">BACK</span></div>
</a>

<div class="header-logo">
    <p>
        <?php
        $st = Stack::getByName('Logo');
        $st->display();
        ?>
    </p>
</div>

<!-- HUT - find plugin to run this carousel - should look close as possible -->

<div class="inside-content slider">
    <h2 class="show-examples"><?php echo $c->getCollectionName(); ?></h2>

    <?php
    $a = new Area('Main');
    $a->setCustomTemplate('content','inside_content.php');
    $a->display($c);
    ?>
</div>

<?php $this->inc('elements/footer.php'); ?>
