
<?php
include 'conecta_banco.php';
$sCracha = $_GET['cracha'];
$sql = "SELECT * FROM funcionario WHERE cracha = '$sCracha'";
$resultado = $conn->query($sql);
    if ($resultado->num_rows > 0){ 
        while ($row = $resultado->fetch_assoc() ) {
            $sNome = $row['nome'];
            $sCracha = $row['cracha'];
            $sSetor = $row['setor'];
         
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
        <form action="insert-alter/update_colaborador.php" method="post">
            <div style="margin-left: 11%" class="form-row w-75">
                <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome" required="Campo Obrigatório" value="<?php echo $sNome;?>">
                </div>
                <div class="col">
                    <label for="cracha">Cracha</label>
                    <input type="text" id="cracha" name="cracha" class="form-control" placeholder="Cracha" required="Campo Obrigatório" value="<?php echo $sCracha;?>">
                </div>

            </div>
            <div style="margin-left: 11%" class="form-row w-75 mt-4">               
                <div class="col">
                    <label class="ls-label col-md-6">
                        <b class="ls-label-text">Setor</b>
                        <div class="ls-custom-select">
                            <select id="setor"  class="ls-custom" name="setor" value="<?php echo $sSetor;?>">
                                <option selected="">Selecione o setor</option>
                                <option value="Recepção">Recepção</option>
                                <option value="Administraçao">Administração</option>
                                <option value="Faxina">Faxina</option>
                                <option value="Mecanico">Mecânico</option>
                            </select>
                        </div>
                    </label>
                </div>

            </div>

            <button type="submit" class="btn btn btn-outline-danger mt-5">CADASTRAR</button>  
        </form>        
    </div>
</div>
  </body>
</html>