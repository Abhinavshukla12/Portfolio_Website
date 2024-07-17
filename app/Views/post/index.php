<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>Posts</h1>
    <a href="/post/create">Create New Post</a>
    <ul>
        <?php foreach ($posts as $post): ?>
            <li><a href="/post/view/<?= $post['id'] ?>"><?= $post['title'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
