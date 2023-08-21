
<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone').mask('(00) 0000-00000');
      });
</script>
<div class="titulo">Cadastrar Ordem de Serviço</div>

<div class="principallog form-group " >  
    <div style="font-size: 15px; text-align: center" class="seclog ">
        <form action="./insert-alter/insert_ordem_servico.php" method="post">
            <div style="margin-left: 11%" class="form-row w-75">
                <div class="col">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" required="Obrigatório">
                </div>
                <div class="col">
                    <label for="placa">Placa</label>
                    <input type="text" id="placa" name="placa" class="form-control" placeholder="Placa" required="Obrigatório">
                </div>
            </div>
            <div style="margin-left: 11%" class="form-row w-75 mt-4">
                <div class="col">
                    <label for="cliente">Cliente</label>
                    <input type="text" id="cliente" name="cliente" class="form-control" placeholder="Cliente" required="Obrigatório">
                </div>
                <div class="col">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required="Obrigatório">
                </div>
            </div>
            <div style="margin-left: 11%" class="form-row mt-4 w-75">
                <div class="col ">
                    <label for="descricao">Descrição</label>
                    <textarea type="text" name="descricao" id="descricao" class="form-control" placeholder="Descrição" required="Obrigatório"></textarea>
                </div> <br> 

            </div>
            <button type="submit" class="btn btn btn-outline-danger mt-5">CADASTRAR</button>  
        </form>        
    </div>
</div>