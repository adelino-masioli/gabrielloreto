<?php $title_page = 'CONTATO'; ?>
<?php require_once('partials/banner-internal.php');?>

<!--show agenda!-->
<section class="site-section site-section-internal">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-md-6 offset-md-3">
                <form action="<?php echo baseUrl();  ?>enviar-contato/index.php" method="post" class="frmcontact" id="frmcontact">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtname">Nome</label>
                                <input type="text" class="form-control" id="txtname" placeholder="Nome" name="txtname" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtabout">Assunto</label>
                                <input type="text" class="form-control" id="txtabout" placeholder="Assunto" name="txtabout" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtphone">Telefone</label>
                                <input type="text" class="form-control" id="txtphone" placeholder="Telefone" name="txtphone" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtemail">E-mail</label>
                                <input type="email" class="form-control" id="txtemail" placeholder="email" name="txtemail" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtuf">Estado</label>
                                <input type="text" class="form-control" id="txtuf" placeholder="Estado" name="txtuf" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="txtcity">Cidade</label>
                                <input type="text" class="form-control" id="txtcity" placeholder="Cidade" name="txtcity" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="txtmsg">Mensagem</label>
                                <textarea class="form-control" name="txtmsg" id="txtmsg" cols="30" rows="5" placeholder="Mensagem"> </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-submit-contact">ENVIAR</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- END section -->