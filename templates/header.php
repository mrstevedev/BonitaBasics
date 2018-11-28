<header class="fixed-top sticky-nav sticky-nav--visible">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
            </a>

            <div class="collapse navbar-collapse animated fadeIn" id="navbarTogglerDemo02">
                <?php if (has_nav_menu( 'primary_navigation')) : wp_nav_menu([ 'theme_location'=> 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav','container_class' => 'menu-primary-menu-container col-lg-12 justify-content-end']); endif; ?>               
            </div>
        </nav>
    </div>
</header>
