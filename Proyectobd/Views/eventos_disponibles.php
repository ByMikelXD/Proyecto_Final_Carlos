<style>
    body {
  font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  background-color: #f9faff;
  margin: 0;
  padding: 40px;
  color: #333;
}

h2 {
  text-align: center;
  color: #2c3e50;
  margin-bottom: 30px;
}

ul {
  list-style: none;
  padding: 0;
  max-width: 600px;
  margin: 0 auto;
}

ul li {
  background: #fff;
  border-radius: 8px;
  padding: 15px 20px;
  margin-bottom: 15px;
  box-shadow: 0 2px 6px rgba(0,0,0,0.1);
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 16px;
  transition: box-shadow 0.3s ease;
}

ul li:hover {
  box-shadow: 0 4px 12px rgba(0,0,0,0.15);
}

form {
  margin: 0;
}

button {
  background-color: #007BFF;
  border: none;
  color: white;
  padding: 8px 14px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 14px;
  transition: background-color 0.3s ease;
}

button:hover {
  background-color: #0056b3;
}

</style>

<?php
// Extraer $eventos desde $data
$eventos = $data['eventos'] ?? [];

if (empty($eventos)) {
    echo "<p>No hay eventos disponibles.</p>";
    return;
}

?>


<ul>
  <?php foreach ($eventos as $evento) : ?>
    <li>
      <?= htmlspecialchars($evento['circuito']) ?> -
      <?= htmlspecialchars($evento['fecha']) ?> -
      <?= htmlspecialchars($evento['ubicacion']) ?>
      <form method="POST" action="index.php?Controllers=EventosController&action=inscribirse" style="display:inline;">
  <input type="hidden" name="evento_id" value="<?= $evento['id'] ?>">
  <button type="submit">Inscribirme</button>
</form>
    </li>
  <?php endforeach; ?>
</ul>