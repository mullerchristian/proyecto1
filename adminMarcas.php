<?php

    require 'funciones/conexion.php';
    require 'funciones/marcas.php';
    $marcas = listarMarcas();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Marcas</h1>
        
        <a href="admin.php" class="btn btn-outline-secondary mb-3">
            Volver a Dashboard
        </a>
        <table class="table table-bordered table-hover table-stripped">
            <thead class="thead-dark">
                <tr>
                    <th>id</th>
                    <th>Marca</th>
                    <th colspan="2">
                        <a href="" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody> 
<?php
            while( $marca = mysqli_fetch_assoc($marcas) ){
?>  
                <tr>
                    <td><?= $marca['idMarca'];?></td>
                    <td><?=$marca['mkNombre'];?></td>
                    <td>
                    <a href="" class="btn btn-outline-secondary">
                            Modificar
                        </a>
                    </td>
                    <td>
                    <a href="" class="btn btn-outline-secondary">
                            Eliminar
                        </a>
                    </td>
                </tr>
<?php
            }
?> 

            </tbody>
        </table>


        <a href="admin.php" class="btn btn-outline-secondary">
            Volver a Dashboard
        </a>
        
    </main>

<?php  include 'includes/footer.php';  ?>