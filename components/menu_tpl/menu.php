<li>
    <?php if (!isset($category['childs'])): ?><a href="<?= \yii\helpers\Url::to(['categories/view', 'id' => $category['id']]) ?>">
        <?php endif; ?><?= $category['categoryTitle'] ?><?php if (!isset($category['childs'])): ?></a><?php endif; ?>
    <?php if (isset($category['childs'])): ?>
        <ul>
            <?= $this->getMenuHtml($category['childs']) ?>
        </ul>
    <?php endif; ?>
</li>

 