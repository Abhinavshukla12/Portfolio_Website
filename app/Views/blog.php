<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="blog">
    <h1>Blog</h1>
    <div class="row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?= esc($post['title']) ?></h2>
                        <p class="card-text"><?= esc($post['body']) ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
