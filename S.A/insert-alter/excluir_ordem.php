<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<?php
include 'conecta_banco.php';
$sNr = $_GET['numero_servico'];
$sql = "DELETE FROM ordem_servico WHERE numero_servico='$sNr'";
    if ($conn->query($sql) === true) {
            echo "Ordem de Serviço apagada com sucesso";
        } else {
            echo "Erro: " . $conn->error;
        }
        $conn->close();
?>
<br/>
