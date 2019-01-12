<?php require_once('../functions.php');?>
<?php require_once('../partials/header.php');?>

    <header role="banner">

        <nav class="navbar navbar-expand-md navbar-dark bg-light">
            <div class="container">
                <a class="navbar-brand element-animate" href="<?php echo baseUrl(); ?>"><img src="<?php echo baseUrl(); ?>images/brand_gabriel_loreto_gray.png" alt="<?php echo siteTitle(); ?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <!-- END header -->


    <section class="bg-promocao-ligacao-direta align-items-center promocao-ligacao-direta-contato">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 text-center">
                    <img src="<?php echo baseUrl();  ?>images/promocao-ligacao-direta_gabriel.png" alt="<?php echo siteTitle(); ?>" class="photo-gabriel-contato element-animate">
                </div>

                <div class="col-xs-12 col-md-6">
                    <div class="col-md-12 text-center element-animate">
                        <h3 class="success-contact">Promoção cadastrada<br/> com sucesso!</h3>
                        <a href="<?php echo baseUrl();  ?>/inicio" class="element-animate btn-back">Voltar</a>
                    </div>
                </div>
            </div>
        </div>

    </section>
<?php require_once('../partials/footer_home.php');?>