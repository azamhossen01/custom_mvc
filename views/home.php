<?php use App\core\Application; ?>

<?php if(Application::$app->session->getFlash('success')){ ?>
    <div class="alert alert-success"><?= Application::$app->session->getFlash('success') ?></div>
<?php } ?>

<h1>Home page</h1>
<?= "Welcome " . $name ?>