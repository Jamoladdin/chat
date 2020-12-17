<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\AuthItem;
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\AuthAssignment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auth-assignment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'item_name')->widget(Select2::classname(), [
        'data' => ArrayHelper::map(AuthItem::find()->where(['<>', 'name', 'admin',])->all(), 'name', 'name'),
        'options' => ['placeholder' => 'Select a role ...'],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
