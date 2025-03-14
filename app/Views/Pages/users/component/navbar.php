<nav id="navmenu" class="navmenu">
    <ul>
        <li><a href="<?= route_to('home') ?>" class="active">Home</a></li>
        <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
            <ul>
                <li><a href="team.html">Team</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                    <ul>
                        <li><a href="#">Deep Dropdown 1</a></li>
                        <li><a href="#">Deep Dropdown 2</a></li>
                        <li><a href="#">Deep Dropdown 3</a></li>
                        <li><a href="#">Deep Dropdown 4</a></li>
                        <li><a href="#">Deep Dropdown 5</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li><a href="<?= base_url('/ContactPerson') ?>">Services</a></li>
        <li><a href="<?= route_to('portofolio') ?>">Portofolio</a></li>
        <li><a href="<?= route_to('pricing') ?>">Pricing</a></li>
        <li><a href="<?= route_to('blog') ?>">Blog</a></li>
        <li><a href="<?= route_to('contact') ?>">Contact</a></li>

    </ul>
    <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>