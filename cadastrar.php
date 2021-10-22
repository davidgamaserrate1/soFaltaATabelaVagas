<?php

    require __DIR__. '/vendor/autoload.php';
    define('TITLE','Cadastrar Vaga');

    
    use \App\Entity\Vaga;
    use \App\Entity\Cargo;
    use \App\Entity\Empresa;
    use \App\Entity\Setor;

    
    $obCargo    = new Cargo;
    $obEmpresa  = new Empresa;
    $obSetor    = new Setor;   
       


    if(isset($_POST['nome_empresa'],$_POST['descricao_setor'],$_POST['descricao'],$_POST['salario'])){
        
      
        $obCargo    ->descricao         = $_POST['descricao'];
        $obCargo    ->salario           = $_POST['salario'];  
        $obCargo    ->setor_id          = $_POST['setor_id']; 
        
        $obEmpresa  ->nome              = $_POST['nome_empresa'];

        $obSetor    ->descricao_setor   = $_POST['descricao_setor'];
        $obSetor    ->empresa_id        = $_POST['setor_id'];
        
        
        // function Vaga( $descricao_setor,  $descricao_cargo, $nome_empresa, $salario) {
        //     $this->descricao_setor = $descricao_setor; 
        //     $this->descricao_cargo = $descricao_cargo; 
        //     $this->nome_empresa = $nome_empresa; 
        //     $this->salario = $salario; 
        //   }   

        $obCargo->cadastrar();
        $obEmpresa->cadastrar();
        $obSetor->cadastrar();        

            
        $vgdescricao_cargo  =   $obCargo    ->descricao  ;
        $vgsalario          =    $obCargo    ->salario ;
        $vgnome_empresa     =    $obEmpresa  ->nome ;
        $vgdescricao_setor  =    $obSetor    ->descricao_setor;        

        $obVaga = new Vaga( $vgdescricao_setor, $vgdescricao_cargo,  $vgnome_empresa , $vgsalario);
        var_dump($vgdescricao_setor);
        if (  isset($_POST['vgdescricao_setor'], $_POST['vgdescricao_cargo'],$_POST['vgnome_empresa'],$_POST['vgsalario'] )  ){
            
            $obVaga->cadastrar();
        }
        

        header('location: index.php?status=success');
        exit;
    }

    
    include __DIR__.'/includes/header.php';    
    include __DIR__.'/includes/formulario.php';    
    include __DIR__.'/includes/footer.php';