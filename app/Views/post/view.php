<!DOCTYPE html>
<html>
<head>
    <title><?= $post['title'] ?></title>
</head>
<body>
    <h1><?= $post['title'] ?></h1>
    <p><?= $post['content'] ?></p>
    <a href="/post/edit/<?= $post['id'] ?>">Edit</a>
</body>
</html>
