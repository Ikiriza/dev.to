<?php
use yii\helpers\Html;
/** @var yii\web\View $this */

$this->title = 'Dev Community';
?>

<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-4">
    </div>

    <div class="body-content">

        <div class="row">
            <div class="col-lg-2 mb-2">
                <div class="card p-3 mb-4">
                    <h5 class="">DEV Community is a community of 2,099,261 amazing developers</h5>
                    <p class="mb-3">We're a place where coders share, stay up-to-date and grow their careers.</p>
                    <a class="btn btn-sm border-primary text-primary mb-3 create-account-btn" href="http://localhost/new/site/sign-up">Create Account</a>
                    <p class="text-center">
                         <a href="http://localhost/new/site/login" class="login-link">Login</a>
                    </p>
                </div>

                <div>
                    <div class="d-flex mb-3">                        
                    <a href="http://localhost/new/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                         <i class="bi bi-house me-2"></i>
                         <div>Home</div>
                     </a>
                    </div> 
                    <div class="d-flex mb-3">                        
                 <a href="http://localhost/dev-++/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                 <i class="bi bi-device-ssd-fill me-2"></i>
                <div>Dev ++</div>
                </a>
                </div>  
                <div class="d-flex mb-3">                        
                     <a href="http://localhost/podcast/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                      <i class="bi bi-mic me-2"></i>
                    <div>Podcast</div>
                     </a>
                   </div>  
                <div class="d-flex mb-3">                        
                     <a href="http://localhost/videos/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                     <i class="bi bi-camera-reels me-2"></i>
                     <div>Videos</div>
                     </a>
                  </div>  
                <div class="d-flex mb-3">                        
                    <a href="http://localhost/tags/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                      <i class="bi bi-tags me-2"></i>
                    <div>Tags</div>
                     </a>
                </div>  
            <div class="d-flex mb-3">                        
                 <a href="http://localhost/dev-help/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                <i class="bi bi-file-earmark-font-fill me-2"></i>
                 <div>Dev Help</div>
                 </a>
            </div>  
            <div class="d-flex mb-3">                        
                 <a href="http://localhost/forem-shop/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
              <i class="bi bi-shop me-2"></i>
             <div>Forem Shop</div>
                 </a>
            </div>
            <div class="d-flex mb-3">                        
                 <a href="http://localhost/advertise-on-dev/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                  <i class="bi bi-camera-reels me-2"></i>
                 <div>Advertise on DEV</div>
                  </a>
            </div>
            <div class="d-flex mb-3">                        
              <a href="http://localhost/dev-showcase/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
              <i class="bi bi-symmetry-horizontal me-2"></i>
               <div>Dev Showcase</div>
                 </a>
            </div>  
            <div class="d-flex mb-3">                        
                 <a href="http://localhost/new/site/about/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
                 <i class="bi bi-camera-reels me-2"></i>
                 <div>About</div>
                 </a>
            </div>  
            <div class="d-flex mb-3">                        
              <a href="http://localhost/contact/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
        <i class="bi bi-phone me-2"></i>
        <div>Contact</div>
    </a>
</div>  
<div class="d-flex mb-3">                        
    <a href="http://localhost/free-postgres-database/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
        <i class="bi bi-file-earmark-font-fill me-2"></i>
        <div>Free Postgres Database</div>
    </a>
</div>  
<div class="d-flex mb-3">                        
    <a href="http://localhost/guides/" style="text-decoration: none; color: inherit; display: flex; align-items: center; padding: 10px 15px; border: 1px solid transparent; border-radius: 5px; transition: background-color 0.3s, border-color 0.3s; width: 100%; box-sizing: border-box;" onmouseover="this.style.backgroundColor='skyblue'; this.style.borderColor='blue'; this.style.color='blue'" onmouseout="this.style.backgroundColor='transparent'; this.style.borderColor='transparent'; this.style.color='inherit'">
        <i class="bi bi-shop me-2"></i>
        <div>Guides</div>
    </a>
</div>
                  
                </div>
            </div>

            <div class="col-lg-6 mb-2">

                <div class="d-flex mb-3">
    <h5 class="me-3">
        <?= Html::a('Relevant', ['post/index'], ['class' => 'text-link']) ?>
    </h5>
    <h5 class="me-3 text-muted">
        <?= Html::a('Latest', ['post/index'], ['class' => 'text-link']) ?>
    </h5>
    <h5 class="text-muted">
        <?= Html::a('Top', ['post/index'], ['class' => 'text-link']) ?>
    </h5>
</div>

                <div class="card p-4">
    <div class="d-flex justify-content-between mb-5">
        <h6>Dev challenges</h6>
        <div class="d-flex">
            <div class="me-2">action</div>
            <div class="fs-bold f-3">X</div>
        </div>
    </div>
    <div class="text-center mb-3">
        <img src="https://via.placeholder.com/150" alt="Online Image" class="rounded" style="width:100%;height:100%">
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
        dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
        fugiat nulla pariatur.
    </p>
</div>

<div class="post-list mt-4">
    <?php if (!empty($posts)): ?>
        <ul class="list-group">
            <?php foreach ($posts as $post): ?>
                <li class="list-group-item mb-3">
                    <div class="d-flex justify-content-between align-items-start mb-2">
                        <div class="d-flex align-items-center">
                            <?php if ($post->user): ?>
                                <img src="http://localhost/new/uploads/image.png" alt="Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
                                <strong><?= Html::encode($post->user->username) ?></strong>
                            <?php else: ?>
                                <img src="http://localhost/new/uploads/image.png" alt="Default Profile Picture" class="rounded-circle" style="width: 40px; height: 40px; object-fit: cover; margin-right: 10px;">
                                <strong>Anonymous</strong>
                            <?php endif; ?>
                        </div>
                        <!-- Edit and Delete buttons -->
                        <div>
                            <?php if (Yii::$app->user->isGuest): ?>
                                
                            <?php else: ?>
                                <?php if ($post->author_id === Yii::$app->user->id): ?>
                                    <a href="<?= \yii\helpers\Url::to(['post/edit', 'id' => $post->id]) ?>" class="btn btn-primary btn-sm me-2">Edit</a>
                                    <a href="<?= \yii\helpers\Url::to(['post/delete', 'id' => $post->id]) ?>" class="btn btn-danger btn-sm" data-method="post" data-confirm="Are you sure you want to delete this post?">Delete</a>
                                <?php endif; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <small class="text-muted mb-2">Created at: <?= Yii::$app->formatter->asDate($post->created_at) ?></small>
                    <h5><?= Html::encode($post->title) ?></h5>
                    <p><?= Html::decode($post->content) ?></p>
                    <?php if ($post->tags): ?>
                        <p><strong>Tags:</strong> <?= Html::encode($post->tags) ?></p>
                    <?php endif; ?>
                    <?php if ($post->image_url): ?>
                        <img src="<?= Html::encode($post->image_url) ?>" alt="Image for <?= Html::encode($post->title) ?>" style="max-width: 100%; height: auto;">
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No posts available.</p>
    <?php endif; ?>
</div>





            </div>
            <div class="col-lg-4">
                <div class="card p-4 mb-5">
                    <h4>#Discuss</h4>
                    <div class="w-100">
                        <hr class="my-2">
                    </div>
                    <div>
                        <div>How to Build Your First Python Game: A Step-by-Step Guide to Creating a Simple Shooter with PyGame</div>
                        <span class="badge bg-warning text-dark">New</span> 
                    </div>
                    <div class="w-100">
                        <hr class="my-2">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et</p>
                    <div class="w-100">
                        <hr class="my-2">
                    </div>
                    <div>
                        <div>How to Build Your First Python Game: A Step-by-Step Guide to Creating a Simple Shooter with PyGame</div>
                        <span class="badge bg-warning text-dark">New</span> 
                    </div>
                </div>
                <div class="card p-4 mb-5">
                    <h4>#Watercolor</h4>
                    <div class="w-100">
                        <hr class="my-2">
                    </div>
                    <div>
                        How to Build Your First Python Game: A Step-by-Step Guide to Creating a Simple Shooter with PyGame
                    </div>
                    <div class="w-100">
                        <hr class="my-2">
                    </div>
                    <div>
                        <div>How to Build Your First Python Game: A Step-by-Step Guide to Creating a Simple Shooter with PyGame</div>
                        <span class="badge bg-warning text-dark">New</span> 
                    </div>
                </div>
                <div>
                    <h6>treding guide/resources</h6>
                    <div class="w-100">
                        <hr class="my-2">
                    </div>
                    <div>
                        How to Build Your First Python Game: A Step-by-Step Guide to Creating a Simple Shooter with PyGame
                    </div>
                    <div class="w-100">
                        <hr class="my-4">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <div class="w-100">
                        <hr class="my-4">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <div class="w-100">
                        <hr class="my-4">
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                        dolore magna aliqua.
                    </p>
                    <div class="w-100">
                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<style>
    .login-link {
        color: inherit; /* Inherit color from parent */
        text-decoration: none; /* Remove underline */
        transition: color 0.3s ease; /* Smooth transition for hover effect */
    }

    .login-link:hover {
        color: blue; /* Change color to blue on hover */
    }
    .create-account-btn {
        transition: background-color 0.3s ease; /* Smooth transition for background color */
    }

    .create-account-btn:hover {
        background-color: #87CEEB; /* Sky blue color on hover */
        color: white; /* Change text color to white on hover */
    }
    .post-list {
    margin-top: 20px; /* Adjust the value as needed */
}

.post-list .list-group-item {
    margin-bottom: 20px; 
    border-radius: 10px;/* Adjust the value as needed */
}
.text-link {
        color: black; /* Normal text color */
        text-decoration: none; /* Remove underline */
    }

    .text-link:hover {
        color: blue; /* Text color on hover */
    }

</style>