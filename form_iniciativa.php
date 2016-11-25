                    <!-- Bootstrap core JavaScript
         ================================================== -->

            <script src="assets/js/bootstrap.min.js"></script>
            <script src="assets/js/validator.min.js"></script>
            <script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
            <script type="text/javascript"></script>

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
    	<form role="form" data-toggle="validator" action="" method="post" class="f1">

    		<h3>Cadastro UNA Ecossistema<br>Iniciativa</h3>
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
    				<p>Iniciativa</p>
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

            <fieldset>
                <h4>Dados Pessoais Contato 1:</h4>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="text" name="f1-last-name"  value="<?php echo $_SESSION['usuario_email']; ?>" class="f1-last-name form-control" id="f1-last-name">
                    
                </div>
                <h5>Telefone Fixo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="text" name="f1-last-name" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control" id="inputTel1" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="text" name="f1-last-name" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control" id="inputCel1" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <h4>Dados Pessoais Contato 2:</h4>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="f1-last-name" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>
                 <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="text" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                    
                </div>

                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="text" name="f1-last-name" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control" id="inputTel2"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="text" name="f1-last-name" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control" id="inputCel2"required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <div class="f1-buttons">
                <button type="button" class="btn btn-next">Próximo</button>
               </div>
            </fieldset><!--Dados Pessoais-->


            <!--Etapa2  Formulário: Iniciativa -->

            <fieldset>
                <h5>A sua iniciativa está dentro de uma organização juridicamente constituída?*</h5>
                <div class="form-group">                                   
                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-ong" value="sim" class="form-control-radio"required data-error = "Campo está em branco, favor preencher.">
                                    <div class="help-block with-errors"></div> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-ong" value="nao" class="form-control-radio"required data-error = "Campo está em branco, favor preencher.">
                        <div class="help-block with-errors"></div> Não
                    </label>
                </div>

                <h5>A sua iniciativa está localizada na…*</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="iniciativa-zona" value="rural" class="form-control-radio" required data-error = "Campo está em branco, favor preencher.">
                                    <div class="help-block with-errors"></div>Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-zona" value="urbana" class="form-control-radio"required data-error = "Campo está em branco, favor preencher.">
                        <div class="help-block with-errors"></div> Zona Urbana
                    </label>
                </div>

                <h5>Nome da Iniciativa*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" name="iniciativa-nome" maxlength="50" class="f1-last-name form-control" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>


                <h5>Sigla da iniciativa:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="iniciativa-sigla" style="text-transform:uppercase"class="f1-last-name form-control">
                                    
                </div>

                <h5>Telefone da iniciativa*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Telefone</label>
                    <input type="text" name="iniciativa-telefone" placeholder="(xx) xxxx-xxxx"class="f1-last-name form-control" id="inputTel3" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>

                <h5>E-mail da iniciativa*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="email" name="iniciativa-email"class="f1-last-name form-control" required data-error = "Por favor, informe um e-mail correto">
                    <div class="help-block with-errors"></div>
                </div>


                <h5>Como sua iniciativa se identifica?*</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="iniciativa-acao" value="acao" class="form-control-radio" required data-error = "Campo está em branco, favor preencher.">
                        <div class="help-block with-errors"></div> Açāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-projeto" value="projeto" class="form-control-radio" required data-error = "Campo está em branco, favor preencher.">
                                    <div class="help-block with-errors"></div> Projeto
                    </label>
                </div>

                <h5>De qual Natureza?</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="iniciativa-natureza">           
                        <option value=""></option>
                        <option value="academica">Acadêmica</option>
                        <option value="coletivo">Coletivo</option>
                        <option value="empresa_privada">Empresa Privada</option>
                        <option value="investimento_social_privado">Investimento Social Privado</option>
                        <option value="fundos">Fundos</option>
                        <option value="governo">Governo</option>
                        <option value="movimento">Movimento</option>
                        <option value="negocio_social">Negócio Social</option>
                        <option value="ong_sociedade_civil">Organização da Sociedade Civil (ex: associação, ong, oscip, etc)
                        <option value="redes">Redes</option> 
                        <option value="Outros">Outros</option> 
                        </option> 
                    </select>
                    <input type="text" id="inputOutros" class="f1-last-name form-control" placeholder="Descreva outro tipo..."style='display: none' />
                    <script>

                        var dropdown = document.getElementById('iniciativa-natureza');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "Outros") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor Outros');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput = document.getElementById('inputOutros');
                                    meuInput.style.display = 'block';
                                }
                            }
                            
                            if (dropdown.addEventListener)
                            {
                                dropdown.addEventListener('change', onDropdownChanged, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdown.attachEvent('onchange', onDropdownChanged, false);
                            }

                    </script>
                </div>
                
                <h5> Quando sua iniciativa começou as atividades?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="year" name="year" required data-error = "Selecione o ano.">
                    <div class="help-block with-errors"></div>
                        <script>
                          var myDate = new Date();
                          var year = myDate.getFullYear();
                          for(var i = 1900; i < year+1; i++){
                              document.write('<option value=""'+i+'">'+i+'</option>');
                          }
                          </script>
                    </select>


               <h5>Quantas pessoas estão envolvidas neste trabalho?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="iniciativa-pessoas_envolvidas" required data-error = "Selecione uma opçāo">
                     <div class="help-block with-errors"></div>
                        <option value=""></option>
                        <option value="1">1-5</option>
                        <option value="2">6-10</option>
                        <option value="3">11-20</option>
                        <option value="4">21-50</option>
                        <option value="5">51-100</option>
                        <option value="6">101-500</option>
                        <option value="7">251-1000</option>
                        <option value="8">501-1000</option>
                        <option value="9">1001+</option>     
                    </select>

               <h5>Qual foi seu orçamento da sua iniciativa?*</h5>
                 <h5>2014</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2014</label>
                    <input type="number" name="f1-last-name" placeholder="R$ xxxxxx" class="f1-last-name form-control" id="iniciativa_orcamento2014"required data-error = "favor preencher, um valor correto.">
                    <div class="help-block with-errors"></div>
                </div>
                <h5>2015</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2015</label>
                    <input type="number" name="f1-last-name" placeholder="R$ xxxxxx" class="f1-last-name form-control" id="iniciativa_orcamento2015" required data-error = "favor preencher, um valor correto.">
                    <div class="help-block with-errors"></div>
                </div>
                <h5>2016</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2016</label>
                    <input type="number" name="f1-last-name" placeholder="R$ xxxxxx" class="f1-last-name form-control" id="iniciativa_orcamento2016"required data-error = "favor preencher, um valor correto.">
                    <div class="help-block with-errors"></div>
                </div>


                <h5>Sua iniciativa recebe recursos financeiros?</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="iniciativa-recursos1" value="sim" class="form-control-radio"> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-recursos2" value="nao" class="form-control-radio"> Nāo
                    </label>
                </div>

                <h5>Qual é a origem?</h5>
                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="iniciativa-origem1" value="origem1" class="form-control-radio">Doação Pessoa Física 
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="iniciativa-origem2" value="origem2" class="form-control-radio">Edital 
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="iniciativa-origem3" value="origem3" class="form-control-radio">Investimento Direto/Patrocínio
 
                    </label>
                </div>

           <h5>O que faz sua iniciativa?* (até 500 caracteres).</h5>                                  
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself"></label>
                    <textarea name="sobre_iniciativa" maxlength="500" placeholder="Fale sobre a sua organizaçāo...." 
                    class="f1-about-yourself form-control" id="sobre_organizacao" required data-error = "Campo está em branco, favor preencher.."></textarea>
                    <div class="help-block with-errors">
                </div>

                <h5>Qual o público direto atendido pela sua iniciativa?*
</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="iniciativa-publico" required data-error = "Selecione uma opçāo.">
                    <div class="help-block with-errors"></div> 
                        <option value=""></option>
                        <option value="1">Empresas</option>
                        <option value="2">Organizações Sociais</option>
                        <option value="3">Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher </option>
                        <option value="4">Movimentos, coletivos, redes, fóruns</option>
                        <option value="5">Adolescentes e jovens</option>
                        <option value="6">Homens</option>
                        <option value="7">Mulheres</option>
                           
                    </select>
                    
                    <h5>Clique nos Estados que sua iniciativa tem atuação direta*</h5>
                    <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar várias opções.</em></h6>
                    <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="iniciativa_estado" multiple required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>
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

                    <h5>Sua iniciativa influenciou políticas públicas?*</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="iniciativa-politica_sim" value="nao" class="form-control-radio" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>Nāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-politica_nao" value="sim" class="form-control-radio" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>Sim
                    </label>
                </div>

              
                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="iniciativa-origem1" value="origem1" class="form-control-radio" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>municipal 
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="iniciativa-origem2" value="origem2" class="form-control-radio"required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>estadual
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="iniciativa-origem3" value="origem3" class="form-control-radio"required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>nacional 
                    </label>
                    <textarea name="sobre_iniciativa" placeholder="Opcional: (campo aberto para detalhar, )"

                    class="f1-about-yourself form-control" id="sobre_iniciativa"></textarea>
                </div>




<!-- 26 Iniciativa-->


<h5>Você realiza monitoramento e avaliação sistematizada das atividades desta iniciativa?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="iniciativa-avaliacao" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim</option>
                         
                        </option> 
                    </select>
                    <textarea type="text" id="inputAvaliacao" class="f1-last-name form-control" maxlength="500" placeholder="quais foram os resultados comprovados alcançados até hoje? 500 caracteres..
"style='display: none' /></textarea>
                    <script>

                        var dropdown = document.getElementById('iniciativa-avaliacao');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor Outros');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput1 = document.getElementById('inputAvaliacao');
                                    meuInput1.style.display = 'block';
                                }
                            }
                            
                            if (dropdown.addEventListener)
                            {
                                dropdown.addEventListener('change', onDropdownChanged, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdown.attachEvent('onchange', onDropdownChanged, false);
                            }

                    </script>
                </div><!--26/Inicitiva-->

<!-- 27 Iniciativa-->

<h5>Sua iniciativa tem uma estratégia de comunicação própria?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="iniciativa-comunicacao" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, qual?</option>
                         
                        </option> 
                    </select>
                    <textarea type="text" id="inputComunicacao" class="f1-last-name form-control" maxlength="500" placeholder="Descreva estratégia de comunicação..
"style='display: none' /></textarea>
                    <script>

                        var dropdown = document.getElementById('iniciativa-comunicacao');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput1 = document.getElementById('inputComunicacao');
                                    meuInput1.style.display = 'block';
                                }
                            }
                            
                            if (dropdown.addEventListener)
                            {
                                dropdown.addEventListener('change', onDropdownChanged, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdown.attachEvent('onchange', onDropdownChanged, false);
                            }

                    </script>
                </div><!--27/Inicitiva-->



      <!-- 28 Iniciativa-->

<h5>A sua iniciativa recebeu premiações, certificações, etc*?
*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="iniciativa-premiacao" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, quais?</option>
                         
                        </option> 
                    </select>
                    <textarea type="text" id="inputPremiacao" class="f1-last-name form-control" maxlength="500"placeholder="Premiações/Certificações..
"style='display: none' /></textarea>
                    <script>

                        var dropdown = document.getElementById('iniciativa-premiacao');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput = document.getElementById('inputPremiacao');
                                    meuInput.style.display = 'block';
                                }
                            }
                            
                            if (dropdown.addEventListener)
                            {
                                dropdown.addEventListener('change', onDropdownChanged, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdown.attachEvent('onchange', onDropdownChanged, false);
                            }

                    </script>
                </div><!--28/Inicitiva-->


                <!-- 29-->

                 <h5>Quais são as organizações com atuação na temática da mulher que sua iniciativa se relaciona diretamente?</h5>
                 <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="iniciativa-relaciona1"  class="f1-last-name form-control">
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="iniciativa-relaciona2"  class="f1-last-name form-control">
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="iniciativa-relaciona3" class="f1-last-name form-control">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div> 
            </fieldset> 

             <!--Etapa 3 Formulário: Endereço/Iniciativa -->

            <fieldset>
                <h5>Regiāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="regiao"required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>
                        <option value="norte">Norte</option>
                        <option value="nordeste">Nordeste</option>
                        <option value="centro-oeste">Centro-Oeste</option>
                        <option value="sul">Sul</option>
                        <option value="sudeste">Sudeste</option>
                    </select> 
                </div>

                <h5>Estado*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Estado</label>
                    <select class="f1-last-name form-control" id="estados" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div>
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
                </div>

                <h5>Cidade*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="cidades" required data-error = "Selecione uma opçāo.">
                        <div class="help-block with-errors"></div> 
                        <option value="1">Rio Branco</option>
                        <option value="2">Maceió</option>
                        <option value="3">Macapá</option>
                        <option value="4">Manaus</option>
                        <option value="5">Salvador</option>
                        <option value="6">Fortaleza</option>
                        <option value="7">Brasília</option>
                        <option value="8">Vitória</option>
                        <option value="9">Goiânia</option>
                        <option value="10">São Luís</option>
                        <option value="11">Cuiabá</option>
                        <option value="12">Campo Grande</option>
                        <option value="13">Belo Horizonte</option>
                        <option value="14">Belém</option>
                        <option value="15">João Pessoa</option>
                        <option value="16">Curitiba</option>
                        <option value="17">Recife</option>
                        <option value="18">Teresina</option>
                        <option value="19">Natal</option>
                        <option value="20">Porto Alegre</option>
                        <option value="21">Porto Velho</option>
                        <option value="22">Boa Vista</option>
                        <option value="23">Florianópolis</option>
                        <option value="24">Sāo Paulo</option>
                        <option value="25">Aracaju</option>
                        <option value="25">Palmas</option>
                    </select> 
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro*</label>
                    <input type="text" name="iniciativa-bairro" placeholder="Bairro..." class="f1-last-name form-control" required data-error = "Campo está em branco, favor preencher.">
                        <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua*</label>
                    <input type="text" name="iniciativa-rua" placeholder="Rua/Av...*" class="f1-last-name form-control" required data-error = "Campo está em branco, favor preencher.">
                        <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número*</label>
                    <input type="number" name="iniciativa-numero" placeholder="Numero...*"class="f1-last-name form-control" required data-error = "Campo está em branco, favor preencher.">
                        <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento*</label>
                    <input type="text" name="iniciativa-complemento" placeholder="Complemento...*"class="f1-last-name form-control" required data-error = "Campo está em branco, favor preencher.">
                        <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep*</label>
                    <input type="number" name="iniciativa-cep" id="inputCep"placeholder="CEP...*"class="f1-last-name form-control" required data-error = "Campo está em branco, favor preencher.">
                    <div class="help-block with-errors"></div>
                </div>              
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset>

             <!--Etapa 4 Formulário: Mídia Social-->

            <fieldset>
                <h5>Onde podemos encontrar mais informação sobre sua organização?*(Preencha pelo menos 1 item):</h5>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-mouse-pointer"></i></span>
                      <input class="form-control" type="text" placeholder="Site">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
                      <input class="form-control" type="text" placeholder="Facebook">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-twitter-square"></i></span>
                      <input class="form-control" type="text" placeholder="Twitter">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                      <input class="form-control" type="text" placeholder="Instagram">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-linkedin-square"></i></span>
                      <input class="form-control" type="text" placeholder="Linkedin">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span>
                      <input class="form-control" type="text" placeholder="Outros">
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
                    <input type="text" name="f1-last-name" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                    
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="f1-last-name" placeholder="Telefone" class="f1-last-name form-control" id="inputTel4">
                </div>
                <h5>Iniciativa 2</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="f1-last-name" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="text" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">                    
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="f1-last-name" placeholder="Telefone" class="f1-last-name form-control" id="inputTel5">
                </div>
                <h5>Iniciativa 3</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="f1-last-name" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="f1-last-name" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="f1-last-name" placeholder="Telefone" class="f1-last-name form-control" id="inputTel6">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="submit" class="btn btn-submit">Enviar</button>
                </div>
            </fieldset> 
    	</form>
    
    </div>
</div>
    
