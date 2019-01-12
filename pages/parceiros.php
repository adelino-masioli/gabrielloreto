<?php $title_page = 'PARCEIROS'; ?>
<?php require_once('partials/banner-internal.php');?>

<!--show agenda!-->
<section class="site-section site-section-internal">
    <div class="container">
        <div class="row">

            <div class="col-xs-12 col-md-12 page-parceiros">
                <div class="row">
                    <?php for($i=1;$i<13;$i++ ){ ?>
                        <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 element-animate parceiro">
                            <img src="<?php echo baseUrl(); ?>images/parceiros/parceiros_<?php echo $i;?>.png" alt="Gabriel Lorelo" class="img-fluid gabriel-loreto-videos" >
                        </div>
                    <?php }  ?>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- END section -->