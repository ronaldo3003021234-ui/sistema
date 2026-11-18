<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $titulo ?? 'Painel Administrativo' ?></title>
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
</head>
<body>
    <!-- Menu Superior Administrativo -->
    <?= $this->include('admin/layout/menu') ?>

    <!-- Conteúdo Principal da Página -->
    <main class="container">
        <?= $this->renderSection('conteudo') ?>
    </main>
</body>
</html>