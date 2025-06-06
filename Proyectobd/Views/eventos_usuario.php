<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Eventos del Usuario</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      background-color: #f9f9f9;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 40px;
      color: #333;
    }

    h2 {
      font-size: 28px;
      margin-bottom: 10px;
      color: #222;
    }

    h3 {
      font-size: 22px;
      margin-bottom: 15px;
      color: #444;
    }

    ul {
      list-style: none;
      padding: 0;
    }

    li {
      background-color: #fff;
      margin-bottom: 12px;
      padding: 15px 20px;
      border: 1px solid #ddd;
      border-left: 5px solid #007BFF;
      border-radius: 8px;
      box-shadow: 0 2px 5px rgba(0,0,0,0.05);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    li a {
      background-color: #007BFF;
      color: white;
      text-decoration: none;
      padding: 8px 12px;
      border-radius: 6px;
      font-size: 14px;
      transition: background-color 0.3s ease;
    }

    li a:hover {
      background-color: #0056b3;
    }

    .titulo {
      color: black;
      text-decoration: underline red;
    }

    table {
      border-radius: 10px;
      border: 2px solid #333;
      width: 100%;
      border-collapse: collapse;
      margin-top: 30px;
      background-color: #fff;
    }

    th, td {
      padding: 14px 12px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #007BFF;
      color: white;
      font-weight: bold;
    }

    td:first-child {
      font-weight: 500;
    }
  </style>
</head>
<body>

<h2>Bienvenido, <?= htmlspecialchars($_SESSION['usuario_nombre']) ?></h2>
<h3>Eventos en los que participas:</h3>

<?php if (empty($data['data'])) : ?>
    <p>No estás participando en ningún evento actualmente.</p>
<?php else : ?>
    <ul>
      <?php foreach ($data['data'] as $evento) : ?>
        <li>
          <div>
            <?= htmlspecialchars($evento['circuito'] ?? 'N/A') ?> -
            <?= htmlspecialchars($evento['fecha'] ?? 'N/A') ?>
          </div>
          <a href="index.php?Controllers=EventosController&action=verDetalle&id=<?= htmlspecialchars($evento['id'] ?? '') ?>">Ver detalles</a>
        </li>
      <?php endforeach; ?>
    </ul>
<?php endif; ?>


</body>
</html>