<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= csrf_hash() ?>">
    <title>Blog system</title>

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

<!-- the main content goes here -->
<div class="container">
    <?= $this->renderSection('content') ?>
</div>

<!-- Load custom JS -->
<?php
if (isset($js)) {
    foreach ($js as $script):
        echo '<script src="' . base_url('' . $script) . '"></script>';
    endforeach;
}
?>

</body>
</html>