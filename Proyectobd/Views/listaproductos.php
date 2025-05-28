<h1 class="titulo">Listado de productos</h1>

<table class="table">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Descripción</th>
        <th>Precio</th>
        <th>Unidades</th>
        <th>Enlace</th>
    </tr>

    <?php
    // Debug: Verifica que $data tiene contenido
    if (empty($data)) {
        echo "<tr><td colspan='6'>⚠ No hay productos disponibles.</td></tr>";
    } else {
        foreach ($data as $producto) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($producto['id']) . "</td>";
            echo "<td>" . htmlspecialchars($producto['nombre']) . "</td>";
            echo "<td>" . htmlspecialchars($producto['descripcion']) . "</td>";
            echo "<td>" . number_format($producto['precio'], 2) . " €</td>";
            echo "<td>" . htmlspecialchars($producto['stock']) . "</td>";
            echo "<td><a href='index.php?controller=ProductController&action=getProductById&id=" . htmlspecialchars($producto['id']) . "'>Ver artículo</a></td>";
            echo "</tr>";
        }
    }
    ?>
</table>

<style>
table {
    border-radius: 10px;
    border: 3px solid black;
    width: 80%;
    border-collapse: collapse;
    margin-top: 20px;
}

th, td {
    padding: 12px 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
    background-color: white;
}

th {
    background-color: #f2f2f2;
    font-weight: bold;
}

td:first-child {
    font-weight: bold;
}

a {
    font-size: 18px;
    color: black;
    text-decoration: none;
}

.titulo {
    color: black;
    text-decoration: underline red;
}

a:hover {
    text-decoration: underline;
}
</style>
