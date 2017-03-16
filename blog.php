<?php
defined('C5_EXECUTE') or die("Access Denied.");
$this->inc('elements/header.php');

$c = Page::getCurrentPage();

$blog_image_one = $c->getAttribute('blog_image_one');
if($blog_image_one){
    $fv = $blog_image_one->getApprovedVersion();
    $blog_image_one_url = $fv->getURL();
} else {
    $blog_image_one_url = '';
}

$blog_image_two = $c->getAttribute('blog_image_two');
if($blog_image_two){
    $fv = $blog_image_two->getApprovedVersion();
    $blog_image_two_url = $fv->getURL();
} else {
    $blog_image_two_url = '';
}

$blog_image_three = $c->getAttribute('blog_image_three');
if($blog_image_three){
    $fv = $blog_image_three->getApprovedVersion();
    $blog_image_three_url = $fv->getURL();
} else {
    $blog_image_three_url = '';
}

$awardsPressPage = Page::getByPath("/awards-features/awards-press");

$this->inc('elements/navigation.php');
?>

  
<div class="header-logo">
    <p>
        <?php
        $st = Stack::getByName('Logo');
        $st->display();
        ?>
    </p>
</div>

<div class="inside-content no-hero-page awards-features">
    <h1><?php echo $c->getCollectionName(); ?></h1>
    <div class="intro-text">
        <?php
        $a = new Area('Main');
        $a->display($c);
        ?>
    </div>
</div>

<div class="view-blog">
    <div class="blog blog-pane">
        <a href="/awards-features/before-after">
            <h2>Before & After</h2>
            <div class="blog-pane-img other-blog" style="background-image: url(<?php echo $blog_image_one_url; ?>);"></div>
        </a>
    </div>
</div>

<div class="view-blog view-blog-mid">
    <div class="blog blog-pane blog-middle">
        <a href="/awards-features/awards-press">
            <h2>Awards & Press</h2>
            <div class="blog-pane-img showroom-blog" style="background-image: url(<?php echo $blog_image_two_url; ?>);"></div>
        </a>
    </div>
</div>

<div class="view-blog">
    <div class="blog blog-pane">
        <a href="/awards-features/whats-new">
            <h2>What's New</h2>
            <div class="blog-pane-img kitchen-blog" style="background-image: url(<?php echo $blog_image_three_url; ?>);"></div>
        </a>
    </div>
</div>

<?php $this->inc('elements/footer.php'); ?>