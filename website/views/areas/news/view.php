<?php

$lifetime = 99999;
$cacheKey = "list_article";
if(!$datanews = \Pimcore\Cache::load($cacheKey)) {
    $data = new \Pimcore\Model\Object\Newsarticle\Listing();
    $data->load();
    $datanews = $data->getObjects();
    \Pimcore\Cache::save(
            $datanews,
            $cacheKey,
            ["article"],
            $lifetime);
}
?>
<div class="container">
  <div class="">
  <?php if($datanews) {
  foreach ($datanews as $data) {
    if($data instanceof \Pimcore\Model\Object\Newsarticle) { ?>
    <div class="row">
      <div><?php echo $data->getNewsauthor(); ?></div>
    </div>
    <div class="row">
      <h3><?php echo $data->getNewstitle(); ?></h3>
    </div>
    <div class="row">
      <p><?php echo $data->getNewscont(); ?></p>
    </div>
  <?php } } } ?>
</div>
</div>
