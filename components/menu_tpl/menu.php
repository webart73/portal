<li>
    <a href="<?=\yii\helpers\Url::to(['category/view','id'=>$category['id']])?>"><?= $category['category_title']?></a>
    <?php if (isset($category['childs'])):?>
        <ul>
            <?=$this->getMenuHtml($category['childs'])?>
        </ul>
    <?php endif;?>
</li>

 