<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <title>SIstema NIP :)</title>
    </head>
    <body style="text-align: center">
        <?php
        include '../basico/conecta_banco.php';        
        $sNome = $_POST['nome'];
        $sCracha = $_POST['cracha'];
        $sSetor = $_POST['setor'];              
        
        //Insere um registro 
        $sql = "INSERT INTO funcionario (`nome`, `cracha`, `setor`) VALUES ('$sNome', '$sCracha', '$sSetor'); ";
        if ($conn->query($sql) === true) {
            echo '<h3>Deu certo</h3>';            
            $sit = true;
        } else {
            echo 'ERRO: ' . $conn->error;
        }
        $conn->close();
        ?>
        <br>
        <a class="btn btn-danger mt-lg-5 ml-5" href="../principal.php?dir=basico&file=cadastro_colaborador">Voltar</a>
    </body>
</html>