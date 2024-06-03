<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="home text-center">
    <section class="hero py-5 bg-secondary text-black">
        <div class="container">
            <h1 class="display-4">Welcome to My Portfolio</h1>
            <p class="lead">I am a passionate developer always eager to learn and grow. Check out my latest projects and blog posts.</p>
            <a href="<?= base_url('/projects') ?>" class="btn btn-primary btn-lg mr-2">View Projects</a>
            <a href="<?= base_url('/blog') ?>" class="btn btn-primary btn-lg">Read Blog</a>
        </div>
    </section>
</div>
<?= $this->endSection() ?>
