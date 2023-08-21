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
        $sDescricao = $_POST['descricao'];
        $sPlaca = $_POST['placa'];
        $sModelo = $_POST['modelo'];
        $sCliente = $_POST['cliente'];
        $sTelefone = $_POST['telefone'];  
        //echo "$sTelefone, $sCliente  ";
     
        
        //Insere um registro 
        $sql = "INSERT INTO ordem_servico (`descricao`, `placa`, `modelo_carro`, `nome_cliente`,`telefone_cliente`,`situacao`) VALUES ('$sDescricao', '$sPlaca', '$sModelo','$sCliente','$sTelefone','Aberto'); ";
        if ($conn->query($sql) === true) {
            echo '<h3>Deu certo</h3>';            
            $sit = true;
        } else {
            echo 'ERRO: ' . $conn->error;
        }
        $conn->close();
        ?>
        <br>
        <a class="btn btn-danger mt-lg-5 ml-5" href="../principal.php?dir=basico&file=ordem_servico">Voltar</a>
    </body>
</html>