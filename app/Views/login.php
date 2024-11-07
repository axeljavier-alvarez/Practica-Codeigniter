<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    
    <h1>Inicio de sesión</h1>

    <div class="container">
        <?php 
            if(session('mensaje')){
                echo session('mensaje');
            }
        
        ?>

    <form action="<?=base_url('iniciar_sesion')?>" method="post">
        <div class="mb-3">
            <label for="txtUsuario" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="txtUsuario" name="txtUsuario" placeholder="Ingresar nombre de usuario">
        </div>
        <div class="mb-3">
            <label for="txtContra" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="txtContra" name="txtContra" placeholder="Ingrese contraseña">
        </div>
        <div class="mb-3">
            <input type="submit" class="form-control btn btn-primary" name="btnSesion" id="btnSesion" value="Iniciar sesión">
        </div>

    </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>