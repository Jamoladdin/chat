<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$this->title = 'Login';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>Please fill out the following fields to login:</p>
    <div class="row">
        <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
        <div class="form-group">
            <?= Html::submitButton('Login') ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>
<style>
    .site-login{
        margin: 100px auto;
        width: 340px;
        background-color: #f7f7f7;
        padding: 20px 30px;
        border-radius: 10px;
        font-size: 16px;
    }
    h1{
        margin-bottom: 0;
        text-align: center;
    }
    p{
        color: #a1a1a1;
    }
    .row{
        margin: 30px 0;
    }
    input{
        float: right;
    }
    button{
        float: right;
        margin-top: 20px;
        color: #fff;
        background-color: #449d44;
        border-color: #398439;
        border: 1px solid transparent;
        padding: 6px 12px;
        font-size: 14px;
        border-radius: 4px;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
</style>