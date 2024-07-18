<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>Blog system</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/lux/bootstrap.min.css">

<!-- Bootstrap css -->
<?php
if (isset($css)) {
    foreach ($css as $style):
        echo '<link href="' . base_url('' . $style) . '" rel="stylesheet">';
    endforeach;
}
?>

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="<?=base_url('project/home')?>">Blog System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('project/home')?>">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=base_url('project/blog')?>">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- the main content goes here -->
<div class="container">
    <?= $this->renderSection('content') ?>
</div>

<footer class="footer mt-auto py-3 bg-dark text-white">
    <div class="container">
        <span class="text-muted">&copy; 2024 Blog System. All rights reserved.</span>
    </div>
</footer>
<!-- Load custom JS -->
<?php
if (isset($js)) {
    foreach ($js as $script):
        echo '<script src="' . base_url('' . $script) . '"></script>';
    endforeach;
}
?>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>