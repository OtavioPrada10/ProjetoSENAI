<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="img/NIP-LOGO.png" type="image/x-icon" />
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700" rel="stylesheet">
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <link href="recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Tela Inicial NIP :)</title>
    </head>
    <?php
    if(isset($_POST['user'])){
        $nome = $_POST['user'];
    }
    
    ?>
    <body>
        <header class="cabecalho">
            <h1>Mecânica NIP</h1>
            <h2></h2>
        </header>
        <main class="principal">
            <div style=" text-align: center; background-image: url(img/imagem-fundo-inicial.png); BACKGROUND-REPEAT: no-repeat; background-position-x:  100%; background-position-y: 100% "  class="conteudo">
                <h1 class="message">Seja bem vindo(a)<p class="message"><?php
                        if(isset($nome)) {
                            echo $nome;
                        }
                        ?></p></h1>
                <nav class="modulos">
                    <div class="modulo azul2">
                        <h3>Menu</h3>
                        <ul>
                            <li>
                                <a href="principal.php?dir=basico&file=ordem_servico">
                                    Cadastrar ordem de serviço
                                </a>
                            </li>
                            <li>
                                <a href="principal.php?dir=basico&file=lista_servico">
                                    Ordens de serviço
                                </a>
                            </li>
                            <li>
                                <a href="principal.php?dir=basico&file=cadastro_cliente">
                                    Cadastrar cliente
                                </a>
                            </li>
                            <li>
                                <a href="principal.php?dir=basico&file=lista_clientes">
                                    Tabela de clientes
                                </a>
                            </li>
                            <li>
                                <a href="principal.php?dir=basico&file=cadastro_colaborador">
                                    Cadastrar colaboradores
                                </a>
                            </li>
                            <li>
                                <a href="principal.php?dir=basico&file=lista_colaborador">
                                    Tabela de colaboradores
                                </a>
                            </li>
                            <li>
                                <a href="principal.php?dir=basico&file=sobre">
                                    Conheça-nos
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </main>
        <footer class="rodape">
            NIP :) © <?= date('Y'); ?>
        </footer>
    </body>
</html>