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


<h1>Eventos de Competencia</h1>

<table>
    <thead>
        <tr>
            <th>Circuito</th>
            <th>Ubicación</th>
            <th>Fecha</th>
            <th>Participante</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($data as $evento): ?>
            <tr>
                <td><?= htmlspecialchars($evento['circuito']) ?></td>
                <td><?= htmlspecialchars($evento['ubicacion']) ?></td>
                <td><?= htmlspecialchars($evento['fecha']) ?></td>
                <td><?= htmlspecialchars($evento['participante']) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
