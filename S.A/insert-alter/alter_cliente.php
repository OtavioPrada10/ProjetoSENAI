<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone').mask('(00) 0000-00000');
      
      
      });
      $(document).ready(function(){  
      $("#cpf").mask("999.999.999-99");   
      });
</script>
<?php
include 'conecta_banco.php';
$sCpf = $_GET['cpf'];
$sql = "SELECT * FROM cliente WHERE CPF = '$sCpf'";
$resultado = $conn->query($sql);
    if ($resultado->num_rows > 0){ 
        while ($row = $resultado->fetch_assoc() ) {
            $sNome = $row['nome'];
            $sCpf = $row['CPF'];
            $sPlaca = $row['placa'];
            $sModelo = $row['modelo_carro'];
            $sTelefone = $row['telefone_cliente'];
            
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
       <div class="principallog form-group " >  
    <div style="font-size: 15px; text-align: center" class="seclog ">
        <form action="insert-alter/update_cliente.php" method="post">
            <div style="margin-left: 11%" class="form-row w-75">
                <div class="col">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" value="<?php echo $sNome;?>">
                </div>
                <div class="col">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" value="<?php echo $sCpf;?>">
                </div>
            </div>
            <div style="margin-left: 11%" class="form-row w-75 mt-4">
                <div class="col">
                    <label for="placa">Placa:</label>
                    <input type="text" id="placa" name="placa" class="form-control" placeholder="Placa" value="<?php echo $sPlaca;?>">
                </div>
                <div class="col">
                    <label for="modelo">Modelo:</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" value="<?php echo $sModelo;?>">
                </div>
            </div>
                <div style="margin-left: 11%" class="form-row mt-4 w-75">
                    <label for="telefone">Telefone:</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" value="<?php echo $sTelefone;?>">
                </div>
              <br> 

            </div>
            <div style='text-align: center'>
                <button type="submit" class="btn btn btn-outline-danger mt-5">INSERIR</button>    
            </div>
        </form>        
    </div>
  </body>
</html>