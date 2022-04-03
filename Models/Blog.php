<?php
class blog{
    private $id;
    private $titulo;
    private $info;
    private $fecha;
    private $imagen;
    private $autor;

    function __construct()
    {
        //obtengo un array con los parámetros enviados a la función
        $params = func_get_args();
        //saco el número de parámetros que estoy recibiendo
        $num_params = func_num_args();
        //cada constructor de un número dado de parámtros tendrá un nombre de función
        //atendiendo al siguiente modelo __construct1() __construct2()...
        $funcion_constructor ='__construct'.$num_params;
        //compruebo si hay un constructor con ese número de parámetros
        if (method_exists($this,$funcion_constructor)) {
            //si existía esa función, la invoco, reenviando los parámetros que recibí en el constructor original
            call_user_func_array(array($this,$funcion_constructor),$params);
        }
    }

    //ahora declaro una serie de métodos constructores que aceptan diversos números de parámetros
    function __construct0()
    {
        $this->__construct1("Anónimo");
    }

    function __construct1($nombre)
    {
        $this->__construct2($nombre, "Sin equipo");
    }

    function __construct2($nombre, $equipo)
    {
        $this->nombre = $nombre;
        $this->equipo = $equipo;
    }



    public function getAutor()
    {
        return $this->autor;
    }


    public function setAutor($autor): void
    {
        $this->autor = $autor;
    }


    public function getId()
    {
        return $this->id;
    }


    public function setId($id): void
    {
        $this->id = $id;
    }


    public function getTitulo()
    {
        return $this->titulo;
    }

    public function setTitulo($titulo): void
    {
        $this->titulo = $titulo;
    }


    public function getInfo()
    {
        return $this->info;
    }


    public function setInfo($info): void
    {
        $this->info = $info;
    }


    public function getFecha()
    {
        return $this->fecha;
    }


    public function setFecha($fecha): void
    {
        $this->fecha = $fecha;
    }


    public function getImagen()
    {
        return $this->imagen;
    }


    public function setImagen($imagen): void
    {
        $this->imagen = $imagen;
    }

//-------------------------
    public static function all()
    {
        $db = DB::getConnect();
        $listaEntradas = [];

        $select = $db->query('SELECT * FROM blogs order by id');

        foreach ($select->fetchAll() as $entrada) {
            $listaEntradas = new Blog();
            $listaEntradas->setId($entrada['id']);
            $listaEntradas->setTitulo($entrada['titulo']);
            $listaEntradas->setInfo($entrada['info']);
            $listaEntradas->setFecha($entrada['fecha']);
            $listaEntradas->setImagen($entrada['imagen']);
            $listaEntradas->setInfo($entrada['autor']);

        }
        return $listaEntradas;

    }




}