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
        <title>Sistema NIP :)</title>
    </head>
    <body style="text-align: center">
        <?php
        //Recebe dados do formulário
            $sNome = $_POST['nome'];
            $sCpf = $_POST['cpf'];
            $sPlaca = $_POST['placa'];
            $sModelo = $_POST['modelo'];
            $sTelefone = $_POST['telefone'];  

        include 'conecta_banco.php';
        //Insere um registro
        $sql = "UPDATE cliente SET nome='$sNome',placa='$sPlaca',modelo_carro='$sModelo',telefone_cliente='$sTelefone' WHERE CPF = '$sCpf'";
        if ($conn->query($sql) === TRUE) {
            echo "Cliente atualizada com sucesso";
        } else {
            echo "Erro:" . $conn->error;
        }
        $conn->close();
        ?>
        </br>
        </br>
        <a class="btn btn-danger mt-lg-5 ml-5" href="../principal.php?dir=basico&file=lista_clientes">Voltar</a>
    </body>

