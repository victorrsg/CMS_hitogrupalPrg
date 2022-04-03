<h2>ACTUALIZA UNA ENTRADA</h2>

<form action="?controller=developer&action=updateshow" method="post" class='p-3'>

    <!-- elegir el id de la entrada -->
    <div class="mb-3">
        <label for="id" class="form-label">ID de la entrada a editar</label>
        <input type="number" class="form-control" id="id" aria-describedby="emailHelp" name="id">
    </div>
    <!-- titulo -->
    <div class="mb-3">
        <label for="titulo" class="form-label">Titulo</label>
        <input type="text" class="form-control" id="titulo" aria-describedby="emailHelp" name="titulo">
    </div>

    <!-- introducir el texto -->
    <div class="mb-3">
        <label for="info" class="form-label">Info</label>
        <input type="text" class="form-control" id="info" aria-describedby="emailHelp" name="info">

    </div>
    <!-- introducir fecha -->
    <div class="mb-3">
        <label for="fecha" class="form-label">Fecha de publicación</label>
        <input type="date" class="form-control" id="imagen" aria-describedby="emailHelp" name="fecha">
    </div>
    <!-- introducir imagen -->
    <div class="mb-3">
        <label for="imagen" class="form-label">Imagen</label>
        <input type="text" class="form-control" id="imagen" aria-describedby="emailHelp" name="imagen">
    </div>
    <!-- introducir autor -->
    <div class="mb-3">
        <label for="autor" class="form-label">Autor</label>
        <input type="text" class="form-control" id="autor" aria-describedby="emailHelp" name="autor">
    </div>

    <button type="submit" class="btn btn-primary">Actualizar</button>
</form>


