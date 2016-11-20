<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Womanity Ecossistema</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/form-elements.css">
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
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </head>

    <body>
<?php
    session_start();

    require_once "classes/Conexao.class.php";
    require_once "classes/Usuario.class.php";


    if(!isset($_SESSION['logado'])):
        header("Location: index.php");
    else:

        if (isset($_GET['logout'])){
            $l = new Login;
            $l->deslogar();
        }

        

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
					<a class="navbar-brand" href="index.html">Womanity Ecossistema</a>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="top-navbar-1">
					<ul class="nav navbar-nav navbar-right">
						<li>

                            <span>Sem bem vindo(a): <strong><?php echo $_SESSION['usuario_nome']; ?></strong> </span><br>
                            <span title="Sair do Sistema"><a href="?logout=sair" class="logout">Sair do sistema</a></span>
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
                        <h1><strong>Womanity </strong>Ecossistema</h1>
                        <div class="description">
                       	    <p>
                                <strong>Ecossitema de atores pelos direitos da mulher</strong>:<br>
                                 Interconexões para maximizar impacto.</br>
                            
                            </p>
                        </div>
                    </div>
                </div>
                
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
                    		
                            <?php alert($tipo);?>

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
                    
            </div>
        </div>

    </body>

    <?php
        endif;
    ?>

</html>