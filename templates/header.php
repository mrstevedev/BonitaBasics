<header class="<?php if( is_shop() ) echo 'This is the shop page.';?>fixed-top">
    <div class="container-fluid">
        <nav class="navbar navbar-toggleable-md navbar-light">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="<?= esc_url(home_url('/')); ?>">
                <img src="<?php bloginfo('url') ?>/wp-content/uploads/2017/06/bonitabasics.svg" title="Bonita Basics | San Diego Hip Hop Producer" alt="Bonita Basics San Diego Hip Hop Producer">
            </a>

            <div class="collapse navbar-collapse justify-content-end animated fadeIn" id="navbarTogglerDemo02">
                <?php if (has_nav_menu( 'primary_navigation')) : wp_nav_menu([ 'theme_location'=> 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav','container_class' => 'menu-primary-menu-container col-lg-10']); endif; ?>

                <ul class="nav justify-content-center social-profiles">
                    <li class="nav-item social-icon social-icon-facebook">
                        <a class="nav-link active" href="https://www.facebook.com/bonitabasics12" target="_blank"><svg version="1.1" height="13" width="13" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 430.113 430.114" style="enable-background:new 0 0 430.113 430.114;" xml:space="preserve">
                            <path id="facebook" d="M158.081,83.3c0,10.839,0,59.218,0,59.218h-43.385v72.412h43.385v215.183h89.122V214.936h59.805
                c0,0,5.601-34.721,8.316-72.685c-7.784,0-67.784,0-67.784,0s0-42.127,0-49.511c0-7.4,9.717-17.354,19.321-17.354
                c9.586,0,29.818,0,48.557,0c0-9.859,0-43.924,0-75.385c-25.016,0-53.476,0-66.021,0C155.878-0.004,158.081,72.48,158.081,83.3z"/></svg></a>
                    </li>
                    <li class="nav-item social-icon social-icon-instagram">
                        <a class="nav-link" href="https://www.instagram.com/bonitabasics12one2/" target="_blank">
                        <svg version="1.1" height="13px" width="13px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 169.063 169.063" style="enable-background:new 0 0 169.063 169.063;"
                            xml:space="preserve">
                            <path id="instagram" d="M122.406,0H46.654C20.929,0,0,20.93,0,46.655v75.752c0,25.726,20.929,46.655,46.654,46.655h75.752
                                c25.727,0,46.656-20.93,46.656-46.655V46.655C169.063,20.93,148.133,0,122.406,0z M154.063,122.407
                                c0,17.455-14.201,31.655-31.656,31.655H46.654C29.2,154.063,15,139.862,15,122.407V46.655C15,29.201,29.2,15,46.654,15h75.752
                                c17.455,0,31.656,14.201,31.656,31.655V122.407z"/>
                            <path id="instagram" d="M84.531,40.97c-24.021,0-43.563,19.542-43.563,43.563c0,24.02,19.542,43.561,43.563,43.561s43.563-19.541,43.563-43.561
                                C128.094,60.512,108.552,40.97,84.531,40.97z M84.531,113.093c-15.749,0-28.563-12.812-28.563-28.561
                                c0-15.75,12.813-28.563,28.563-28.563s28.563,12.813,28.563,28.563C113.094,100.281,100.28,113.093,84.531,113.093z"/>
                            <path id="instagram" d="M129.921,28.251c-2.89,0-5.729,1.17-7.77,3.22c-2.051,2.04-3.23,4.88-3.23,7.78c0,2.891,1.18,5.73,3.23,7.78
                                c2.04,2.04,4.88,3.22,7.77,3.22c2.9,0,5.73-1.18,7.78-3.22c2.05-2.05,3.22-4.89,3.22-7.78c0-2.9-1.17-5.74-3.22-7.78
                                C135.661,29.421,132.821,28.251,129.921,28.251z"/>

                        </svg>
                        </a>
                    </li>
                    <li class="nav-item social-icon social-icon-youtube">
                        <a class="nav-link" href="" target="_blank">
                        <svg version="1.1" height="15" width="15" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
                        <path id="youtube" d="M90,26.958C90,19.525,83.979,13.5,76.55,13.5h-63.1C6.021,13.5,0,19.525,0,26.958v36.084
                        C0,70.475,6.021,76.5,13.45,76.5h63.1C83.979,76.5,90,70.475,90,63.042V26.958z M36,60.225V26.33l25.702,16.947L36,60.225z"/>
                        </svg>
                </a>
                    </li>
                    <li class="nav-item social-icon social-icon-soundcloud">
                        <a class="nav-link" href="https://soundcloud.com/bonitabasics" target="_blank">
        <svg version="1.1" width="18px" height="18px" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 90 90" style="enable-background:new 0 0 90 90;" xml:space="preserve">
        <path id="soundcloud" d="M0,54.023c0,3.043,1.385,5.764,3.568,7.598V46.43C1.385,48.259,0,50.982,0,54.023 M7.342,44.432v19.183
        C8.233,63.861,9.174,64,10.143,64h0.974V44.094c-0.325-0.027-0.65-0.045-0.98-0.045C9.165,44.049,8.23,44.184,7.342,44.432
         M15.678,45.677c-0.258-0.165-0.515-0.317-0.789-0.457V64h3.773V38.881C17.16,40.841,16.113,43.155,15.678,45.677 M22.437,35.349
        V64h3.774V33.491C24.862,33.945,23.596,34.577,22.437,35.349 M29.984,32.71V64h3.774V32.825c-0.773-0.115-1.569-0.175-2.38-0.175
        C30.906,32.65,30.441,32.673,29.984,32.71 M39.612,34.916c-1.232-0.73-2.558-1.306-3.966-1.69V64h5.66V32.646
        C40.688,33.359,40.12,34.12,39.612,34.916 M43.195,30.754V64h35.852v-0.044C86.596,63.473,90,58.79,90,53.075
        c0-6.035-4.562-10.925-10.703-10.925c-1.576,0-2.874,0.325-4.245,0.913C74.07,33.481,65.941,26,55.932,26
        C51.036,26,46.586,27.793,43.195,30.754"/>
</svg>

</a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>