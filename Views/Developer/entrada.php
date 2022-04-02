<h2>estas en entrada </h2>
<p>formulario para crear</p>

<form action="?controller=developer&action=blog" method="post" class='p-3'>

  <!-- elegir el titulo de la entrada --> 
  <div class="mb-3">
    <label for="titulo" class="form-label">Titulo</label>
    <input type="text" class="form-control" id="titulo" aria-describedby="emailHelp" name="titulo">
  </div>

  <!-- introducir el texto -->
  <div class="mb-3">
    <label for="info" class="form-label">Info</label>
    <textarea rows="10" cols="40"  class="form-control" name="info">Info de tu pagina</textarea>
  </div>
  <!-- introducir imagen -->
  <div class="mb-3">
    <label for="imagen" class="form-label">Imagen</label>
    <input type="text" class="form-control" id="imagen" aria-describedby="emailHelp" name="imagen">
  </div>

  <button type="submit" class="btn btn-primary">Crear</button>
</form>


