<div class="titulo">Lista de Clientes</div>

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
$sql = "select * from cliente";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
    //Apresenta cada registro
    echo "<table>";
    echo "<tr>";
    echo "<td>Nome</td>";
    echo "<td>CPF</td>";
    echo "<td>Telefone</td>";
    echo "<td>Modelo do Carro</td>";
    echo "<td>Placa</td>";
    echo "<td>Opções</td>";
    echo "<tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["CPF"]."</td>";
        echo "<td>".$row["telefone_cliente"]."</td>";
        echo "<td>".$row["modelo_carro"]."</td>";
        echo "<td>".$row["placa"]."</td>";
        echo "<td><a href=principal.php?dir=insert-alter&file=alter_cliente&cpf=".$row["CPF"]."><img alt=editar src=img/edit.png></a><a href=principal.php?dir=insert-alter&file=excluir_cliente&cpf=".$row["CPF"]."><img alt=apagar src=img/del.png></a></td>";
        echo "<tr>";
    }
    echo "</table>";
}
?>
</div>