<?php

    
	include 'includes/header.html';
	include 'includes/nav.php';  
?>

    <main class="container">
        <h1>Dashboard - Panel Principal</h1>
        <div class="list-group">
            <a href="adminMarcas.php" class="list-group-item list-group-item-action">
                Panel de administración de Marcas
            </a>
            <a href="adminCategorias.php" class="list-group-item list-group-item-action">
                Panel de administración de Categorías
            </a>
            <a href="adminProductos.php" class="list-group-item list-group-item-action">
                Panel de administración de Productos
            </a>
            <a href="adminUsuarios.php" class="list-group-item list-group-item-action">
                Panel de administración de Usuarios
            </a>
        </div>
 
    </main>

<?php  include 'includes/footer.php';  ?>