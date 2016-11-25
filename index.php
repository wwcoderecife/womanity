<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UNA Ecossistema</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
		<link rel="stylesheet" href="assets/css/sweetalert.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/retina-1.1.0.min.js"></script>
        <script src="assets/js/sweetalert.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        <script src="assets/js/validator.min.js"></script>
        <script src="assets/js/jquery.maskedinput.js" type="text/javascript"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </head>

    <body>
<?php
    session_start();

    require_once "classes/Conexao.class.php";
    require_once "classes/Cadastrar.class.php";

    if (isset($_POST['novo'])):

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_MAGIC_QUOTES);
        $senha = filter_input(INPUT_POST, "password", FILTER_SANITIZE_MAGIC_QUOTES);
        $tipo = filter_input(INPUT_POST, "tipo", FILTER_SANITIZE_MAGIC_QUOTES);
        $carta_principios = filter_input(INPUT_POST, "carta_principios", FILTER_SANITIZE_MAGIC_QUOTES);
        $politica_privacidade = filter_input(INPUT_POST, "politica_privacidade", FILTER_SANITIZE_MAGIC_QUOTES);

        $i = new Cadastrar;
        $i->setEmail($email);
        $i->setSenha($senha);
        $i->setTipo($tipo);
        $i->setCartaPrincipios($carta_principios);
        $i->setPoliticaPrivacidade($politica_privacidade);
        $i->inserir_novo();

    elseif (isset($_POST['novo_login'])):

		$login = filter_input(INPUT_POST, "login", FILTER_SANITIZE_MAGIC_QUOTES);
		$senha = filter_input(INPUT_POST, "senha", FILTER_SANITIZE_MAGIC_QUOTES);

		$l = new Login;
		$l->setLogin($login);
		$l->setSenha($senha);

		if($l->logar()):
			header("Location: form.php");
		else:
			echo "<script type='text/javascript'>
				open_dialog('Erro', 'Login ou senha inválidos!', 'error');
			</script>";
		endif;
	endif;


    if(isset($_SESSION['logado'])):
        header("Location: form.php");
    else:
?>

		<!-- Top menu -->
		<nav class="navbar navbar-inverse navbar-no-bg" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="index.html">UNA Ecossistema</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>

                            <form class="navbar-form navbar-right" action="index.php"  method="post">
                                <div class="form-group">
                                  <input type="text" placeholder="usuário" name="login" class="form-control">
                                </div>
                                <div class="form-group">
                                  <input type="password" placeholder="senha" name="senha" class="form-control">
                                </div>
                                <button type="submit" name="novo_login"  value="Log in" class="btn btn-submit">Log in</button>
                            </form>
                           <!--
							<span class="li-social">
								<a href="#" target="_blank"><i class="fa fa-facebook"></i></a> 
								<a href="#" target="_blank"><i class="fa fa-twitter"></i></a> 
								<a href="#" target="_blank"><i class="fa fa-google-plus"></i></a> 
							</span>
                        -->
						</li>
					</ul>
				</div>
			</div>
		</nav>

        <!-- Top content -->
        <div class="top-content">
            <div class="container">
                
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2 text">
                       <h1><strong>UNA </strong>Ecossistema</h1>
                        <div class="description">
                       	    <p>
                                <strong>Ecossistema de Atores pelos Direitos e Empoderamento das Mulheres:</strong><br>
                                 Interconexões para maximizar impacto.</br>
                            
                            </p>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3 form-box">
                        <form role="form" data-toggle="validator" action="index.php" method="post" class="f1">

                            <h3>Cadastro UNA Ecossistema</h3>
                            <p>Preencha os campos obrigatórios *</p>

                             <!-- Etapas do Formulário: -->
                            <div class="f1-steps">
                                <div class="f1-progress">
                                    <div class="f1-progress-line" data-now-value="10" data-number-of-steps="1" style="width: 100%;"></div>
                                </div>
                                <!-- Etapa 1 : Criar Conta -->
                                <div class="f1-step active" style="width: 95%">
                                    <div class="f1-step-icon"><i class="fa fa-key"></i></div>
                                    <p>Criar Conta</p>
                                </div>
                                 <!-- Etapa 2 : Formulário Tipo Organizacional -->
                                

                            </div> <!--Fim Etapas do Formuário-->

                            <fieldset>
                                <h4>Configurando sua conta:</h4>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-email">Email *</label>
                                    <input type="email" name="email" placeholder="Email *" class="f1-email form-control" id="f1-email" required data-error = "Por favor, informe um e-mail correto.">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-password">Senha *</label>
                                    <input type="password" name="password" placeholder="Senha *" class="f1-password form-control" id="f1-password" data-minlenght="6" required data-error = "Mínimo de seis (6) digitos">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group">
                                    <label class="sr-only" for="f1-repeat-password">Repetir Senha *</label>
                                    <input type="password" name="f1-repeat-password" placeholder="Repetir Senha *" 
                                    class="f1-repeat-password form-control" id="f1-repeat-password" data-match="#f1-password" data-match-error="Atenção! As senhas não estão iguais."required data-error = "Campo está em branco, favor preencher.">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <!--Tipo: Ong/Iniciativa-->   
                                <div class="form-group">
                                    <div class="radio">
                                        <p class="text-left"><strong>Você está se inscrevendo como:</strong></p>
                                         <label>
                                            <input type="radio" name="tipo" id="optionsRadios1" value="1" checked >
                                            Organizaçāo
                                        </label>
                                        <label>
                                            <input type="radio" name="tipo" id="optionsRadios2" value="2">
                                        Iniciativa
                                        </label>
                                    </div>
                                </div>
                                <!--Fim Ong/Inicitiva--> 

                                <!--Checkbox Carta e Princípios-->                                 
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="carta_principios" data-error="Você deve marcar este campo!" value="1" required>
                                            <ul>
                                                Li e concordo com a carta <a href = "#" id ="check1" data-toggle="modal" data-target="#login-modal"> de príncipios e critérios *</a> 
                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id= "login-modal">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                          <div class="modal-header">
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                            <h4 class="modal-title" id="gridSystemModalLabel">Príncipios e Critérios</h4>
                                                          </div>
                                                          <div class="modal-body">
                                                            <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. 
                                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                                Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                            </p>
                                                          </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>     
                                        </label>
                                    </div>
                                </div>
                                <!--Checkbox Política de Privacidade-->    
       
                                <div class="form-group">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="politica_privacidade" data-error="Você deve marcar este campo!"  value="1" required>
                                            <ul>
                                                Li e concordo com a  <a href = "#" id ="check2" data-toggle="modal" data-target="#login-modal2"> Política de Privacidade *</a> 
                                                <div class="modal fade" tabindex="-1" role="dialog" aria-labelledby="gridSystemModalLabel" id= "login-modal2">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                                                                <h4 class="modal-title" id="gridSystemModalLabel">Política de Privacidade</h4>
                                                            </div>
                                                            <div class="modal-body">
                                                                <p>Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                                    Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus. 
                                                                    Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                                    Lorem ipsum dolor sit amet, in porro albucius qui, in nec quod novum accumsan, mei ludus tamquam dolores id. No sit debitis meliore postulant, per ex prompta alterum sanctus, pro ne quod dicunt sensibus.
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </ul>
                                        </label>
                                    </div>
                                </div>

                                <div class="f1-buttons">
                                    <button type="submit" name="novo" class="btn btn-submit">Cadastrar</button>
                                </div>
                                <?php echo isset($erro) ? $erro : ''; ?>
                            </fieldset>

                          
                        </form>
                    </div>
                </div>                    
            </div>
        </div>

    </body>
    <?php
        endif;
    ?>

</html>