<?= $this->extend('layout/main') ?>

<?= $this->section('conteudo') ?>
<div class="p-5 mb-4 bg-white rounded-3 shadow-sm border">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold text-primary mb-3"><?= esc($conteudo['Titulo']) ?></h1>
        <p class="fs-4 text-secondary"><?= nl2br(esc($conteudo['Texto'])) ?></p>
    </div>
</div>
<?= $this->endSection() ?>