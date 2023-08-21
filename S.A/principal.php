<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link rel="shortcut icon" href="img/NIP-LOGO.png" type="image/x-icon" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <link rel="stylesheet" href="recursos/css/estilo.css">
        <link rel="stylesheet" href="recursos/css/exercicio.css">
        <link href="recursos/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>Sistema NIP :)</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Sistema NIP</h1>
            <h2></h2>
        </header>
        <nav class="navegacao">
            <a href="inicial.php" class="vermelho">Voltar</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php
                include(__DIR__ . "/{$_GET['dir']}/{$_GET['file']}.php");
                ?>
            </div>
        </main>
        <footer class="rodape">
            NIP :) © <?= date('Y'); ?>
        </footer>
    </body>
</html>