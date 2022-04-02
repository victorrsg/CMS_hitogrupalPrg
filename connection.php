
<?php

    class DB{

        public static function getconnect(){
            $conexion=new PDO('pgsql:host=localhost;port=5432;dbname=grupal;user=postgres;password=curso');
            //conecta correctamente
            //var_dump($conexion);
            return $conexion;
        }
    }
    // para comprobar la conexion
    // $h = new DB;
    // $h->getConnect();