<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<?php
include 'conecta_banco.php';
$sCracha = $_GET['cracha'];
$sql = "DELETE FROM funcionario WHERE cracha  = '$sCracha'";
    if ($conn->query($sql) === true) {
            echo "Cliente apagado com sucesso";
        } else {
            echo "Erro: " . $conn->error;
        }
        $conn->close();
?>
<br/>
