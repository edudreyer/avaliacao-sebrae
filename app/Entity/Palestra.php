<?php
namespace App\Entity;
use \App\Db\Database;
use \PDO;

class Palestra {
    public $codigo;
    public $nome;
    
    public static function getPalestra($where = null, $order = null, $limit = null){
	    return (new Database('palestras'))->select($where,$order,$limit)
	    		->fetchAll(PDO::FETCH_CLASS, self::class);

	  }
}
?>