<?php

namespace app\controllers;

use Yii;
use app\models\Post;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\web\ForbiddenHttpException;


class PostController extends Controller
{
    public function actionCreatePost()
{
    $model = new Post();
    
    if (Yii::$app->request->isPost) {
        if ($model->load(Yii::$app->request->post())) {
            $model->created_at = date('Y-m-d H:i:s'); // Set the current timestamp
            if ($model->save()) {
                Yii::$app->session->setFlash('success', 'Post created successfully!');
                return $this->redirect(['post/index']);
            }
        }
    }
    
    return $this->render('create-post', [
        'model' => $model,
    ]);
}


 

public function actionIndex()
{
    $posts = Post::find()
        ->with('user') // Eager load the user data
        ->orderBy(['created_at' => SORT_DESC])
        ->all(); // Fetch all posts in descending order

    return $this->render('index', [
        'posts' => $posts,
    ]);
}
public function actionEdit($id)
{
    // Find the post model by ID
    $model = Post::findOne($id);

    // Check if the model was found
    if ($model === null) {
        throw new NotFoundHttpException('The requested post does not exist.');
    }

    // Check if the user is the author
    if ($model->author_id !== Yii::$app->user->id) {
        throw new ForbiddenHttpException('You are not allowed to edit this post.');
    }

    // Load POST data and save the model if the form is submitted
    if ($model->load(Yii::$app->request->post()) && $model->save()) {
        return $this->redirect(['index']); // Redirect after save
    }

    // Render the edit view and pass the model
    return $this->render('edit', [
        'model' => $model,
    ]);
}

public function actionDelete($id)
{
    $model = $this->findModel($id); // Find the post by ID

    // Check if the logged-in user is the author of the post
    if ($model->author_id !== Yii::$app->user->id) {
        throw new ForbiddenHttpException('You are not allowed to delete this post.');
    }

    // Delete the post
    if ($model->delete()) {
        Yii::$app->session->setFlash('success', 'Post deleted successfully.');
    } else {
        Yii::$app->session->setFlash('error', 'Failed to delete the post.');
    }

    return $this->redirect(['index']); // Redirect to the post index page
}

protected function findModel($id)
{
    if (($model = Post::findOne($id)) !== null) {
        return $model;
    }

    throw new NotFoundHttpException('The requested page does not exist.');
}



}
