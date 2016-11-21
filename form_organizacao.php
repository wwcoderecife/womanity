<div class="row form_inicial">
<div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
    <form role="form" action="" method="post" class="f1">

    <!-- Etapas Form Organizaçāo-->

        <h3>Cadastro Womanity Ecossistema - Tipo Organizacional</h3>
        <p>Preencha os campos obrigatórios *</p>
        <div class="f1-steps">
            <div class="f1-progress">
                <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="4" style="width: 12.5%;"></div>
            </div>
            <div class="f1-step active">
                <div class="f1-step-icon"><i class="fa fa-address-card-o"></i></div>
                <p>Dados Pessoais</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                <p>Organizaçāo </p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon"><i class="fa fa-map-marker"></i></div>
                <p>Endereço</p>
            </div>

            <div class="f1-step">
                <div class="f1-step-icon"><i class="fa fa-desktop"></i></div>
                <p>Redes Sociais</p>
            </div>

            <div class="f1-step">
                <div class="f1-step-icon"><i class="fa fa-hand-o-right"></i></div>
                <p>Indicaçāo</p>
            </div>
        </div>


        <!-- Formulário: Tipo Organizaçāo -->


          <fieldset>
                <h4>Dados Pessoais Contato 1:</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="text" name="f1-last-name" placeholder="E-mail" value="<?php echo $_SESSION['usuario_email']; ?>" class="f1-last-name form-control" id="f1-last-name">
                    
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="text" name="f1-last-name" placeholder="Telefone" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="text" name="f1-last-name" placeholder="Celular" class="f1-last-name form-control" id="f1-last-name">
                </div>

                 <h4>Dados Pessoais Contato 2:</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="text" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                    
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="text" name="f1-last-name" placeholder="Telefone" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="text" name="f1-last-name" placeholder="Celular" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="f1-buttons">
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>

          
             <!--Etapa 2 Formulário: Organizaçāo -->

        <fieldset>
            <h5>A sua iniciativa está dentro de uma organização juridicamente constituída?</h5>
                <div class="input-group">                                   
                    <label class="radio-inline">
                        <span class="input-group-addon">
                        <input type="radio"  aria-label="..." name="ong"  placeholder=" Digite CNPJ "value="sim" class="form-control-radio"> Sim
                    </span>
                    <input type="text" class="form-control" aria-label="...">
                    </label>
                </div>

                    <label class="radio-inline">
                        <input type="radio" name="ong2" value="nao" class="form-control-radio"> Não
                    </label>
                </div>
        </fieldset>

        <fieldset>
            <h4>Social media profiles:</h4>
            <div class="form-group">
                <label class="sr-only" for="f1-facebook">Facebook</label>
                <input type="text" name="f1-facebook" placeholder="Facebook..." class="f1-facebook form-control" id="f1-facebook">
            </div>
            <div class="form-group">
                <label class="sr-only" for="f1-twitter">Twitter</label>
                <input type="text" name="f1-twitter" placeholder="Twitter..." class="f1-twitter form-control" id="f1-twitter">
            </div>
            <div class="form-group">
                <label class="sr-only" for="f1-google-plus">Google plus</label>
                <input type="text" name="f1-google-plus" placeholder="Google plus..." class="f1-google-plus form-control" id="f1-google-plus">
            </div>
            <div class="f1-buttons">
                <button type="button" class="btn btn-previous">Previous</button>
                <button type="submit" class="btn btn-submit">Submit</button>
            </div>
        </fieldset>
    
    </form>
</div>
</div>