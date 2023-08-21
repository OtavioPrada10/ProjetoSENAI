<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
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
        //Recebe dados do formulário
            $sDescricao = $_POST['descricao'];
            $sPlaca = $_POST['placa'];
            $sModelo = $_POST['modelo'];
            $sCliente = $_POST['cliente'];
            $sTelefone = $_POST['telefone']; 
            $sFuncionario = $_POST['funcionario']; 
            $sValor = $_POST['valor']; 
            $sRelatorio_final = $_POST['relatorio_final'];
            $sSituacao = $_POST['situacao'];
            $iNr = $_POST['nr'];

        include 'conecta_banco.php';
        //Insere um registro
        $sql = "UPDATE ordem_servico SET modelo_carro='$sModelo',placa='$sPlaca',descricao='$sDescricao',nome_cliente='$sCliente',telefone_cliente='$sTelefone',funcionario='$sFuncionario',valor='$sValor',relatorio_final='$sRelatorio_final',situacao='$sSituacao' WHERE numero_servico = '$iNr';";
        if ($conn->query($sql) === TRUE) {
            echo "Serviço atualizada com sucesso";
        } else {
            echo "Erro:" . $conn->error;
        }
        $conn->close();
        ?>
        </br>
        </br>
       <a class="btn btn-danger mt-lg-5 ml-5" href="../principal.php?dir=basico&file=lista_servico">Voltar</a>
    </body>

