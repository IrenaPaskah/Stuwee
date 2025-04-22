<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="<?= route_to('home') ?>" class="active">Home</a></li>
        <li><a href="<?= route_to('about') ?>">About</a></li>
        <li><a href="<?= route_to('services') ?>">Services</a></li>
        <li><a href="<?= route_to('blog') ?>">Blog</a></li>
        <li><a href="<?= route_to('contact') ?>">Contact</a></li>
        <li><a href="<?= route_to('admin') ?>">Admin</a></li>
        <?php if (logged_in()) : ?>
            <li><a href="<?= route_to('logout') ?>">Logout</a></li>
        <?php else : ?>
            <li><a href="<?= route_to('login') ?>">Login</a></li>
        <?php endif; ?>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </ul>
</nav>