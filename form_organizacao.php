<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" action="" method="post" class="f1">

            <h3>Cadastro Womanity Ecossistema<br>Organizaçāo</h3>
            <p>Preencha os campos obrigatórios *</p>
            <div class="f1-steps">
                <div class="f1-progress">
                    <div class="f1-progress-line" data-now-value="8" data-number-of-steps="5" style="width: 8%;"></div>
                </div>
                <div class="f1-step step-5 active">
                    <div class="f1-step-icon"><i class="fa fa-address-card-o"></i></div>
                    <p>Dados Pessoais</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-user"></i></div>
                    <p>Organizaçāo</p>
                </div>   
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-map-marker"></i></div>
                    <p>Endereço</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-desktop"></i></div>
                    <p>Redes Sociais</p>
                </div>
                <div class="f1-step step-5">
                    <div class="f1-step-icon"><i class="fa fa-hand-o-right"></i></div>
                    <p>Indicação</p>
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
                <h5>A sua iniciativa está dentro de uma organização juridicamente constituída?*</h5>
                <div class="form-group">  
                   <div class="input-group">
                     <span class="input-group-addon">                                   
                    <label class="radio-inline">
                        <input type="radio" aria-label="xx.xxx.xxxx/xxxx-xx, a inserção deste número é opcional" name="organizacao-ong" value="sim" class="form-control-radio"> Sim, CNPJ:
                     </span>
                          <input type="text" class="form-control" aria-label="xx.xxx.xxxx/xxxx-xx, a inserção deste número é opcional">
                    </label>
                  </div>

                    <label class="radio-inline">
                        <input type="radio" name="organizacao-ong" value="nao" class="form-control-radio"> Não
                    </label>
                </div>

        
    
    </form>
</div>
</div>