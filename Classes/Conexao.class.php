<?php
final class Conexao{
  private function _construct(){
  }

  private static function conectar(){
    try{
      if(!(defined('db_user'))){
        define('db_user', 'root');
      }
    if(!defined('db_host')){
      define('db_host','localhost');
    }
    if(!defined('db_pass')){
      define('db_pass', '23021308');
    }
    if(!defined('db_name')){
      define('db_name', "clinica");
    }
    if(!defined('db_port')){
      define('db_port', 3306);
    }
    $db = new mysqli(db_host, db_user, db_pass, db_name, db_port);
    return $db;
  }catch(mysqli_sql_exception $e){
    echo 'Problema ao conectar o banco de dados' . $e->getMessage();
  }
  }
  public static function query($sql){
    return self::conectar()->query($sql);
  }
}
?>