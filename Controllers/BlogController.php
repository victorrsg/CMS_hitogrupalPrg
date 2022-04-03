<?php
class BlogController{
    public function create(){
        //para que sea mas facil buscar al autor
        $a=$_COOKIE['developer'];

        //buscar al autor
        $base=new DB(); 
        $conexion=$base->getConnect();

        $buscar=$conexion->query("SELECT * FROM developers WHERE nom_usuario = '$a' ");
        $datos_usu = $buscar->fetch(PDO::FETCH_OBJ); //datos del autor

        $titulo=$_POST['titulo'];
        $info=$_POST['info'];
        $imagen=$_POST['imagen'];
        $fecha=date('Y-m-d');
        $autor=$datos_usu->id;

        //insertar la entrada a la base de datos
        $insertar=$conexion->query("INSERT INTO BLOGS VALUES(DEFAULT, '$titulo','$info','$fecha','$imagen', $autor)");

        //te muestre como ha quedado la entrada
        

    }

    public function mostrar(){
        
    }


    public function blog(){
        $listaEntradas=blog::all();

        require_once ('Views/Developer/blog.php');
    }

    //mostrar todas las entradas en un blog
    public function blogshow(){       
        $base=new DB(); 
        $conexion=$base->getConnect();

        //praparar la query
        $usuario = $conexion->prepare('select * from blogs');
        $datos_usu = $usuario->fetch(PDO::FETCH_OBJ);

        require_once('Views/Blog/entradashow.php');
    }




}