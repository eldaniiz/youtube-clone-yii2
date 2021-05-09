<?php
/** @var $dataProvider ActiveDataProvider */

use yii\data\ActiveDataProvider;
use yii\widgets\ListView;

?>


<?php echo ListView::widget([
    'dataProvider' => $dataProvider,
    'itemView' => '_video_item',
    'pager' => [
        'class' => \yii\bootstrap4\LinkPager::class,
    ],
    'layout' => '<div class="d-flex flex-wrap">{items}</div>{pager}',
    'itemOptions' => [
        'tag' => false
    ]
]);
?>