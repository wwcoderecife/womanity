        
<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
    	<form role="form" action="" method="post" class="f1">

    		<h3>Cadastro Womanity Ecossistema<br>Iniciativa</h3>
    		<p>Preencha os campos obrigatórios *</p>
    		<div class="f1-steps">
    			<div class="f1-progress">
    			    <div class="f1-progress-line" data-now-value="12.5" data-number-of-steps="2" style="width: 12.5%;"></div>
    			</div>
    			<div class="f1-step">
    				<div class="f1-step-icon"><i class="fa fa-address-card-o"></i></div>
    				<p>Dados Pessoais</p>
    			</div>
    			<div class="f1-step active">
    				<div class="f1-step-icon"><i class="fa fa-user"></i></div>
    				<p>Iniciativa</p>
    			</div>
    		</div>
    		
    		

            <fieldset>
                <h5>A sua iniciativa está dentro de uma organização juridicamente constituída?*</h5>
                <div class="form-group">                                   
                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-ong" value="sim" class="form-control-radio"> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-ong" value="nao" class="form-control-radio"> Não
                    </label>
                </div>

                <h5>A sua iniciativa está localizada na…*</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="iniciativa-zona" value="rural" class="form-control-radio"> Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-zona" value="urbana" class="form-control-radio"> Zona Urbana
                    </label>
                </div>

                <h5>Nome da Iniciativa*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" name="iniciativa-nome" maxlength="50">
                </div>


                <h5>Sigla da iniciativa:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="iniciativa-sigla" style="text-transform:uppercase">
                </div>

                <h5>Telefone da iniciativa*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Telefone</label>
                    <input type="text" name="iniciativa-telefone" placeholder="(xx) xxxxx-xxxx">
                </div>

                <h5>E-mail da iniciativa*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="text" name="iniciativa-email" placeholder="(xx) xxxxx-xxxx">
                </div>

                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>
            </fieldset>

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
    
