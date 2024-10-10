<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var app\models\LoginForm $model */

use yii\bootstrap5\ActiveForm;
use yii\bootstrap5\Html;

$this->title = 'Login';
?>
<div class="sign-up" style="max-width: 400px; margin: 80px auto; text-align: center;">

    <!-- DEV Icon Logo -->
    <div class="dev-logo" style="margin-bottom: 20px;">
    <a href="http://localhost/new/">
        <img src="http://localhost/basic/web/images/logo-icon.png" alt="DEV Community Logo" style="width: 60px; height: 45px; border-radius: 5px;">
    </a>
</div>


    <h2>Join the DEV Community</h2>
    <p>DEV Community is a community of 2,133,417 amazing developers</p>

    <div class="social-buttons">
    <?= Html::a('<i class="bi bi-apple me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Continue with Apple</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Continue with Apple']) ?>
    
    <?= Html::a('<i class="bi bi-facebook me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Continue with Facebook</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Continue with Facebook']) ?>
    
    <?= Html::a('<i class="bi bi-github me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Continue with GitHub</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Continue with GitHub']) ?>
    
    <?= Html::a('<i class="bi bi-google me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Continue with Google</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Continue with Google']) ?>
    
    <?= Html::a('<i class="bi bi-twitter me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Continue with Twitter (X)</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Continue with Twitter (X)']) ?>
</div>


    <div class="divider" style="margin: 20px 0;">
        <span style="display: inline-block; background: #fff; padding: 0 10px; position: relative; top: -10px;">OR</span>
        <hr style="border-top: 1px solid #ccc; margin: 0;">
    </div>

    <?php $form = ActiveForm::begin([
        'id' => 'login-form',
        'options' => ['class' => 'form-vertical'],
    ]); ?>

    <?= $form->field($model, 'username')->textInput([
        'placeholder' => 'Username',
        'class' => 'form-control mb-3',
    ])->label(false) ?>

    <?= $form->field($model, 'password')->passwordInput([
        'placeholder' => 'Password',
        'class' => 'form-control mb-3',
    ])->label(false) ?>

    <div class="d-flex justify-content-between align-items-center mb-3">
        <?= $form->field($model, 'rememberMe')->checkbox(['class' => 'custom-control-input', 'template' => "{input} {label}", 'label' => 'Remember me']) ?>
        <a href="/site/request-password-reset" style="font-size: 14px;">Forgot password?</a>
    </div>

    <div class="form-group">
    <?= Html::submitButton('Log in', [
        'class' => 'btn btn-primary btn-block', 
        'name' => 'login-button',
        'style' => 'text-align: center;' // inline style to center text
    ]) ?>
</div>


    <?php ActiveForm::end(); ?>

    <p style="font-size: 12px; margin-top: 20px;">
        By signing in, you are agreeing to our <a href="#">privacy policy</a>, <a href="#">terms of use</a>, and <a href="#">code of conduct</a>.
    </p>

    <?php if (Yii::$app->user->isGuest): ?>
        <p style="margin-top: 30px;">
            New to DEV Community? <?= Html::a('Create account.', ['/site/sign-up']) ?>
        </p>
    <?php endif; ?>

</div>


<style>
    .btn-block {
        display: block;
        width: 100%;
        margin: 10px 0;
        padding: 10px;
        font-size: 16px;
        text-align: left;
    }

    .btn-default {
        background-color: #f5f5f5;
        border: 1px solid #ccc;
        color: #333;
    }

    .btn-default i {
        margin-right: 10px;
    }

    .social-buttons {
        margin-bottom: 20px;
    }

    .dev-logo img {
        width: 60px;
    }

    .form-control {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border-radius: 4px;
        border: 1px solid #ccc;
    }

    .divider {
        margin: 20px 0;
    }

    .divider hr {
        margin-top: 0;
    }
</style>
