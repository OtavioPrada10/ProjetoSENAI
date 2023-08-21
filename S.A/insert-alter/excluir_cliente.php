<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<?php
include 'conecta_banco.php';
$sCpf = $_GET['cpf'];
$sql = "DELETE FROM cliente WHERE CPF='$sCpf'";
    if ($conn->query($sql) === true) {
            echo "Cliente apagado com sucesso";
        } else {
            echo "Erro: " . $conn->error;
        }
        $conn->close();
?>
<br/>
