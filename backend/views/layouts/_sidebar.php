<?php

?>

<aside class="shadow">
    <?php echo \yii\bootstrap4\Nav::widget([
    'options' => [
        'class' => 'd-flex flex-column nav-pills'
    ],
    'encodeLabels' => false,
    'items' => [
        [
            'label' => '<i class="fas fa-home"></i> Dashboard',
            'url' => ['/site/index']
        ],
        [
            'label' => '<i class="fas fa-history"></i> Videos',
            'url' => ['/video/index']
        ],
//        [
//            'label' => 'Comments',
//            'url' => ['/comment/index']
//        ]
    ]
]) ?>
</aside>