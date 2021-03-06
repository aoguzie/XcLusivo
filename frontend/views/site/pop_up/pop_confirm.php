<?php
/**
 * Created by PhpStorm.
 * User: Ievgen
 * Date: 30.05.2016
 * Time: 10:14
 */

use yii\helpers\Html;
?>

<div class="pop-up" id="pop-confirm">
    <div class="pop-title"><?=Yii::t('app', 'Booking request confirmation');?></div>
    <div class="book-name"><?= $model->nonadvertiser->username?></div>
    <div class="book-time">
      <p><?=Yii::t('app', 'Date: {date}', [ 'date' => '12.02.2016']);?></p>
      <p><?=Yii::t('app', 'Time: {time}', [ 'time' => '12:02 - 16:00']);?></p>
    </div>
    <div class="check">
        <input type="radio"/>
        <label><?=Yii::t('app', 'No show guarantee ({link})', ['link' => '<a href="#">'.Yii::t('app', 'Read more').'</a>']);?></label>
    </div>
    <div class="mess-submit">
        <a href="#" class="btn btn-gray" onclick="$.fancybox.close();"><?=Yii::t('app', 'Cancel');?></a>
        <?= Html::a(yii::t('app', 'Confirm'), ['advertiser/confirm-booking-request','id'=>$model->id], ['class'=>'btn']) ?>
    </div>
</div>
