<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$this->registerCsrfMetaTags();
$this->registerMetaTag(['charset' => Yii::$app->charset], 'charset');
$this->registerMetaTag(['name' => 'viewport', 'content' => 'width=device-width, initial-scale=1, shrink-to-fit=no']);
$this->registerMetaTag(['name' => 'description', 'content' => $this->params['meta_description'] ?? '']);
$this->registerMetaTag(['name' => 'keywords', 'content' => $this->params['meta_keywords'] ?? '']);
$this->registerLinkTag(['rel' => 'icon', 'type' => 'image/x-icon', 'href' => Yii::getAlias('@web/favicon.ico')]);
$this->registerCssFile('https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css');
?>
<?php $this->beginPage() ?>
    <!DOCTYPE html>
    <html lang="<?= Yii::$app->language ?>" class="h-100">
        <head>
            <title><?= Html::encode($this->title) ?></title>
            <?php $this->head() ?>
        </head>
        <body class="d-flex flex-column h-100">
            <?php $this->beginBody() ?>

                <header id="header">
                    
                    <div class="container-fluid">
                        <div class="d-flex justify-content-between w-100">
                            <div>
 <?php
NavBar::begin([
    'brandLabel' => '<img src="http://localhost/new/web/images/logo-icon.png" class="me-3" style="height: 40px; border-radius: 5px;" alt="My DevApp Logo">',
    'brandUrl' => Yii::$app->homeUrl,
    'options' => [
        'class' => 'navbar navbar-expand-md navbar-white bg-white fixed-top',
        'style' => 'padding-top: 2px; padding-bottom: 1px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);' // Add shadow
    ]
]);
?>

<div class="d-flex align-items-center">
    <div class="ms-auto me-2">
        <form id="searchForm" style="width: 600px;" onsubmit="return false;"> <!-- Added form with onsubmit -->
            <div class="d-flex">
                <div class="input-group">
                    <span class="input-group-text bg-white border-end-0">
                        <i class="bi bi-search"></i>
                    </span>
                    <input id="searchInput" class="form-control border-start-0" type="text" placeholder="Search..." aria-label="Search">
                    <span class="input-group-text bg-white border-start-0">Powered by 
                        <img src="http://localhost/new/web/images/algolia-logo.png" style="height: 20px;" alt="Algolia Logo">
                    </span>
                </div>
            </div>
        </form>
    </div>
</div>


    

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const searchInput = document.getElementById('searchInput');

        // Prevent form submission on Enter key
        searchInput.addEventListener('keydown', function(event) {
            if (event.key === 'Enter') {
                event.preventDefault(); // Prevent default form submission
                // Custom search handling logic can go here
                console.log("Search for:", searchInput.value); // Example action
            }
        });
    });
</script>

                            </div>
                            <div>
                            <?= Nav::widget([
    'options' => ['class' => 'navbar-nav'],
    'items' => [
        Yii::$app->user->isGuest
            ? ['label' => 'Login', 'url' => ['/site/login']]
            : '<li class="nav-item dropdown">'
                . Html::beginTag('a', [
                    'href' => '#', 
                    'class' => 'nav-link dropdown-toggle', 
                    'id' => 'profileDropdown', 
                    'data-bs-toggle' => 'dropdown',
                    'aria-expanded' => 'false'
                ])
                . Html::img('http://localhost/new/uploads/image.png', [
                    'alt' => 'Profile Picture',
                    'class' => 'rounded-circle',
                    'style' => 'width: 40px; height: 40px; margin-top: -5px;' // Adjust size as needed
                ])
                . Html::endTag('a')
                . '<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">'
                    . '<li class="dropdown-header">'  // Add a header with the username
                    .  Yii::$app->user->identity->username
                    . '</li>'
                    . '<li>'
                    . Html::a('Profile', ['/user/profile'], ['class' => 'dropdown-item']) // Link to profile page
                    . '</li>'
                    . '<li>'
                    . Html::beginForm(['/site/logout'], 'post', ['class' => 'dropdown-item'])
                    . Html::submitButton('Logout', ['class' => 'btn btn-link logout'])
                    . Html::endForm()
                    . '</li>'
                . '</ul>'
            . '</li>',
        Yii::$app->user->isGuest
            ? [
                'label' => 'Create account',
                'url' => ['/site/sign-up'],  // Change the URL to point to the signup route
                'linkOptions' => ['class' => 'btn btn-sm border-primary text-primary me-2'],  // Custom classes for border and text color
                'options' => ['class' => 'nav-item']  // Add nav-item class for alignment
            ]
            : [
                'label' => 'Create Post',
                'url' => ['/post/create-post'], // Change this to your create post route
                'linkOptions' => ['class' => 'btn btn-sm border-primary text-primary me-2'],  // Custom classes for border and text color
                'options' => ['class' => 'nav-item']  // Add nav-item class for alignment
            ]
    ]
]); ?>
</div>

                        </div>
                    </div>

                    <?php
                    NavBar::end();
                    ?>
                </header>

                <main id="main" class="flex-shrink-0 mt-5 bg-light" role="main">
                    <div class="container">
                        <?php if (!empty($this->params['breadcrumbs'])): ?>
                            <?= Breadcrumbs::widget(['links' => $this->params['breadcrumbs']]) ?>
                        <?php endif ?>
                        <?= Alert::widget() ?>
                        <?= $content ?>
                    </div>
                </main>

                <footer id="footer" class="mt-auto py-3 bg-white">
                    <div class="container">
                        <div class="row text-muted">
                            <div class="col-md-6 text-center text-md-start">&copy; My Company <?= date('Y') ?></div>
                            <div class="col-md-6 text-center text-md-end"><?= Yii::powered() ?></div>
                        </div>
                    </div>
                </footer>

            <?php $this->endBody() ?>
        </body>
    </html>
<?php $this->endPage() ?>
