<?php

/* @var $this yii\web\View */
/* @var $latestVideo Video */
/* @var $numberOfViews integer */
/* @var $numberOfSubscribers integer */
/* @var $subscribers Subscriber[] */


use common\models\Subscriber;
use common\models\Video;
use yii\helpers\Url;

$this->title = 'FreeTube';
?>

<div class="site-index d-flex">
    <div class="card m-3" style="width: 18rem;">
        <?php if ($latestVideo): ?>
        <div class="embed-responsive embed-responsive-16by9 mb-3">
            <video class="embed-responsive-item"
                   poster="<?php echo $latestVideo->getThumbnailLink() ?>"
                   src="<?php echo $latestVideo->getVideoLink() ?>"></video>
        </div>
        <div class="card-body">
            <h5 class="card-title"> <?php echo $latestVideo->title ?></h5>
            <p class="card-text">
                Likes: <?php echo $latestVideo->getLikes()->count()?><br>
                Views: <?php echo $latestVideo->getViews()->count()?><br>
            </p>
            <a href="<?php echo Url::to(['/video/update', 'id' => $latestVideo->video_id]) ?>" class="btn btn-primary">Edit</a>
        </div>
        <?php else: ?>
            <div class="card-body">
                You Don't Have Uploaded Videos Yet.
            </div>
        <?php endif; ?>
    </div>

    <div class="card m-3" style="width: 14rem;">
        <div class="card-body">
            <h5 class="card-title"> Total Views: </h5>
            <p class="card-text" style="font-size: 82px">
                <?php echo $numberOfViews ?>
            </p>
        </div>
    </div>

    <div class="card m-3" style="width: 14rem;">
        <div class="card-body">
            <h5 class="card-title"> Total Subscribers: </h5>
            <p class="card-text" style="font-size: 82px">
                <?php echo $numberOfSubscribers ?>
            </p>
        </div>
    </div>

    <div class="card m-3" style="width: 14rem;">
        <div class="card-body">
            <h5 class="card-title"> Latest Subscribers: </h5>
            <?php foreach ($subscribers as $latest3subscriber): ?>
                <div>
                    <?php echo $latest3subscriber->user->username ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
