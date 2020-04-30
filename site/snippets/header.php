<div id="header">
    <div class="header-logo">
        <?php if($image = $site->image_logo()->toFile()): ?>
            <img src="<?= $image->url() ?>" width="167" height="100" alt="Site logo">
        <?php endif ?>
    </div>
    <div class="header-nav">
        <?php 
        foreach ($site->children()->listed() as $item): ?>
            <div class="button"><?= $item->title()->link() ?> </div>
        <?php endforeach ?>
    </div>
</div>