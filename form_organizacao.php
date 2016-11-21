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
                <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                <p>Dados Pessoais</p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                <p>Dados Organizacionais </p>
            </div>
            <div class="f1-step">
                <div class="f1-step-icon"><i class="fa fa-twitter"></i></div>
                <p>Enviar</p>
            </div>
            <!--
            <div class="f1-step">
                <div class="f1-step-icon"><i class="fa fa-question"></i></div>
                <p>Dados Organizacionais 2</p>
            </div>
        -->

        </div>


        <!-- Formulário: Tipo Organizaçāo -->

          <fieldset>
            <h4>Dados Pessoais:</h4>
            <div class="form-group">
                <label class="sr-only" for="f1-first-name">Nome</label>
                <input type="text" name="f1-first-name" placeholder="Nome do responsável pelo preenchimento do cadastro" class="f1-first-name form-control" id="f1-first-name" required data-error = "Campo está em branco, favor preencher.">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="f1-cargo1">Cargo</label>
                <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="cargo">
            </div>

            <!--
            <div class="form-group">
                <label class="sr-only" for="f1-last-name">RG</label>
                <input type="text" name="f1-last-name" placeholder="RG" class="f1-last-name form-control" id="f1-last-name">
            </div>
        -->
        
            <div class="form-group">
                <label class="sr-only" for="f1-email1">E-mail</label>
                <input type="text" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-email1">
                
            </div>


            <div class="form-group">
                <label class="sr-only" for="f1-confirma_email">Confirma E-mail</label>
                <input type="text" name="f1-last-name" placeholder="Confirma E-mail" class="f1-last-name form-control" id="f1-email1">
            </div>

            
            <div class="form-group">
                <label class="sr-only" for="f1-last-name">Celular</label>
                <input type="text" name="f1-last-name" placeholder="Celular" class="f1-last-name form-control" id="f1-last-name">
            </div>
            <!--
            <div class="form-group">
                <label class="sr-only" for="f1-about-yourself">About yourself</label>
                <textarea name="f1-about-yourself" placeholder="About yourself..." 
                                     class="f1-about-yourself form-control" id="f1-about-yourself"></textarea>
            </div>
        -->

        <div class="form-group">
                <label class="sr-only" for="f1-first-name">Nome</label>
                <input type="text" name="f1-first-name" placeholder="Nome do responsável pela organização ou suplente" class="f1-first-name form-control" id="f1-first-name" required data-error = "Campo está em branco, favor preencher.">
                <div class="help-block with-errors"></div>
            </div>
            <div class="form-group">
                <label class="sr-only" for="f1-last-name">Cargo</label>
                <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name">
            </div>


        <div class="form-group">
                <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="text" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                
            </div>


            <div class="form-group">
                <label class="sr-only" for="f1-last-name">Confirma E-mail</label>
                <input type="text" name="f1-last-name" placeholder="Confirma E-mail" class="f1-last-name form-control" id="f1-last-name">
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
            <h4>Dados Organizacionais:</h4>
            <div class="form-group">
                <label class="sr-only" for="f1-email">Email</label>
                <input type="text" name="f1-email" placeholder="Email..." class="f1-email form-control" id="f1-email">
            </div>
            <div class="form-group">
                <label class="sr-only" for="f1-password">Password</label>
                <input type="password" name="f1-password" placeholder="Password..." class="f1-password form-control" id="f1-password">
            </div>
            <div class="form-group">
                <label class="sr-only" for="f1-repeat-password">Repeat password</label>
                <input type="password" name="f1-repeat-password" placeholder="Repeat password..." 
                                    class="f1-repeat-password form-control" id="f1-repeat-password">
            </div>
            <div class="f1-buttons">
                <button type="button" class="btn btn-previous">Previous</button>
                <button type="button" class="btn btn-next">Next</button>
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