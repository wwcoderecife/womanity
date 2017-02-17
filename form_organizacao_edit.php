           <!-- Bootstrap core JavaScript
         ================================================== -->

            <script src="assets/js/bootstrap.min.js"></script>
            <!--<script src="assets/js/validator.min.js"></script>-->
            <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
            <script src="assets/js/bootstrap-select.min.js" ></script>
            <link   rel="stylesheet" href="assets/css/bootstrap-select.min.css">
            <script src="assets/js/jquery.backstretch.min.js"></script>
            <script src="assets/js/textarea.js" ></script>
            <script src="assets/js/validatortel.js"></script>
           
            
        
            <script>
              $(document).ready(function(){
              $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
              $('.phone_with_ddd').mask('(00) 0000-0000');
              $('.phone_with_dddcel').mask('(00) 00000-0000');
              $('.cep').mask('00000-000');
              $('.money').mask('000.000.000.000.000,00', {reverse: true});
              $(".form-ong input:radio").attr('disabled',true);
              $(".form-ong select").attr('disabled',true);
              $(".form-ong input:checkbox").attr('disabled',true);
              $(".form-ong input").attr('readonly',true);
              $(".form-ong textarea").attr('readonly',true);
              $(".edit-button").attr('disabled', true);
             
            });

           function desbloquearCampos(){
              $(".form-ong input:radio").attr('disabled',false);
              $(".form-ong select").attr('disabled',false);
              $(".form-ong input:checkbox").attr('disabled',false);
              $(".form-ong input").attr('readonly',false);
              $(".form-ong textarea").attr('readonly',false);
              $(".edit-button").attr('disabled', false);
               
              if ( $('#arte_cultura').is( ":checked" ) ){
                    $(".temas_arte_cultura").attr("disabled", false);
              }else{
                $(".temas_arte_cultura").attr("disabled", true);
                $( ".temas_arte_cultura" ).prop( "checked", false );
              };
               
               if ( $('#ciencia_tecnologia').is( ":checked" ) ){
                    $(".temas_ciencia_tecnologia").attr("disabled", false);
                }else{
                    $(".temas_ciencia_tecnologia").attr("disabled", true);
                    $( ".temas_ciencia_tecnologia" ).prop( "checked", false );
                };
               
               if ( $('#democracia_participação_politica').is( ":checked" ) ){
                    $(".temas_democracia_politica").attr("disabled", false);
                }else{
                    $(".temas_democracia_politica").attr("disabled", true);
                    $( ".temas_democracia_politica" ).prop( "checked", false );
                };
               
               if ( $('#educacao_formacao').is( ":checked" ) ){
                    $(".temas_educacao_formacao").attr("disabled", false);
                }else{
                    $(".temas_educacao_formacao").attr("disabled", true);
                    $( ".temas_educacao_formacao" ).prop( "checked", false );
                };
               
               if ( $('#empreendedorismo_feminino_autonomia_economica').is( ":checked" ) ){
                    $(".temas_empreendedorismo_feminino").attr("disabled", false);
                }else{
                    $(".temas_empreendedorismo_feminino").attr("disabled", true);
                    $( ".temas_empreendedorismo_feminino" ).prop( "checked", false );
                };
               
               if ( $('#enfrentamento_violencia').is( ":checked" ) ){
                    $(".temas_enfretamento_violencia").attr("disabled", false);
                }else{
                    $(".temas_enfretamento_violencia").attr("disabled", true);
                    $( ".temas_enfretamento_violencia" ).prop( "checked", false );
                };
               
               if ( $('#equidade_Condicoes_trabalho').is( ":checked" ) ){
                    $(".temas_equidade_trabalho").attr("disabled", false);
                }else{
                    $(".temas_equidade_trabalho").attr("disabled", true);
                    $( ".temas_equidade_trabalho" ).prop( "checked", false );
                };
               
               if ( $('#esporte').is( ":checked" ) ){
                    $(".temas_esportes").attr("disabled", false);
                }else{
                    $(".temas_esportes").attr("disabled", true);
                    $( ".temas_esportes" ).prop( "checked", false );
                };
               
               if ( $('#indigenas').is( ":checked" ) ){
                    $(".temas_indigenas").attr("disabled", false);
                }else{
                    $(".temas_indigenas").attr("disabled", true);
                    $( ".temas_indigenas" ).prop( "checked", false );
                };
               
               if ( $('#LGBTT').is( ":checked" ) ){
                    $(".temas_lgbtt").attr("disabled", false);
                }else{
                    $(".temas_lgbtt").attr("disabled", true);
                    $( ".temas_lgbtt" ).prop( "checked", false );
                };
               
               if ( $('#masculinidade').is( ":checked" ) ){
                    $(".temas_masculinidades").attr("disabled", false);
                }else{
                    $(".temas_masculinidades").attr("disabled", true);
                    $( ".temas_masculinidades" ).prop( "checked", false );
                };
               
               if ( $('#meio_ambiente').is( ":checked" ) ){
                    $(".temas_meio_ambiente").attr("disabled", false);
                }else{
                    $(".temas_meio_ambiente").attr("disabled", true);
                    $( ".temas_meio_ambiente" ).prop( "checked", false );
                };
               
               if ( $('#midia_comunicacao').is( ":checked" ) ){
                    $(".temas_midia_comunicacao").attr("disabled", false);
                }else{
                    $(".temas_midia_comunicacao").attr("disabled", true);
                    $( ".temas_midia_comunicacao" ).prop( "checked", false );
                };
               
               if ( $('#moradia').is( ":checked" ) ){
                    $(".temas_moradia").attr("disabled", false);
                }else{
                    $(".temas_moradia").attr("disabled", true);
                    $( ".temas_moradia" ).prop( "checked", false );
                };
               
               if ( $('#negritude').is( ":checked" ) ){
                    $(".temas_negritude").attr("disabled", false);
                }else{
                    $(".temas_negritude").attr("disabled", true);
                    $( ".temas_negritude" ).prop( "checked", false );
                };
               
               if ( $('#paz_seguranca_publica').is( ":checked" ) ){
                    $(".temas_paz_seguranca").attr("disabled", false);
                }else{
                    $(".temas_paz_seguranca").attr("disabled", true);
                    $( ".temas_paz_seguranca" ).prop( "checked", false );
                };
               
               if ( $('#saude_bemestar').is( ":checked" ) ){
                    $(".temas_saude_bemestar").attr("disabled", false);
                }else{
                    $(".temas_saude_bemestar").attr("disabled", true);
                    $( ".temas_saude_bemestar" ).prop( "checked", false );
                };
                
               if ($('input[name="nao_tem_orcamento[]"]:checked').length > 0){

                        $('#nao_tenho_orcamento_input').attr('value', 'Não tenho orçamento');
                        $('#orcamento_2014').attr('value', '');
                        $('#orcamento_2015').attr('value', '');
                        $('#orcamento_2016').attr('value', '');
                        $('#orcamento_2014').attr('disabled', true);
                        $('#orcamento_2015').attr('disabled', true);
                        $('#orcamento_2016').attr('disabled', true);
                    }
              open_dialog("ok", "Agora você pode editar os dados!", 'success');

           }
            </script>

<?php

    require_once "classes/Editar.class.php";

    $edit = new editar;
    $edit->busca($_SESSION['organizacao_id']);

    //Array dos Checkboxs

    $array_recursos_financeiros = $edit->getRecursosFinaceirosLista();
    $array_temas = $edit->getTemas();
    $array_arte_cultura = $edit->getTemasArteCultura();
    $array_ciencia_tecnologia = $edit->getTemasCienciaTecnologia();
    $array_democracia_participação_politica = $edit->getTemasDemocraciaPolitica();
    $array_educacao_formacao = $edit->getTemasEducacaoFormacao();
    $array_empreendedorismo_feminino_autonomia_economica = $edit->getTemasEmpreendedorismoFeminino();
    $array_enfrentamento_violencia = $edit->getTemasEnfretamentoViolencia();
    $array_equidade_Condições_trabalho = $edit->getTemasEquidadeTrabalho();
    $array_esporte = $edit->getTemasEsportes();
    $array_indigenas = $edit->getTemasIndigenas();
    $array_LGBTT = $edit->getTemasLgbtt();
    $array_masculinidade = $edit->getTemasMasculinidades();
    $array_meio_ambiente_seguranca_agricultura = $edit->getTemasMeioAmbiente();
    $array_midia_comunicacao = $edit->getTemasMidiaComunicacao();
    $array_moradia = $edit->getTemasMoradia();
    $array_negritude = $edit->getTemasNegritude();
    $array_paz_seguranca_publica = $edit->getTemasPazSeguranca();
    $array_saude_bemestar = $edit->getTemasSaudeBemestar();
    $array_funcoes = $edit->getFuncoes();
    $array_politicas_publicas = $edit->getPoliticasPublicasList();  
    $array_subtema = $edit->getSubtemas();
    $array_estados = $edit->getEstados();

?>
<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" action="classes/prepare_cadastro.php" method="post" class="f1 form-ong">
            <input type="hidden" value="editar" name="form_type" />
            <h3>Edição do Cadastro<br>Organizaçāo</h3>
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


          <fieldset class="tab dados_pessoais" >
                <h4>Dados Pessoais Contato 1:</h4>
                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" required  name="nome1" value="<?php echo $edit->getNome_1() ?>" placeholder="responsável pelo preenchimento do cadastro" class="f1-last-name form-control" id="inputNome1">
                    
                </div>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" required  name="cargo_1" value="<?php echo $edit->getCargo_1() ?>" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name"  data-msg="Campo obrigatório, favor preencher.">
                   
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" required  name="email_1"  value="<?php echo $edit->getEmail_1() ?>" class="f1-last-name form-control" id="f1-last-name" >
                    
                </div>
                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" required  name="telefone_1" value="<?php echo $edit->getTelefone_1() ?>" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel1"  data-error = "Por favor, preencha corretamente o campo (xx) xxxx-xxxx.">
                    
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" required  name="celular_1" value="<?php echo $edit->getCelular_1() ?>" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel1"  data-error = "Por favor, preencha corretamente o campo (xx) xxxxx-xxxx.">
                    
                </div>

                <h4>Dados Pessoais Contato 2:</h4>
                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" required  name="nome2" value="<?php echo $edit->getNome_2() ?>" placeholder="responsável pela organização ou suplente" class="f1-last-name form-control" id="inputNome2"  data-error = "Campo obrigatório, favor preencher.">
                    
                </div>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" required  name="cargo_2" value="<?php echo $edit->getCargo_2() ?>" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name" data-error = "Campo obrigatório, favor preencher.">
                    
                </div>
                 <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" required  name="email_2" value="<?php echo $edit->getEmail_2() ?>" placeholder="email@email.com" class="f1-last-name form-control" id="f1-last-name" data-error = "Campo obrigatório, favor preencher.">
                    
                    
                </div>

                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" required  name="telefone_2" value="<?php echo $edit->getTelefone_2() ?>" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel2" data-error = "Por favor, preencha corretamente o campo (xx) xxxx-xxxx.">
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel"  required name="celular_2" value="<?php echo $edit->getCelular_2() ?>" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel2" data-match-error="Por favor, preencha corretamente o campo (xx) xxxxx-xxxx.">
                    
                </div>

                <div class="f1-buttons">    
                <button type="button" class="btn btn-warning" onclick="desbloquearCampos();" title="Desbloquear campos para edição">Editar</button>
                <button type="button" class="btn btn-next" onclick=" return validacampobranco();" >Próximo</button>
               </div>
            </fieldset><!--Dados Pessoais-->


          
             <!--Etapa 2 Formulário: Organizaçāo -->

        <fieldset class="tab organizacao">
                <h4>1. A sua organização está juridicamente constituída?*</h4>
                <h6><em>Se sim, digite o CNPJ no campo abaixo</em></h5>
             
                  
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control"required name="cnpj"id="organizacao-cnpj">
                        <option value=""></option>
                        <option value="sim" 
                            <?php if($edit->getCnpj() != ""){ echo "selected"; } ?>
                         >sim</option>
                        <option value="nao"
                        <?php if($edit->getCnpj() == ""){ echo "selected"; } ?>
                        >não</option>
                    </select>    

                <input type="text" id="inputcnpj" name="inputcnpj"  value="<?php echo $edit->getCnpj()  ?>" class="f1-last-name form-control cnpj" placeholder="xx.xxx.xxxx/xxxx-xx" <?php if($edit->getCnpj() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> />
                    <script>

                        var dropdownCnpj = document.getElementById('organizacao-cnpj');
                            
                            function onDropdownChangedCNPJ()
                            {
          
                                //pegando valor do select na variável dropdownCnpj
                                var meuInput = document.getElementById('inputcnpj');
                                if(dropdownCnpj.options[dropdownCnpj.selectedIndex].value === "sim") {
                                    //faz algo quando o valor selecionado for sim

                                    //mostra o input quando o valor selecionado for sim, tem cnpj
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                    $('#inputcnpj').attr('value','');
                            
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
                       <input type="radio" name="zona"  value="rural" class="form-control-radio" 
                       <?php  if($edit->getLocalizacao() == "rural"){ echo "checked='checked'"; } ?>
                       >Zona Rural
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="zona" value="urbana" class="form-control-radio"
                        <?php if($edit->getLocalizacao() == "urbana"){ echo "checked='checked'"; } ?>
                        >Zona Urbana
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="zona" value="ambas" class="form-control-radio"
                        <?php if($edit->getLocalizacao() == "ambas"){ echo "checked='checked'"; } ?>
                        >Ambas
                    </label>
                </div>

                <h4>3. Qual o nome da sua organizaçāo?*</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" required  name="nome"   value="<?php echo $edit->getNome() ?>" maxlength="50" class="f1-last-name form-control">
                </div>


                <h4>4. Qual a sigla da sua organizaçāo?</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="sigla" value="<?php echo $edit->getSigla() ?>" class="f1-last-name form-control">
                </div>

                <h4>5. Qual o telefone da sua organizaçāo?*</h4>
                <div class="form-group">
                    <label class="sr-only" >Telefone da Organizaçāo</label>
                    <input type="tel" required  onblur="ExitField('inputelOng','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" id="inputelOng" name="organizacao-telefone" value="<?php echo $edit->getTelefone() ?>" placeholder="(xx) xxxxx-xxxx"class="f1-last-name form-control phone_with_ddd">
                </div>

                <h4>6. Qual o e-mail da sua organizaçāo?*</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email da Organizaçāo</label>
                    <input type="email" name="email"   value="<?php echo $edit->getEmail() ?>" class="f1-last-name form-control"class="f1-last-name form-control">
                </div>

                 <h4>7. Como a sua organizaçāo se identifica?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus" ></label>
                    <select class="f1-last-name form-control" required  id="organizacao-tipo"   name="tipo">
                        <option value="academica" <?=($edit->getTipo() == 'academica')?'selected':''?>>
                         acadêmica
                        </option>
                        <option value="coletivo" <?=($edit->getTipo() == 'coletivo')?'selected':''?>>
                            coletivo</option>
                        <option value="cooperativa" <?=($edit->getTipo() == 'cooperativa')?'selected':''?>>
                        Cooperativa</option>
                        <option value="empresa_privada" <?=($edit->getTipo() == 'empresa_privada')?'selected':''?>>
                            empresa privada</option>
                        <option value="investimento_social_privado" <?=($edit->getTipo() == 'investimento_social_privado')?'selected':''?>>
                            Investimento Social Privado</option>
                        <option value="fundos"  <?=($edit->getTipo() == 'fundos')?'selected':''?>>
                            fundos</option>
                        <option value="governo" <?=($edit->getTipo() == 'governo')?'selected':''?>>
                            governo</option>
                        <option value="grupos_produtivos" <?=($edit->getTipo() == 'grupos_produtivos')?'selected':''?>>
                            Grupos Produtivos</option>
                        <option value="movimento" <?=($edit->getTipo() == 'movimento')?'selected':''?>>
                            movimento</option>
                        <option value="negocio_social" <?=($edit->getTipo() == 'negocio_social')?'selected':''?>>
                            negócio social</option>
                        <option value="ong_sociedade_civil" <?=($edit->getTipo() == 'ong_sociedade_civil')?'selected':''?>>
                            organização da sociedade civil (ex: associação, entidade religiosa, instituto, ong, oscip, etc.)</option>
                        <option value="redes" <?=($edit->getTipo() == 'redes')?'selected':''?>>
                            rede</option>
                        <option value="outros" <?=($edit->getTipo() == 'outros')?'selected':''?>>
                            Outros</option>
                 </select> 
                    <input type="text" id="inputoutros"  name="identifica_organizacao_outros" value="<?php echo $edit->getIdentificaOrganizacaoOutros() ?>" class="f1-last-name form-control" 
                    placeholder="descreva outro tipo" <?php if($edit->getIdentificaOrganizacaoOutros() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> />
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
                    <select class="f1-last-name form-control" required id="year_organizacao" name="anoatividade"  >
                    <option value=""></option>
                        <?php echo "<script type='text/javascript'> var ano = '".$edit->getInicioAtv()."'; </script>"; ?>
                        <script>

                          var myDate = new Date();
                          var year = myDate.getFullYear();
                          for(var i = 1900; i < year+1; i++){

                            if(ano == i){
                                $('#year_organizacao').append('<option selected=selected value="'+i+'">'+i+'</option>');         
                            }else{
                                $('#year_organizacao').append('<option value="'+i+'">'+i+'</option>');
                            }
                          }
                              
                          </script>
                    </select>


                <h4>9. Quantos colaboradores,funcionários ou voluntários estão envolvidos diretamente neste trabalho?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required id="pessoas_envolvidas" name="pessoas_envolvidas" >
                        <option value=""></option>
                        <option value="1-5" <?=($edit->getQtdePessoas() == '1-5')?'selected':''?>>1-5</option>
                        <option value="6-10" <?=($edit->getQtdePessoas() == '6-10')?'selected':''?>>6-10</option>
                        <option value="11-20" <?=($edit->getQtdePessoas() == '11-20')?'selected':''?>>11-20</option>
                        <option value="21-50" <?=($edit->getQtdePessoas() == '21-50')?'selected':''?>>21-50</option>
                        <option value="51-100" <?=($edit->getQtdePessoas() == '51-100')?'selected':''?>>51-100</option>
                        <option value="101-250" <?=($edit->getQtdePessoas() == '101-250')?'selected':''?>>101-250</option>
                        <option value="251-500" <?=($edit->getQtdePessoas() == '251-500')?'selected':''?>>251-500</option>
                        <option value="501-1000" <?=($edit->getQtdePessoas() == '501-1000')?'selected':''?>>501-1000</option>
                        <option value="1001+" <?=($edit->getQtdePessoas() == '1001+')?'selected':''?>>1001+</option>     
                    </select>
                </div>

                <h4>10. Quantas pessoas a sua organização beneficia diretamente?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  id="pessoas_beneficiadas" name="pessoas_beneficiadas" >
                        <option value=""></option>
                        <option value="até 50" <?=($edit->getQtdeBeneficiadas() == 'até 50')?'selected':''?>>até 50</option>
                        <option value="51-250" <?=($edit->getQtdeBeneficiadas() == '51-250')?'selected':''?>>51-250</option>
                        <option value="251-500" <?=($edit->getQtdeBeneficiadas() == '251-500')?'selected':''?>>251-500</option>
                        <option value="501-1000" <?=($edit->getQtdeBeneficiadas() == '501-1000')?'selected':''?>>501-1000</option>
                        <option value="1001-2500" <?=($edit->getQtdeBeneficiadas() == '1001-2500')?'selected':''?>>1001-2500</option>
                        <option value="2501-5000" <?=($edit->getQtdeBeneficiadas() == '2501-5000')?'selected':''?>>2501-5000</option>
                        <option value="5001-10000" <?=($edit->getQtdeBeneficiadas() == '5001-10000')?'selected':''?>>5001-10000</option>
                        <option value="10001-50000" <?=($edit->getQtdeBeneficiadas() == '10001-50000')?'selected':''?>>10001-50000</option>
                        <option value="50001-100000" <?=($edit->getQtdeBeneficiadas() == '50001-100000')?'selected':''?>>50001-100000</option>
                        <option value="100000-500000" <?=($edit->getQtdeBeneficiadas() == '100000-500000')?'selected':''?>>100000-500000</option>     
                        <option value="500000-1000000" <?=($edit->getQtdeBeneficiadas() == '500000-1000000')?'selected':''?>>500000-1000000</option> 
                        <option value="1000000+" <?=($edit->getQtdeBeneficiadas() == '1000000+')?'selected':''?>>1000000+</option>
                    </select>
                </div>

                <h4>11. Qual foi o orçamento bruto da sua organização? *</h4>
                 <h5>Em 2014</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2014</label>
                    <input type="text"   id="orcamento_2014" name="orcamento_2014" 
                    value="<?php  if($edit->getJustificativaOrcamento() == '' ){ echo $edit->getOrcamento_2014(); } ?>" placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2014">

                </div>
                <h5>Em 2015</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2015</label>
                    <input type="text"  id="orcamento_2015" name="orcamento_2015" 
                    value="<?php  if($edit->getJustificativaOrcamento() =='' ){ echo $edit->getOrcamento_2015(); } ?>"  placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2015" >
                </div>
                <h5>Em 2016</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2016</label>
                    <input type="text"  id="orcamento_2016" name="orcamento_2016" 
                    value="<?php  if($edit->getJustificativaOrcamento() == ''){ echo $edit->getOrcamento_2016(); } ?>"  placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="organizacao_orcamento2016">
                </div>

                <!--novo item -->
                <h5>Não tenho orçamento</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name"></label>
                    <input type="checkbox" value="sim" name="nao_tem_orcamento[]" onclick="check_orcamento();"
                    <?php if($edit->getJustificativaOrcamento() != ""){ echo "checked"; } ?>
                    > Não tenho Orçamento
                    <input type="HIDDEN" id="nao_tenho_orcamento_input" name="justificativa_orcamento" class="f1-last-name form-control">
                </div>
                <script type="text/javascript">

                function check_orcamento(){
                    if ($('input[name="nao_tem_orcamento[]"]:checked').length > 0){

                        $('#nao_tenho_orcamento_input').attr('value', 'Não tenho orçamento');
                        $('#orcamento_2014').attr('value', '');
                        $('#orcamento_2015').attr('value', '');
                        $('#orcamento_2016').attr('value', '');
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

                <h5>11.1. A sua Organizaçāo recebe recursos financeiros?</h5>
                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio" name="recursos" value="sim" 
                        <?=($edit->getRecursosFinaceiros() == 'sim')?'checked=checked':''?>
                         class="form-control-radio"> Sim
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="recursos" value="nao"
                        <?=($edit->getRecursosFinaceiros() == 'nao')?'checked=checked':''?>
                         class="form-control-radio"> Nāo
                    </label>
                </div>

                <h5>11.1.1. Quais são as principais fontes de recursos para a realização dos projetos?</h5>
                <div class="form-group">
                    <input type="checkbox" name="recursos_origem[]" value="doação pessoa física"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('doação pessoa física', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >doação de pessoa física</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo federal"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('edital público governo federal', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >edital público (governo federal)</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo estadual"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('edital público governo estadual', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >edital público (governo estadual)</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público municipal"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('edital público municipal', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >edital público (governo municipal)</br>
                    <input type="checkbox" name="recursos_origem[]" value="empresas"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('empresas', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >empresas</br>
                    <input type="checkbox" name="recursos_origem[]" value="endowment/fundo patrimonial"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('endowment/fundo patrimonial', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >endowment/fundo patrimonial</br>
                    <input type="checkbox" name="recursos_origem[]" value="fomento à pesquisa"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('fomento à pesquisa', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >fomento à pesquisa</br>
                    <input type="checkbox" name="recursos_origem[]" value="institutos ou fundações empresariais"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('institutos ou fundações empresariais', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >institutos ou fundações empresariais</br>
                    <input type="checkbox" name="recursos_origem[]" value="investimento direto/patrocínio"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('investimento direto/patrocínio', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >investimento direto/patrocínio</br>
                    <input type="checkbox" name="recursos_origem[]" value="investimento de impacto"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('investimento de impacto', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >investimento de impacto</br>
                    <input type="checkbox" name="recursos_origem[]" value="leis de incentivo"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('leis de incentivo', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >leis de incentivo<br>
                    <input type="checkbox" name="recursos_origem[]" value="organizações do sistema ONU"
                         <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('organizações do sistema ONU', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >organizações do sistema ONU<br>
                    <input type="checkbox" name="recursos_origem[]" value="organizações não governamentais brasileiras ou internacionais"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('organizações não governamentais brasileiras ou internacionais', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >organizações não governamentais brasileiras ou internacionais<br>
                    <input type="checkbox" name="recursos_origem[]" value="subvenções públicas"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('subvenções públicas', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >subvenções públicas<br>
                    <input type="checkbox" name="recursos_origem[]" value="venda de produtos/prestação de serviços"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('venda de produtos/prestação de serviços', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >venda de produtos/prestação de serviços<br>
                    <input type="checkbox" name="recursos_origem[]" value="outros"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('outros', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >outros<br>
                    <input type="text"   value="<?php echo $edit->getFonteRecursosOutros() ?>"   name="fonte_recursos_outros" placeholder=" outros..." 
                    <?php if($edit->getFonteRecursosOutros() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> class="f1-last-name form-control">
               </div> 



            <!--Tabela Temas-->

            <h4>12. Quais são as áreas de atuação da sua Organização? </h4>
            <h5>Escolha até 5 (cinco) temas dentro da sua área de atuação*:</h5>
            <div class="form-group" style="border: 1px solid #ddd">
            <div class="table-responsive">
            <table id="form1" required name="table_temas"class="table table-hover col-sm-12" >

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
                    <td><input type="checkbox" id="arte_cultura" name="temas[ ]" value="arte_cultura" class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('arte_cultura', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Arte e Cultura.</td>
                    <td>Promoção do acesso de mulheres à cultura e/ou incentivo à produção das várias expressões artísticas e valorização de práticas culturais e tradicionais.</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Norte" 
                        <?php 
                            if(in_array('Norte', $array_arte_cultura)) : ?> checked="checked" <?php endif; 
                         ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_arte_cultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_arte_cultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_arte_cultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_arte_cultura" name="temas_arte_cultura[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_arte_cultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td> 
                </tr>
                <tr>
                    <td><input type="checkbox" id="ciencia_tecnologia" name="temas[ ]"value="ciencia_tecnologia"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('ciencia_tecnologia', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Ciência e Tecnologia.</td>
                    <td>Promoção do acesso a linguagens, equipamentos e/ou a produção de ciência e tecnologia por mulheres.</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_ciencia_tecnologia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_ciencia_tecnologia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_ciencia_tecnologia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_ciencia_tecnologia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_ciencia_tecnologia" name="temas_ciencia_tecnologia[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_ciencia_tecnologia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>                    
                </tr>
                <tr>
                    <td><input type="checkbox" id="democracia_participação_politica" name="temas[ ]"value="democracia_participação_politica"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('democracia_participação_politica', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td> Democracia e Participação Política.</td>
                    <td>Ações de incentivo à participação de mulheres na vida política e democrática institucional (partidos, conselhos, órgãos e instâncias dos poderes executivo, legislativo e judiciário).</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_democracia_participação_politica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_democracia_participação_politica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_democracia_participação_politica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_democracia_participação_politica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_democracia_politica" name="temas_democracia_politica[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_democracia_participação_politica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td> 
                </tr>

                <tr>
                    <td><input type="checkbox" id="educacao_formacao" name="temas[ ]"value="educacao_formacao"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('educacao_formacao', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Educação e Formação.</td>
                    <td>Oferta de educação formal (escolar ou acadêmica), incentivo à escolaridade; formação de atores sociais, ações de educação popular e informal.</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_educacao_formacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_educacao_formacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_educacao_formacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_educacao_formacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_educacao_formacao" name="temas_educacao_formacao[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_educacao_formacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" id="empreendedorismo_feminino_autonomia_economica" name="temas[ ]" value="empreendedorismo_feminino_autonomia_economica"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('empreendedorismo_feminino_autonomia_economica', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Empreendedorismo feminino e autonomia econômica.</td>
                    <td>Ações de incentivo ao empreendedorismo feminino e à autonomia econômica, por meio de capacitação e/ou financiamento, tais como cooperativismo, microcrédito, etc.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_empreendedorismo_feminino_autonomia_economica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_empreendedorismo_feminino_autonomia_economica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_empreendedorismo_feminino_autonomia_economica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_empreendedorismo_feminino_autonomia_economica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_empreendedorismo_feminino" name="temas_empreendedorismo_feminino[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_empreendedorismo_feminino_autonomia_economica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td> 
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]" id="enfrentamento_violencia" value="enfrentamento_violencia"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('enfrentamento_violencia', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Enfrentamento à Violência.</td>
                    <td>Trabalho de enfrentamento às mais variadas formas de violência, destinado a mulheres e homens.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_enfrentamento_violencia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_enfrentamento_violencia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_enfrentamento_violencia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_enfrentamento_violencia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_enfretamento_violencia" name="temas_enfretamento_violencia[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_enfrentamento_violencia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
                <tr>
                    <td><input type="checkbox" id="equidade_Condicoes_trabalho" name="temas[ ]" value="equidade_Condicoes_trabalho"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('equidade_Condicoes_trabalho', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Equidade e Condições de Trabalho.</td>
                    <td>Oportunidades iguais para mulheres e homens no mercado de trabalho, divisão justa entre ambos os sexos, mesmas 
    possibilidades de desenvolvimento profissional e equipara çãosalarial;participação em cargos de liderança e conselho.</td>    
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_equidade_Condições_trabalho)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_equidade_Condições_trabalho)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_equidade_Condições_trabalho)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_equidade_Condições_trabalho)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_equidade_trabalho" name="temas_equidade_trabalho[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_equidade_Condições_trabalho)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" id="esporte" name="temas[ ]"value="esporte"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('esporte', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Esportes.</td>
                    <td>Oferta, promoção e incentivo à realização de práticas esportivas por meninas e mulheres, sobretudo em modalidades tradicionalmente dominadas por homens.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_esporte)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_esporte)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_esporte)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_esporte)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_esportes" name="temas_esportes[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_esporte)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="indigenas" name="temas[ ]"value="indigenas"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('indigenas', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Indígenas.</td>
                    <td>Ações destinadas à valorização das mulheres indígena; ao enfrentamento de seus problemas específicos, à geração de renda e ao emponderamento político.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_indigenas)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_indigenas)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_indigenas)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_indigenas)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_indigenas" name="temas_indigenas[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_indigenas)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td
                </tr>
                <tr>
                    <td><input type="checkbox" id="LGBTT" name="temas[ ]"value="LGBTT"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('LGBTT', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>LGBTT (Lésbicas, Gays, Bissexuais, Travestis, Transexuais e Transgêneros).</td>
                    <td>Projetos que atuam pela valorização e afirmação de pessoas LGBTT e combatem a violência e a discriminação contra esses públicos.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_LGBTT)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_LGBTT)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_LGBTT)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_LGBTT)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_lgbtt" name="temas_lgbtt[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_LGBTT)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
                </tr>
                <tr>
                    <td><input type="checkbox" id="masculinidade" name="temas[ ]"value="masculinidade"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('masculinidade', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Masculinidades.</td>
                    <td>Ações voltadas para questões relativas à revisão do conceito hegemônico de masculinidade, a partir da perspectiva das relações de gênero.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_masculinidade)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_masculinidade)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_masculinidade)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_masculinidade)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_masculinidades" name="temas_masculinidades[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_masculinidade)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
                </tr>
                <tr>
                     <td><input type="checkbox" id="meio_ambiente" name="temas[ ]"value="meio ambiente,seguranca,agricultura"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('meio ambiente,seguranca,agricultura', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Meio Ambiente,Segurança Alimentar e Agricultura.</td>
                    <td>Trabalhos que relacionam questões de gênero, feminismo e meio ambiente. 
    Direito e acesso a alimentos de qualidade, em quantidade suficiente, saudáveis e ambientalmente sustentáveis.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_meio_ambiente_seguranca_agricultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_meio_ambiente_seguranca_agricultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_meio_ambiente_seguranca_agricultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_meio_ambiente_seguranca_agricultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_meio_ambiente" name="temas_meio_ambiente[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_meio_ambiente_seguranca_agricultura)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
                </tr>

                <tr>
                    <td><input type="checkbox" id="midia_comunicacao" name="temas[ ]"value="midia_comunicacao"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('midia_comunicacao', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Mídia e Comunicação.</td>
                    <td>Promoção do acesso de mulheres aos meios de comunicação pelo domínio de técnicas, equipamentos e linguagens; monitoramento da presença da mulher nas mídias e da cobertura adequada de temas sobre as questões das mulheres.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_midia_comunicacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_midia_comunicacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_midia_comunicacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_midia_comunicacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_midia_comunicacao" name="temas_midia_comunicacao[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_midia_comunicacao)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
               </tr>

                <tr>
                    <td><input type="checkbox" id="moradia" name="temas[ ]"value="moradia"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('moradia', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Moradia.</td>
                    <td>Ações que visam contribuir para o direito das mulheres à moradia e ao desenvolvimento de habilidades para a construção ou reformas de casas.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_moradia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_moradia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_moradia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_moradia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_moradia" name="temas_moradia[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_moradia)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
               </tr>

               <tr>
                    <td><input type="checkbox" id="negritude" name="temas[ ]"value="negritude"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('negritude', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Negritude.</td>
                    <td>Ações de valorização da estética e da identidade das mulheres negras e de combate ao racismo.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_negritude)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_negritude)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_negritude)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_negritude)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_negritude" name="temas_negritude[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_negritude)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
               </tr>

               <tr> 
                    <td><input type="checkbox" id="paz_seguranca_publica" name="temas[ ]"value="paz_seguranca_publica"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('paz_seguranca_publica', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Paz e Segurança pública.</td>
                    <td>Projetos que tratam da interface entre gênero e sistema de segurança pública, sobretudo questões da violência armada.</td>
                    <td class="temas_regioes"style="width:150px">
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_paz_seguranca_publica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_paz_seguranca_publica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_paz_seguranca_publica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_paz_seguranca_publica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_paz_seguranca" name="temas_paz_seguranca[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_paz_seguranca_publica)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
                    </td>
               </tr>

               <tr> 
                <td><input type="checkbox" id="saude_bemestar" name="temas[ ]"value="saude_bemestar"class="no-margin" onclick="verificar()"
                    <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('saude_bemestar', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Saúde e Bem-estar.</td>
                    <td>Iniciativas que tratam de questões de autoestima, qualidade de vida, saúde e bem-estar das mulheres.</td>
                    <td class="temas_regioes" style="width:150px">
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Norte"
                        <?php 
                            if(in_array('Norte', $array_saude_bemestar)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Norte<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Nordeste"
                        <?php 
                            if(in_array('Nordeste', $array_saude_bemestar)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Nordeste<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Centro-Oeste"
                        <?php 
                            if(in_array('Centro-Oeste', $array_saude_bemestar)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Centro-Oeste<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Sul"
                        <?php 
                            if(in_array('Sul', $array_saude_bemestar)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sul<br>
                        <input type="checkbox" class="temas_saude_bemestar" name="temas_saude_bemestar[ ]" value="Sudeste"
                        <?php 
                            if(in_array('Sudeste', $array_saude_bemestar)) : ?> checked="checked" <?php endif; 
                        ?>
                        >Sudeste<br>
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
 <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar vários subtemas.</em></h6>
<div class="form-group">
<label for="subtemas" for="f1-google-plus">Subtemas</label>
        <select class="f1-last-name form-control"id="subtemas"  required  class="selectpicker" name="subtemas[ ]" data-style="default" multiple>
            <option value="Aborto"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Aborto', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Aborto</option>
             <option value="Advocacy" 
            <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Advocacy', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Advocacy</option>
            <option value="Água e saneamento básico"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Água e saneamento básico', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Água e saneamento básico</option>
            <option value="Artes plásticas"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Artes plásticas', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Artes plásticas</option>
            <option value="Economia Solidária"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Economia Solidária', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Economia solidária</option>
            <option value="Cadeia produtiva responsável"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Cadeia produtiva responsável', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Cadeia produtiva responsável</option>
             <option value="Cinema"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Cinema', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Cinema</option>
            <option value="Conselhos e outras instâncias"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Conselhos e outras instâncias', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Conselhos e outras instâncias</option>
            <option value="Consumo"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Consumo', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Consumo</option>
            <option value="Cooperativismo"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Cooperativismo', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Cooperativismo</option>
            <option value="Dança"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Dança', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Dança</option>
            <option value="Desenvolvimento e Programação"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Desenvolvimento e Programação', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Desenvolvimento e programação (informática)</option>
            <option value="Ecofeminismo"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Ecofeminismo', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Ecofeminismo</option>
            <option value="Economia criativa"  
            <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Economia criativa', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Economia criativa</option>
            <option value="Educomunicação"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Educomunicação', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Educomunicação</option>
            <option value="Envelhecimento"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Envelhecimento', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Envelhecimento</option>
            <option value="Estudo e pesquisa"
            <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Estudo e pesquisa', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Estudo e pesquisa</option>
             <option value="Finanças sociais"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Finanças sociais', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Finanças sociais</option>
            <option value="Fotografia"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Fotografia', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Fotografia</option>
            <option value="Incentivo à leitura"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Incentivo à leitura', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Incentivo à leitura</option>
            <option value="Inclusão digital"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Inclusão digital', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Inclusão digital</option>
            <option value="Inserção de mulheres na política"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Inserção de mulheres na política', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Inserção de mulheres na política</option>
            <option value="Liderança"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Liderança', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Liderança</option>
            <option value="Marketing"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Marketing', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Marketing</option>
            <option value="Microcrédito"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Microcrédito', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Microcrédito</option>
            <option value="Mobilização"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Mobilização', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Mobilização</option>
            <option value="Mudanças climáticas"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Mudanças climáticas', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Mudanças climáticas</option>
            <option value="Mulheres nas ciências e tecnologia"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Mulheres nas ciências e tecnologia', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Mulheres nas ciências e tecnologia</option>
            <option value="Obesidade infantil"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Obesidade infantil', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Obesidade infantil</option>
            <option value="Parto Humanizado"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Parto Humanizado', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Parto Humanizado</option>
            <option value="Paternidade" 
            <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Paternidade', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
                >Paternidade</option>
                <option value="Pessoa com deficiência"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Pessoa com deficiência', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Pessoa com deficiência</option>
            <option value="Povos tradicionais"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Povos tradicionais', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Povos tradicionais</option>
            <option value="Preconceito e discriminação"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Preconceito e discriminação', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Preconceito e discriminação</option>
            <option value="Promoção à cargos de liderança"
            <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Promoção à cargos de liderança', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Promoção à cargos de liderança</option>
            <option value="Questão presidiária"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Questão presidiária', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Questão presidiária</option>
             <option value="Reciclagem e logística reversa"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Reciclagem e logística reversa', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Reciclagem e logística reversa</option>
            <option value="Redes sociais"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Redes sociais', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Redes sociais</option>
            <option value="Refugiados"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Refugiados', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Refugiados</option>
            <option value="Reparação-reconstrução"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Reparação-reconstrução', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Reparação-reconstrução</option>

                <option value="Religiāo"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Religiāo', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Religiāo</option>

            <option value="Saúde sexual e reprodutiva"
            <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Saúde sexual e reprodutiva', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Saúde sexual e reprodutiva</option>
            <option value="Sustentabilidade"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Sustentabilidade', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Sustentabilidade</option>
            <option value="Teatro"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Teatro', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Teatro</option>
            <option value="Tecnologias sociais e/ou alternativas"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Tecnologias sociais e/ou alternativas', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Tecnologias sociais e/ou alternativas</option>
            <option value="Tecnologia"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Tecnologia', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Tecnologia</option>
            <option value="Trabalho digno"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Trabalho digno', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Trabalho digno</option>
            <option value="Tráfico de pessoas"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Tráfico de pessoas', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Tráfico de pessoas</option>
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
                    class="f1-about-yourself form-control" id="sobre" ><?php echo $edit->getDescricao() ?></textarea>
                    <span id="contando" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>

                <h4>14.Quais os principais públicos diretamente atendidos por sua organização? Selecione até três.*</h4>
                 <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar os subtemas.</em></h6>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" class="selectpicker" required id="publico_alvo" data-style="default" multiple name="publico_alvo" >
                        <option value=""></option>
                        <option value="Empresas" <?=($edit->getPublicoAtendido() == 'Empresas')?'selected':''?>
                            >Empresas</option>
                        <option value="Organizações Sociais" <?=($edit->getPublicoAtendido() == 'Organizações Sociais')?'selected':''?>
                            >Organizações Sociais</option>
                        <option value="Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher" <?=($edit->getPublicoAtendido() == 'Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher')?'selected':''?>
                            >Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher</option><br>
                        <option value="Movimentos, coletivos, redes, fóruns" <?=($edit->getPublicoAtendido() == 'Movimentos, coletivos, redes, fóruns')?'selected':''?>
                            >Movimentos, coletivos, redes, fóruns</option>
                        <option value="Adolescentes e jovens" <?=($edit->getPublicoAtendido() == 'Adolescentes e jovens')?'selected':''?>
                            >Adolescentes e jovens</option>

                        <option value="Crianças" <?=($edit->getPublicoAtendido() == 'Crianças')?'selected':''?>
                            >Crianças</option>

                        <option value="Homens" <?=($edit->getPublicoAtendido() == 'Homens')?'selected':''?>
                            >Homens</option>
                        <option value="Mulheres" <?=($edit->getPublicoAtendido() == 'Mulheres')?'selected':''?>
                            >Mulheres</option>
                           
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
                    <input type="text" required  name="organizacao-relaciona1" value="<?php echo (explode("_1",$edit->getEmpoderamentoNome_1())[0]); ?>"  class="f1-last-name form-control">
                    <textarea name="sobre_iniciativas1" onkeyup="caracterTextarea(this.value,500,'contando1')" required  maxlength="500" placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong1"  data-error = "Campo obrigatório, favor preencher."><?php echo $edit->getEmpoderamentoDesc_1(); ?></textarea>
                    <span id="contando1" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>
                <h5>Iniciativa 2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text"   name="organizacao-relaciona2"  class="f1-last-name form-control" value="<?php echo (explode("_2",$edit->getEmpoderamentoNome_2())[0]); ?>">
                    <textarea name="sobre_iniciativas2"  onkeyup="caracterTextarea(this.value,500,'contando2')"  maxlength="500"  placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong2" data-error = "Campo obrigatório, favor preencher."><?php echo $edit->getEmpoderamentoDesc_2(); ?></textarea>
                    <span id="contando2" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>
                <h5>Iniciativa 3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="organizacao-relaciona3"  class="f1-last-name form-control"  value="<?php echo (explode("_3",$edit->getEmpoderamentoNome_3())[0]); ?>">
                    <textarea name="sobre_iniciativas3" onkeyup="caracterTextarea(this.value,500,'contando3')" maxlength="500"  placeholder="descreva as iniciativas da sua organização...." 
                    class="f1-about-yourself form-control" id="sobre_iniciativa_ong3" data-error = "Campo obrigatório, favor preencher."><?php echo $edit->getEmpoderamentoDesc_3(); ?></textarea>
                    <span id="contando3" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>

                <h4>16. Em quais estados sua iniciativa tem atuação direta?*</h4>
                    <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar várias opções.</em></h6>
                    <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  name="organizacao_estado[ ]" multiple >
                        <div class="help-block with-errors"></div>
                        <option value="Acre"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Acre', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Acre</option>
                        <option value="Alagoas"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Alagoas', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Alagoas</option>
                        <option value="Amapá"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Amapá', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Amapá</option>
                        <option value="Amazonas"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Amazonas', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Amazonas</option>
                        <option value="Bahia"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Bahia', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>>Bahia</option>
                        <option value="Ceará"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Ceará', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Ceará</option>
                        <option value="Distrito Federal"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Distrito Federal', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Distrito Federal</option>
                        <option value="Espírito Santo"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Espírito Santo', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Espírito Santo</option>
                        <option value="Goiás"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Goiás', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Goiás</option>
                        <option value="Maranhão"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Maranhão', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Maranhão</option>
                        <option value="Mato Grosso"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Mato Grosso', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Mato Grosso</option>
                        <option value="Mato Grosso do Sul"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Mato Grosso do Sul', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Mato Grosso do Sul</option>
                        <option value="Minas Gerais"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Minas Gerais', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Minas Gerais</option>
                        <option value="Pará"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Pará', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Pará</option>
                        <option value="Paraíba"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Paraíba', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Paraíba</option>
                        <option value="Paraná"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Paraná', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Paraná</option>
                        <option value="Pernambuco"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Pernambuco', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Pernambuco</option>
                        <option value="Piauí"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Piauí', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>>Piauí</option>
                        <option value="Rio de Janeiro"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Rio de Janeiro', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Rio de Janeiro</option>
                        <option value="Rio Grande do Norte"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Rio Grande do Norte', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Rio Grande do Norte</option>
                        <option value="Rio Grande do Sul"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Rio Grande do Sul', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Rio Grande do Sul</option>
                        <option value="Rondônia"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Rondônia', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Rondônia</option>
                        <option value="Roraima"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Roraima', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Roraima</option>
                        <option value="Santa Catarina"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Santa Catarina', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Santa Catarina</option>
                        <option value="São Paulo"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('São Paulo', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >São Paulo</option>
                        <option value="Sergipe"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Sergipe', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Sergipe</option>
                        <option value="Tocantins"
                        <?php 
                        for($i = 0; $i <= count($array_estados)-1; $i++){
                            if(in_array('Tocantins', $array_estados[$i])) : ?> selected="selected" <?php endif; 
                        } ?>
                        >Tocantins</option>
                    </select>


                    <h4>17. A sua organizaçāo influenciou políticas públicas?*</h4>

                <div class="form-group">
                   <label class="radio-inline">
                        <input type="radio"  name="politicas_publicas" <?=($edit->getPoliticasPublicas() == '')?'checked=checked':''?>
                         value="nao" class="form-control-radio"> Nāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="politicas_publicas" <?=($edit->getPoliticasPublicas() != '')?'checked=checked':''?>
                        value="sim" class="form-control-radio"> Sim
                    </label>
                </div>
                
              <h5>17.1. Se sim, em quais níveis?</h5>
              <h5>Descreva como se deu essa influência em políticas públicas, detalhe no campo de texto, caso necessário</h5>

                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="Municipal" class="form-control-radio"
                        <?php 
                        for($i = 0; $i <= count($array_politicas_publicas)-1; $i++){
                            if(in_array('Municipal', $array_politicas_publicas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >Municipal
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="Estadual" class="form-control-radio"]
                        <?php 
                        for($i = 0; $i <= count($array_politicas_publicas)-1; $i++){
                            if(in_array('Estadual', $array_politicas_publicas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >Estadual/Distrital
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="Nacional" class="form-control-radio"
                        <?php 
                        for($i = 0; $i <= count($array_politicas_publicas)-1; $i++){
                            if(in_array('Nacional', $array_politicas_publicas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >Nacional
                    </label>
                    <textarea name="organizaçāo_politica_publica" maxlength="500" onkeyup="caracterTextarea(this.value,500,'contando4')" placeholder="Descreva como se deu essa influência em políticas públicas (em 500 caracteres)"

                    class="f1-about-yourself form-control" id="organizaçāo_politica_publica"><?php echo $edit->getPoliticasPublicas(); ?></textarea>
                    <span id="contando4" style="font-family:verdana;"></span><br/>
                </div>


                <!-- Organizacao 27-->


<h4>18. A sua organização realiza monitoramento e avaliação sistematizada das atividades?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required name="monitoramento_atv" id="avaliacao">
                        <option value=""></option>
                        <option value="nao" <?=($edit->getMonitoramentoAtividades() == '')?'selected':''?>
                        >Nāo</option>
                        <option value="sim" <?=($edit->getMonitoramentoAtividades() != '')?'selected':''?>
                        >Sim</option>
                    </select>
                    <textarea type="text" onkeyup="caracterTextarea(this.value,500,'contando5')" required id="inputAvaliacaoOng" name="inputAvaliacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Quais foram os resultados comprovados alcançados até hoje? Limite de 500 caracteres.."
                        <?php if($edit->getMonitoramentoAtividades() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> /><?php echo $edit->getMonitoramentoAtividades(); ?></textarea>
                        <span id="contando5" style="font-family:verdana;"></span><br/>
                    <script>

                        var dropdownAvaliacao = document.getElementById('avaliacao');
                            
                            function onDropdownChangedAvaliacao()
                            {
                                console.log(dropdownAvaliacao.selectedIndex);
                                var meuInput1 = document.getElementById('inputAvaliacaoOng');
                                //pegando valor do select na variável dropdownAvaliacao

                                
                                if(dropdownAvaliacao.options[dropdownAvaliacao.selectedIndex].value == "sim") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput1.style.display = 'block';
                                }else{
                                    meuInput1.style.display = 'none';
                                    $('#inputAvaliacaoOng').attr('value','');
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
                    <select class="f1-last-name form-control" required  id="organizacao-comunicacao" name="comunicacao">
                        <option value=""></option>
                        <option value="nao" <?=($edit->getEstrategiaComunicacao() == '')?'selected':''?>
                        >Nāo</option>
                        <option value="sim" <?=($edit->getEstrategiaComunicacao() != '')?'selected':''?>
                        >Sim, qual?</option>
                    </select>
                    <textarea type="text" required onkeyup="caracterTextarea(this.value,500,'contando6')" name="inputComunicacaoOng" id="inputComunicacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Descreva aqui. Limite de 500 caracteres.."  
                    <?php if($edit->getEstrategiaComunicacao() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> /><?php echo $edit->getEstrategiaComunicacao(); ?></textarea>
<span id="contando6" style="font-family:verdana;"></span><br/>
                    <script>

                        var dropdownComun = document.getElementById('organizacao-comunicacao');
                            
                            function onDropdownChangedComun()
                            {
                                console.log(dropdownComun.selectedIndex);
                                //pegando valor do select na variável dropdown
                                var meuInput1 = document.getElementById('inputComunicacaoOng');
                                if(dropdownComun.options[dropdownComun.selectedIndex].value == "sim") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput1.style.display = 'block';
                                }else{
                                    meuInput1.style.display = 'none';
                                    $('#inputComunicacaoOng').attr('value','');
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

<h4>20. A sua organizaçāo recebeu premiações, certificações, etc.?*</h4>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  id="premiacao" name="premiacao">
                        <option value=""></option>
                        <option value="nao" <?=($edit->getPremiacaoCertificacao() == '')?'selected':''?>
                        >Nāo</option>
                        <option value="sim" <?=($edit->getPremiacaoCertificacao() != '')?'selected':''?>
                        >Sim, quais?</option> 
                        
                    </select>
                    <textarea type="text"  required onkeyup="caracterTextarea(this.value,500,'contando7')" name="inputPremiacaoOng" id="inputPremiacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Descreva aqui. Limite de 500 caracteres...
" <?php if($edit->getPremiacaoCertificacao() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> /><?php echo $edit->getPremiacaoCertificacao(); ?></textarea>
<span id="contando7" style="font-family:verdana;"></span><br/>
                    <script>

                    var dropdown = document.getElementById('premiacao');
                            
                            function onDropdownChangedPremiacao()
                            {
                                console.log(dropdown.options[dropdown.selectedIndex].value);
                                //pegando valor do select na variável dropdown
                                var meuInput = document.getElementById('inputPremiacaoOng');
                                if(dropdown.options[dropdown.selectedIndex].value == "sim") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                    $('#inputPremiacaoOng').attr('value','');
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
                <input type="text" name="relaciona1"  class="f1-last-name form-control" value="<?php //echo (explode("_1",$edit->getRelaciona_1())[0]); ?>" >
                </div>
                <h5>Organização 2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona2"  class="f1-last-name form-control" value="<?php //echo (explode("_2",$edit->getRelaciona_2())[0]); ?>">
                </div>
                <h5>Organização 3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona3" class="f1-last-name form-control" value="<?php //echo (explode("_3",$edit->getRelaciona_3())[0]); ?>">
                </div>  --> 

                
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next" onclick="return validacampobranco2();">Próximo</button>
                </div>

</fieldset>

           
            <!--Etapa 3 Formulário: Endereço/Organizaçāo -->


            <fieldset class="tab endereco">
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Região*</label>
                    <select class="f1-last-name form-control" required  name="regiao" id="regiao">
                        <option value="norte" <?=($edit->getRegiao() == 'norte')?'selected':''?>
                        >Norte</option>
                        <option value="nordeste" <?=($edit->getRegiao() == 'nordeste')?'selected':''?>
                        >Nordeste</option>
                        <option value="centro-oeste" <?=($edit->getRegiao() == 'centro-oeste')?'selected':''?>
                        >Centro-Oeste</option>
                        <option value="sul" <?=($edit->getRegiao() == 'sul')?'selected':''?>
                        >Sul</option>
                        <option value="sudeste" <?=($edit->getRegiao() == 'sudeste')?'selected':''?>
                        >Sudeste</option>
                    </select> 
                </div>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">UF*</label>
                    <select class="f1-last-name form-control"   name="estado" id="estados" disabled="false">
                        <?php echo "<script type='text/javascript'> var estado = '".$edit->getEstado()."'; </script>"; ?>
                        <script type="text/javascript">
                        jQuery(document).ready(function() {
                           
                           $("#estados option").each(function(){     
                                if($(this).val() == estado ){
                                    $(this).attr('selected', 'selected');   
                                } 
                            });

                        });
                        </script>
                        <option value=""></option>
                    </select> 
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cidade*</label>
                    <select class="f1-last-name form-control" required  name="cidade" id="cidades" disabled="false"> 
                       <?php echo "<script type='text/javascript'> var cidade = '".$edit->getCidade()."'; </script>"; ?>
                        
                        <option value=""></option>
                        

                    </select> 
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro*</label>
                <input type="text" required  data-error="campo obrigatório, favor preencher" value="<?php echo $edit->getBairro(); ?>" name="bairro" placeholder="Bairro..." class="f1-last-name form-control">
                <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua*</label>
                    <input type="text" required  data-error="campo obrigatório, favor preencher" value="<?php echo $edit->getRua(); ?>" name="rua" placeholder="Rua/Av...*" class="f1-last-name form-control">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número*</label>
                    <input type="text" required data-error="campo obrigatório, favor preencher" value="<?php echo $edit->getNumero(); ?>" name="numero" placeholder="Numero...*" class="f1-last-name form-control">
                    <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento</label>
                    <input type="text"  data-error="campo obrigatório, favor preencher" value="<?php echo $edit->getComplemento(); ?>" name="complemento" placeholder="Complemento...*" class="f1-last-name form-control">
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep*</label>
                    <input type="text" required   data-error="campo obrigatório, favor preencher" value="<?php echo $edit->getCep(); ?>" name="cep" placeholder="CEP...*" class="f1-last-name form-control cep">
                    <div class="help-block with-errors"></div>
                </div> 

               <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next" onclick="return validacampobranco3()">Próximo</button>
                </div>

            </fieldset>
 
          <!--Etapa 4 Formulário: Mídia Social-->

            <fieldset class="tab redes_sociais">
                <div class="form-group">
                    <div class="input-group" >
                      <span class="input-group-addon"><i class="fa fa-mouse-pointer"></i></span>
                    <input class="form-control"  value="<?php echo $edit->getSite(); ?>" type="text" name="site" placeholder="Site">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
                        <input class="form-control" type="text" name="facebook" placeholder="Facebook"
                        value="<?php echo $edit->getFacebook(); ?>">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-twitter-square"></i></span>
                        <input class="form-control"  value="<?php echo $edit->getTwitter(); ?>" type="text" name="twitter" placeholder="Twitter">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                        <input class="form-control"  value="<?php echo $edit->getInstagram(); ?>" type="text" name="instagram" placeholder="Instagram">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-linkedin-square"></i></span>
                        <input class="form-control" type="text"  value="<?php echo $edit->getlinkedin(); ?>" name="linkedin" placeholder="Linkedin">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span>
                        <input class="form-control" type="text"  value="<?php echo $edit->getOutros(); ?>" name="outros" placeholder="Outros">
                    </div>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset>

            <fieldset class="tab indicacao">
                <h4>Indique pelo menos 1 (uma) e até 3 (três) organizações e/ ou iniciativas que na sua opinião também devem ser convidadas a preencher este questionário e participar do processo de mapeamento:</h4>
                <h5>Iniciativa 1</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" required name="indica_nome_1" placeholder="Nome" class="f1-last-name form-control" id="nomeIndica1"
                    value="<?php echo (explode("_1",$edit->getIndicaNome_1())[0]); ?>" >
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" required name="indica_email_1" placeholder="E-mail" class="f1-last-name form-control" id="emailIndica1"
                value="<?php echo $edit->getIndicaEmail_1(); ?>" >
                    
                </div>
<!--phone_with_ddd
 -->
                <div class="form-group">
                    <label class="sr-only" required  for="f1-last-name">Telefone</label>
                <input type="tel" name="indica_telefone_1" onblur="ExitField('inputTel3','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" placeholder="Telefone" class="f1-last-name form-control phone_with_ddd" id="inputTel3"
                value="<?php echo $edit->getIndicaTelefone_1(); ?>" >
                </div>
                <h5>Iniciativa 2</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_2" placeholder="Nome" class="f1-last-name form-control" id="nomeIndica2"
                 value="<?php echo (explode("_2",$edit->getIndicaNome_2())[0]); ?>" >
                </div>

                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                <input type="email" name="indica_email_2" placeholder="E-mail" class="f1-last-name form-control" id="emailIndica2"
                value="<?php echo $edit->getIndicaEmail_2(); ?>" >                    
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_2" onblur="ExitField('inputTel4','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" placeholder="Telefone" class="f1-last-name form-control phone_with_ddd" id="inputTel4"
                    value="<?php echo $edit->getIndicaTelefone_2(); ?>" >
                </div>
                <h5>Iniciativa 3</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text" name="indica_nome_3" placeholder="Nome" class="f1-last-name form-control" id="nomeIndica3"
                value="<?php echo (explode("_3",$edit->getIndicaNome_3())[0]); ?>" >
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="indica_email_3" placeholder="E-mail" class="f1-last-name form-control" id="emailIndica3"
                    value="<?php echo $edit->getIndicaEmail_3(); ?>" >   
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="indica_telefone_3" onblur="ExitField('inputTel5','msgTel','Telefone inválido, número deve conter 14 caracteres ', 14);" placeholder="Telefone" class="f1-last-name form-control phone_with_ddd" id="inputTel5"
                    value="<?php echo $edit->getIndicaTelefone_3(); ?>" >
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="submit" class="btn btn-submit edit-button" onclick="return validacampobranco4();">Enviar</button>
                </div>
            </fieldset>
        </form>
    </div>
</div>
    
