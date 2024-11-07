<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">


</head>

<body>
    <div class="container">
        <h1>Planes</h1>
        <a href="<?=base_url()?>" class="btn btn-success">Regresar</a>

        <?php
                if(session()->has('nombre') and session()->get('tipo')==2){
                    echo "<br>Bienvenido: ". session()->get('nombre');
                    echo "<br>Correo:". session()->get('email');
                    ?>
                    <br>
                    <a href="<?=base_url('cerrar_sesion')?>">Cerrar sesión</a>
                    <?php
                } else{
                    ?>
                        <script>
                            window.location.href = "<?= base_url('/')?>";
                        </script>
                    <?php
                    
                }
                
        ?>

        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Nuevo plan
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo plan</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="<?=base_url('guardar_plan')?>" method="post">
                            <div class="mb-3">
                                <label for="txt_id" class="form-label">Id</label>
                                <input type="number" class="form-control" name="txt_id" id="txt_id" placeholder="Ingrese id del plan">
                            </div>
                            <div class="mb-3">
                                <label for="txt_nombre" class="form-label">Nombre</label>
                                <input type="text" class="form-control" name="txt_nombre" id="txt_nombre" placeholder="Ingrese nombre del plan">
                            </div>
                            <div class="mb-3">
                                <label for="txt_pago_mensual" class="form-label">Pago mensual</label>
                                <input type="number" class="form-control" name="txt_pago_mensual" id="txt_pago_mensual" placeholder="Ingrese pago mensual del plan">
                            </div>
                            <div class="mb-3">
                                <label for="txt_cantidad_mensaje" class="form-label">Cantidad de mensaje</label>
                                <input type="number" class="form-control" name="txt_cantidad_mensaje" id="txt_cantidad_mensaje" placeholder="Ingrese cantidad de mensajes del plan">
                            </div>
                            <div class="mb-3">
                                <label for="txt_cantidad_minutos" class="form-label">Cantidad de minutos</label>
                                <input type="number" class="form-control" name="txt_cantidad_minutos" id="txt_cantidad_minutos" placeholder="Ingrese cantidad de minutos del plan">
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="form-control btn btn-primary" name="btn_guardar" id="btn_guardar" value="Guardar">
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        
                    </div>
                </div>
            </div>
        </div>
        <br><br>


        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Pago Mensual</th>
                    <th>Cantidad de minutos</th>
                    <th>Cantidad de mensajes</th>
                    <th>Procesos</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datosPlanes as $plan) {
                ?>
                    <tr>
                        <td><?php echo $plan['plan_id']; ?></td>
                        <td><?= $plan['nombre']; ?></td>
                        <td><?= $plan['pago_mensual']; ?></td>
                        <td><?= $plan['cantidad_minutos']; ?></td>
                        <td><?= $plan['cantidad_mensajes']; ?></td>
                        <td>
                            <a href="<?=base_url('eliminar_plan/'.$plan['plan_id'])?>">Eliminar</a>  
                            / <a href="<?=base_url('datos_actualizar/').$plan['plan_id'];?>">Actualizar</a>
                        </td>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>
    </div>
   <!--datatable-->
   <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    <!-- datatables JS -->
    <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js') ?>"></script>
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>