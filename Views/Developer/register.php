
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class='container'>
    <div class='row justify-content-center m-5'>
        <div class='card col-4 py-3'>
        <h3 class='m-2'>Registrarse</h3><hr>

        <form action="?controller=developer&action=save" method="post" class='p-3'>
            <label>Usuario :
            <input class="form-control" type="text" name="nom_usuario" Required> 
            </label><br>

            <label>email :
            <input class="form-control" type="text" name="email" Required>
            </label><br>

            <label>Contraseña :
            <input type="password" class="form-control mb-3" name="password" Required>
            </label><br>

            <label>Repetir contraseña :
            <input type="password" class="form-control mb-3" name="confirmar" Required>
            </label><br>
        
            <a href="hacia atrás"><input type="button" class="btn btn-outline-success" name="submitBtnReg" value="Volver"></a>
            <input type="submit" class="btn btn-success" name="submitLogin" value="Registrarse">
        </form>

        </div>
    </div>
</div>

<?php
//   include_once 'modelo/register.php';
    
//   //
//   $var = new Register();

//   //validar formulario
//   $var->validarForm();

?> 



