 <?php

include("sendmail.php");

 $email_1 = 'karinamachado@msn.com';
               $nome = 'Maik Ryuge';


               $corpo = "Prezado(a) $nome
                            \n\n
                            Todas as informações foram registradas em nosso sistema.
                            \n
                            Valorizamos muito a sua contribuição para o Mapeamento do Ecossistema de Iniciativas para equidade de gênero e empoderamento da mulher. 
                            \n
                            Muito Obrigada
                            \n
                            Nos próximos meses você poderá conhecer as outras organizações e iniciativas cadastradas e indicar com quais mais tem se relacionado. 
                            \n
                            Até breve!

                            Equipe Executiva";
                    $assuntocompleto = "Cadastro Ecossistema " .$nome;
                    // metodo enviar email
                    smtpmailer($email_1, "machado.karina@gmail.com", "Karina Machado", $assuntocompleto,$corpo);

                    ?>
