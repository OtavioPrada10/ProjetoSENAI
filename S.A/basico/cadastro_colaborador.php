
<script type="text/javascript">
    $(document).ready(function () {
        $('#telefone').mask('(00) 0000-00000');
    });
    $(document).ready(function () {
        $("#cpf").mask("999.999.999-99");
    });
</script>
<link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<div class="titulo">Cadastrar Colaborador</div>

<div class="principallog form-group " >  
    <div style="font-size: 15px; text-align: center" class="seclog ">
        <form action="./insert-alter/insert_colaborador.php" method="post">
            <div style="margin-left: 11%" class="form-row w-75">
                <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" id="cliente" name="nome" class="form-control" placeholder="Nome" required="Campo Obrigatório">
                </div>
                <div class="col">
                    <label for="cracha">Cracha</label>
                    <input type="text" id="cracha" name="cracha" class="form-control" placeholder="Cracha" required="Campo Obrigatório">
                </div>

            </div>
            <div style="margin-left: 11%" class="form-row w-75 mt-4">               
                <div class="form-group col">
                    <label class="">
                        <b class="ls-label-text">Setor</b>
                        <div class="form-group ls-custom-select">
                            <select id="setor"  class=""form-control form-control-lg"" name="setor">
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