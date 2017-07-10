<header class="animated fadeIn">
    <div class="container-fluid">

        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php bloginfo('url') ?>/wp-content/uploads/2017/06/bonitabasics.svg" title="Bonita Basics | San Diego Hip Hop Producer" alt="Bonita Basics San Diego Hip Hop Producer"></a>

            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                <?php if (has_nav_menu( 'primary_navigation')) : wp_nav_menu([ 'theme_location'=> 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav','container_class' => 'menu-primary-menu-container col-lg-7']); endif; ?>

                <ul class="nav justify-content-center social-profiles">
                    <li class="nav-item social-icon social-icon-facebook">
                        <a class="nav-link active" href="https://www.facebook.com/bonitabasics12" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/facebook-letter-logo.svg" title="Bonita Basics | Facebook" alt="Bonita Basics | San Diego Hip Hop producer"></a>
                    </li>
                    <li class="nav-item social-icon social-icon-instagram">
                        <a class="nav-link" href="https://www.instagram.com/bonitabasics12one2/" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/instagram-logo.svg" title="Bonita Basics | Instagram" alt="Bonita Basics | San Diego Hip Hop producer"></a>
                    </li>
                    <li class="nav-item social-icon social-icon-youtube">
                        <a class="nav-link" href="" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/youtube-play-button.svg" title="Bonita Basics | Youtube" alt="Bonita Basics | San Diego Hip Hop producer"></a>
                    </li>
                    <li class="nav-item social-icon social-icon-soundcloud">
                        <a class="nav-link" href="https://soundcloud.com/bonitabasics" target="_blank"><img src="<?php bloginfo('url')?>/wp-content/uploads/2017/06/soundcloud-logo.svg" title="Bonita Basics | SoundCloud" alt="Bonita Basics | San Diego Hip Hop producer"></a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>