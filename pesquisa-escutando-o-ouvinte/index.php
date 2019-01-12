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

<section class="bg-radio-ouvintes align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-7 element-animate">
                <div class="row">
                    <div class="col-md-12">
                        <img src="<?php echo baseUrl(); ?>images/alem.png" alt="Gabriel Lorelo - Pesquisa escutando o ouvinte" class="img-fluid d-none d-sm-block" style="margin-top: 170px;margin-bottom: 30px;" >
                        <img src="<?php echo baseUrl(); ?>images/alem2.png" alt="Gabriel Lorelo - Pesquisa escutando o ouvinte" class="img-fluid d-block d-sm-none" style="margin-top: 170px;margin-bottom: 30px;" >
                    </div>
                </div>
                <div class="row">

                    <?php for($i=1;$i<38;$i++ ){ ?>
                        <div class="col-xs-6 col-md-3 text-center bg-promo-ouvinte" style="margin-bottom: 16px;">
                            <img src="<?php echo baseUrl();  ?>images/ouvintes/radio-ouvinte-<?php echo $i;?>.png" alt="<?php echo siteTitle(); ?>" class="img-fluid element-animate">
                        </div><br/>
                    <?php }  ?>

                </div>
            </div>
            <div class="col-xs-12 col-md-5 element-animate">
               <img src="<?php echo baseUrl(); ?>images/gabriel-big.png" alt="Gabriel Lorelo - Pesquisa escutando o ouvinte" class="img-fluid" style="margin-top: 160px;" >
            </div>
        </div>
    </div>
</section>
<?php require_once('../partials/footer_home.php');?>