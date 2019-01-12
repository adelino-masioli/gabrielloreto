<?php require_once('partials/banner-internal.php');?>

    <!--show biografia!-->
    <section class="site-section site-section-internal">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 text-center">
                    <h2>GABRIEL LORETO</h2>
                    <p>F o t o s</p>
                </div>
            </div>
            <div class="row">
                <?php for($i=1;$i<15;$i++ ){ ?>
                <div class="col-xs-12 col-md-4 slider-wrap">
                    <img src="<?php echo baseUrl();  ?>images/gallery/gabriel-loreto-<?php echo $i;  ?>.jpg" alt="<?php echo siteTitle(); ?>" class="img-fluid element-animate">
                </div>
                <?php }  ?>
            </div>
        </div>
    </section>
    <!-- END section -->
