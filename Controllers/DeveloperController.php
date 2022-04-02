<?php
require_once('connection.php');
class DeveloperController{

    function index(){
        require_once('Views/Developer/pag.php');
    }

    //te manda a la vista de error
    function error(){
        require_once('Views/Developer/error.php');
    }

    //te manda a la vista de register
    function register(){
        require_once('Views/Developer/register.php');
    }

    //te manda a la vista de login
    function loginshow(){
        require_once('Views/Developer/loginshow.php');
    }

    //validación del login
    function login(){ 

        //guardar el email y la contraseña para luego ver si existe el usuario
        $email = $_POST['email'];
        $passw = $_POST['password'];

        //acceder a la base de datos
        $base=new DB(); 
        $conexion=$base->getConnect();

        //praparar la query
        $usuario = $conexion->prepare('select * from developers where email = ? and contraseña = ?;');
        $usuario->execute([$email, $passw]);
        $datos_usu = $usuario->fetch(PDO::FETCH_OBJ);

        //si el usuario existe
        if($usuario->rowCount()){

            setcookie('developer', $datos_usu->nom_usuario,time()+10000);
            var_dump($_COOKIE['developer']);

            echo "te has logueado";

            //te manda a la pagina para crear
            //require_once('');

            exit();
        }
        else{
            printf("<script type='text/javascript'>alert('Credenciales incorrectas'); </script>");
            printf("<script> window.location='?controller=developer&action=login';</script>");
        }
    }

    //comprueba si hay algun usuario con creenciales iguales y en caso de que no , te lo guarda en la abse de datos
    function save(){
        //guardar el email y la contraseña para luego ver si existe el usuario
        $email = $_POST['email'];
        $nom = $_POST['nom_usuario'];

        //acceder a la base de datos
        $base=new DB(); 
        $conexion=$base->getConnect();

        //praparar la query
        $usuario = $conexion->prepare('select * from developers where email = ? OR nom_usuario = ?;');
        $usuario->execute([$email, $nom]);
        $datos_usu = $usuario->fetch(PDO::FETCH_OBJ);

        //si el usuario existe
        if(!($usuario->rowCount())){

            //guardamos el usuario en la base de datos
            $developer = new Developer(NULL,$_POST['nom_usuario'],$_POST['email'],$_POST['password']);
            Developer::save($developer);

            //crear cookie una vez se ha guardado el developer en la base de datos
            setcookie('developer', $_POST['nom_usuario'] ,time()+10000);
            var_dump($_COOKIE['developer']);

            //te manda a la pagina para crear
            //require_once('');

            exit();
        }
        elseif($datos_usu->nom_usuario == $_POST['nom_usuario']){
            printf("<script type='text/javascript'>alert('ya existe un usuario con este nombre'); </script>");
            printf("<script> window.location='?controller=developer&action=register';</script>");

        }else{
            printf("<script type='text/javascript'>alert('ya existe un usuario con este email'); </script>");
            printf("<script> window.location='?controller=developer&action=register';</script>");
        }
    }




}// Cierra clase