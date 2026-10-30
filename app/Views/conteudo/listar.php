<?= $this->extend('layout/main') ?>

<?= $this->section('conteudo') ?>
<div class="card shadow-sm p-4 bg-white rounded">
    <h1 class="mb-3 text-primary">Conteúdos Cadastrados</h1>

 <?php if ($mensagem = session()->getFlashdata('mensagem')): ?>
        <div class="alert alert-success" role="alert">
            <?= esc($mensagem) ?>
        </div>
    <?php endif; ?>

    <?php if (empty($conteudos)): ?>
        <div class="alert alert-warning" role="alert">Nenhum conteúdo encontrado.</div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-dark">
                    <tr>
                        <th>Id</th>
                        <th>Título</th>
                        <th>Texto</th>
                        <th class="text-center">Ação</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($conteudos as $item): ?>
                    <tr>
                        <td><strong><?= esc($item['Id']) ?></strong></td>
                        <td><?= esc($item['Titulo']) ?></td>
                        <td><?= nl2br(esc($item['Texto'] ?? '')) ?></td>
                        <td class="text-center">
                            <a href="<?= site_url('conteudos/editar/'. $item['Id']) ?>" class="btn btn-sm btn-outline-primary">
                                Editar
                            </a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php endif; ?>
</div>
<?= $this->endSection() ?>