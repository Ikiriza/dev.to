<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\User $model */
/** @var ActiveForm $form */
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
    <?= Html::a('<i class="bi bi-apple me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Sign up with Apple</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Sign up with Apple']) ?>
    
    <?= Html::a('<i class="bi bi-facebook me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Sign up with Facebook</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Sign up with Facebook']) ?>
    
    <?= Html::a('<i class="bi bi-github me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Sign up with GitHub</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Sign up with GitHub']) ?>
    
    <?= Html::a('<i class="bi bi-google me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Sign up with Google</span>', ['site/auth', 'authclient' => 'google'], ['class' => 'btn btn-default btn-block', 'aria-label' => 'Sign up with Google']) ?>
    
    <?= Html::a('<i class="bi bi-twitter me-2" style="float: left;"></i> <span class="btn-text" style="display: inline-block; text-align: center; width: calc(100% - 30px);">Sign up with Twitter (X)</span>', '#', ['class' => 'btn btn-default btn-block', 'aria-label' => 'Sign up with Twitter (X)']) ?>
</div>




    <div class="divider" style="margin: 20px 0;">
        <span style="display: inline-block; background: #fff; padding: 0 10px; position: relative; top: -10px;">OR</span>
        <hr style="border-top: 1px solid #ccc; margin: 0;">
    </div>


    <!-- Signup Form -->
    <?php $form = ActiveForm::begin([
        'id' => 'signup-form',
        'options' => ['class' => 'form-vertical'],
    ]); ?>

     <!-- Profile Picture Upload Field -->
     <div class="form-group">
        <?= $form->field($model, 'profile_picture')->fileInput([
            'class' => 'form-control mb-3',
        ])->label('Profile Picture (optional)') ?>
    </div>

    <?= $form->field($model, 'first_name')->textInput([
        'placeholder' => 'First name',
        'class' => 'form-control mb-3',
    ])->label(false) ?>

    <?= $form->field($model, 'last_name')->textInput([
        'placeholder' => 'Last name',
        'class' => 'form-control mb-3',
    ])->label(false) ?>

    <?= $form->field($model, 'email')->textInput([
        'placeholder' => 'Email',
        'class' => 'form-control mb-3',
    ])->label(false) ?>

    <?= $form->field($model, 'username')->textInput([
        'placeholder' => 'Username',
        'class' => 'form-control mb-3',
    ])->label(false) ?>

    <?= $form->field($model, 'password')->passwordInput([
        'placeholder' => 'Password',
        'class' => 'form-control mb-3',
    ])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Sign up', ['class' => 'btn btn-primary', 'name' => 'signup-button', 'style' => 'width: 150px;']) ?>
    </div>

    <?php ActiveForm::end(); ?>
    <!-- End of Signup Form -->

    <p style="margin-top: 20px;">
        By signing up, you agree to our <a href="#">privacy policy</a>, <a href="#">terms of use</a>, and <a href="#">code of conduct</a>.
    </p>

    <p>Already have an account? <a href="<?= \yii\helpers\Url::to(['/site/login']) ?>">Log in</a>.</p>

</div>

<!-- Add necessary CSS for styling -->
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
    
    .btn-default {
    display: flex; /* Use flexbox for alignment */
    align-items: center; /* Center the icon and text vertically */
    justify-content: flex-start; /* Align items to the start (left) */

    }


    .btn-default:hover {
        background-color: #e0e0e0;
        border-color: #999;
        color: #000;
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

    .form-control:focus {
        border-color: #007bff; /* Blue border on focus */
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5); /* Subtle shadow */
    }

    .divider {
        margin: 20px 0;
    }

    .divider hr {
        margin-top: 0;
    }
</style>
