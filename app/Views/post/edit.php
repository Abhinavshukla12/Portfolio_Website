<!DOCTYPE html>
<html>
<head>
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form action="/post/edit/<?= $post['id'] ?>" method="post">
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="<?= $post['title'] ?>"><br>
        <label for="content">Content:</label>
        <textarea name="content" id="content"><?= $post['content'] ?></textarea><br>
        <button type="submit">Save</button>
    </form>
</body>
</html>
