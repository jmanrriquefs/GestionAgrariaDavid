<?php

class Conexion{

    private $con;

    public function __construct()
    {
        $this->con = new mysqli('localhost', 'root', '', 'abono');
    }

    public function get_con(){
        return $this->con;
    }
}

?>