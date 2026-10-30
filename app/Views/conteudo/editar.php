<?= $this->extend('layout/main') ?>

<?= $this->section('conteudo') ?>
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card shadow-sm p-4 bg-white rounded">
            <h1 class="h3 mb-4 text-secondary">Editar Conteúdo #<?= esc($conteudo['Id']) ?></h1>

            <?php if (!empty($erros)): ?>
                <div class="alert alert-danger">
                    <p class="mb-0 fw-bold">Verifique os campos:</p>
                    <ul class="mb-0">
                        <?php foreach ($erros as $erro): ?>
                            <li><?= esc($erro) ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <form method="post" action="<?= site_url('conteudos/atualizar/'. $conteudo['Id']) ?>">
                <?= csrf_field() ?>

                <div class="mb-3">
                    <label for="Titulo" class="form-label fw-bold">Título</label>
                    <input type="text" class="form-control" id="Titulo" name="Titulo" maxlength="255" value="<?= esc($conteudo['Titulo'] ?? '') ?>" required>
                </div>

                <div class="mb-3">
                    <label for="Texto" class="form-label fw-bold">Texto</label>
                    <textarea class="form-control" id="Texto" name="Texto" rows="6" required><?= esc($conteudo['Texto'] ?? '') ?></textarea>
                </div>

                <div class="d-flex justify-content-between">
                    <a href="<?= site_url('conteudos') ?>" class="btn btn-secondary">Cancelar</a>
                    <button type="submit" class="btn btn-success">Salvar Alterações</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection() ?>