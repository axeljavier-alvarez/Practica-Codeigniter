<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    
    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('datatables/datatables.min.css') ?>">
    <!--font awesome con CDN-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">



    <title>Planes</title>
</head>

<body>
    <div class="container">
        <h1>Lineas telefonicas (planes)</h1>

        <?php
                if(session()->has('nombre') and session()->get('tipo')==3){
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
        <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Asignar línea telefónica
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Asignar Línea Telefónica</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="txt_no_telefono" class="form-label">No. de teléfono</label>
                                <input type="email" class="form-control" name="txt_no_telefono" id="txt_no_telefono" placeholder="No. de teléfono a asignar">
                            </div>
                            <div class="mb-3">
                                <label for="txt_no_telefono" class="form-label">Plan</label>
                                <select class="form-select" aria-label="Default select example">
                                    <?php
                                       foreach ($datosListaPlan as $fila1) {
                                       ?>
                                       <option value="<?=$fila1['plan_id'];?>" selected><?=$fila1['nombre'];?></option>
                                    <?php
                                       } 
                                    ?>
                                
                                </select>
                            </div>

                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <table class="table" id="dataTable">
            <thead>
                <tr>
                    <th>Teléfono</th>
                    <th>Fecha de pago</th>
                    <th>Meses de atraso</th>
                    <th>Nombre Cliente</th>
                    <th>Nombre del plan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($datosPlan as $fila) {
                ?>
                    <tr>
                        <td><?= $fila['no_telefono']; ?></td>
                        <td><?= $fila['fecha_pago']; ?></td>
                        <td><?= $fila['meses_atraso']; ?></td>
                        <td><?= $fila['nombre_cliente'] . " " . $fila['apellido_cliente']; ?></td>
                        <td><?= $fila['nombre_plan']; ?></td>
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
    <!-- código JS propìo (Nombres elementos de datatable en español)-->
    <script type="text/javascript" src="<?= base_url('js/main.js') ?>"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-
ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>

</html>