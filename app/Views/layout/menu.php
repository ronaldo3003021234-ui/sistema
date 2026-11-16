<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm px-4 mb-4">
    <div class="container-fluid">
        <!-- Logo / Título -->
        <a class="navbar-brand fw-bold text-info" href="<?= site_url('home') ?>">
            🚀 Meu Sistema
        </a>

        <!-- Botão para telas menores (Responsivo) -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links do Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto gap-2 align-items-lg-center">
                <li class="nav-item">
                    <a href="<?= site_url('home') ?>" class="nav-link px-3 rounded <?= url_is('home') ? 'active bg-primary text-white shadow-sm' : 'text-light' ?>">
                        Home
                    </a>
                </li>
                
                <!-- Botão do Painel Administrativo -->
                <li class="nav-item">
                    <a href="<?= site_url('admin') ?>" class="nav-link px-3 rounded <?= url_is('admin*') ? 'active bg-warning text-dark shadow-sm' : 'text-warning fw-bold' ?>">
                        Painel
                    </a>
                </li>

                <li class="nav-item">
                    <a href="<?= site_url('contato') ?>" class="nav-link px-3 rounded <?= url_is('contato') ? 'active bg-primary text-white shadow-sm' : 'text-light' ?>">
                        Contato
                    </a>
                </li>

                <!-- Links de Autenticação / Acesso -->
                <li class="nav-item">
                    <a href="<?= site_url('login') ?>" class="nav-link px-3 rounded <?= url_is('login') ? 'active bg-success text-white shadow-sm' : 'text-light' ?>">
                        Login
                    </a>
                </li>

                <!-- O botão Registrar aparece APENAS na Home -->
                <?php if (url_is('home') || url_is('/')): ?>
                <li class="nav-item">
                    <a href="<?= site_url('register') ?>" class="nav-link px-3 rounded <?= url_is('register') ? 'active bg-secondary text-white shadow-sm' : 'text-light' ?>">
                        Registrar
                    </a>
                </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>