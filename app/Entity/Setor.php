<?php

  namespace App\Entity;

  use \App\Db\DataBase;
  use \PDO;


class Setor{
 
    public $descricao_setor;
 
    public $empresa_id;
    public $id;
 
    public function cadastrar(){      
        $obDatabase = new Database('setor');
        $this->id = $obDatabase->insert([
                'descricao_setor'    => $this->descricao_setor  ,
                'empresa_id'    => $this->empresa_id
                 
        ]);
 
      return true;
    }

    public function atualizar(){
      return (new Database('setor'))->update('id = '.$this->id,[
                                                                  'descricao_setor'    => $this->descricao_setor, 
                                                                  'empresa_id'    => $this->empresa_id
                                                                ]);
    }
     
    public static function getSetores(){
        return (new Database('setor'))->selectTabela('descricao_setor','setor',)
                                      ->fetchAll(PDO::FETCH_CLASS,self::class);
    }
 
    public static function getSetor($id){
        return (new Database('setor'))->select('id = '.$id)
                                      ->fetchObject(self::class);
    }
 
    public function excluir(){
        return (new Database('setor'))->delete('id ='.$this->id);
    }

}

