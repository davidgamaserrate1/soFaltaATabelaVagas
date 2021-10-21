


<main>

<section>
    <a href="index.php">
        <button class="btn btn-success">Voltar</button>
    </a>
</section>



<form method="post">
    
    <!--Cargo -->
    <h2 class="mt-3"> Cargo </h2>
    <div class="form-group">
        <label>Descrição</label> 
         <input type="text" class="form-control" name="descricao"  value="<?=$obCargo->descricao?>">   
         <label>Salário</label>
        <input type="text" class="form-control" name="salario" value="<?=$obCargo->salario?>">
        <label>ID</label>
        <input type="text" class="form-control" name="setor_id" value="<?=$obCargo->setor_id?>"> 
        
    </div>  
    <!--Empresa -->
    <h2 class="mt-3"> Empresa </h2>
    <div class="form-group">
        <label>Nome</label>
        <input type="text" class="form-control" name="nome_empresa"  value="<?=$obEmpresa->nome?>">  
    </div>  

    <!--Setor -->
    <h2 class="mt-3"> Setor </h2>
    <div class="form-group">
        <label>Descrição</label>
        <input type="text" class="form-control" name="descricao_setor" value="<?=$obSetor->descricao_setor?>">  
        <label>ID</label>
        <input type="text" class="form-control" name="empresa_id" value="<?=$obSetor->empresa_id?>"> 
    </div>   
    <div class="form-group">
        <button type="submit" class="btn btn-success">Cadastrar</button>
    </div>      

</form>

</main>
 
 