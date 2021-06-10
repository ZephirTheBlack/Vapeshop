<?php
function show()
{
    include 'assets/bdconexion.php';

    $tamano_pagina = 3;

    if (isset($_GET["pagina"])) {
        if ($_GET["pagina"] == 1) {
            header("location:products.php");
        } else {
            $pagina = $_GET["pagina"];
        }
    } else {
        $pagina = 1;
    }

    $empezar_desde = ($pagina - 1) * $tamano_pagina;
    $sentencia = "SELECT * from productos";
    $resultado = mysqli_query($con, $sentencia);

    $num_filas = mysqli_num_rows($resultado);
    $total_paginas = ceil($num_filas / $tamano_pagina);
    $sql_limite = "SELECT * from productos LIMIT $empezar_desde,$tamano_pagina";
    $result = mysqli_query($con, $sql_limite);

    echo "<table class='table table-hover'>";
    echo "<thead>";
    echo "<th>Imagen</th>";
    echo "<th>Nombre</th>";
    echo "<th>Marca</th>";
    /* echo "<th>Tipo</th>"; */
    echo "<th>Descripcion</th>";
    echo "<th>Precio</th>";

    if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
        echo "<th>Añadir a tu carrito</th>";
    }
    if (isset($_SESSION['permisos']) && $_SESSION['permisos'] == 'administrador') {
        echo "<th>Modificar</th>";
        echo "<th>Eliminar</th>";
    }
    echo "</thead>";
    echo "<tbody>";
    while ($fila = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td><img src=".$fila['imagen_producto']." alt=".$fila['nombre']." class='img-fluid'></td>";
        echo "<td>" . $fila['nombre'] . "</td>";
        echo "<td>" . $fila['marca'] . "</td>";
        /* echo "<td>" . $fila['tipo'] . "</td>"; */
        echo "<td>" . $fila['descripcion'] . "</td>";
        echo "<td>" . $fila['precio'] . "€" . "</td>";
        /* comprar productos */
        if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
            echo "<td> <a href='functions/buy_functions.php?id_producto=" . $fila['id_producto'] . "'><button type='button' class='btn btn-success'>Comprar</button></a></td>";
        }
        /* borrar y modificar producto ADMIN */
        if (isset($_SESSION['permisos']) && $_SESSION['permisos'] == 'administrador') {
            echo "<td> <a href='updateproduct.php?id_producto=" . $fila['id_producto'] . "'><button type='button' class='btn btn-primary'>Modificar</button></a></td>";
            echo "<td> <a href='functions/delete_functions.php?id_producto=" . $fila['id_producto'] . "'><button type='button' class='btn btn-primary'>Eliminar</button></a></td>";
        }
        echo "</tr>";
    }

    echo "</tbody>";
    echo "</table>";
    /* Paginacion */
    echo "<nav aria-label='Page navigation example'>";
    echo "<ul class='pagination'>";
    for ($i = 1; $i <= $total_paginas; $i++) {
        echo "<li><a href='?pagina=" . $i . "' class='page-link'>" . $i . " </a></li>";
    }
    echo "</ul>";
    echo "</nav>";
    /* añadir nuevo producto ADMIN */
    if (isset($_SESSION['permisos']) && $_SESSION['permisos'] == 'administrador') {
        echo "<br><br><a href='newproduct.php'><button type='button' class='btn btn-primary'>Añadir nuevo producto</button></a>";
    }

    $con = null;
}

function cart()
{
    if (!empty($_SESSION['cesta'])) {
        //var_dump($_SESSION['cesta']);
        echo "<div class='row justify-content-center'>";
        foreach ($_SESSION['cesta'] as $producto) {

            echo "<div class='col-lg-3 col-md-4 col-sm-6'>";
            echo "<div class='card shadow mt-4'>";
            echo "<img src=". $producto['img'] ." alt='' class='card-img-top img-fluid'>";
            echo "<div class='card-body text-center'>";
            echo "<h5 class='card-tittle'>" . $producto['nombre'] . "</h5>";
            echo "<p class='card-text'>Marca:" . $producto['marca'] . "</p>";
            echo "<p class='card-text'>Precio:" . $producto['precio'] . "</p>";
            echo "<a href='delete_cart.php?id_producto=". $producto['id'] ."' class='btn btn-primary btn-md'>Quitar</a>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
        total_cart();
    }else {
        echo "<center><p class='text-secondary'>No ha introducido ningun producto en su carrito aun</p></center>";
    }

}

function total_cart()
{
    $total_cesta = 0;
    foreach ($_SESSION['cesta'] as $producto) {
        //echo $producto['precio'];
        $total_cesta = $total_cesta + $producto['precio'];
    }
    echo "<div class='container mt-3'>";
    echo "<form action='functions/payment.php' method='post' >";
    echo "<div class='form-group'>";
    echo "<label>Total de su compra: " . $total_cesta . "€</label>";
    echo "<input type='submit' value='Pagar' class='btn btn-success btn-md ml-3'>";
    echo "</div>";
    echo "</form>";
    echo "</div>";
}
