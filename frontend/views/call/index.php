<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Call */
/* @var $form ActiveForm */
?>
<div class="Call">
    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'client_id') ?>
        <?= $form->field($model, 'manager_id') ?>
        <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'start_time') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
</div><!-- Call -->
