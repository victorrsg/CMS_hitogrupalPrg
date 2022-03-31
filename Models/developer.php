<?php
class developer{



    //compare del login
    function compare(){ 
        //guardar el email y la contraseña para luego ver si existe el usuario
        $email = $_POST['email'];
        $passw = $_POST['password'];

        //acceder a la base de datos
        $base=new DB(); 
        $conexion=$base->getConnect();

        //praparar la query
        $usuario = $conexion->prepare('select * from usuarios where email = ? and contraseña = ?;');
        $usuario->execute([$email, $passw]);
        $datos_usu = $usuario->fetch(PDO::FETCH_OBJ);

        //si el usuario existe
        if($datos_usu->rowCount()){
    
            //crea cookies / sesion

            /////////////////////////////CAMBIAR/////////////////////////
            //QUE EL CONTROLLER LOGIN TE LLAME A ESTA FUNCION Y COMPARE//


            //te manda a la pagina central
            require_once('Views/Usuario/welcome.php');
            exit();
        }
        else{
            printf("<script type='text/javascript'>alert('Credenciales incorrectas'); </script>");
            printf("<script> window.location='?controller=usuario&action=login';</script>");
        }


        require_once('Views/Usuario/welcome.php');
    }

}// cierra la clase