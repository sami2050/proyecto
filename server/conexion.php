<?php 

class conectarBD extends PDO{

    public $link = 'mysql:host=localhost;dbname=sedgeb';
    public $usuario = 'root';
    public $pass = '';

    public function __construct(){
        try{
            //conectarse a la base de datos
            //$mbd = new PDO ($link,$usuario,$pass);
            parent::__construct($this->link,$this->usuario,$this->pass);

            //echo 'conectado';
            
        } catch (PDOException $e) { //funcion de PDO error en pantalla
            print "¡Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }
}