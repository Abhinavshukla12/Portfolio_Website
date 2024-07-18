<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
        <h1 class="mb-4"><?= esc($blog['title']) ?></h1>
        <small>By <?= esc($blog['author']) ?> on <?= date('d M Y', strtotime($blog['created_at'])) ?></small>
        <div class="mt-3"><?= esc($blog['content']) ?></div>
        <a href="<?= site_url('project/blog') ?>" class="btn btn-primary mt-4">Back to Blog</a>
    </div>
<?= $this->endSection() ?>