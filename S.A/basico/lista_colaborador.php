<div class="titulo">Lista de Colaboradores</div>

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
$sql = "select * from funcionario";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
    //Apresenta cada registro
    echo "<table>";
    echo "<tr>";
    echo "<td>Cracha</td>";
    echo "<td>Nome</td>";
    echo "<td>Setor</td>";
    echo "<td>Opções</td>";
    echo "<tr>";
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["cracha"]."</td>";
        echo "<td>".$row["nome"]."</td>";
        echo "<td>".$row["setor"]."</td>";
        echo "<td><a href=principal.php?dir=insert-alter&file=alter_colaborador&cracha=".$row["cracha"]."><img alt=editar src=img/edit.png></a><a href=principal.php?dir=insert-alter&file=excluir_colaborador&cracha=".$row["cracha"]."><img alt=apagar src=img/del.png></a></td>";
        echo "<tr>";
    }
    echo "</table>";
}
?>
</div>