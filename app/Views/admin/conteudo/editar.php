<?= $this->extend('admin/layout/main') ?>

<?= $this->section('conteudo') ?>
    <h1>Editar conteúdo #<?= esc($conteudo['Id']) ?></h1>

    <?php if (!empty($erros)): ?>
        <div style="background: #f8d7da; color: #721c24; padding: 10px; margin-bottom: 1rem; border-radius: 4px;">
            <p><strong>Verifique os campos:</strong></p>
            <ul>
                <?php foreach ($erros as $erro): ?>
                    <li><?= esc($erro) ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>

    <form action="<?= site_url('admin/conteudos/atualizar/' . $conteudo['Id']) ?>" method="post">
        <?= csrf_field() ?>

        <div style="margin-bottom: 1rem;">
            <label for="Titulo" style="display: block; font-weight: bold; margin-bottom: 0.3rem;">Título</label>
            <input type="text" id="Titulo" name="Titulo" maxlength="255" value="<?= esc($conteudo['Titulo'] ?? '') ?>" required style="width: 100%; padding: 8px;">
        </div>

        <div style="margin-bottom: 1rem;">
            <label for="Texto" style="display: block; font-weight: bold; margin-bottom: 0.3rem;">Texto</label>
            <textarea id="Texto" name="Texto" rows="8" required style="width: 100%; padding: 8px;"><?= esc($conteudo['Texto'] ?? '') ?></textarea>
        </div>

        <div style="display: flex; gap: 10px; align-items: center;">
            <button type="submit" style="padding: 8px 16px; background: #007bff; color: #fff; border: none; border-radius: 4px; cursor: pointer;">Salvar</button>
            <a href="<?= site_url('admin/conteudos') ?>" style="color: #6c757d; text-decoration: none;">Cancelar</a>
        </div>
    </form>
<?= $this->endSection() ?>