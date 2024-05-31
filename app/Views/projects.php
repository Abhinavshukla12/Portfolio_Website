<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="projects">
    <h1>My Projects</h1>
    <div class="row">
        <?php foreach ($projects as $project): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title"><?= esc($project['title']) ?></h2>
                        <p class="card-text"><?= esc($project['description']) ?></p>
                        <a href="<?= esc($project['link']) ?>" target="_blank" class="btn btn-primary">View Project</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?= $this->endSection() ?>
