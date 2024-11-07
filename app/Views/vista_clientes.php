<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!--datables CSS básico-->
    <link rel="stylesheet" type="text/css" href="<?=base_url('datatables/datatables.min.css')?>">
           
    <!--font awesome con CDN-->  
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">  
    
</head>
<body>
    <div class="container">
    <h1>Clientes</h1>
    <a href="<?=base_url()?>">Regresar</a>

    <p>
        <?php
                if(session()->has('nombre') and session()->get('tipo')==1){
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
    </p>

    <table class="table table-striped table-hover pt-2" id="dataTable">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo Electrónico</th>
                <th>Dirección</th>
                <th>Procesos</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach($datosClientes as $registro):
                ?>
                <tr>
                    <td><?php echo $registro['cliente_id'];?></td>
                    <td><?php echo $registro['nombre'];?></td>
                    <td><?php echo $registro['apellido'];?></td>
                    <td><?php echo $registro['correo_electronico'];?></td>
                    <td><?php echo $registro['calle_avenida']." ".$registro['no_casa']." Zona ".$registro['zona'];?></td>
                    <td>
                        <a href="<?=base_url('eliminar_clientes/'.$registro['cliente_id'])?>">Eliminar</a>
                    </td>
                </tr>
                <?php
                endforeach;                
            ?>

        </tbody>
    </table>

    </div>            

    <!--datatable-->
    <script src="<?= base_url('js/jquery-3.5.1.js') ?>"></script>
    
     <!-- datatables JS -->
     <script type="text/javascript" src="<?= base_url('datatables/datatables.min.js')?>"></script>
    
 
    <!-- para usar botones en datatables JS -->
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/dataTables.buttons.min.js')?>"></script>
    <script src="<?= base_url('datatables/JSZip-2.5.0/jszip.min.js')?>"></script>
    <script src="<?= base_url('datatables/pdfmake-0.1.36/pdfmake.min.js')?>"></script>
    <script src="<?= base_url('datatables/pdfmake-0.1.36/vfs_fonts.js')?>"></script>
    <script src="<?= base_url('datatables/Buttons-1.5.6/js/buttons.html5.min.js')?>"></script>
    <!-- código JS propìo (Nombres elementos de datatable en español)-->
    <script type="text/javascript" src="<?= base_url('js/main.js')?>"></script>
     
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    
    

</body>
</html>