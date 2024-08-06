
<?php
include_once URL_APP . '/views/custom/header.php';
include_once URL_APP . '/views/custom/navbar.php';
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="login-container">
            <div class="row">
                <div class="col-md-6">
                    <h4 class="text-center">Iniciar Sesión</h4>
                    <form action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Usuario" required>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Contraseña" required>
                        </div>
                        <button type="submit" class="btn btn-purple btn-block ">Ingresar</button>
                    </form>
                    <div class="text-center mt-3">
                        <span class="mr-2 " >Ya tienes una cuenta</span><a href="<?php echo URL_PROJECT?>/home/registro">Ingresar</a>
                    </div>
                </div>
                <div class="col-md-6 d-flex justify-content-center align-items-center">
                    <img src="<?php echo URL_PROJECT ?>/img/login.png" alt="Imagen de tipo saludando" class="img-fluid">
                </div>
            </div>
        </div>
    </div>

<?php
include_once URL_APP . '/views/custom/footer.php';
?>