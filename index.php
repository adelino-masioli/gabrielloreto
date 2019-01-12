<?php require_once('functions.php');?>
<?php if(get_qr() != ''){ ?>
    <?php require_once('partials/header.php');?>
    <?php require_once('partials/menu.php');?>
<?php } ?>

<?php validate_qr(); ?>

<?php if(get_qr() != ''){ ?>
    <?php require_once('partials/footer.php');?>
<?php } ?>
