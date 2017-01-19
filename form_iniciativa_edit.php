                    <!-- Bootstrap core JavaScript
         ================================================== -->

            <script src="assets/js/bootstrap.min.js"></script>
            <!--<script src="assets/js/validator.min.js"></script>-->
          
             <script type="text/javascript" src="assets/js/jquery.mask.min.js"></script>
             <script src="assets/js/textarea.js"></script>
            


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
    $array_funcoes = $edit->getFuncoes();
    $array_politicas_publicas = $edit->getPoliticasPublicasList();  
    $array_subtema = $edit->getSubtemas();
    $array_estados = $edit->getEstados();
?>       

<div class="row form_inicial">
    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
        <form role="form" action="classes/prepare_cadastro.php" method="post" class="f1 form-ong">
            <input type="hidden" value="editar" name="form_type" />
    		<h3>Cadastro do Ecossistema<br>Iniciativa</h3>
    		<p>Preencha os campos obrigatórios*</p>
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

             <!-- Formulário: Tipo Iniciativa -->


            <fieldset class="tab dados_pessoais" >
                <h4>Dados Pessoais Contato 1:</h4>
                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="nome1" required value="<?php echo $edit->getNome_1() ?>"  class="f1-last-name form-control" id="inputNome1" >
                    
                </div>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" name="cargo_1" required value="<?php echo $edit->getCargo_1() ?>" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name" >
                    
                </div>

                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" name="email_1" required value="<?php echo $edit->getEmail_1() ?>" class="f1-last-name form-control" id="f1-last-name"  >
                    
                </div>
                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" name="telefone_1" required value="<?php echo $edit->getTelefone_1() ?>" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel1" >
                    
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" name="celular_1" required value="<?php echo $edit->getCelular_1() ?>" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel1"  >
                    
                </div>

                <h4>Dados Pessoais Contato 2:</h4>
                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" name="nome2" required value="<?php echo $edit->getNome_2() ?>" placeholder="responsável pela organização ou suplente" class="f1-last-name form-control" id="inputNome2" >
                    
                </div>
                <h5>Cargo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Cargo</label>
                    <input type="text" required name="cargo_2" value="<?php echo $edit->getCargo_2() ?>" placeholder="Cargo" class="f1-last-name form-control" id="f1-last-name" >
                    
                </div>
                 <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email" required  name="email_2" value="<?php echo $edit->getEmail_2() ?>" placeholder="email@email.com" class="f1-last-name form-control" id="f1-last-name" >
                    
                    
                </div>

                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" required  name="telefone_2" value="<?php echo $edit->getTelefone_2() ?>" placeholder="(xx) xxxx-xxxx" class="f1-last-name form-control phone_with_ddd" id="inputTel2">
                </div>
                <h5>Celular*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Celular</label>
                    <input type="tel" required  name="celular_2" value="<?php echo $edit->getCelular_2() ?>" placeholder="(xx) xxxxx-xxxx" class="f1-last-name form-control phone_with_dddcel" id="inputCel2">
                    
                </div>

                <div class="f1-buttons">    
                <button type="button" class="btn btn-warning" onclick="desbloquearCampos();" title="Desbloquear campos para edição">Editar</button>
                <button type="button" class="btn btn-next" >Próximo</button>
               </div>
            </fieldset><!--Dados Pessoais-->

            <!--Iniciativa-->

        <fieldset class="tab organizacao">
           <h4>1. A sua iniciativa está dentro de uma organização juridicamente constituída?*</h4>
                <h6><em>Se sim, digite o nome da organizaçāo e cnpj nos campos abaixo</em></h5>
              
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  name="organizacao-pai" id="organizacao-cnpj">
                        
                        <option value="sim"  
                        <?php if($edit->getOrganizacaoPai() != ""){ echo "selected"; } ?>
                        >sim</option>
                     
                        <option value="nao"
                        <?php if($edit->getOrganizacaoPai() == ""){ echo "selected"; } ?>
                         >não</option>
                    </select> 
                <div class="iniciativapj">     
               <input type="text" id="inputnomeong"  value="<?php echo $edit->getInputnomeong() ?>"  name="inputnomeong" class="f1-last-name form-control" placeholder="nome da organizaçāo" <?php if($edit->getInputnomeong() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> />
               <input type="text"  id="inputcnpj" value="<?php echo $edit->getOrganizacaoPai()  ?>" name="organizacao_pai" class="f1-last-name form-control cnpj" placeholder="xx.xxx.xxxx/xxxx-xx, a inserção deste número é opciona" <?php if($edit->getOrganizacaoPai() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> />

                </div>
                    <script>

                        function displayInput() {

                          var value = $("#organizacao-cnpj option:selected").val();
                          console.log(value);
                          if(value == "sim"){
                            $('#inputnomeong').css('display', 'block');
                            $('#inputcnpj').css('display', 'block');
                          }else{
                            $('#inputnomeong').css('display', 'none');
                            $('#inputcnpj').css('display', 'none');
                            $('#inputcnpj').attr('value','');
                            $('#inputnomeong').attr('value','');
                          }
                        }

                        $( "#organizacao-cnpj" ).change( displayInput );

                    </script>
                </div>


                <h4>2. Onde a sua iniciativa atua?*</h4>
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

                <h4>3. Qual o nome da sua iniciativa?*</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Nome</label>
                    <input type="text" required  name="nome" value="<?php echo $edit->getNome() ?>" maxlength="50" class="f1-last-name form-control" >
                </div>


                <h4>4. Qual a sigla da sua iniciativa?</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Sigla</label>
                    <input type="text" name="sigla" value="<?php echo $edit->getSigla() ?>" class="f1-last-name form-control">
                                    
                </div>

                <h4>5. Informe o telefone da sua iniciativa*</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Telefone</label>
                    <input type="text" required  name="organizacao-telefone" value="<?php echo $edit->getTelefone() ?>"  placeholder="(xx) xxxx-xxxx"class="f1-last-name form-control phone_with_ddd" id="inputTel3">
                    
                </div>

                <h4>6. Informe o e-mail da sua iniciativa*</h4>
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password">Email</label>
                    <input type="email" required  name="email" value="<?php echo $edit->getEmail() ?>"  class="f1-last-name form-control">
                  
                </div>

                <!--verificar o get e set, se está correto -->
                <h4>7. Como a sua iniciativa se identifica?*</h4>

                <div class="form-group">
                    <label class="radio-inline">
                       <input type="radio"  name="identifica" value="acao"
                       <?=($edit->getNatureza() == 'acao')?'checked=checked':''?>
                        class="form-control-radio">Açāo
                    </label>

                    <label class="radio-inline">
                        <input type="radio" name="identifica" value="projeto" 
                        <?=($edit->getNatureza() == 'projeto')?'checked=checked':''?>
                        class="form-control-radio">Projeto
                    </label>
                </div>

                

                <h5>7.1. De qual natureza?</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control"  id="natureza" name="tipo" >           
                        
                        <option value="academica" <?=($edit->getTipo() == 'academica')?'selected':''?>>
                            Acadêmica</option>
                        <option value="coletivo" <?=($edit->getTipo() == 'coletivo')?'selected':''?>>
                            Coletivo</option>
                        <option value="empresa_privada" <?=($edit->getTipo() == 'empresa_privada')?'selected':''?>>
                            Empresa Privada</option>
                        <option value="investimento_social_privado"<?=($edit->getTipo() == 'investimento_social_privado')?'selected':''?>>
                            Investimento Social Privado</option>
                        <option value="fundos"<?=($edit->getTipo() == 'fundos')?'selected':''?>>
                            Fundos</option>
                        <option value="governo"<?=($edit->getTipo() == 'governo')?'selected':''?>>
                            Governo</option>
                        <option value="movimento"<?=($edit->getTipo() == 'movimento')?'selected':''?>>
                            Movimento</option>
                        <option value="negocio_social"<?=($edit->getTipo() == 'negocio_social')?'selected':''?>>
                            Negócio Social</option>
                        <option value="ong_sociedade_civil"<?=($edit->getTipo() == 'ong_sociedade_civil')?'selected':''?>>
                            Organização da Sociedade Civil (ex: associação, ong, oscip, etc)
                        <option value="redes"<?=($edit->getTipo() == 'rede')?'selected':''?>>
                            Redes</option> 
                        <option value="outros"<?=($edit->getTipo() == 'outros')?'selected':''?>>
                            Outros</option>  
                    </select>
                    <input type="text" id="inputoutros"  name="identifica_organizacao_outros" value="<?php echo $edit->getIdentificaOrganizacaoOutros() ?>" class="f1-last-name form-control" 
                    placeholder="descreva outro tipo" <?php if($edit->getIdentificaOrganizacaoOutros() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> />
                    <script>

                        var dropdownNatureza = document.getElementById('natureza');
                            
                            function onDropdownChangedNATUREZA()
                            {
                                console.log(dropdownNatureza.selectedIndex);
                                //pegando valor do select na variável dropdownCnpj
                                var meuInput = document.getElementById('inputoutros');
                                if(dropdownNatureza.options[dropdownNatureza.selectedIndex].value === "outros") {
                                    //faz algo quando o valor selecionado for sim
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for sim, tem cnpj
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                }
                            }
                            
                            if (dropdownNatureza.addEventListener)
                            {
                                dropdownNatureza.addEventListener('change', onDropdownChangedNATUREZA, false);
                            }
                            else
                            {
                                // suporte para o IE
                                dropdownNatureza.attachEvent('onchange', onDropdownChangedNATUREZA, false);
                            }

                    </script>
                </div>
                    
                
                <h4> 8. Em que ano começaram as atividades da sua iniciativa?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  id="year_organizacao" name="anoatividade" >
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
                    <select class="f1-last-name form-control" required  id="pessoas_envolvidas" name="pessoas_envolvidas">
                        
                        <option value="1-5" <?=($edit->getQtdePessoas() == '1-5')?'selected':''?>>1-5</option>
                        <option value="6-10" <?=($edit->getQtdePessoas() == '6-10')?'selected':''?>>6-10</option>
                        <option value="11-20" <?=($edit->getQtdePessoas() == '11-20')?'selected':''?>>11-20</option>
                        <option value="21-50" <?=($edit->getQtdePessoas() == '21-50')?'selected':''?>>21-50</option>
                        <option value="51-100" <?=($edit->getQtdePessoas() == '51-100')?'selected':''?>>51-100</option>
                        <option value="101-500" <?=($edit->getQtdePessoas() == '101-500')?'selected':''?>>101-500</option>
                        <option value="251-1000" <?=($edit->getQtdePessoas() == '251-1000')?'selected':''?>>251-1000</option>
                        <option value="501-1000" <?=($edit->getQtdePessoas() == '501-1000')?'selected':''?>>501-1000</option>
                        <option value="1001+" <?=($edit->getQtdePessoas() == '1001+')?'selected':''?>>1001+</option>     
                    </select>
                </div>

                <h4>10. Quantas pessoas a sua iniciativa beneficia diretamente?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required id="pessoas_beneficiadas" name="pessoas_beneficiadas" >
                        
                        <option value="até 50" <?=($edit->getQtdeBeneficiadas() == 'até 50')?'selected':''?>>até 50</option>
                        <option value="51-250" <?=($edit->getQtdeBeneficiadas() == '51-250')?'selected':''?>>51-250</option>
                        <option value="251-500" <?=($edit->getQtdeBeneficiadas() == '251-500')?'selected':''?>>251-500</option>
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

               <h4>11. Qual foi o orçamento bruto da sua iniciativa? *</h4>
                 <h5>Em 2014</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2014</label>
                    <input type="text"   id="orcamento_2014" name="orcamento_2014"  value="<?php  echo $edit->getOrcamento_2014(); ?>" placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="iniciativa_orcamento2014">
                    <div class="help-block with-errors"></div>
                </div>
                <h5>Em 2015</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2015</label>
                    <input type="tex"   id="orcamento_2015" name="orcamento_2015"   value="<?php  echo $edit->getOrcamento_2015(); ?>" placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="iniciativa_orcamento2015">
                </div>
                <h5>Em 2016</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">2016</label>
                    <input type="tex"  id="orcamento_2016" name="orcamento_2016"  value="<?php  echo $edit->getOrcamento_2016(); ?>" placeholder="R$ xxxxxx" class="f1-last-name form-control money" id="iniciativa_orcamento2016">
                    <div class="help-block with-errors"></div>
                </div>

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

                <h5>11.1. A sua iniciativa recebe recursos financeiros?</h5>         

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
                    >doação pessoa física</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo federal"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('edital público governo federal', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >edital público governo federal</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público governo estadual"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('edital público governo estadual', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >edital público governo estadual</br>
                    <input type="checkbox" name="recursos_origem[]" value="edital público municipal"
                        <?php 
                            for($i = 0; $i <= count($array_recursos_financeiros)-1; $i++){
                                if(in_array('edital público municipal', $array_recursos_financeiros[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    >edital público municipal</br>
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
                    >leis de incentivo><br>
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

        <h4>12. Quais são as áreas de atuação da sua iniciativa? </h4>
        <h5>Escolha até 5 Temas e todos os Subtemas dentro da sua área de atuação*:</h5>
        <div class="form-group" style="border: 1px solid #ddd">
        <div class="table-responsive">
        <table id="form1" name="table_temas"class="table table-hover col-sm-12" required  >

             <thead>
                <tr>
                    <th></th>
                    <th>Temas</th>
                    <th>Descriçāo</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><input type="checkbox" name="temas[ ]" value="arte_cultura" class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('arte_cultura', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Arte e Cultura.</td>
                    <td>Promoção do acesso de mulheres à cultura e/ou incentivo à produção das várias expressões artísticas.</td>
                     
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="ciencia_tecnologia"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('ciencia_tecnologia', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Ciência e Tecnologia.</td>
                    <td>Promoção do acesso a linguagens, equipamentos e/ou à produção de ciência e tecnologia por mulheres.</td>
                   
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="democracia_participação_politica"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('democracia_participação_politica', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>

                        ></td>
                <td> Democracia e Participação Política.</td>
                <td>Ações de incentivo à participação de mulheres na vida política e democrática institucional (partidos, conselhos, órgãos e instâncias dos poderes executivo, legislativo e judiciário).</td>
            </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="educacao_formacao"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('educacao_formacao', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Educação e Formação.</td>
                    <td>Oferta de educação formal (escolar ou acadêmica), incentivo à escolaridade; formação de atores sociais, ações de educação popular e informal.</td>
                  
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]" value="empreendedorismo_feminino_autonomia_economica"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('empreendedorismo_feminino_autonomia_economica', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Empreendedorismo feminino e autonomia econômica.</td>
                    <td>Ações de incentivo ao empreendedorismo feminino e à autonomia econômica, por meio de capacitação e/ou financiamento, tais como capacitações, cooperativismo, microcrédito, etc.</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]" value="enfrentamento_violencia"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('enfrentamento_violencia', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Enfrentamento à Violência.</td>
                    <td>Trabalho de enfrentamento às mais variadas formas de violência, destinado a mulheres e homens.</td>
                  

                <tr>
                    <td><input type="checkbox" name="temas[ ]" value="equidade_Condições_trabalho"class="no-margin" onclick="verificar()"
                         <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('equidade_Condições_trabalho', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Equidade e Condições de Trabalho.</td>
                    <td>Oportunidades iguais para mulheres e homens, divisão justa entre ambos os sexos, mesmas 
    possibilidades de desenvolvimento profissional e equiparação salarial.</td>    
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="esporte"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('esporte', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Esportes.</td>
                    <td>Oferta, promoção e incentivo à realização de práticas esportivas por meninas e mulheres, sobretudo em modalidades tradicionalmente dominadas por homens.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="indigenas"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('indigenas', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Indígenas.</td>
                    <td>Ações destinadas à valorização das mulheres indígenas e ao enfrentamento de seus problemas específicos.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="LGBTT"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('LGBTT', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>LGBTT (Lésbicas, Gays, Bissexuais, Travestis, Transexuais e Transgêneros).</td>
                    <td>Projetos que atuam pela valorização e afirmação de pessoas LGBTT e combatem a violência e a discriminação contra esses públicos.</td>
                </tr>
                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="masculinidade"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('masculinidade', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Masculinidades.</td>
                    <td>Ações voltadas para questões relativas à revisão do conceito hegemônico de masculinidade, a partir da perspectiva das relações de gênero.</td>
                </tr>
                <tr>
                     <td><input type="checkbox" name="temas[ ]"value="meio ambiente,seguranca,agricultura"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('meio ambiente,seguranca,agricultura', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Meio Ambiente,Segurança Alimentar e Agricultura.</td>
                    <td>Trabalhos que relacionam questões de gênero, feminismo e meio ambiente. 
    Direito e acesso a alimentos de qualidade, em quantidade suficiente, saudáveis e ambientalmente sustentáveis.</td>
                </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="midia_comunicacao"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('midia_comunicacao', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Mídia e Comunicação.</td>
                    <td>Promoção do acesso de mulheres aos meios de comunicação pelo domínio de técnicas, equipamentos e linguagens; monitoramento da presença da mulher nas mídias e da cobertura de temas sobre as questões das mulheres.</td>
               </tr>

                <tr>
                    <td><input type="checkbox" name="temas[ ]"value="moradia"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('moradia', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Moradia.</td>
                    <td>Ações que visam contribuir para o direito das mulheres à moradia e desenvolvimento de habilidades para a construção ou reformas de casas.</td>
               </tr>

               <tr>
                    <td><input type="checkbox" name="temas[ ]"value="negritude"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('negritude', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Negritude.</td>
                    <td>Ações de valorização da estética e da identidade das mulheres negras e de combate ao racismo.</td>
               </tr>

               <tr> 
                    <td><input type="checkbox" name="temas[ ]"value="paz_seguranca_publica"class="no-margin" onclick="verificar()"
                        <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('paz_seguranca_publica', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Paz e Segurança pública.</td>
                    <td>Projetos que tratam da interface entre gênero e sistema de segurança pública, sobretudo questões da violência armada.</td>
               </tr>

               <tr> 
                <td><input type="checkbox" name="temas[ ]"value="saude_bemestar"class="no-margin" onclick="verificar()"
                    <?php 
                        for($i = 0; $i <= count($array_temas)-1; $i++){
                            if(in_array('saude_bemestar', $array_temas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                    ></td>
                    <td>Saúde e Bem-estar.</td>
                    <td>Iniciativas que tratam de questões de autoestima, qualidade de vida, saúde e bem-estar das mulheres.</td>
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



<h5> 12.1. Escolha todos os subtemas dentro da sua área de atuação*</h5>
<h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar os subtemas.</em></h6>
<div class="form-group">
<!--<label for="subtemas" for="f1-google-plus">Subtemas</label>-->
       <select class="f1-last-name form-control"id="subtemas" required  class="selectpicker" name="subtemas[ ]" data-style="default" multiple>
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
            >Desenvolvimento e Programação</option>
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
            <option value="Inclusão Digital"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Inclusão Digital', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Inclusão Digital</option>
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
            <option value="Mulheres no mundo da ciências"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Mulheres no mundo da ciências', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Mulheres no mundo da ciências</option>
            <option value="Obesidade infantil"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Obesidade infantil', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Obesidade infantil</option>
            <option value="Parto Humano"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Parto Humano', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Parto Humano</option>
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
                    if(in_array('Reciclagem e logísitca diversa', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Reciclagem e logísitca diversa</option>
            <option value="Redes Sociais"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Redes Sociais', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Redes Sociais</option>
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
            <option value="Tecnologia social e/ou alternativas"
             <?php 
                for($i = 0; $i <= count($array_subtema)-1; $i++){
                    if(in_array('Tecnologia social e/ou alternativas', $array_subtema[$i])) : ?> selected='selected' <?php endif; 
                } ?>
            >Tecnologia social e/ou alternativas</option>
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

            if ($(this).val().length > 47) {

              $(this).val(last_valid_selection);
            } else {
              last_valid_selection = $(this).val();
            }
          });
        });
    </script> 


           <h4>13. O que faz a sua iniciativa?* </h4> 
            <h6>(até 500 caracteres)</h6>
                <div class="form-group">
                    <label class="sr-only" for="f1-about-yourself"></label>
                    <textarea name="sobre" onkeyup="caracterTextarea(this.value,500,'contando')" maxlength="500" required  placeholder="Fale sobre a sua iniciativa...." 
                    class="f1-about-yourself form-control" id="sobre"><?php echo $edit->getDescricao() ?></textarea>
                    <span id="contando" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                    
                </div>

                <h4>14. Qual o público diretamente atendido pela sua iniciativa?*</h4>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  id="publico_alvo" name="publico_alvo"  >
                    
                        
                        <option value="Empresas" <?=($edit->getPublicoAtendido() == 'Empresas')?'selected':''?>
                            >Empresas</option>

                        <option value="Organizações Sociais" <?=($edit->getPublicoAtendido() == 'Organizações Sociais')?'selected':''?>
                            >Organizações Sociais</option>

                        <option value="Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher" 
                        <?=($edit->getPublicoAtendido() == 'Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher')?'selected':''?>
                            >Instituições públicas/órgãos públicos/legislativo/delegacia da mulher/secretaria da mulher</option><br>

                        <option value="Movimentos, coletivos, redes, fóruns" <?=($edit->getPublicoAtendido() == 'Movimentos, coletivos, redes, fóruns')?'selected':''?>
                            >Movimentos, coletivos, redes, fóruns</option>

                        <option value="Adolescentes e jovens" <?=($edit->getPublicoAtendido() == 'Adolescentes e jovens')?'selected':''?>
                            >Adolescentes e jovens</option>

                        <option value="Homens" <?=($edit->getPublicoAtendido() == 'Homens')?'selected':''?>
                            >Homens</option>

                        <option value="Mulheres" <?=($edit->getPublicoAtendido() == 'Mulheres')?'selected':''?>
                            >Mulheres</option>          
                    </select>
                    
                    <h4>15. Em quais estados a sua iniciativa tem atuação direta?*</h4>
                    <h6><em>Mantenha pressionado o botão Ctrl (windows) / Comando (Mac) para selecionar várias opções.</em></h6>
                    <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="organizacao_estado[ ]" multiple required  >
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

                    <h4>16. A sua iniciativa influenciou políticas públicas?*</h4>
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
					<h5>16.1. Se sim, em quais níveis?</h5>
                <div class="form-group">
                   <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="municipal" class="form-control-radio"
                         <?php 
                        for($i = 0; $i <= count($array_politicas_publicas)-1; $i++){
                            if(in_array('municipal', $array_politicas_publicas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                        >municipal 
                    </label>

                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="estadual" class="form-control-radio"
                        <?php 
                        for($i = 0; $i <= count($array_politicas_publicas)-1; $i++){
                            if(in_array('estadual', $array_politicas_publicas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                        >estadual
                    </label>
                    <label class="checkbox-inline">
                        <input type="checkbox" name="politicas_publicas_lista[]" value="nacional" class="form-control-radio"
                        <?php 
                        for($i = 0; $i <= count($array_politicas_publicas)-1; $i++){
                            if(in_array('nacional', $array_politicas_publicas[$i])) : ?> checked="checked" <?php endif; 
                        } ?>
                        >nacional
                         
                    </label>
                    <textarea name="organizaçāo_politica_publica" onkeyup="caracterTextarea(this.value,500,'contando')" maxlength="500" placeholder="Descreva como se deu essa influência em políticas públicas(em 500 caracteres)"
                    class="f1-about-yourself form-control" id="sobre_iniciativa"><?php echo $edit->getPoliticasPublicas(); ?>
                   </textarea>
                   <span id="contando" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                </div>

<!-- 26 Iniciativa-->


			<h4>17. A sua iniciativa realiza monitoramento e avaliação sistematizada das atividades?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" name="monitoramento_atv" id="avaliacao" required  >
                        
                        <option value="0" <?=($edit->getMonitoramentoAtividades() == '')?'selected':''?>
                        >Nāo</option>
                        <option value="1" <?=($edit->getMonitoramentoAtividades() !== '')?'selected':''?>
                        >Sim</option>
                    </select>
                    <textarea type="text" required  id="inputAvaliacaoOng" 
                     name="inputAvaliacaoOng" class="f1-last-name form-control" onkeyup="caracterTextarea(this.value,500,'contando')" maxlength="500" placeholder="quais foram os resultados comprovados alcançados até hoje? 500 caracteres..
                        " <?php if($edit->getMonitoramentoAtividades() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> /><?php echo $edit->getMonitoramentoAtividades(); ?></textarea>
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

<!-- 27 Iniciativa-->

			<h4>18. A sua Iniciativa tem uma estratégia de comunicação própria?*</h4>

                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="iniciativa-comunicacao" required  >
                        
                        <option value="0" <?=($edit->getEstrategiaComunicacao() == '')?'selected':''?>
                        >Nāo</option>
                        <option value="1" <?=($edit->getEstrategiaComunicacao() != '')?'selected':''?>
                        >Sim, qual?</option>
                    </select>
                    <textarea type="text" required  onkeyup="caracterTextarea(this.value,500,'contando')"  id="inputComunicacaoOng" name="inputComunicacaoOng" class="f1-last-name form-control" maxlength="500" placeholder="Descreva estratégia de comunicação..
" <?php if($edit->getEstrategiaComunicacao() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> /><?php echo $edit->getEstrategiaComunicacao(); ?></textarea>
<span id="contando" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                    <script>

                        var dropdownComun = document.getElementById('iniciativa-comunicacao');
                            
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



      <!-- 28 Iniciativa-->

			<h4>19. A sua iniciativa recebeu premiações, certificações, etc.?*</h4>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" id="premiacao" required  name="premiacao"name="comunicacao" >
                        <div class="help-block with-errors"></div>
                        
                        <option value="0" <?=($edit->getPremiacaoCertificacao() == '')?'selected':''?>
                        >Nāo</option>
                        <option value="1" <?=($edit->getPremiacaoCertificacao() != '')?'selected':''?>
                        >Sim, quais?</option>    
                    </select>
                    <textarea type="text" required id="inputPremiacao" onkeyup="caracterTextarea(this.value,500,'contando')" name="inputPremiacao" class="f1-last-name form-control" maxlength="500"placeholder="Premiações/Certificações..
" <?php if($edit->getPremiacaoCertificacao() != ""){ echo "style='display: block'"; }else{echo "style='display: none'";} ?> /><?php echo $edit->getPremiacaoCertificacao(); ?></textarea>
<span id="contando" style="font-family:verdana;">limite de 500 caracteres.</span><br/>
                    <script>

                        var dropdown = document.getElementById('premiacao');
                            
                            function onDropdownChangedPremiacao()
                            {
                                console.log(dropdown.selectedIndex);
                                //pegando valor do select na variável dropdown
                                var meuInput = document.getElementById('inputPremiacao');
                                if(dropdown.options[dropdown.selectedIndex].value === "1") {
                                    //faz algo quando o valor selecionado for outros
                                    console.log('Selecionou o valor');
                                    //mostra o input quando o valor selecionado for outros
                                    
                                    meuInput.style.display = 'block';
                                }else{
                                    meuInput.style.display = 'none';
                                    $('#inputPremiacao').attr('value','');
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
                </div><!--28/Inicitiva-->


                <!-- 29-->

                 <!-- <h5>Quais são as organizações com atuação na temática da mulher com que sua iniciativa se relaciona diretamente?</h5>
                 <h5>Organização 1</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona1"  class="f1-last-name form-control" value="<?php //echo (explode("_1",$edit->getRelaciona_1())[0]); ?>" >
                </div>
                <h5>Organização 2</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona2"   class="f1-last-name form-control" value="<?php //echo (explode("_2",$edit->getRelaciona_2())[0]); ?>" >
                </div>
                <h5>Organização 3</h5> 
                <div class="form-group">
                    <label class="sr-only" for="f1-repeat-password"></label>
                    <input type="text" name="relaciona3" class="f1-last-name form-control"  value="<?php //echo (explode("_3",$edit->getRelaciona_3())[0]); ?>">
                </div> -->


                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next" data-disable="true">Próximo</button>
                </div> 
</fieldset> 

             <!--Etapa 3 Formulário: Endereço/Iniciativa -->

            <fieldset class="tab endereco">
                <h5>Regiāo*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus"></label>
                    <select class="f1-last-name form-control" required  name="regiao" id="regiao" >
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
                 <h5>UF*</h5>
                 <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">UF</label>
                    <select class="f1-last-name form-control"  required name="estado" id="estados" >

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
                        
                    </select> 
                </div>

                <h5>Cidade*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cidade</label>
                    <select class="f1-last-name form-control" required  name="cidade" id="cidades" > 

                        <?php echo "<script type='text/javascript'> var cidade = '".$edit->getCidade()."'; </script>"; ?>
                        
                        

                    </select> 
                </div>
                <h5>Bairro*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Bairro*</label>
                    <input type="text" required  value="<?php echo $edit->getBairro(); ?>" name="bairro" placeholder="Bairro..." class="f1-last-name form-control">
                     
                <h5>Rua*</h5>        
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-facebook">Rua*</label>
                    <input type="text" required   value="<?php echo $edit->getRua(); ?>" name="rua" placeholder="Rua/Av...*" class="f1-last-name form-control">
                       
                <h5>Número*</h5>        
                </div>
                <div class="form-group">
                    <label class="sr-only" for="f1-twitter">Número*</label>
                    <input type="number" required min="1" value="<?php echo $edit->getNumero(); ?>" name="numero" placeholder="Número...*"class="f1-last-name form-control" >
                        
                </div>
                <h5>Complemento</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Complemento</label>
                    <input type="text"  value="<?php echo $edit->getComplemento(); ?>" name="complemento" placeholder="Complemento..."class="f1-last-name form-control">
                </div>
                <h5>Cep*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-google-plus">Cep*</label>
                    <input type="text" required  value="<?php echo $edit->getCep(); ?>" name="cep" id="inputCep"placeholder="Cep xx-xxx-xxx*"class="f1-last-name form-control cep" >
                   
                </div>              
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset>

             <!--Etapa 4 Formulário: Mídia Social-->

            <fieldset class="tab redes_sociais">
                <h5>Onde podemos encontrar mais informação sobre sua iniciativa?*(Preencha pelo menos 1 item):</h5>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-mouse-pointer"></i></span>
                      <input class="form-control" value="<?php echo $edit->getSite(); ?>" type="text" name="site" placeholder="Site">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-facebook-official"></i></span>
                      <input class="form-control"  value="<?php echo $edit->getFacebook(); ?>" type="text" name="facebook"  placeholder="Facebook">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-twitter-square"></i></span>
                      <input class="form-control" value="<?php echo $edit->getTwitter(); ?>" type="text" name="twitter" placeholder="Twitter">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-instagram"></i></span>
                      <input class="form-control" value="<?php echo $edit->getInstagram(); ?>" type="text" name="instagram" placeholder="Instagram">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-linkedin-square"></i></span>
                      <input class="form-control" type="text"  value="<?php echo $edit->getlinkedin(); ?>"  name="linkedin" placeholder="Linkedin">
                    </div>
                </div>
                <div class="form-group">
                    <div class="input-group margin-bottom-sm">
                      <span class="input-group-addon"><i class="fa fa-ellipsis-h"></i></span>
                      <input class="form-control" type="text"value="<?php echo $edit->getOutros(); ?>" name="outros" placeholder="Outros">
                    </div>
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="button" class="btn btn-next">Próximo</button>
                </div>
            </fieldset>

            <fieldset class="tab indicacao">
                <h4>Indique até três iniciativas que na sua opinião devem participar do processo de mapeamento:</h4>
                <h5>Iniciativa 1</h5>

                <h5>Nome*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Nome</label>
                    <input type="text" required  name="indica_nome_1"  placeholder="Nome" class="f1-last-name form-control" id="f1-last-name"
                    value="<?php echo (explode("_1",$edit->getIndicaNome_1())[0]); ?>" >
                </div>
                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email"  required  name="indica_email_1" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name"
                    value="<?php echo $edit->getIndicaEmail_1(); ?>" >
                    
                </div>
                <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel" required  name="indica_telefone_1" placeholder="Telefone" class="f1-last-name form-control phone_with_ddd" id="inputTel3"
                    value="<?php echo $edit->getIndicaTelefone_1(); ?>" >
                </div>
               
                <h5>Iniciativa 2</h5>

                 <h5>Nome*</h5>
                <div class="form-group">
                   <label class="sr-only" for="f1-last-name">Nome</label>
                   <input type="text"  name="indica_nome_2" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name"
                   value="<?php echo (explode("_2",$edit->getIndicaNome_2())[0]); ?>" >
                </div>
                <h5>E-mail*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email"  name="indica_email_2" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name"
                    value="<?php echo $edit->getIndicaEmail_2(); ?>" >                       
                </div>
                 <h5>Telefone*</h5>
                <div class="form-group">
                    <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel"  name="indica_telefone_2" placeholder="Telefone" class="f1-last-name form-control phone_with_ddd" id="inputTel4"
                    value="<?php echo $edit->getIndicaTelefone_2(); ?>" >
                </div>
              
                <h5>Iniciativa 3</h5>

                  <h5>Nome*</h5>
                <div class="form-group">
                   <label class="sr-only" for="f1-last-name">Nome</label>
                <input type="text"  name="indica_nome_3" placeholder="Nome" class="f1-last-name form-control" id="f1-last-name"
                value="<?php echo (explode("_3",$edit->getIndicaNome_3())[0]); ?>" >
                </div>
                 <h5>E-mail*</h5>
                <div class="form-group">
                     <label class="sr-only" for="f1-last-name">E-mail</label>
                    <input type="email"  name="indica_email_3" placeholder="E-mail" class="f1-last-name form-control" id="f1-last-name"
                    value="<?php echo $edit->getIndicaEmail_3(); ?>" >  
                </div>
                 <h5>Telefone*</h5>
                <div class="form-group">
                     <label class="sr-only" for="f1-last-name">Telefone</label>
                    <input type="tel"  name="indica_telefone_3" placeholder="Telefone" class="f1-last-name form-control phone_with_ddd" id="inputTel5"
                    value="<?php echo $edit->getIndicaTelefone_3(); ?>" >
                </div>
                <div class="f1-buttons">
                    <button type="button" class="btn btn-previous">Anterior</button>
                    <button type="submit" class="btn btn-submit edit-button">Enviar</button>
                </div>
            </fieldset> 
         </form>
     </div>
  </div>                


              
               
                 
    
