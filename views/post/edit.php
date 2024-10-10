<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use yii\web\ForbiddenHttpException;

/* @var $this yii\web\View */
/* @var $model app\models\Post */

$this->title = 'Edit Post'; // Title for the edit page

// Check if the user is the author of the post
if ($model->author_id !== Yii::$app->user->id) {
    throw new ForbiddenHttpException('You are not allowed to edit this post.');
}
?>

<div class="post-edit-container">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="post-form">
        <?php $form = ActiveForm::begin(['options' => ['class' => 'dev-post-form']]); ?>

        <!-- Add Cover Image (optional) -->
        <div class="add-cover-image">
            <button type="button" class="btn btn-outline-secondary">Add a cover image</button>
        </div>

        <!-- Post Title Input -->
        <?= $form->field($model, 'title')->textInput([
            'maxlength' => true, 
            'class' => 'dev-post-title-input', 
            'placeholder' => 'Post title here...'
        ])->label(false) ?>

        <!-- Tags Input -->
        <?= $form->field($model, 'tags')->textInput([
            'maxlength' => true, 
            'class' => 'dev-tags-input', 
            'placeholder' => 'Add up to 4 tags... (comma-separated)'
        ])->label(false) ?>

        <!-- Rich Text Editor for Post Content -->
        <div class="form-group">
            <label for="post-content-editor">Write your post content here...</label>
            <div id="post-content-editor" style="height: 300px;"></div>
        </div>
        <?= $form->field($model, 'content')->hiddenInput(['id' => 'post-content-hidden'])->label(false) ?>

        <!-- Status Selection -->
        <?= $form->field($model, 'status')->dropDownList([
            'draft' => 'Draft',
            'published' => 'Published',
        ], ['prompt' => 'Select Status', 'class' => 'dev-status-dropdown'])->label(false) ?>

        <!-- Image URL Input (Optional) -->
        <?= $form->field($model, 'image_url')->textInput([
            'maxlength' => true, 
            'class' => 'dev-image-url-input', 
            'placeholder' => 'Image URL (Optional)'
        ])->label(false) ?>

        <!-- Hidden Field for Author ID -->
        <?= $form->field($model, 'author_id')->hiddenInput(['value' => Yii::$app->user->id])->label(false) ?>

        <!-- Submit and Cancel Buttons -->
        <div class="form-group d-flex justify-content-between">
            <div>
                <?= Html::submitButton('Update', ['class' => 'btn btn-primary btn-sm me-2']) ?>
            </div>
            <div>
                <?= Html::a('Cancel', ['post/index'], ['class' => 'btn btn-secondary btn-sm']) ?>
            </div>
        </div>

        <?php ActiveForm::end(); ?>
    </div>
</div>

<!-- Include Quill.js for Rich Text Editing -->
<link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>

<!-- Initialize the rich text editor and sync content -->
<script>
    var quill = new Quill('#post-content-editor', {
        theme: 'snow',
        placeholder: 'Write your post content here...',
        modules: {
            toolbar: [
                [{ 'header': [1, 2, false] }],
                ['bold', 'italic', 'underline'],
                ['link', 'blockquote', 'code-block', 'image'],
                [{ 'list': 'ordered'}, { 'list': 'bullet' }],
                [{ 'align': [] }],
                ['clean']
            ]
        }
    });

    // Sync the Quill editor content with the hidden input
    var form = document.querySelector('.dev-post-form');
    form.onsubmit = function() {
        var postContent = document.querySelector('#post-content-hidden');
        postContent.value = quill.root.innerHTML;  // Set the hidden input to the HTML content of the editor
    };
</script>

<!-- Add your custom CSS to style the form like DEV.to -->
<style>
    .post-edit-container {
        max-width: 800px;
        margin: 0 auto;
    }

    .dev-post-form {
        background-color: #ffffff;
        padding: 20px;
        border: 1px solid #eaeaea;
        border-radius: 5px;
    }

    .dev-post-title-input {
        font-size: 24px;
        font-weight: bold;
        border: none;
        width: 100%;
        outline: none;
        margin-bottom: 15px;
    }

    .dev-tags-input {
        font-size: 16px;
        border: none;
        margin-bottom: 20px;
        width: 100%;
    }

    .dev-status-dropdown {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #post-content-editor {
        border: 1px solid #ccc;
        margin-bottom: 20px;
    }

    .btn {
        width: 100%;
        padding: 12px;
    }

    .add-cover-image {
        margin-bottom: 20px;
    }
</style>
