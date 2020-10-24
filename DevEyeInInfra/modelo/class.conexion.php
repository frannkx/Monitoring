<?php

     class Conexion{

               private $user="monitor";
               private $pass="M0n1t0r";
               private $host="localhost";
               private $db="devmonitor";

          public function get_conexion(){
               
               try {
                    $conexion=new PDO("mysql:host=$this->host;dbname=$this->db;", $this->user, $this->pass);
                    return $conexion;
                    //echo "Se conecto exitosamente a ".$this->db;
               } catch (PDOException $e) {
                    echo "Error: ".$e->getMessage();
               }
          }
     }


 ?>
