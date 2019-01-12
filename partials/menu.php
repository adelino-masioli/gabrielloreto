<header role="banner">

    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
            <a class="navbar-brand element-animate" href="<?php echo baseUrl(); ?>"><img src="<?php echo baseUrl(); ?>images/brand.png" alt="<?php echo siteTitle(); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse navbar-light" id="navbarsExample05">
                <ul class="navbar-nav ml-auto pl-lg-5 pl-0">
                    <li class="nav-item element-animate">
                        <a class="nav-link <?php echo active_menu('inicio'); ?>" href="<?php echo baseUrl(); ?>inicio">INÍCIO</a>
                    </li>
                    <li class="nav-item element-animate">
                        <a class="nav-link <?php echo active_menu('agenda'); ?>" href="<?php echo baseUrl(); ?>agenda">AGENDA</a>
                    </li>
                    <li class="nav-item element-animate">
                        <a class="nav-link <?php echo active_menu('videos'); ?>" href="<?php echo baseUrl(); ?>videos">VÍDEOS</a>
                    </li>
                    <li class="nav-item element-animate">
                        <a class="nav-link <?php echo active_menu_array(['promocoes', 'promocao-ligacao-direta', 'promocao-gabriel-loreto-pedalando-com-voce']); ?>" href="<?php echo baseUrl(); ?>promocoes">PROMOÇÕES</a>
                    </li>
                    <li class="nav-item element-animate">
                        <a class="nav-link <?php echo active_menu('parceiros'); ?>" href="<?php echo baseUrl(); ?>parceiros">PARCEIROS</a>
                    </li>
                    <li class="nav-item element-animate">
                        <a class="nav-link <?php echo active_menu('release'); ?>" href="<?php echo baseUrl(); ?>release">RELEASE</a>
                    </li>
                    <li class="nav-item element-animate">
                        <a class="nav-link <?php echo active_menu('contratante'); ?>" href="<?php echo baseUrl(); ?>contratante">CONTRATANTE</a>
                    </li>
                    <li class="nav-item element-animate">
                        <a class="nav-link  <?php echo active_menu_array(['contato', 'contato-enviado-com-sucesso']); ?>" href="<?php echo baseUrl(); ?>contato">CONTATO</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
</header>
<!-- END header -->