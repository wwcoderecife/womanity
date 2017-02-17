
          
        <!-- Bootstrap core JavaScript
         ================================================== -->

            <!--<script src="assets/js/jquery-1.11.1.min.js"></script>-->
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <!--<script src="assets/js/bootstrap.min.js"></script>-->
            <script src="assets/js/jquery.backstretch.min.js"></script>
            <script src="assets/js/retina-1.1.0.min.js"></script>	
            <script src="assets/js/validatortel.js"></script>
            <script src="assets/js/textarea.js"></script>
            <script src="assets/js/campobranco.js"></script>
            <!--<script src="assets/js/validacampo.js"></script>-->



          
            <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>

        
        <script>
        $(document).ready(function(){
         $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
         $('.phone_with_ddd').mask('(00) 0000-0000');
         $('.phone_with_dddcel').mask('(00) 00000-0000');
         $('.cep').mask('00000-000');
         $('.money').mask('000.000.000.000.000,00', {reverse: true});
        });
        </script>
    


<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" name="form" action="classes/prepare_cadastro.php" method="post" class="f1 form-ong">

            <h3>Cadastro no Ecossistema<br>Organizaçāo</h3>
            <p>Preencha os campos obrigatórios *</p>

            <p>Lembre-se de preencher os campos obrigatórios em todas as etapas e clicar no botão ENVIAR na etapa 5. O sistema não irá salvar informações parcialmente inseridas</p>
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


          <fieldset class="tab dados_pessoais" >
                <h4>Dados Pessoais Contato 1:</h4>
                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="nome1" placeholder="responsável pelo preenchimento do cadastro" class="f1-last-name form-control" id="inputNome1" required >
                    
                </div>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="cargo_1" placeholder="Cargo" class="f1-last-name form-control" id="inputCargo1"  required >
                    
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="email_1"  value="<?php echo $_SESSION['usuario_email']; ?>" class="f1-last-name form-control" id="inputEmail1" required >
                   
                </div>
                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" onblur="ExitField('inputTel1','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" name="telefone_1" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel1" required >
                    <label id="msgTel" ></label>
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" onblur="ExitField('inputCel1','msgCel','Celular inválido, número deve conter 15 caracteres',15);" name="celular_1" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel1" required >
                    <label id="msgCel" ></label>
                </div>

                <h4>Dados Pessoais Contato 2:</h4>
                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="nome2" placeholder="responsável pela organização ou suplente" class="f1-last-name form-control" id="inputNome2" required >
                    
                </div>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="cargo_2" placeholder="Cargo" class="f1-last-name form-control" id="inputCargo2"required >
                    
                </div>
                 <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="email_2" placeholder="email@email.com" class="f1-last-name form-control" id="inputEmail2"required >
                    
                    
                </div>

                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" onblur="ExitField('inputTel2','msgTel2','Telefone inválido, número deve conter 14 caracteres ', 14);" name="telefone_2" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel2"required >
		    <label id="msgTel2" ></label>	
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" onblur="ExitField('inputCel2','msgCel2','Celular inválido, número deve conter 15 caracteres',15);" name="celular_2" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel2"required >
                    <label id="msgCel2" ></label>
                </div>

                <div class="f1-buttons">
                <button type="button" class="btn btn-next" onclick= "return validacampobranco();" >Próximo</button>
               </div>
            </fieldset><!--Dados Pessoais-->


          
             <!--Etapa 2 Formulário: Organizaçāo -->

        <fieldset class="tab organizacao">
                <h4>1. A sua organização está juridicamente constituída?*</h5>
                <h6><em>Se sim, digite o CNPJ no campo abaixo</em></h5>
             
                  
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="cnpj"id="organizacao-cnpj"required>
                        <option value=""></option>
                        <option value="sim">sim</option>
                        <option value="nao">nao</option>
                    </select>    

                <input type="text" id="inputcnpj" onblur="ExitField('inputcnpj','msgCnpj','CNPJ inválido, número deve conter 18 caracteres ', 18);" name="inputcnpj" class="f1-last-name form-control cnpj" placeholder="xx.xxx.xxx/xxxx-xx" style='display: none'/>
		<label id="msgCnpj"></label>	 
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
                    

                <h4>2. Onde a sua organizaçāo atua?*</h4>
                <div class="form-group">
                    <label class="radio-inline">
                       <input type="radio" name="zona" value="rural" class="form-control-radio" >Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="zona" value="urbana" class="form-control-radio">Zona Urbana
                    </label>
			
			<label class="radio-inline">
                           <input type="radio" name="zona" checked value="ambas" class="form-control-radio">Ambas
                        </label>
                </div>

                <h4>3. Qual o nome da sua organizaçāo?*</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" name="nome" id="inputNomeOng" maxlength="50" class="f1-last-name form-control" required>
                </div>


                <h4>4. Qual a sigla da sua organizaçāo?</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="sigla" id="inputSiglaOng" class="f1-last-name form-control">
                </div>

                <h4>5. Qual o telefone da sua organizaçāo?*</h4>
                <div class="form-group">
                    <label class="sr-only">Telefone</label>
                    <input type="tel" onblur="ExitField('inputelOng','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" id="inputelOng" required name="organizacao-telefone" placeholder="(xx) xxxx-xxxx"class="f1-last-name form-control phone_with_ddd">
                </div>

                <h4>6. Qual o e-mail da sua organizaçāo?*</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="email" name="email" id="inputEmailOng"required class="f1-last-name form-control"class="f1-last-name form-control">
                </div>

                 <h4>7. Como a sua organizaçāo se identifica?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus" ></label>
                    <select class="f1-last-name form-control" id="organizacao-tipo" name="tipo" required>
                        <option value=""></option>
                        <option value="academica">Academia</option>
                        <option value="coletivo">Coletivo</option>
                        <option value="cooperativa">Cooperativa</option>
                        <option value="empresa_privada">Empresa Privada</option>
                        <option value="investimento_social_privado">Investimento Social Privado</option>
                        <option value="fundos">Fundos</option>
                        <option value="governo">Governo</option>
                        <option value="grupos_produtivos">Grupos Produtivos</option>
                        <option value="movimento">Movimento</option>
                        <option value="negocio_social">Negócio Social</option>
                        <option value="ong_sociedade_civil">Organização da Sociedade Civil (ex: associação,  entidade religiosa, instituto, ong, oscip, etc.)
                        <option value="redes">Redes</option> 
                        <option value="outros">Outros</option>
                    </select> 
                    <input type="text" id="inputoutros" name="identifica_organizacao_outros" class="f1-last-name form-control" placeholder="descreva outro tipo"style='display: none' />
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


                 <h4> 8. Em que ano a organização iniciou as atividades?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="year_organizacao" name="anoatividade" required>
                    <option value=""></option>
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


                <h4>9. Quantos colaboradores,funcionários ou voluntários estão envolvidos diretamente neste trabalho?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="pessoas_envolvidas" name="pessoas_envolvidas" required>
                        <option value=""></option>
                        <option value="1-5">1-5</option>
                        <option value="6-10">6-10</option>
                        <option value="11-20">11-20</option>
                        <option value="21-50">21-50</option>
                        <option value="51-100">51-100</option>
                        <option value="101-500">101-500</option>
                        <option value="251-500">251-500</option>
                        <option value="501-1000">501-1000</option>
                        <option value="1001+">1001+</option>     
                    </select>
                </div>


                <h4>10. Quantas pessoas a sua organização beneficia diretamente?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  id="pessoas_beneficiadas" name="pessoas_beneficiadas">
                        <option value=""></option>
                        <option value="até 50">até 50</option>
                        <option value="51-250">51-250</option>
                        <option value="251-500">251-500</option>
                        <option value="501-1000">501-1000</option>
                        <option value="1001-2500">1001-2500</option>
                        <option value="2501-5000">2501-5000</option>
                        <option value="5001-10000">5001-10000</option>
                        <option value="10001-50000">10001-50000</option>
                        <option value="50001-100000">50001-100000</option>
                        <option value="100000-500000">100000-500000</option>
                        <option value="500000-1000000">500000-1000000</option> 
                        <option value="1000000+">1000000+</option>           
                    </select>
                  </div>

                <h4>11. Qual foi o orçamento bruto da sua organização? *</h4>
                
                <script type="text/javascript">

                function check_orcamento(){
                    if ($('input[name="nao_tem_orcamento[]"]:checked').length > 0){

                        $('#nao_tenho_orcamento_input').attr('value', 'Não tenho orçamento');
                        $('#orcamento_2014').val('');
                        $('#orcamento_2015').val('');
                        $('#orcamento_2016').val('');
                        $('#orcamento_2014').attr('disabled', true);
                        $('#orcamento_2015').attr('disabled', true);
                        $('#orcamento_2016').attr('disabled', true);
                    }else{
                        $('#orcamento_2014').attr('disabled', false);
                        $('#orcamento_2015').attr('disabled', false);
                        $('#orcamento_2016').attr('disabled', false);
                        $('#nao_tenho_orcamento_input').attr('value', '');
                    }

                    console.log( $('#nao_tenho_orcamento_input').val());
                }
                </script>

                 <h5>Em 2014</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2014</label>
                    <input type="text" id="orcamento_2014" name="orcamento_2014"  placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2014">

                </div>
                <h5>Em 2015</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2015</label>
                    <input type="text" id="orcamento_2015" name="orcamento_2015"  placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2015">
                </div>
                <h5>Em 2016</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2016</label>
                    <input type="text" id="orcamento_2016" name="orcamento_2016"  placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2016">
                </div>

                <h5>Não tenho orçamento</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name"></label>
                    <input type="checkbox" value="sim" name="nao_tem_orcamento[]" onclick="check_orcamento(); "> Não tenho Orçamento
                    <input type="HIDDEN" id="nao_tenho_orcamento_input" name="justificativa_orcamento" class="f1-last-name form-control">
                </div>

                
                
                <h5>11.1. A sua Organizaçāo recebe recursos financeiros?</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="recursos" value="sim" class="form-control-radio"> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="recursos" checked value="nao" class="form-control-radio"> Nāo
                    </label>
                </div>


               <h5>11.1.1. Quais são as principais fontes de recursos para a realização dos projetos?</h5>
                <div class="form-group">
                    <input type="checkbox" name="recursos_origem[]" value="doação de pessoa física">doação de pessoa física</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo federal">edital público (governo federal)</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo estadual">edital público (governo estadual)</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público municipal">edital público municipal(governo municipal)</br>
                    <input type="checkbox" name="recursos_origem[]" value="empresas">empresas</br>
                    <input type="checkbox" name="recursos_origem[]" value="endowment/fundo patrimonial">endowment/fundo patrimonial</br>
                    <input type="checkbox" name="recursos_origem[]" value="fomento à pesquisa">fomento à pesquisa</br>
                    <input type="checkbox" name="recursos_origem[]" value="institutos ou fundações empresariais">institutos ou fundações empresariais</br>
                    <input type="checkbox" name="recursos_origem[]" value="investimento direto/patrocínio">investimento direto/patrocínio</br>
                    <input type="checkbox" name="recursos_origem[]" value="investimento de impacto">investimento de impacto</br>
                    <input type="checkbox" name="recursos_origem[]" value="leis de incentivo">leis de incentivo<br>
                    <input type="checkbox" name="recursos_origem[]" value="organizações do sistema ONU">organizações do sistema ONU<br>
                    <input type="checkbox" name="recursos_origem[]" value="organizações não governamentais brasileiras ou internacionais">organizações não governamentais brasileiras ou internacionais<br>
                    <input type="checkbox" name="recursos_origem[]" value="subvenções públicas ">subvenções públicas<br>
                    <input type="checkbox" name="recursos_origem[]" value="venda de produtos/prestação de serviços">venda de produtos/prestação de serviços<br>
                    <input type="checkbox" name="recursos_origem[]" value="outros">outros<br>
                    <input type="text" id="outrosprojetos" name="fonte_recursos_outros" placeholder=" outros..." style="display:block;" class="f1-last-name form-control">
               </div> 



            <!--Tabela Temas-->

            <h4>12. Quais são as áreas de atuação da sua Organização? </h4>
			<h5>Escolha até 5 (cinco) temas dentro da sua área de atuação*:</h5>

            <div class="form-group" style="border: 1px solid #ddd">
            <div class="table-responsive">
            <table id="form1" required name="table_temas"class="table table-hover col-sm-12">

             <thead>
                <tr>
                    <th></th>
                    <th>Temas</th>
                    <th>Descriçāo</th>
                    <th>Regiões</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" id="arte_cultura" name="temas[ ]" value="arte_cultura" class="no-margin" onclick="verificar()"></td>
                    <td>Arte e Cultura.</td>
                    <td>Promoção do acesso de mulheres à cultura e/ou incentivo à produção das várias expressões artísticas e valorização de práticas culturais e tradicionais.</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Norte" >Norte<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Sudeste">Sudeste<br>
                    </td>   
                     
                </tr>
                <tr>
                    <td><input type="checkbox" id="ciencia_tecnologia" name="temas[ ]" value="ciencia_tecnologia" class="no-margin" onclick="verificar()"></td>
                    <td>Ciência e Tecnologia.</td>
                    <td>Promoção do acesso a linguagens, equipamentos e/ou a produção de ciência e tecnologia por mulheres.</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Sudeste">Sudeste<br>
                    </td> 
                   
                </tr>
                <tr>
                    <td><input type="checkbox" id="democracia_participação_politica" name="temas[ ]" value="democracia_participação_politica" class="no-margin" onclick="verificar()"></td>
                    <td> Democracia e Participação Política.</td>
                    <td>Ações de incentivo à participação de mulheres na vida política e democrática institucional (partidos, conselhos, órgãos e instâncias dos poderes executivo, legislativo e judiciário).</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Sudeste">Sudeste<br>
                    </td> 
                </tr>

                <tr>
                    <td><input type="checkbox" id="educacao_formacao" name="temas[ ]" value="educacao_formacao" class="no-margin" onclick="verificar()"></td>
                    <td>Educação e Formação.</td>
                    <td>Oferta de educação formal (escolar ou acadêmica), incentivo à escolaridade; formação de atores sociais, ações de educação popular e informal.</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Sudeste">Sudeste<br>
                    </td> 
                </tr>

                <tr>
                    <td><input type="checkbox" id="empreendedorismo_feminino_autonomia_economica" name="temas[ ]" value="empreendedorismo_feminino_autonomia_economica" class="no-margin" onclick="verificar()"></td>
                    <td>Empreendedorismo feminino e autonomia econômica.</td>
                    <td>Ações de incentivo ao empreendedorismo feminino e à autonomia econômica, por meio de capacitação e/ou financiamento, tais como cooperativismo, microcrédito, etc.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Sudeste">Sudeste<br>
                    </td> 
                </tr>

                <tr>
                    <td><input type="checkbox" id="enfrentamento_violencia" name="temas[ ]" value="enfrentamento_violencia" class="no-margin" onclick="verificar()"></td>
                    <td>Enfrentamento à Violência.</td>
                    <td>Trabalho de enfrentamento às mais variadas formas de violência, destinado a mulheres e homens.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Sudeste">Sudeste<br>
                    </td>
                  

                <tr>
                    <td><input type="checkbox" id="equidade_Condicoes_trabalho" name="temas[ ]" value="equidade_Condicoes_trabalho" class="no-margin" onclick="verificar()"></td>
                    <td>Equidade e Condições de Trabalho.</td>
                    <td>Oportunidades iguais para mulheres e homens no mercado de trabalho, divisão justa entre ambos os sexos, mesmas 
    possibilidades de desenvolvimento profissional e equiparação salarial; participação em cargos de liderança e conselho.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Sudeste">Sudeste<br>
                    </td>    
                </tr>

                <tr>
                    <td><input type="checkbox" id="esporte" name="temas[ ]" value="esporte" class="no-margin" onclick="verificar()"></td>
                    <td>Esportes.</td>
                    <td>Oferta, promoção e incentivo à realização de práticas esportivas por meninas e mulheres, sobretudo em modalidades tradicionalmente dominadas por homens.</td>
                     <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Sudeste">Sudeste<br>
                    </td> 
                </tr>
                <tr>
                    <td><input type="checkbox" id="indigenas" name="temas[ ]" value="indigenas" class="no-margin" onclick="verificar()"></td>
                    <td>Indígenas.</td>
                    <td>Ações destinadas à valorização das mulheres indígenas; ao enfrentamento de seus problemas específicos, à geração de renda e ao emponderamento político.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Sudeste">Sudeste<br>
                    </td> 
                </tr>
                <tr>
                    <td><input type="checkbox" id="LGBTT" name="temas[ ]" value="LGBTT" class="no-margin" onclick="verificar()"></td>
                    <td>LGBTT (Lésbicas, Gays, Bissexuais, Travestis, Transexuais e Transgêneros).</td>
                    <td>Projetos que atuam pela valorização e afirmação de pessoas LGBTT e combatem a violência e a discriminação contra esses públicos.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Sudeste">Sudeste<br>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="masculinidade" name="temas[ ]" value="masculinidade" class="no-margin" onclick="verificar()"></td>
                    <td>Masculinidades.</td>
                    <td>Ações voltadas para questões relativas à revisão do conceito hegemônico de masculinidade, a partir da perspectiva das relações de gênero.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Sudeste">Sudeste<br>
                    </td>
                </tr>
                <tr>
                     <td><input type="checkbox" id="meio_ambiente" name="temas[ ]" value="meio ambiente,seguranca,agricultura" class="no-margin" onclick="verificar()"></td>
                    <td>Meio Ambiente,Segurança Alimentar e Agricultura.</td>
                    <td>Trabalhos que relacionam questões de gênero, feminismo e meio ambiente. 
    Direito e acesso a alimentos de qualidade, em quantidade suficiente, saudáveis e ambientalmente sustentáveis.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Sudeste">Sudeste<br>
                    </td>

                </tr>

                <tr>
                    <td><input type="checkbox" id="midia_comunicacao" name="temas[ ]" value="midia_comunicacao" class="no-margin" onclick="verificar()"></td>
                    <td>Mídia e Comunicação.</td>
                    <td>Promoção do acesso de mulheres aos meios de comunicação pelo domínio de técnicas, equipamentos e linguagens; monitoramento da presença da mulher nas mídias e da cobertura adequada de temas sobre as questões das mulheres.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Sudeste">Sudeste<br>
                    </td>
               </tr>

                <tr>
                    <td><input type="checkbox" id="moradia" name="temas[ ]" value="moradia" class="no-margin" onclick="verificar()"></td>
                    <td>Moradia.</td>
                    <td>Ações que visam contribuir para o direito das mulheres à moradia e ao desenvolvimento de habilidades para a construção ou reformas de casas.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Sudeste">Sudeste<br>
                    </td>

               </tr>

               <tr>
                    <td><input type="checkbox" id="negritude" name="temas[ ]" value="negritude" class="no-margin" onclick="verificar()"></td>
                    <td>Negritude.</td>
                    <td>Ações de valorização da estética e da identidade das mulheres negras e de combate ao racismo.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Sudeste">Sudeste<br>
                    </td>    
                        
               </tr>

               <tr> <td><input type="checkbox" id="paz_seguranca_publica" name="temas[ ]" value="paz_seguranca_publica" class="no-margin" onclick="verificar()"></td>
                    <td>Paz e Segurança Pública.</td>
                    <td>Projetos que tratam da interface entre gênero e sistema de segurança pública, sobretudo questões da violência armada.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Sudeste">Sudeste<br>
                    </td> 
               </tr>

               <tr> <td><input type="checkbox" id="saude_bemestar" name="temas[ ]" value="saude_bemestar" class="no-margin" onclick="verificar()"></td>
                    <td>Saúde e Bem-estar.</td>
                    <td>Iniciativas que tratam de questões de autoestima, qualidade de vida, saúde e bem-estar das mulheres.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Norte">Norte<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Nordeste">Nordeste<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Centro-Oeste">Centro-Oeste<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Sul">Sul<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Sudeste">Sudeste<br>
                    </td> 
               </tr>

                  </tbody>
                </table>
             </div>
        </div> 

             <script>
            var CheckMaximo = 5;

            function verificar() {
            var Marcados = 1;
            var objCheck = $("input[name='temas[ ]']");
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

<!--subtemas-->


<h5> 12.1. Escolha de 1 (um) até 3 (três) subtemas dentro da sua área de atuação*</h5>
 
<h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar os subtemas.</em></h6>
<div class="form-group">
<label for="subtemas" for="f1-google-plus"></label>
        <select class="f1-last-name form-control"id="subtemas" required class="selectpicker" name="subtemas[ ]" data-style="default" multiple>
            <option value="Aborto">Aborto</option>
            <option value="Advocacy">Advocacy</option>
            <option value="Água e saneamento básico">Água e saneamento básico</option>
            <option value="Artes plásticas">Artes plásticas</option>
            <option value="Economia Solidária">Economia solidária</option>
            <option value="Cadeia produtiva responsável">Cadeia produtiva responsável</option>
            <option value="Cinema">Cinema</option>
            <option value="Conselhos e outras instâncias">Conselhos e outras instâncias</option>
            <option value="Consumo">Consumo</option>
            <option value="Cooperativismo">Cooperativismo</option>
            <option value="Dança">Dança</option>
            <option value="Desenvolvimento e Programação">Desenvolvimento e programação (informática)</option>
            <option value="Ecofeminismo">Ecofeminismo</option>
            <option value="Economia criativa">Economia criativa</option>
            <option value="Educomunicação">Educomunicação</option>
            <option value="Envelhecimento">Envelhecimento</option>
            <option value="Estudo e pesquisa">Estudo e pesquisa</option>
            <option value="Finanças sociais">Finanças sociais</option>
            <option value="Fotografia">Fotografia</option>
            <option value="Incentivo à leitura">Incentivo à leitura</option>
            <option value="Inclusão digital">Inclusão digital</option>
            <option value="Inserção de mulheres na política">Inserção de mulheres na política</option>
            <option value="Liderança">Liderança</option>
            <option value="Marketing">Marketing</option>
            <option value="Microcrédito">Microcrédito</option>
            <option value="Mobilização">Mobilização</option>
            <option value="Mudanças climáticas">Mudanças climáticas</option>
            <option value="Mulheres nas ciências e tecnologia">Mulheres nas ciências e tecnologia</option>
            <option value="Obesidade infantil">Obesidade infantil</option>
            <option value="Parto Humanizado">Parto Humanizado</option>
            <option value="Paternidade">Paternidade</option>
            <option value="Pessoa com deficiência">Pessoa com deficiência</option>
            <option value="Povos tradicionais">Povos tradicionais</option>
            <option value="Preconceito e discriminação">Preconceito e discriminação</option>
            <option value="Promoção à cargos de liderança">Promoção à cargos de liderança</option>
            <option value="Questão presidiária">Questão presidiária</option>
            <option value="Reciclagem e logística reversa">Reciclagem e logística reversa</option>
            <option value="Redes sociais">Redes sociais</option>
            <option value="Refugiados">Refugiados</option>
            <option value="Reparação-reconstrução">Reparação-reconstrução</option>
            <option value="Religiāo">Religiāo</option>
            <option value="Saúde sexual e reprodutiva">Saúde sexual e reprodutiva</option>
            <option value="Sustentabilidade">Sustentabilidade</option>
            <option value="Teatro">Teatro</option>
            <option value="Tecnologia social e/ou alternativas">Tecnologias sociais e/ou alternativas</option>
            <option value="Tecnologia">Tecnologia</option>
            <option value="Trabalho digno">Trabalho digno</option>
            <option value="Tráfico de pessoas">Tráfico de pessoas</option>
            <option value="Outros">Outros</option>

        </select>

     </div>

<script>
     $(document).ready(function() {

          var last_valid_selection = null;

          $('#subtemas').change(function(event) {

            if ($(this).val().length > 3) {

              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
            }
          });
        });
    </script> 

                <h4>13. O que faz a sua organização?* </h4>                                  
                <h6>(até 500 caracteres)</h6>
				<div class="form-group">
                    <label class="sr-only" for="f1-about-yourself"></label>
                    <textarea name="sobre" required onkeyup="caracterTextarea(this.value,500,'contando')" maxlength="500" placeholder="campo com capacidade para 500 caracteres...." 
                    class="f1-about-yourself form-control" id="sobre" ></textarea>
                    <span id="contando" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>

                <!-- <h5>Qual é a sua função no ecossistema?*</h5>

                 <div class="form-group">
                 <input type="checkbox" name="funcao[ ]" value="Advocacy">Advocacy<br>
                 <input type="checkbox" name="funcao[ ]" value="Atuação direta com mulheres, homens, LGBTT, etc" class="form-control-radio">Atuação direta com mulheres, homens, LGBTT, etc<br>

                 <input type="numeric"  name="numero_beneficiarios" placeholder="número de beneficiários diretos" style="margin-left: 20px" class="f1-last-name form-control"><br>
                 <input type="checkbox" name="funcao[ ]" value="Financiadores"class="form-control-radio">Financiadores<br>
                 <input type="checkbox" name="funcao[ ]" value="Fortalecedor institucional"class="form-control-radio">Fortalecedor institucional<br>
                 <input type="checkbox" name="funcao[ ]" value="público" style="margin-left: 20px"class="form-control-radio">público
                 <input type="checkbox" name="funcao[ ]" value="privado" style="margin-left: 20px"class="form-control-radio">privado
                 <input type="checkbox" name="funcao[ ]" value="social"  style="margin-left: 20px"class="form-control-radio">social⁠⁠⁠⁠   
                 </div>  --> 
<!--
         <!--      
                 <h4>14 Quais os principais públicos diretamente atendidos por sua organização? Selecione até três.*</h4>

             <tbody>

                   <tr>
                    <td><input type="checkbox" name="publico_alvo[ ]" value="Empresas" class="no-margin" onclick="verificar2()"></td>
                    <td>Empresas.</td><br>
                    <td class="publico_alvo" style="width:150px" >
                        <input type="checkbox" name="publico_alvo[ ]" value="Empresas" onclick="verificar2()">Empresas<br>
                        <input type="checkbox" name="publico_alvo[ ]" value="Organizações Sociais" onclick="verificar2()" >Organizações Sociais<br>
                        <input type="checkbox" name="publico_alvo[ ]" value="Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher" onclick="verificar2()">Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher<br>
                        <input type="checkbox" name="publico_alvo[ ]" value="Movimentos, coletivos, redes, fóruns" onclick="verificar2()">Movimentos, coletivos, redes, fóruns<br>
                        <input type="checkbox" name="publico_alvo[ ]" value="Adolescentes e jovens" onclick="verificar2()">Adolescentes e jovens<br>
                        <input type="checkbox" name="publico_alvo[ ]" value="Homens" onclick="verificar2()">Homens<br>
                        <input type="checkbox" name="publico_alvo[ ]" value="Mulheres" onclick="verificar2()">Mulheres<br>
                    </td> 

            </tbody>   


       -->          
             <!--
                          <script>
                            var CheckMAX = 3;

                            function verificar2() {
                            var Marcados = 1;
                            var objCheck = $("input[name='publico_alvo[ ]']");
                            //Percorrendo os checks para ver quantos foram selecionados:
                            for (var iLoop=0; iLoop<objCheck.length; iLoop++) {
                            //Se o número máximo de checkboxes ainda não tiver sido atingido, continua a verificação:
                                if (objCheck[iLoop].checked) {
                                    Marcados++;
                                }
                                
                                if (Marcados <= CheckMAX) {
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


       -->

                 <h4>14.Quais os principais públicos diretamente atendidos por sua organização? Selecione até três.*</h4>
                 <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar os subtemas.</em></h6>


                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" class="selectpicker" data-style="default" multiple required id="publico_alvo" name="publico_alvo" >
                        <option value=""></option>
                        <option value="Empresas">Empresas</option>
                        <option value="Organizações Sociais">Organizações Sociais</option>
                        <option value="Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher">Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher</option><br>
                        <option value="Movimentos, coletivos, redes, fóruns">Movimentos, coletivos, redes, fóruns</option>
                        <option value="Adolescentes e jovens">Adolescentes e jovens</option>
                        <option value="Homens">Homens</option>
                        <option value="Mulheres">Mulheres</option>
                           
                    </select>

                
<script>
     $(document).ready(function() {

          var last_valid_selection = null;

          $('#publico_alvo').change(function(event) {

            if ($(this).val().length > 3) {

              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
            }
          });
        });
    </script>




                 <h4>15. Nomeie e descreva as iniciativas e/ou projetos da sua organização que trabalham com empoderamento das mulheres.*</h4>
                 
				<h5>Iniciativa 1</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" id="nome" name="organizacao-relaciona1" required  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas1" onkeyup="caracterTextarea(this.value,500,'contando1')" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong1" required  ></textarea>
                    <span id="contando1" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>
                <h5>Iniciativa 2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona2" class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas2" onkeyup="caracterTextarea(this.value,500,'contando2')" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong2"  ></textarea>
                    <span id="contando2" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>
                <h5>Iniciativa 3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona3"class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas3" onkeyup="caracterTextarea(this.value,500,'contando3')" maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong3"  ></textarea>
                    <span id="contando3" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>

                <h4>16. Em quais estados sua organizaçāo tem atuação direta?*</h4>
                    <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar várias opções.</em></h6>
                    <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control"  id="estado_iniciativa" required name="organizacao_estado[ ]" multiple >
                        <div class="help-block with-errors"></div>
                        <option value="Acre">Acre</option>
                        <option value="Alagoas">Alagoas</option>
                        <option value="Amapá">Amapá</option>
                        <option value="Amazonas">Amazonas</option>
                        <option value="Bahia">Bahia</option>
                        <option value="Ceará">Ceará</option>
                        <option value="Distrito Federal">Distrito Federal</option>
                        <option value="Espírito Santo">Espírito Santo</option>
                        <option value="Goiás">Goiás</option>
                        <option value="Maranhão">Maranhão</option>
                        <option value="Mato Grosso">Mato Grosso</option>
                        <option value="Mato Grosso do Sul">Mato Grosso do Sul</option>
                        <option value="Minas Gerais">Minas Gerais</option>
                        <option value="Pará">Pará</option>
                        <option value="Paraíba">Paraíba</option>
                        <option value="Paraná">Paraná</option>
                        <option value="Pernambuco">Pernambuco</option>
                        <option value="Piauí">Piauí</option>
                        <option value="Rio de Janeiro">Rio de Janeiro</option>
                        <option value="Rio Grande do Norte">Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul">Rio Grande do Sul</option>
                        <option value="Rondônia">Rondônia</option>
                        <option value="Roraima">Roraima</option>
                        <option value="Santa Catarina">Santa Catarina</option>
                        <option value="São Paulo">São Paulo</option>
                        <option value="Sergipe">Sergipe</option>
                        <option value="Tocantins">Tocantins</option>
                    </select>


                <h4>17. A sua organizaçāo influenciou políticas públicas?*</h4>

                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="politicas_publicas" checked value="nao" class="form-control-radio"> Nāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="politicas_publicas" value="sim" class="form-control-radio"> Sim
                    </label>
                </div>
              	
				<h5>17.1. Se sim, em quais níveis?</h5>
                <h5>Descreva como se deu essa influência em políticas públicas, detalhe no campo de texto abaixo, caso necessário</h5>

                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="Municipal" class="form-control-radio">Municipal
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="Estadual" class="form-control-radio">Estadual/Distrital
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="Nacional" class="form-control-radio">Nacional
                    </label>
                    <textarea name="organizaçāo_politica_publica" onkeyup="caracterTextarea(this.value,500,'contando4')"  maxlength="500" placeholder="Descreva como se deu essa influência em políticas públicas(em 500 caracteres) detalhe aqui, caso necessário"

                    class="f1-about-yourself form-control" id="organizaçāo_politica_publica"></textarea>
                    <span id="contando4" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>


                <!-- Organizacao 27-->


<h4>18. A sua organização realiza monitoramento e avaliação sistematizada das atividades?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="monitoramento_atv" id="avaliacao" required>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim</option>
                    </select>
                    <textarea type="text" id="inputAvaliacaoOng" onkeyup="caracterTextarea(this.value,500,'contando')" name= "inputAvaliacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="quais foram os resultados comprovados alcançados até hoje? 500 caracteres..
                        "style='display: none'/></textarea>
                        <span id="contando" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
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

<h4>19. A sua organizaçāo tem uma estratégia de comunicação própria?*</h4>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="organizacao-comunicacao" name="comunicacao"required>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, qual?</option>
                    </select>
                    <textarea type="text"  onkeyup="caracterTextarea(this.value,500,'contando5')" id="inputComunicacaoOng" name="inputComunicacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Descreva estratégia de comunicação..
"style='display: none'/></textarea>
<span id="contando5" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
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

<h4>20. A sua organizaçāo recebeu premiações, certificações etc.?*</h4>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="premiacao" name="premiacao"required>
                        <option value=""></option>
                        <option value="0">Nāo</option>
                        <option value="1">Sim, quais?</option> 
                        
                    </select>
                    <textarea type="text" id="inputPremiacaoOng" onkeyup="caracterTextarea(this.value,500,'contando6')" name="inputPremiacaoOng" class="f1-last-name form-control" maxlength="500"placeholder="Premiações/Certificações..
"style='display: none'/></textarea>
<span id="contando6" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
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


                <!-- <h5>Quais são as organizações com atuação na temática da mulher com que sua organizaçāo se relaciona diretamente?</h5>
                 <h5>Organização 1</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                <input type="text" name="relaciona1"  class="f1-last-name form-control">
                </div>
                <h5>Organização 2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona2"  class="f1-last-name form-control">
                </div>
                <h5>Organização 3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona3" class="f1-last-name form-control">
                </div> -->

                
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next" onclick= "return validacampobranco2();">Próximo</button>
                </div>

</fieldset>

           
            <!--Etapa 3 Formulário: Endereço/Organizaçāo -->


            <fieldset class="tab endereco">
                <h5>Regiāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Região</label>
                    <select class="f1-last-name form-control" name="regiao" id="regiao" required>
                        <option value=""></option>
                        <option value="norte">Norte</option>
                        <option value="nordeste">Nordeste</option>
                        <option value="centro-oeste">Centro-Oeste</option>
                        <option value="sul">Sul</option>
                        <option value="sudeste">Sudeste</option>
                    </select> 
                </div>
                <h5>Estado*</h5>
                 <div class="form-group">
                    <label class="sr-only" >Estado</label>
                    <select class="f1-last-name form-control" name="estado" id="estados" required>
                        <option value=""></option>
                        
                    </select> 
                </div>
                <h5>Cidade*</h5>
                <div class="form-group">
                    <label class="sr-only" >Cidade</label>

                    <select class="f1-last-name form-control" name="cidade" id="cidades" required> 
                        <option value=""></option>

                    </select> 
                </div>

                <h5>Bairro*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro</label>
                <input type="text" name="bairro" placeholder="Bairro..." id="bairro" class="f1-last-name form-control"required>
                </div>
                <h5>Rua*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua</label>
                    <input type="text" name="rua" placeholder="Rua/Av...*" id="rua" class="f1-last-name form-control"required>
                </div>
                <h5>Número*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número</label>
                    <input type="text" name="numero" id="numero"  placeholder="Número...*" class="f1-last-name form-control" required>
                </div>
                <h5>Complemento</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento</label>
                    <input type="text" name="complemento" placeholder="Complemento..." class="f1-last-name form-control">
                </div>
                 <h5>Cep*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep</label>
                    <input type="text" name="cep" id="cep" onblur="ExitField('inputCep','msgCep','Cep inválido, número deve conter 9 caracteres',9);" id="inputCep" placeholder="Cep xx-xxx-xxx*" class="f1-last-name form-control cep" required>
		    <label id="msgCep"></label>	
                </div> 

               <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next" onclick="return validacampobranco3()">Próximo</button>
                </div>

            </fieldset>
 
          <!--Etapa 4 Formulário: Mídia Social-->

            <fieldset class="tab redes_sociais">
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

            <fieldset class="tab indicacao">
                <h4>Indique pelo menos 1 (uma) e até 3 (três) organizações e/ ou iniciativas que na sua opinião também devem ser convidadas a preencher este questionário e participar do processo de mapeamento:</h4>
                <h5>Organizaçāo 1</h5>
                 <h5>Nome</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" required  name="indica_nome_1"  placeholder="Nome" class="f1-last-name form-control" id="nomeIndica1">
                </div>
                <h5>E-mail</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" required  name="indica_email_1"  placeholder="E-mail" class="f1-last-name form-control" id="emailIndica1">     
                </div>
                <h5>Telefone</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                <input type="tel" required onblur="ExitField('inputTel3','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" name="indica_telefone_1"  placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel3">
                </div>
                <h5>Nome</h5>
                <h5>Organizaçāo 2</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_2" placeholder="Nome" class="f1-last-name form-control" id="nomeIndica2">
                </div>
                <h5>E-mail</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" name="indica_email_2" placeholder="E-mail" class="f1-last-name form-control" id="emailIndica2">                    
                </div>
                <h5>Telefone</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_2" onblur="ExitField('inputTel4','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel4">
                </div>
                <h5>Nome</h5>
                <h5>Organizaçāo 3</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_3" placeholder="Nome" class="f1-last-name form-control" id="nomeIndica3">
                </div>
                <h5>E-mail</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="indica_email_3" placeholder="E-mail" class="f1-last-name form-control" id="emailIndica3">
                </div>
                <h5>Telefone</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_3" onblur="ExitField('inputTel5','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" placeholder="Telefone (xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel5">
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="submit" class="btn btn-submit" onclick="return validacampobranco4();">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
    
