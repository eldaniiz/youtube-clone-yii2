<?php

/** @var $model \common\models\Video */
/** @var $similarVideos \common\models\Video[] */

use yii\helpers\Html;

?>

<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9">
            <video class="embed-responsive-item"
                   poster="<?php echo $model->getThumbnailLink() ?>"
                   src="<?php echo $model->getVideoLink() ?>"
                   controls></video>
        </div>
        <h5 class="mt-2 font-weight-bold"><?php echo $model->title ?></h5>
        <div class="d-flex">
            <div> <?php echo $model -> getViews()->count() ?> Views •
                <?php echo Yii::$app->formatter->asDate($model->created_at) ?> </div>
        </div>

        <div class="float-right" style="margin-top: -50px;">
            <?php \yii\widgets\Pjax::begin() ?>
                <?php echo $this -> render('_buttons', [
                        'model' => $model,

            ]) ?>
            <?php \yii\widgets\Pjax::end() ?>
        </div>
        <div>
            <p> <?php echo \common\helpers\Html::channelLink($model->createdBy) ?>
            </p>
            <p><?php echo Html::encode($model->description)?> </p>
        </div>
    </div>
    <div class="col-sm-4">
        <?php foreach ($similarVideos as $similarVideo): ?>

            <div class="media mb-3">
                <a href="<?php echo \yii\helpers\Url::to(['/video/view', 'id' => $similarVideo->video_id]) ?>">
                    <div class="embed-responsive embed-responsive-16by9 mr-1"
                         style="width: 200px">
                        <video class="embed-responsive-item"
                               poster="<?php echo $similarVideo->getThumbnailLink() ?>"
                               src="<?php echo $similarVideo->getVideoLink() ?>"></video>
                    </div>
                </a>
                <div class="media-body">
                    <h5 class="m-0" style="width: 230px"><?php echo $similarVideo->title ?></h5>
                    <div class="text-muted">
                        <p class="m-0">
                            <?php echo \common\helpers\Html::channelLink($similarVideo->createdBy) ?>
                        </p>

                        <small>
                            <?php echo $similarVideo->getViews()->count() ?> views •
                            <?php echo Yii::$app->formatter->asRelativeTime($similarVideo->created_at) ?>
                        </small>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>