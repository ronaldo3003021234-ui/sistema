<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $conteudo['Titulo'] ?? 'Meu Site'; ?></title>
    
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Seu CSS personalizado -->
    <link rel="stylesheet" href="<?= base_url('assets/css/estilo.css') ?>">
</head>
<body class="bg-light">

    <header>
        <?= $this->include('layout/menu') ?>
    </header>

    <main class="container my-4">
        <?= $this->renderSection('conteudo') ?>
    </main>

    <!-- Bootstrap 5 JS Bundle CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>