<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');

$c = Page::getCurrentPage();

$this->inc('elements/navigation.php');
?>

<div class="our-work">
  <a href="/our-work/kitchens">
    <div class="our-work-kitchen">
      <h3>Kitchens</h3>
    </div>
  </a>
  <a href="/our-work/baths">
    <div class="our-work-bath">
      <h3>Baths</h3>
    </div>
  </a>
  <a href="/our-work/other-spaces">
    <div class="our-work-other">
      <h3>Other Spaces</h3>
    </div>
  </a>
    <div class="header-logo">
        <p>
            <?php
            $st = Stack::getByName('Logo');
            $st->display();
            ?>
        </p>
    </div>
    <div class="inside-h1">
        <div class="inside-content ">
            <h1><?php echo $c->getCollectionName(); ?></h1>
        </div>
    </div>
</div>

<div class="inside-content">
    <div class="intro-text">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
    </div>
</div>

<?php $this->inc('elements/footer.php'); ?>
