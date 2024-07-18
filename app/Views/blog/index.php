<?= $this->extend('layout/default') ?>
<?= $this->section('content') ?>
<div class="container mt-5">
        <h1 class="mb-4">Blog</h1>
        <div class="list-group">
            <?php foreach ($blogs as $blog): ?>
                <a href="<?= site_url('blog/view/'.$blog['id']) ?>" class="list-group-item list-group-item-action">
                    <h5 class="mb-1"><?= esc($blog['title']) ?></h5>
                    <small>By <?= esc($blog['author']) ?> on <?= date('d M Y', strtotime($blog['created_at'])) ?></small>
                    <p class="mb-1"><?= esc(substr($blog['content'], 0, 100)) ?>...</p>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
<?= $this->endSection() ?>