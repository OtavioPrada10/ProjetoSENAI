
<script type="text/javascript">
    $(document).ready(function(){
      $('#telefone').mask('(00) 0000-00000');
      
      
      });
      $(document).ready(function(){  
      $("#cpf").mask("999.999.999-99");   
      });
</script>
<div class="titulo">Cadastrar Cliente</div>

<div class="principallog form-group " >  
    <div style="font-size: 15px; text-align: center" class="seclog ">
        <form action="./insert-alter/insert_clientes.php" method="post">
            <div style="margin-left: 11%" class="form-row w-75">
                <div class="col">
                    <label for="nome">Nome</label>
                    <input type="text" id="cliente" name="nome" class="form-control" placeholder="Nome" required="Obrigatório">
                </div>
                <div class="col">
                    <label for="nome">CPF</label>
                    <input type="text" id="cpf" name="cpf" class="form-control" placeholder="CPF" required="Obrigatório">
                </div>
                
            </div>
            <div style="margin-left: 11%" class="form-row w-75 mt-4">               
                <div class="col">
                    <label for="telefone">Telefone</label>
                    <input type="text" id="telefone" name="telefone" class="form-control" placeholder="Telefone" required="Obrigatório">
                </div>
                <div class="col">
                    <label for="modelo">Modelo</label>
                    <input type="text" id="modelo" name="modelo" class="form-control" placeholder="Modelo" required="Obrigatório">
                </div>
                <div class="col">
                    <label for="placa">Placa</label>
                    <input type="text" id="placa" name="placa" class="form-control" placeholder="Placa" required="Obrigatório">
                </div>
            </div>
            
            <button type="submit" class="btn btn btn-outline-danger mt-5">CADASTRAR</button>  
        </form>        
    </div>
</div>