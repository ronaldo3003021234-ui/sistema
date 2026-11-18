<?= $this->extend('admin/layout/main') ?>

<?= $this->section('conteudo') ?>
    <h1>Conteúdos cadastrados</h1>

    <?php if ($mensagem = session()->getFlashdata('mensagem')): ?>
        <p style="color: green; font-weight: bold;"><?= esc($mensagem) ?></p>
    <?php endif; ?>

    <?php if (empty($conteudos)): ?>
        <p>Nenhum conteúdo encontrado.</p>
    <?php else: ?>
        <table border="1" cellpadding="8" style="width: 100%; border-collapse: collapse; margin-top: 1rem;">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Título</th>
                    <th>Texto</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conteudos as $item): ?>
                <tr>
                    <td><?= esc($item['Id']) ?></td>
                    <td><?= esc($item['Titulo']) ?></td>
                    <td><?= nl2br(esc(substr($item['Texto'], 0, 80))) ?>...</td>
                    <td>
                        <a href="<?= site_url('admin/conteudos/editar/' . $item['Id']) ?>">Editar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
<?= $this->endSection() ?>