<?php
    require 'funciones/conexion.php';
    require 'funciones/productos.php';
    $productos = listarProductos();
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Panel de administración de Productos</h1>
        
        <a href="admin.php" class="btn btn-outline-secondary mb-3">
            Volver a Dashboard
        </a>
            <table class="table table-bordered table-stripped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Producto</th>
                    <th>Precio</th>
                    <th>Marca</th>
                    <th>Categoría</th>
                    <th>Presentación</th>
                    <th>Imagen</th>
                    <th colspan="2">
                        <a href="" class="btn btn-dark">
                            Agregar
                        </a>
                    </th>
                </tr>
            </thead>
            <tbody>
    <?php
     while($producto=mysqli_fetch_assoc($productos)){
    ?>
                <tr>
                    <td><?= $producto['prdNombre'];?></td>
                    <td><?= $producto['prdPrecio'];?></td>
                    <td><?= $producto['mkNombre'];?></td>
                    <td><?= $producto['catNombre'];?></td>
                    <td><?= $producto['prdPresentacion'];?></td>
                    <td><img src="productos/<?= $producto['prdImagen'];?>" class="img-thumbnail"></td>
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
        }?>
    </tbody>
        </table>
        <a href="admin.php" class="btn btn-outline-secondary">
            Volver al Dashboard
        </a>
         
    </main>

<?php  include 'includes/footer.php';  ?>