<nav class="navbar">
    <a href="<?= site_url('admin') ?>" class="nav-link <?= current_url() == site_url('admin') ? 'active' : '' ?>">
        Painel
    </a>
    <a href="<?= site_url('admin/conteudos') ?>" class="nav-link <?= str_contains(current_url(), 'admin/conteudos') ? 'active' : '' ?>">
        Conteúdos
    </a>
    <form action="<?= site_url('admin/sair') ?>" method="post" class="logout-form">
        <?= csrf_field() ?>
        <button type="submit" class="logout-button">Sair</button>
    </form>
</nav>