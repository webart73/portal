<h1>Banner Main</h1>

<div>
    <?php if (!empty($bannerMain)) : ?>
        <?php foreach ($bannerMain as $item) : ?>
            <div class="container">
                <?php echo $item->id . '' . $item->factoryTitle; ?>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>
