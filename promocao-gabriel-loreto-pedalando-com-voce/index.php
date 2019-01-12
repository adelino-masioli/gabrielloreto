<?php require_once('../functions.php');?>
<?php require_once('../partials/header.php');?>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand element-animate" href="<?php echo baseUrl(); ?>/promocoes"><img src="<?php echo baseUrl(); ?>images/brand_gabriel_loreto_gray.png" alt="<?php echo siteTitle(); ?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <!-- END header -->

<section class="bg-promocao-ligacao-direta align-items-center">
    <div class="container">
        <div class="row display-none ">

            <div class="col-md-6 offset-md-2 text-center">
                <img src="<?php echo baseUrl();  ?>images/promocao-pedala.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid photo-gabriel-contato element-animate">
            </div>

        </div>

        <div class="radios-list row display-none">
            <div class="col-md-12 text-center">
                <a href="<?php echo baseUrl();  ?>promocao-gabriel-loreto-pedalando-com-voce-contato?radio=100"><img src="<?php echo baseUrl();  ?>images/radio-california.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid element-animate"></a>
            </div>

            <img src="<?php echo baseUrl();  ?>images/para-participar-pedalar.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid para-participar element-animate">
        </div>


        <div class="display-none-lg">
            <div class="row">

                <div class="col-md-12 text-center">
                    <img src="<?php echo baseUrl();  ?>images/promocao-pedala.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid gabriel-loreto-small element-animate">
                </div>

                <div class="col-md-12 text-center">
                    <a href="<?php echo baseUrl();  ?>promocao-gabriel-loreto-pedalando-com-voce-contato?radio=100"><img src="<?php echo baseUrl();  ?>images/radio-california.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid element-animate"></a>
                </div>

                <img src="<?php echo baseUrl();  ?>images/para-participar-pedalar.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid para-participar element-animate">

            </div>
        </div>
    </div>
</section>
<?php require_once('../partials/footer_home.php');?>