<style>
    <>

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f4f4f4;
      font-family: Arial, sans-serif;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
    }
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

<h2>Lista de Usuarios</h2>

<table border="1">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Email</th>
            <th>Dirección</th>
            <th>Rol</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $usuario): ?>
            <tr>
                <td><?= htmlspecialchars($usuario['id']) ?></td>
                <td><?= htmlspecialchars($usuario['nombre']) ?></td>
                <td><?= htmlspecialchars($usuario['apellido']) ?></td>
                <td><?= htmlspecialchars($usuario['email']) ?></td>
                <td><?= htmlspecialchars($usuario['direccion']) ?></td>
                <td><?= htmlspecialchars($usuario['rol']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
