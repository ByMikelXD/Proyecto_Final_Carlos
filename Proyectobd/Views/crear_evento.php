<h2>Crear nuevo evento</h2>

<?php if (!isset($_SESSION['rol']) || $_SESSION['rol'] !== 'admin') : ?>
    <p style="color:red;">❌ No tienes permiso para ver esta página.</p>
<?php else : ?>
    <form action="index.php?Controllers=EventosController&action=guardarEvento" method="POST">
        <label>Circuito:</label>
        <select name="circuito_id" required>
            <?php foreach ($data['circuitos'] as $circuito): ?>
                <option value="<?= $circuito['id'] ?>">
                    <?= htmlspecialchars($circuito['nombre']) ?> - <?= htmlspecialchars($circuito['ubicacion']) ?> (<?= $circuito['fecha'] ?>)
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <label>Participante:</label>
        <select name="participante_id" required>
            <?php foreach ($data['participantes'] as $p): ?>
                <option value="<?= $p['id'] ?>">
                    <?= htmlspecialchars($p['nombre']) ?> 
                </option>
            <?php endforeach; ?>
        </select>
        <br><br>

        <button type="submit">Crear Evento</button>
    </form>
<?php endif; ?>
