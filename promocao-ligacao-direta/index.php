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
        <div class="row display-none">
            <div class="col-md-7 offset-md-2 text-center" style="margin-top: 100px;margin-right: 10px;">
                <img src="<?php echo baseUrl();  ?>images/promocao-ligacao-direta_gabriel.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid photo-gabriel element-animate">
            </div>
        </div>

        <div class="radios-list row display-none" style="margin-top: 60px;">
            <div class="col-md-3 text-center padding-10">
                <a href="<?php echo baseUrl();  ?>promocao-ligacao-direta-contato?radio=10"><img src="<?php echo baseUrl();  ?>images/radios/10.jpg" alt="<?php echo siteTitle(); ?>" class="img-md-fluid element-animate"></a>
            </div>

            <?php for($i=1;$i<9;$i++ ){ ?>
                <div class="col-md-3 text-center padding-10">
                   <img src="<?php echo baseUrl();  ?>images/radios/<?php echo $i;?>.jpg" alt="<?php echo siteTitle(); ?>" class="img-fluid element-animate">
                </div>
            <?php }  ?>

            <img src="<?php echo baseUrl();  ?>images/para-participar.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid para-participar element-animate">
        </div>

        <div class="display-none-lg">
        <div class="row">

            <div class="col-md-12 text-center">
                <img src="<?php echo baseUrl();  ?>images/promocao-ligacao-direta_gabriel.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid  element-animate gabriel-loreto-small">
            </div>

            <div class="col-xs-6 col-sm-6 text-center" style="margin-bottom: 30px;">
                <a href="<?php echo baseUrl();  ?>promocao-ligacao-direta-contato?radio=10"><img src="<?php echo baseUrl();  ?>images/radios/10.jpg" alt="<?php echo siteTitle(); ?>" class="img-md-fluid element-animate"></a>
            </div><br/>

            <?php for($i=1;$i<9;$i++ ){ ?>
                <div class="col-xs-6 col-sm-6 text-center">
                    <img src="<?php echo baseUrl();  ?>images/radios/<?php echo $i;?>.jpg" alt="<?php echo siteTitle(); ?>" class="img-md-fluid element-animate">
                </div><br/>
            <?php }  ?>

            <img src="<?php echo baseUrl();  ?>images/para-participar.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid para-participar element-animate">
        </div>
        </div>
    </div>
</section>
<?php require_once('../partials/footer_home.php');?>