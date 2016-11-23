<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" action="" method="post" class="f1">

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
                <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset>


          
             <!--Etapa 2 Formulário: Organizaçāo -->

        <fieldset>
                <h5>A sua Organizaçāo está dentro de uma organização juridicamente constituída?*</h5>
                <h6><em>se, sim digite o CNPJ no campo abaixo.</em></h5>
             
                  
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-cnpj" >
                        <option value=""></option>
                        <option value="sim">sim</option>
                        <option value="nao">nao</option>
                    </select>    

                    <input type="text" id="inputcnpj" class="f1-last-name form-control" placeholder="xx.xxx.xxxx/xxxx-xx, a inserção deste número é opciona"style='display: none' />
                    <script>

                        var dropdown = document.getElementById('organizacao-cnpj');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "sim") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput = document.getElementById('inputcnpj');
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
                    

                <h5>A sua Organizaçāo está localizada na…*</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="iniciativa-zona" value="rural" class="f1-last-name form-control"> Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="iniciativa-zona" value="urbana" class="f1-last-name form-control"> Zona Urbana
                    </label>
                </div>

                <h5>Nome da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" name="iniciativa-nome" maxlength="50" class="f1-last-name form-control">
                </div>


                <h5>Sigla da Organizaçāo:</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="iniciativa-sigla" style="text-transform:uppercase" class="f1-last-name form-control">
                </div>

                <h5>Telefone da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Telefone</label>
                    <input type="text" name="iniciativa-telefone" placeholder="(xx) xxxxx-xxxx"class="f1-last-name form-control">
                </div>

                <h5>E-mail da Organizaçāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="text" name="iniciativa-email" class="f1-last-name form-control"class="f1-last-name form-control">
                </div>

                 <h5>Como sua organizaçāo se identifica*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus" ></label>
                    <select class="f1-last-name form-control" id="organizacao-tipo" >
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
                </div>

                 <h5> Quando sua Organizaçāo iniciou as atividades?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="year_organizacao" name="year_organizacao">
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
                    <select class="f1-last-name form-control" id="organizacao-pessoas_envolvidas" >
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

                    h5>Qual foi seu orçamento em?*</h5>
                 <h5>2014</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2014</label>
                    <input type="text" name="f1-last-name" placeholder="R$ xxxxxx" class="f1-last-name form-control" id="organizacao_orcamento2014">
                </div>
                <h5>2015</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2015</label>
                    <input type="text" name="f1-last-name" placeholder="R$ xxxxxx" class="f1-last-name form-control" id="organizacao_orcamento2015">
                </div>
                <h5>2016</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2016</label>
                    <input type="text" name="f1-last-name" placeholder="R$ xxxxxx" class="f1-last-name form-control" id="organizacao_orcamento2016">
                </div>

                <h5>Sua Organizaçāo recebe recursos financeiros?</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="organizacao-recursos1" value="sim" class="form-control-radio"> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="organizacao-recursos2" value="nao" class="form-control-radio"> Nāo
                    </label>
                </div>

                <h5>Qual é a origem?</h5>
                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="organizacao-origem1" value="origem1" class="form-control-radio">Doação Pessoa Física 
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="organizacao-origem2" value="origem2" class="form-control-radio">Edital 
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="organizacao-origem3" value="origem3" class="form-control-radio">Investimento Direto/Patrocínio
 
                    </label>
                </div>

                <h5>O que faz Organizaçāo?*(até 500 caracteres)</h5>                                  
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself"></label>
                    <textarea name="sobre_iniciativa" maxlength="500" placeholder="Fale sobre a sua organizaçāo...." 
                    class="f1-about-yourself form-control" id="sobre_organizacao"></textarea>
                </div>


                 <h5>Qual o público direto atendido pela sua Organizaçāo?*
</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-publico" >
                        <option value=""></option>
                        <option value="1">Empresas</option>
                        <option value="2">Organizações Sociais</option>
                        <option value="3">Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher </option>
                        <option value="4">Movimentos, coletivos, redes, fóruns</option>
                        <option value="5">Adolescentes e jovens</option>
                        <option value="6">Homens</option>
                        <option value="7">Mulheres</option>
                           
                    </select>

                    <h5>Nomeie e descreva as iniciativas da sua organização que trabalham com empoderamento das mulheres*?</h5>
                 <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona1"  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas1" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong1"></textarea>
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona2"  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas2" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong2"></textarea>
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona3" class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas3" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong3"></textarea>
                </div>

                <h5>Clique nos Estados em que sua organizaçāo tem atuação direta*</h5>
                    <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar várias opções.</em></h6>
                    <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="organizacao_estado" multiple>
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
                        <input type="radio" name="organizaçāo-politica_sim" value="nao" class="form-control-radio"> Nāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="organizaçāo-politica_nao" value="sim" class="form-control-radio"> Sim
                    </label>
                </div>

              
                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="organizaçāo-origem1" value="origem1" class="form-control-radio">municipal 
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="organizaçāo-origem2" value="origem2" class="form-control-radio">estadual
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="organizaçāo-origem3" value="origem3" class="form-control-radio">nacional 
                    </label>
                    <textarea name="organizaçāo_politica_publica" placeholder="Opcional: (campo aberto para detalhar, )"

                    class="f1-about-yourself form-control" id="organizaçāo_politica_publica"></textarea>
                </div>


                <!-- Organizacao 27-->


<h5>Você realiza monitoramento e avaliação sistematizada das atividades da Organizaçāo?*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-avaliacao" >
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim</option>
                         
                        </option> 
                    </select>
                    <textarea type="text" id="inputAvaliacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="quais foram os resultados comprovados alcançados até hoje? 500 caracteres..
"style='display: none' /></textarea>
                    <script>

                        var dropdown = document.getElementById('organizacao-avaliacao');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput1 = document.getElementById('inputAvaliacaoOng');
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
                </div><!--27/Organizacao-->

<!-- 28 Organizacao-->

<h5>Sua Organizaçāo tem uma estratégia de comunicação própria?*</h5>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizaçāo-comunicacao" >
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, qual?</option>
                         
                        </option> 
                    </select>
                    <textarea type="text" id="inputComunicacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Descreva estratégia de comunicação..
"style='display: none' /></textarea>
                    <script>

                        var dropdown = document.getElementById('organizaçāo-comunicacao');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput1 = document.getElementById('inputComunicacaoOng');
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
                </div><!--28/Organizacao-->



      <!-- 29 Organizacao-->

<h5>A sua Organizaçāo recebeu premiações, certificações, etc*?
*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-premiacao" >
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, quais?</option>
                         
                        </option> 
                    </select>
                    <textarea type="text" id="inputPremiacaoOng" class="f1-last-name form-control" maxlength="500"placeholder="Premiações/Certificações..
"style='display: none' /></textarea>
                    <script>

                        var dropdown = document.getElementById('organizacao-premiacao');
                            
                            function onDropdownChanged()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                
                                if(dropdown.options[dropdown.selectedIndex].value == "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    var meuInput = document.getElementById('inputPremiacaoOng');
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
                </div><!--29/Organizacao-->


                <h5>Quais são as organizações com atuação na temática da mulher que sua organizaçāo se relaciona diretamente?</h5>
                 <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona1"  class="f1-last-name form-control">
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona2"  class="f1-last-name form-control">
                </div>
                <h5>Nome</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona3" class="f1-last-name form-control">
                </div> 
            </fieldset>


                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>

            </fieldset>

                 

            <!--Etapa 3 Formulário: Endereço/Organizaçāo -->


            <fieldset>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Região</label>
                    <select class="f1-last-name form-control" id="regiao">
                        <option value="norte">Norte</option>
                        <option value="nordeste">Nordeste</option>
                        <option value="centro-oeste">Centro-Oeste</option>
                        <option value="sul">Sul</option>
                        <option value="sudeste">Sudeste</option>
                    </select> 
                </div>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Estado</label>
                    <select class="f1-last-name form-control" id="estados">
                        <option value=""></option>
                    </select> 
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cidade</label>
                    <select class="f1-last-name form-control" id="cidades"> 
                        <option value=""></option>
                    </select> 
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro</label>
                    <input type="text" name="iniciativa-bairro" placeholder="Bairro..." class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua</label>
                    <input type="text" name="iniciativa-rua" placeholder="Rua/Av...*" class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número</label>
                    <input type="text" name="iniciativa-numero" placeholder="Numero...*" class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento</label>
                    <input type="text" name="iniciativa-complemento" placeholder="Complemento...*" class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep</label>
                    <input type="text" name="iniciativa-cep" placeholder="CEP...*" class="f1-last-name form-control">
                </div> 

               <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Previous</button>
                    <button type="button" class="btn btn-next">Next</button>
                </div>

            </fieldset>



    
    </form>
</div>
</div>