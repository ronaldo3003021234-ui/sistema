<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 mb-4">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="<?= site_url('home') ?>">Meu Sistema</a>
        <div class="navbar-nav">
            <a href="<?= site_url('home') ?>" class="nav-link <?= url_is('home') ? 'active' : '' ?>">Home</a>
            <a href="<?= site_url('conteudos') ?>" class="nav-link <?= url_is('conteudos*') ? 'active' : '' ?>">Gerenciar Conteúdos</a>
            <a href="<?= site_url('contato') ?>" class="nav-link <?= url_is('contato') ? 'active' : '' ?>">Contato</a>
        </div>
    </div>
</nav>