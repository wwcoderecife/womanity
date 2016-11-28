           <!-- Bootstrap core JavaScript
         ================================================== -->

            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/validator.min.js"></script>
            <script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
            <script type="text/javascript"></script>

            <!--Include Twitter Bootstrap and jQuery: Subtemas--> 
            <!--<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css" type="text/css"/>-->
            <!--<script src="assets/js/jquery-2.1.3.min.js"></script>-->
           
            <!--Include the plugin's CSS and JS:Subtemad--> 
            <!--<link rel="stylesheet" href="assets/css/bootstrap-multiselect.css" type="text/css">-->
            <!--<script src="assets/js/bootstrap-multiselect.js"></script>-->
            
        
            <script>
              jQuery(function($){
              $("#inputTel1").mask("(99) 9999-9999",{placeholder:"(xx) xxxx-xxxx "});
              $("#inputCel1").mask("(99) 99999-9999",{placeholder:"(xx) xxxxx-xxxx "});
              $("#inputTel2").mask("(99) 9999-9999",{placeholder:"(xx) xxxx-xxxx "});
              $("#inputCel2").mask("(99) 99999-9999",{placeholder:"(xx) xxxxx-xxxx "});
              $("#inputTel3").mask("(99) 9999-9999",{placeholder:"(xx) xxxx-xxxx "});
              $("#inputCep").mask("99-999-999",{placeholder:"xx-xxx-xxx"});
              $("#inputTel4").mask("(99) 9999-9999",{placeholder:"(xx) xxxx-xxxx "});
              $("#inputTel5").mask("(99) 9999-9999",{placeholder:"(xx) xxxx-xxxx "});
              $("#inputTel6").mask("(99) 9999-9999",{placeholder:"(xx) xxxx-xxxx "});
             
            });
            </script>


<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" data-toggle="validator" action="" method="post" action="classes/prepare_cadastro.php" class="f1">

            <h3>Cadastro UNA Ecossistema<br>Organizaçāo</h3>
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
                 <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="cargo_1" placeholder="Cargo" class="f1-last-name form-control" id="inputCargo1" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="email_1" placeholder="E-mail" value="<?php echo $_SESSION['usuario_email']; ?>" class="f1-last-name form-control" id="f1-last-name">
                    <div class="help-block with-errors"></div>
                </div>

                 <h5>Telefone Fixo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="telefone_1" placeholder="Telefone" class="f1-last-name form-control" id="f1-last-name" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                 <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" name="celular_1" placeholder="Celular" class="f1-last-name form-control" id="inputCel1"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                 <h4>Dados Pessoais Contato 2:</h4>
                  <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="cargo_2" placeholder="Cargo" class="f1-last-name form-control" id="inputCargo2"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="email_2" placeholder="E-mail" class="f1-last-name form-control" id="email2"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>                    
                </div>

                 <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="telefone_2" placeholder="Telefone" class="f1-last-name form-control" id="inputTel2"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" name="celular_2" placeholder="Celular" class="f1-last-name form-control" id="inputCel2"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <div class="f1-buttons">
                <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset><!--Dados Pessoais-->


          
             <!--Etapa 2 Formulário: Organizaçāo -->

        <fieldset>
                <h5>A sua Organizaçāo está dentro de uma organização juridicamente constituída?*</h5>
                <h6><em>se, sim digite o CNPJ no campo abaixo.</em></h5>
             
                  
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-cnpj">
                        <option value=""></option>
                        <option value="sim">sim</option>
                        <option value="nao">nao</option>
                    </select>    

                <input type="text" id="inputcnpj" name="inputcnpj" class="f1-last-name form-control" placeholder="xx.xxx.xxxx/xxxx-xx, a inserção deste número é opciona"style='display: none' />
                    <script>

                        var dropdownCnpj = document.getElementById('organizacao-cnpj');
                            
                            function onDropdownChangedCNPJ()
                            {
                                console.log(dropdownCnpj.selectedIndex);
                                //pegando valor do select na variável dropdownCnpj
                                var meuInput = document.getElementById('inputcnpj');
                                if(dropdownCnpj.options[dropdownCnpj.selectedIndex].value === "sim") {
                                    //faz algo quando o valor selecionado for sim
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for sim, tem cnpj
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                }
                            }
                            
                            if (dropdownCnpj.addEventListener)
                            {
                                dropdownCnpj.addEventListener('change', onDropdownChangedCNPJ, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownCnpj.attachEvent('onchange', onDropdownChangedCNPJ, false);
                            }

                    </script>
                </div>
                    

                <h5>A sua Organizaçāo está localizada na…*</h5>
                <div class="form-group">
                    <label class="radio-inline">
                       <input type="radio" name="zona" value="rural" class="form-control-radio" required>Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="zona" value="urbana" class="form-control-radio" required>Zona Urbana
                    </label>
                </div>

                <h5>Nome da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" name="nome" maxlength="50" class="f1-last-name form-control"required data-error = "Campo está em branco, favor preencher.">
                </div>


                <h5>Sigla da Organizaçāo:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="sigla" style="text-transform:uppercase" class="f1-last-name form-control">
                </div>

                <h5>Telefone da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Telefone</label>
                    <input type="tel" id="telefone" name="organizacao-telefone" placeholder="(xx) xxxxx-xxxx"class="f1-last-name form-control"required data-error = "Campo está em branco, favor preencher.">
                </div>

                <h5>E-mail da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="email" name="email" class="f1-last-name form-control"class="f1-last-name form-control"required data-error = "Campo está em branco, favor preencher.">
                </div>

                 <h5>Como sua organizaçāo se identifica*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus" ></label>
                    <select class="f1-last-name form-control" id="organizacao-tipo" name="tipo" required data-error = "Selecione uma opçāo.">
                        <option value="academica"> acadêmica</option>
                        <option value="coletivo">coletivo</option>
                        <option value="centro-oeste">empresa privada</option>
                        <option value="fundos">fundos</option>
                        <option value="governo">governo</option>
                        <option value="movimento">movimento</option>
                        <option value="negócio social">negócio social</option>
                        <option value="organização da sociedade civil">organização da sociedade civil (ex: associação, ong, oscip, etc)</option>
                        <option value="rede">rede</option>
                        <option value="outros">outros</option>
                    </select> 
                    <input type="text" id="inputoutros" name="inputoutros" class="f1-last-name form-control" placeholder="descreva outro tipo"style='display: none' />
                    <script>

                        var dropdownIdentifica = document.getElementById('organizacao-tipo');
                            
                            function onDropdownChangedIDENTIFICA()
                            {
                                console.log(dropdownIdentifica.selectedIndex);
                                //pegando valor do select na variável dropdownCnpj
                                var meuInput2 = document.getElementById('inputoutros');
                                if(dropdownIdentifica.options[dropdownIdentifica.selectedIndex].value === "outros") {
                                    //faz algo quando o valor selecionado for sim
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for sim, tem cnpj
                                    
                                    meuInput2.style.display = 'block';
                                }else{
                                    meuInput2.style.display = 'none';
                                }
                            }
                            
                            if (dropdownIdentifica.addEventListener)
                            {
                                dropdownIdentifica.addEventListener('change', onDropdownChangedIDENTIFICA, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownNatureza.attachEvent('onchange', onDropdownChangedIDENTIFICA, false);
                            }

                    </script>
                </div>


                 <h5> Quando sua Organizaçāo iniciou as atividades?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="year_organizacao" name="year_organizacao" required data-error = "Selecione uma opçāo.">
                        <script>
                          var myDate = new Date();
                          var year = myDate.getFullYear();
                          for(var i = 1900; i < year+1; i++){
                              $('#year_organizacao')
                                .append($('<option>', { value : i })
                                .text(i));
                          }
                          </script>
                    </select>


                    <h5>Quantas pessoas estão envolvidas neste trabalho?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-pessoas_envolvidas" name="pessoas_envolvidas" required data-error = "Selecione uma opçāo.">
                        <option value=""></option>
                        <option value="1-5">1-5</option>
                        <option value="6-10">6-10</option>
                        <option value="11-20">11-20</option>
                        <option value="21-50">21-50</option>
                        <option value="51-100">51-100</option>
                        <option value="101-500">101-500</option>
                        <option value="251-1000">251-1000</option>
                        <option value="501-1000">501-1000</option>
                        <option value="1001+">1001+</option>     
                    </select>

                <h5>Qual foi seu orçamento em?*</h5>
                 <h5>2014</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2014</label>
                    <input type="text" name="orcamento_2014" placeholder="R$ xxxxxx" class="f1-last-name form-control" id="organizacao_orcamento2014" required data-error = "Campo está em branco, favor preencher.">

                </div>
                <h5>2015</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2015</label>
                    <input type="text" name="orcamento_2015"  placeholder="R$ xxxxxx" class="f1-last-name form-control" id="organizacao_orcamento2015" required data-error = "Campo está em branco, favor preencher.">
                </div>
                <h5>2016</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2016</label>
                    <input type="text" name="orcamento_2016"  placeholder="R$ xxxxxx" class="f1-last-name form-control" id="organizacao_orcamento2016"required data-error = "Campo está em branco, favor preencher.">
                </div>

                <h5>Sua Organizaçāo recebe recursos financeiros?</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="recursos" value="1" class="form-control-radio"> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="recursos" value="0" class="form-control-radio"> Nāo
                    </label>
                </div>

                <h5>O que faz Organizaçāo?*(até 500 caracteres)</h5>                                  
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself"></label>
                    <textarea name="sobre_iniciativa" maxlength="500" placeholder="Fale sobre a sua organizaçāo...." 
                    class="f1-about-yourself form-control" id="sobre_organizacao" required data-error = "Campo está em branco, favor preencher."></textarea>
                </div>


                 <h5>Qual o público direto atendido pela sua Organizaçāo?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-publico" required data-error = "Selecione uma opçāo." >
                        <option value=""></option>
                        <option value="Empresas">Empresas</option>
                        <option value="Organizações Sociais">Organizações Sociais</option>
                        <option value="Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher">Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher</option>
                        <option value="Movimentos, coletivos, redes, fóruns">Movimentos, coletivos, redes, fóruns</option>
                        <option value="Adolescentes e jovens">Adolescentes e jovens</option>
                        <option value="Homens">Homens</option>
                        <option value="Mulheres">Mulheres</option>
                           
                    </select>

                    <h5>Nomeie e descreva as iniciativas da sua organização que trabalham com empoderamento das mulheres*?</h5>
                 <h5>Nome1</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona1"  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas1" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong1" required data-error = "Campo está em branco, favor preencher."></textarea>
                </div>
                <h5>Nome2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona2"  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas2" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong2" required data-error = "Campo está em branco, favor preencher."></textarea>
                </div>
                <h5>Nome3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona3" class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas3" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong3" required data-error = "Campo está em branco, favor preencher."></textarea>
                </div>

                <h5>Clique nos Estados em que sua organizaçāo tem atuação direta*</h5>
                    <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar várias opções.</em></h6>
                    <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="organizacao_estado" multiple required data-error = "Selecione uma opçāo.">
                      <option value="1">Acre</option>
                        <option value="2">Alagoas</option>
                        <option value="3">Amapá</option>
                        <option value="4">Amazonas</option>
                        <option value="5">Bahia</option>
                        <option value="6">Ceará</option>
                        <option value="7">Distrito Federal</option>
                        <option value="8">Espírito Santo</option>
                        <option value="9">Goiás</option>
                        <option value="10">Maranhão</option>
                        <option value="11">Mato Grosso</option>
                        <option value="12">Mato Grosso do Sul</option>
                        <option value="13">Minas Gerais</option>
                        <option value="14">Pará</option>
                        <option value="15">Paraíba</option>
                        <option value="16">Paraná</option>
                        <option value="17">Pernambuco</option>
                        <option value="18">Piauí</option>
                        <option value="19">Rio de Janeiro</option>
                        <option value="20">Rio Grande do Norte</option>
                        <option value="21">Rio Grande do Sul</option>
                        <option value="22">Rondônia</option>
                        <option value="23">Roraima</option>
                        <option value="24">Santa Catarina</option>
                        <option value="25">São Paulo</option>
                        <option value="26">Sergipe</option>
                        <option value="27">Tocantins</option>
                    </select>


                    <h5>Sua Organizaçāo influenciou políticas públicas?*</h5>

                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="politicas_publicas" value="nao" class="form-control-radio"> Nāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="politicas_publicas" value="sim" class="form-control-radio"> Sim
                    </label>
                </div>
                
              
                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="origem1" value="origem1" class="form-control-radio">municipal 
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="origem2" value="origem2" class="form-control-radio">estadual
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="origem3" value="origem3" class="form-control-radio">nacional 
                    </label>
                    <textarea name="organizaçāo_politica_publica" placeholder="Opcional: (campo aberto para detalhar, )"

                    class="f1-about-yourself form-control" id="organizaçāo_politica_publica"></textarea>
                </div>


                <!-- Organizacao 27-->


<h5>Você realiza monitoramento e avaliação sistematizada das atividades da Organizaçāo?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="monitoramento_atv" id="avaliacao">
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim</option>
                    </select>
                    <textarea type="text" id="inputAvaliacaoOng" name= "inputAvaliacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="quais foram os resultados comprovados alcançados até hoje? 500 caracteres..
                        "style='display: none' required data-error = "Campo está em branco, favor preencher."/></textarea>
                    <script>

                        var dropdownAvaliacao = document.getElementById('avaliacao');
                            
                            function onDropdownChangedAvaliacao()
                            {
                                console.log(dropdownAvaliacao.selectedIndex);
                                var meuInput1 = document.getElementById('inputAvaliacaoOng');
                                //pegando valor do select na variável dropdownAvaliacao

                                
                                if(dropdownAvaliacao.options[dropdownAvaliacao.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput1.style.display = 'block';
                                }else{
                                    meuInput1.style.display = 'none';
                                }
                            }
                            
                            if (dropdownAvaliacao.addEventListener)
                            {
                                dropdownAvaliacao.addEventListener('change', onDropdownChangedAvaliacao, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownAvaliacao.attachEvent('onchange', onDropdownChangedAvaliacao, false);
                            }

                    </script>
                </div><!--27/Organizacao-->

<!-- 28 Organizacao-->

<h5>Sua Organizaçāo tem uma estratégia de comunicação própria?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-comunicacao" >
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, qual?</option>
                    </select>
                    <textarea type="text" id="inputComunicacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Descreva estratégia de comunicação..
"style='display: none' required data-error = "Campo está em branco, favor preencher."/></textarea>
                    <script>

                        var dropdownComun = document.getElementById('organizacao-comunicacao');
                            
                            function onDropdownChangedComun()
                            {
                                console.log(dropdownComun.selectedIndex);
                                //pegando valor do select na variável dropdown
                                var meuInput1 = document.getElementById('inputComunicacaoOng');
                                if(dropdownComun.options[dropdownComun.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput1.style.display = 'block';
                                }else{
                                    meuInput1.style.display = 'none';
                                }
                            }
                            
                            if (dropdownComun.addEventListener)
                            {
                                dropdownComun.addEventListener('change', onDropdownChangedComun, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownComun.attachEvent('onchange', onDropdownChangedComun, false);
                            }

                    </script>
                </div><!--28/Organizacao-->



      <!-- 29 Organizacao-->

<h5>A sua Organizaçāo recebeu premiações, certificações, etc*?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="premiacao" >
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, quais?</option> 
                        
                    </select>
                    <textarea type="text" id="inputPremiacaoOng" class="f1-last-name form-control" maxlength="500"placeholder="Premiações/Certificações..
"style='display: none' required data-error = "Campo está em branco, favor preencher." /></textarea>
                    <script>

                    var dropdown = document.getElementById('premiacao');
                            
                            function onDropdownChangedPremiacao()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                var meuInput = document.getElementById('inputPremiacaoOng');
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                }
                            }
                            
                            if (dropdown.addEventListener)
                            {
                                dropdown.addEventListener('change', onDropdownChangedPremiacao, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdown.attachEvent('onchange', onDropdownChangedPremiacao, false);
                            }

                    </script>
                </div><!--29/Organizacao-->


                <h5>Quais são as organizações com atuação na temática da mulher que sua organizaçāo se relaciona diretamente?</h5>
                 <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                <input type="text" name="relaciona1"  class="f1-last-name form-control">
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona2"  class="f1-last-name form-control">
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona3" class="f1-last-name form-control">
                </div> 

                

            <!--Tabela Temas-->

        <h5>Áreas de atuação da organização: escolha até 3 Temas e até 3 Subtemas abaixo*:</h5>
        <div class="form-group" style="border: 1px solid #ddd">
        <div class="table-responsive">
        <table id="form1" class="table table-hover col-sm-12" required data-error = "Selecione até 3 temas.">

         <thead>
            <tr>
                <th>#</th>
                <th>Temas</th>
                <th>Descriçāo</th>
              
            </tr>
            </thead>
            <tbody>
            <tr>
                <td><input type="checkbox" name="temas" class="no-margin" onclick="verificar()"></td>
                <td>Arte e Cultura</td>
                <td>Promoção do acesso de mulheres à cultura e/ou incentivo à produção das várias expressões artísticas.</td>
                 
            </tr>
            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Ciência e Tecnologia</td>
                <td>Promoção do acesso a linguagens, equipamentos e/ou à produção de ciência e tecnologia por mulheres.</td>
               
            </tr>
            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td> Democracia e Participação Política</td>
                <td>Ações de incentivo à participação de mulheres na vida política e democrática institucional (partidos, conselhos, órgãos e instâncias dos poderes executivo, legislativo e judiciário).</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Educação e Formação</td>
                <td>Oferta de educação formal (escolar ou acadêmica), incentivo à escolaridade; formação de atores sociais, ações de educação popular e informal</td>
              
            </tr>

            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Empreendedorismo feminino e autonomia econômica</td>
                <td>Ações de incentivo ao empreendedorismo feminino e à autonomia econômica, por meio de capacitação e/ou financiamento, tais como capacitações, cooperativismo,microcrédito, etc.</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Enfrentamento à Violência</td>
                <td>Oportunidades iguais para mulheres e homens, divisão justa entre ambos os sexos, mesmas possibilidades de desenvolvimento profissional e equiparação salarial</td>
              

            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Equidade e Condições de Trabalho</td>
                <td>Oportunidades iguais para mulheres e homens, divisão justa entre ambos os sexos, mesmas possibilidades de desenvolvimento profissional e equiparação salarial.</td>    
            </tr>

            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Esportes</td>
                <td>Oferta, promoção e incentivo à realização de práticas esportivas por meninas e mulheres, sobretudo em modalidades tradicionalmente dominadas por homens.</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Indígenas</td>
                <td>Ações destinadas à valorização das mulheres indígenas e ao enfrentamento de seus problemas específicos.</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>LGBTT (Lésbicas, Gays, Bissexuais, Travestis, Transexuais e Transgêneros)</td>
                <td>Projetos que atuam pela valorização e afirmação de pessoas LGBTT e combatem a violência e a discriminação contra esses públicos.</td>
            </tr>
            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Masculinidades</td>
                <td>Ações voltadas para questões relativas à revisão do conceito hegemônico de masculinidade, a partir da perspectiva das relações de gênero.</td>
            </tr>
            <tr>
                 <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Meio Ambiente,Segurança Alimentar e Agricultura</td>
                <td>Trabalhos que relacionam questões de gênero, feminismo e meio ambiente. 
Direito e acesso a alimentos de qualidade, em quantidade suficiente, saudáveis e ambientalmente sustentáveis.</td>
            </tr>

            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Mídia e Comunicação</td>
                <td>Promoção do acesso de mulheres aos meios de comunicação pelo domínio de técnicas, equipamentos e linguagens; monitoramento da presença da mulher nas mídias e da cobertura de temas sobre as questões das mulheres.</td>
           </tr>

            <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Moradia</td>
                <td>Ações que visam contribuir para o direito das mulheres à moradia e desenvolvimento de habilidades para a construção ou reformas de casas.</td>
           </tr>

           <tr>
                <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Negritude</td>
                <td>Ações de valorização da estética e da identidade das mulheres negras e de combate ao racismo.</td>
           </tr>

           <tr> <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Paz e Segurança pública</td>
                <td>Projetos que tratam da interface entre gênero e sistema de segurança pública, sobretudo questões da violência armada.</td>
           </tr>

           <tr> <td><input type="checkbox" name="temas"class="no-margin" onclick="verificar()"></td>
                <td>Saúde e Bem-estar</td>
                <td>Iniciativas que tratam de questões de autoestima, qualidade de vida, saúde e bem-estar das mulheres.</td>
           </tr>

            </tbody>
        </table>
    </div>
  </div>

           <script>
            var CheckMaximo = 3;

            function verificar() {
            var Marcados = 1;
            var objCheck = $("input[name='temas']");
            //Percorrendo os checks para ver quantos foram selecionados:
            for (var iLoop=0; iLoop<objCheck.length; iLoop++) {
            //Se o número máximo de checkboxes ainda não tiver sido atingido, continua a verificação:
                if (objCheck[iLoop].checked) {
                    Marcados++;
                }
                
                if (Marcados <= CheckMaximo) {
                //Habilitando todos os checkboxes, pois o máximo ainda não foi alcançado.
                for (var i=0; i<objCheck.length; i++) {
                    objCheck[i].disabled = false;
                }       
                //Caso contrário, desabilitar o checkbox;
                //Nesse caso, é necessário percorrer todas as opções novamente, desabilitando as não checadas;
                
                } else {
                    for (var i=0; i<objCheck.length; i++) {
                        if(objCheck[i].checked == false) {
                            objCheck[i].disabled = true;
                        }       
                  }
                }
            }
            }
</script>

  


<h5> Clique e escolha até 3 Subtemas abaixo*</h5>
<div class="form-group">
<!--<label for="subtemas" for="f1-google-plus">Subtemas</label>-->
        <select id="subtemas" name="subtemas" multiple="multiple">
            <option value="1">Aborto</option>
            <option value="2">Dança</option>
            <option value="3">Inserção de mulheres na política</option>
            <option value="4">Paternidade</option>
            <option value="5">Tecnologia social e/ou alternativas</option>
            <option value="6">Desenvolvimento e Programação</option>
            <option value="7">Liderança</option>
            <option value="8">Pessoa com deficiência</option>
            <option value="9">Trabalho digno</option>
            <option value="10">Advocacy</option>
            <option value="11">Ecofeminismo</option>
            <option value="12">Povos tradicionais</option>
            <option value="13">Tráfico de pessoas</option>
            <option value="14">Agua e saneamento básico</option>
            <option value="15">Economia criativa</option>
            <option value="16">Marketing</option>
            <option value="17">Preconceito e discriminação</option>
            <option value="18">Tecnologia</option>
            <option value="19">Artes plásticas</option>
            <option value="20">Parto Humanizado</option>
            <option value="21">Cadeia produtiva responsável</option>
            <option value="22">Educomunicação</option>
            <option value="23">Microcrédito</option>
            <option value="24">Questão presidiária</option>
            <option value="25">Cinema</option>
            <option value="26">Envelhecimento</option>
            <option value="27">Mobilização</option>
            <option value="28">Reciclagem e logísitca diversa</option>
            <option value="29">Finanças sociais</option>
            <option value="30">Mudanças climáticas</option>
            <option value="32">Redes Sociais</option>
            <option value="33">Conselhos e outras instâncias</option>
            <option value="34">Fotografia</option>
            <option value="35">Mulheres no mundo da ciencias</option>
            <option value="36">Refugiados</option>
            <option value="37">Consumo</option>
            <option value="38">Incentivo à leitura</option>
            <option value="39">Obesidade infantil</option>
            <option value="30">Reparação-reconstrução</option>
            <option value="41">Cooperativismo</option>
            <option value="42">Inclusão Digital</option>
            <option value="43">Teatro</option>

        </select>

     </div>
<!--
     <script type="text/javascript">
    $(document).ready(function() {
    $('#subtemas').multiselect();
    });
 </script> --> 
     


                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>

</fieldset>

           
                 

            <!--Etapa 3 Formulário: Endereço/Organizaçāo -->


            <fieldset>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Região</label>
                    <select class="f1-last-name form-control" name="regiao" id="regiao">
                        <option value="norte">Norte</option>
                        <option value="nordeste">Nordeste</option>
                        <option value="centro-oeste">Centro-Oeste</option>
                        <option value="sul">Sul</option>
                        <option value="sudeste">Sudeste</option>
                    </select> 
                </div>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Estado</label>
                    <select class="f1-last-name form-control" name="estado" id="estados">
                        <option value=""></option>
                    </select> 
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cidade</label>
                    <select class="f1-last-name form-control" name="cidade" id="cidades"> 
                        <option value=""></option>
                    </select> 
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro</label>
                <input type="text" name="bairro" placeholder="Bairro..." class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua</label>
                    <input type="text" name="rua" placeholder="Rua/Av...*" class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número</label>
                    <input type="text" name="numero" placeholder="Numero...*" class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento</label>
                    <input type="text" name="complemento" placeholder="Complemento...*" class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep</label>
                    <input type="text" name="cep" placeholder="CEP...*" class="f1-last-name form-control">
                </div> 

               <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>

            </fieldset>
 
          <!--Etapa 4 Formulário: Mídia Social-->

            <fieldset>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-mouse-pointer"></i></span>
                    <input class="form-control" type="text" name="site" placeholder="Site">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
                        <input class="form-control" type="text" name="facebook" placeholder="Facebook">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-twitter-square"></i></span>
                        <input class="form-control" type="text" name="twitter" placeholder="Twitter">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input class="form-control" type="text" name="instagram" placeholder="Instagram">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-linkedin-square"></i></span>
                        <input class="form-control" type="text" name="linkedin" placeholder="Linkedin">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span>
                        <input class="form-control" type="text" name="outros" placeholder="Outros">
                    </div>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset>

            <fieldset>
                <h4>Indique até três iniciativas que na sua opinião devem participar do processo de mapeamento:</h4>
                <h5>Iniciativa 1</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="indica_nome_1" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" name="indica_email_1" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                    
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                <input type="tel" name="indica_telefone_1" placeholder="Telefone" class="f1-last-name form-control" id="inputTel3">
                </div>
                <h5>Iniciativa 2</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_2" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" name="indica_email_2" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">                    
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_2" placeholder="Telefone" class="f1-last-name form-control" id="inputTel4">
                </div>
                <h5>Iniciativa 3</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_3" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="indica_email_3" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_3" placeholder="Telefone" class="f1-last-name form-control" id="inputTel5">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="submit" class="btn btn-submit">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
    