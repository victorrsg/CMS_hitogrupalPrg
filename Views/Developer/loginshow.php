<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<div class='container'>
    <div class='row justify-content-center m-5'>
        <div class='card col-4 py-3'>
            <h3 class='m-2'>Iniciar Sesión</h3><hr>

            <form action="?controller=developer&action=login" method="post" class='p-3'>

                <label>email :
                <input class="form-control" type="text" name="email" Required>
                </label><br>

                <label>Contraseña :
                <input type="password" class="form-control mb-3" name="password" Required>
                </label><br>
            
                <a href="hacia atrás"><input type="button" class="btn btn-outline-success" name="submitBtnReg" value="Volver"></a>
                <input type="submit" class="btn btn-success" name="submitLogin" value="Iniciar Sesión">
            </form>

        </div>
    </div>
</div>