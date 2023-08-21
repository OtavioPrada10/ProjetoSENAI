<script type="text/javascript">
    $(document).ready(function () {
        $('#telefone').mask('(00) 0000-00000');
    });
    $(document).ready(function () {
        $("#cpf").mask("999.999.999-99");
    });
  
 
</script>
<?php
include 'conecta_banco.php';
$sNr = $_GET['numero_servico'];
$sql = "SELECT * FROM ordem_servico WHERE numero_servico = '$sNr'";
$resultado = $conn->query($sql);
if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $sDescricao = $row['descricao'];
        $sPlaca = $row['placa'];
        $sModelo = $row['modelo_carro'];
        $sCliente = $row['nome_cliente'];
        $sFuncionario = $row['funcionario'];
        $sValor = $row['valor'];
        $sRf = $row['relatorio_final'];
        $sSituacao = $row['situacao'];
        $sTelefone = $row['telefone_cliente'];
    }
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="./js/alter_ordem.js" type="text/javascript"></script>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/bootstrap.bundle.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="principallog form-group " >  
            <div style="font-size: 15px; text-align: center" class="seclog ">
                <form action="./insert-alter/update_ordem.php" method="post">
                    <div style="margin-left: 11%" class="form-row w-75">
                        <div class="col">
                            <label for="modelo">Modelo</label>
                            <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" value="<?php echo $sModelo; ?>">
                        </div>
                        <div style="display: none" class="col">
                            <label for="nr">NR</label>
                            <input type="text" id="nr" name="nr" class="form-control" placeholder="Modelo" value="<?php echo $sNr; ?>">
                        </div>
                        <div class="col">
                            <label for="placa">Placa</label>
                            <input type="text" id="placa" name="placa" class="form-control" placeholder="Placa" value="<?php echo $sPlaca; ?>">
                        </div>
                    </div>
                    <div style="margin-left: 11%" class="form-row w-75 mt-4">
                        <div class="col">
                            <label for="cliente">Cliente</label>
                            <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Cliente" value="<?php echo $sCliente; ?>">
                        </div>
                        <div class="col">
                            <label for="telefone">Telefone</label>
                            <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" value="<?php echo $sTelefone; ?>">
                        </div>
                    </div>
                    <div style="margin-left: 11%" class="form-row mt-4 w-75">
                        <div class="col ">
                            <label for="descricao">Descrição</label>
                            <input type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição" value="<?php echo $sDescricao; ?>">
                        </div>
                    </div>
                    <div style="margin-left: 11%" class="form-row w-75 mt-4">
                        <div class="col">
                            <label for="funcionario">Funcionário</label>
                            <input type="text" id="funcionario" name="funcionario" class="form-control" placeholder="Funcionario" value="<?php echo $sFuncionario; ?>">
                        </div>
                        <div class="col">
                            <label for="valor">Valor</label>
                            <input type="text" id="valor" name="valor" class="form-control" placeholder="Valor" value="<?php echo $sValor; ?>" onchange="formatarMoeda()">
                        </div>
                    </div>
                    <div style="margin-left: 11%" class="form-row mt-4 w-75">
                        <div class="col ">
                            <label for="relatorio_final">Relatorio Final</label>
                            <input type="text" name="relatorio_final" id="relatorio_final" class="form-control" placeholder="Relatorio Final" value="<?php echo $sRf; ?>">
                        </div> 
                    </div>
                    <div style="margin-left: 11%" class="form-row w-75 mt-4">               
                        <div class="col">
                            <label class="ls-label col-md-6">
                                <b class="ls-label-text">Situação</b>
                                <div class="ls-custom-select">
                                    <select class="ls-custom" name="situacao" id="situacao">
                                        <option selected="aberto">Aberto</option>
                                        <option value="em andamento">Em andamento</option>
                                        <option value="Finalizado">Finalizado</option>
                                    </select>
                                </div>
                            </label>
                        </div>
                    </div>
                    <button type="submit" class="btn btn btn-outline-danger mt-5">INSERIR</button>  
                </form>        

            </div>
    </body>
</html>