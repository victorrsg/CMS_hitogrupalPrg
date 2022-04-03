<div class="table-responsive">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Foto</th>
            <th>Autor</th>
        </tr>
        <tbody>
        <tr>
            <td><?php echo $listaEntradas->getId(); ?></td>
            <td><?php echo $listaEntradas->getTitulo(); ?></td>
            <td><img src="<?php echo $listaEntradas->getImagen(); ?>" width="200px" </td>
            <td><?php echo $listaEntradas->getAutor(); ?></td>
            <td>
                <form method="post" action="?controller=developer&action=update">
                    <input type="submit" value="Editar" class="btn btn-primary btn-lg">
                </form>
            </td>
            <td>
                <form method="post" action="?controller=&action=">
                    <input type="submit" value="Eliminar" class="btn btn-primary btn-lg">
                </form>
            </td>
            <td>
                <form method="post" action="?controller=&action=">
                    <input type="submit" value="Ver Entrada" class="btn btn-primary btn-lg">
                </form>
            </td>
        </tr>

        </tbody>

        </thead>
    </table>

</div>




<!--<link rel="stylesheet" href="assets/css/blog.css">

<div class="blog">
    <h2> <?php echo $_POST['titulo']?> </h2>

    <img src='<?php echo $_POST['imagen']?>' alt=""> 

    <p> <?php echo $_POST['info']?> </p>
</div>!>


