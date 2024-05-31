<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
<div class="about">
    <h1>About Me</h1>
    <p class="lead">Hello! I'm a software developer with a passion for building web applications. With a background in [Your Background], I have experience in [Your Skills and Experience].</p>
    <p>I love coding, learning new technologies, and solving complex problems. When I'm not coding, you can find me [Your Hobbies].</p>
    <section class="skills mt-5">
        <h2>Skills</h2>
        <ul class="list-group">
            <li class="list-group-item">HTML/CSS</li>
            <li class="list-group-item">JavaScript</li>
            <li class="list-group-item">PHP</li>
            <li class="list-group-item">CodeIgniter</li>
            <li class="list-group-item">MySQL</li>
        </ul>
    </section>
</div>
<?= $this->endSection() ?>
