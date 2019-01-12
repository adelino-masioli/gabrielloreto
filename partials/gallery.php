<section class="site-section site-section-gallery">
    <div class="container">
        <div class="row">
            <div class="col-md-4 pr-5">

                <h2 class="mb-3">Galeria</h2>
                <p class="mb-5">Confira aqui a galeria de fotos Gabriel Loreto.</p>

                <div class="mb-3 custom-nav">
                    <a href="#" class="btn btn-sm custom-prev mr-2 mb-2 btn-gallery"><span class="ion-android-arrow-back"></span></a>
                    <a href="#" class="btn btn-sm custom-next mr-2 mb-2 btn-gallery"><span class="ion-android-arrow-forward"></span></a>
                </div>
            </div>
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-12 slider-wrap">
                        <div class="owl-carousel owl-theme no-nav js-carousel-1">

                            <?php for($i=1;$i<14;$i++ ){ ?>
                            <a href="<?php echo baseUrl();  ?>fotos" class="img-bg element-animate" style="background-image: url('<?php echo baseUrl();  ?>images/gallery/gabriel-loreto-<?php echo $i;  ?>.jpg')">
                                <div class="text">
                                    <h2><?php echo siteTitle();  ?></h2>
                                </div>
                            </a>
                            <?php }  ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END section -->