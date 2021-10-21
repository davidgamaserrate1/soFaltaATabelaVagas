<?php

  namespace App\Entity;

  use \App\Db\DataBase;
  use \PDO;


class Vaga{
 
    public $id;
 
    public $descricao_setor;
 
    public $descricao_cargo;
 
    public $nome_empresa;
 
    public $salario;

    function Vaga( $descricao_setor,  $descricao_cargo, $nome_empresa, $salario) {
      $this->descricao_setor = $descricao_setor; 
      $this->descricao_cargo = $descricao_cargo; 
      $this->nome_empresa = $nome_empresa; 
      $this->salario = $salario; 
    }   

     
 
    public function cadastrar(){      
        //inserir vaga no banco
        $obDatabase = new Database('vagas');
        $this->id = $obDatabase->insertVagas( $this->descricao_setor,$this->descricao_cargo,$this->nome_empresa,$this->salario);
 
      return true;
    }
 
    public function atualizar(){
    return (new Database('vagas'))->update('id = '.$this->id,[
                                                                'descricao_setor'   => $this->descricao_setor,
                                                                'descricao_cargo'   => $this->descricao_cargo,
                                                                'nome_empresa'      => $this->nome_empresa,
                                                                'salario'           => $this->salario
                                                              ]);
  }

 
    public static function getVagas(){
        return (new Database('vagas'))->select()
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
 
    // public static function getVaga($id){
    //     return (new Database('vagas'))->select('id = '.$id)
    //                                   ->fetchObject(self::class);
    // }
 
    // public function excluir(){
    //     return (new Database('vagas'))->delete('id ='.$this->id);
    // }

}

