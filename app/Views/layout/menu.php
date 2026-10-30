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
                <li class="nav-item">
                    <a href="<?= site_url('conteudos') ?>" class="nav-link px-3 rounded <?= url_is('conteudos*') ? 'active bg-primary text-white shadow-sm' : 'text-light' ?>">
                        Gerenciar Conteúdos
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= site_url('contato') ?>" class="nav-link px-3 rounded <?= url_is('contato') ? 'active bg-primary text-white shadow-sm' : 'text-light' ?>">
                        Contato
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>