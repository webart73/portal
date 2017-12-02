<?php
/* @var $this yii\web\View */
//debug($tree);
?>
<h1>regions/index</h1>

<?php
function getItem($tree)
{
    foreach ($tree as $item) {
        echo $item['regionTitle'] . '<br>';
        if (isset($item['childs'])) {
            getItem($item['childs']);
        }
    }
}

getItem($tree);


//[1] => Array
//(
//    [id] => 1
//            [parentId] => 0
//            [regionTitle] => Россия
//[childs] => Array
//(
//    [11] => Array
//    (
//        [id] => 11
//                            [parentId] => 1
//                            [regionTitle] => Адыгея
//[childs] => Array
//(
//    [12] => Array
//    (
//        [id] => 12
//                                            [parentId] => 11
//                                            [regionTitle] => Майкоп
//                                        )

?>

<?php //foreach ($tree as $item) :?>
<!--    --><? //= $item['regionTitle']?>
<?php //endforeach;?>

