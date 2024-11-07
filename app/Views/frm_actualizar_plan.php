<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>Actualizar plan</h1>
        <form action="<?=base_url('modificar_plan')?>" method="post">
            <div class="mb-3">
                <label for="txt_id" class="form-label">Id del plan</label>
                <input type="text" readonly class="form-control" name="txt_id" id="txt_id" value="<?=$datosPlan['plan_id'];?>" placeholder="id">
            </div>
            <div class="mb-3">
                <label for="txt_nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" value="<?=$datosPlan['nombre'];?>" placeholder="Ingrese nuevo nombre">
            </div>
            <div class="mb-3">
                <label for="txt_pago_mensual" class="form-label">Pago mensual</label>
                <input type="text" class="form-control" name="txt_pago_mensual" id="txt_pago_mensual" 
                value="<?=$datosPlan['pago_mensual'];?>" placeholder="pago_mensual">
            </div>
            <div class="mb-3">
                <label for="txt_cantidad_minutos" class="form-label">Cantidad de minutos</label>
                <input type="number" class="form-control" name="txt_cantidad_minutos" id="txt_cantidad_minutos" 
                value="<?=$datosPlan['cantidad_minutos'];?>" placeholder="cantidad de minutos">
            </div>
            <div class="mb-3">
                <label for="txt_cantidad_mensajes" class="form-label">Cantidad de mensajes</label>
                <input type="number" class="form-control" name="txt_cantidad_mensajes" id="txt_cantidad_mensajes" 
                value="<?=$datosPlan['cantidad_mensajes'];?>"placeholder="cantidad de mensajes">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control btn btn-dark" value="Guardar Cambios">
            </div>  
        </form>
        <?php
        /*
        echo "<br>id: " . $datosPlan['plan_id'];
        echo "<br>nombre:" . $datosPlan['nombre'];
        echo "<br>Pago mensual: " . $datosPlan['pago_mensual'];
        echo "<br>Cantidad de minutos: " . $datosPlan['cantidad_minutos'];
        echo "<br>Cantidad de mensajes: " . $datosPlan['cantidad_mensajes'];
        */
        ?>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>