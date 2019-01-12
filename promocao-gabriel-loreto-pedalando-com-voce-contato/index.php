<?php require_once('../functions.php');?>
<?php require_once('../partials/header.php');?>

<header role="banner">

    <nav class="navbar navbar-expand-md navbar-dark bg-light">
        <div class="container">
            <a class="navbar-brand element-animate" href="<?php echo baseUrl(); ?>promocao-ligacao-direta"><img src="<?php echo baseUrl(); ?>images/brand_gabriel_loreto_gray.png" alt="<?php echo siteTitle(); ?>"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>
<!-- END header -->

<?php $radio = $_GET['radio'];?>


<section class="bg-promocao-ligacao-direta align-items-center promocao-ligacao-direta-contato">

            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-6 text-center">
                        <img src="<?php echo baseUrl();  ?>images/promocao-pedala.png" alt="<?php echo siteTitle(); ?>" class="photo-gabriel-contato element-animate">
                    </div>

                    <div class="col-xs-12 col-md-6">
                        <div class="col-md-12 text-center">
                            <img src="<?php echo baseUrl();  ?>images/radio-california.png" alt="<?php echo siteTitle(); ?>" class="img-md-fluid element-animate" width="80%">
                        </div>
                        <br/>
                        <form action="<?php echo baseUrl();  ?>promocao-gabriel-loreto-pedalando-com-voce-contato/submitform.php" method="post" class="frmcontact">
                            <input type="hidden" name="radio" value="<?php echo $radio;?>">
                            <div class="form-group element-animate">
                                <label for="nome_completo">Seu nome completo</label>
                                <input type="text" class="form-control" id="nome_completo" name="nome_completo" aria-describedby="nome_completo" placeholder="Seu nome completo" onkeyup="enableBtn();" required>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12 col-md-7 element-animate">
                                    <label for="cidade">Sua cidade</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" aria-describedby="cidade" placeholder="Sua cidade" onkeyup="enableBtn();" required>
                                </div>
                                <div class="form-group col-xs-12 col-md-5 element-animate">
                                    <label for="data_nascimento">Data de nascimento</label>
                                    <input type="text" class="form-control" id="data_nascimento" name="data_nascimento" aria-describedby="data_nascimento" placeholder="Data de nascimento" onkeypress="handleMask(event, '99/99/9999')" onkeyup="enableBtn();" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col-xs-12 col-md-4 element-animate">
                                    <label for="telefone">Telefone</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone" aria-describedby="telefone" placeholder="Telefone" onkeyup="enableBtn();" required>
                                </div>
                                <div class="form-group col-xs-12 col-md-8 element-animate">
                                    <label for="email">E-mail</label>
                                    <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="E-mail" onkeyup="enableBtn();" required>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col-xs-12 col-md-9 element-animate">
                                    <label for="nome_hit">Qual o nome do novo hit do Gabriel Loreto?</label></br>
                                    <div class="custom-control custom-radio opt-music">
                                        <input type="radio" class="custom-control-input" name="novohit" id="pecado" value="Pecado" checked>
                                        <label class="custom-control-label" for="pecado">Pecado</label>
                                    </div>
                                    <div class="custom-control custom-radio opt-music">
                                        <input type="radio" class="custom-control-input" name="novohit" id="outro" value="Outro">
                                        <label class="custom-control-label" for="outro">Outro</label>
                                    </div>
                                </div>
                                <div class="form-group col-xs-12 col-md-3 element-animate">
                                    <button type="submit" class="btn btn-default btn-enviar">ENVIAR</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

    </section>
<?php require_once('../partials/footer_home.php');?>