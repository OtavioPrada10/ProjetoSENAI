<div class="titulo">Lista de Serviço</div>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
<div style="font-size: 20px">
<?php

include './basico/conecta_banco.php';
$sql = "select * from ordem_servico";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
    //Apresenta cada registro
    echo "<table>";
    echo "<tr>";
    echo "<td>Número do Serviço</td>";
    echo "<td>Modelo do Carro</td>";
    echo "<td>Placa</td>";
    echo "<td>Cliente</td>";
    echo "<td>Telefone</td>";
    echo "<td>Situação</td>";
    echo "<td>Opções</td>";
    echo "<tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["numero_servico"]."</td>";
        echo "<td>".$row["modelo_carro"]."</td>";
        echo "<td>".$row["placa"]."</td>";
        echo "<td>".$row["nome_cliente"]."</td>";
        echo "<td>".$row["telefone_cliente"]."</td>";
        echo "<td>".$row["situacao"]."</td>";
        echo "<td><a href=principal.php?dir=insert-alter&file=alter_ordem&numero_servico=".$row["numero_servico"]."><img alt=editar src=img/edit.png></a><a href=principal.php?dir=insert-alter&file=excluir_ordem&numero_servico=".$row["numero_servico"]."><img alt=apagar src=img/del.png></a></td>";
        echo "<tr>";
    }
    echo "</table>";
}
?>
</div>