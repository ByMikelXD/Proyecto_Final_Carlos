<h2>Todos los eventos</h2>

<?php if (empty($data)) : ?>
    <p>No hay eventos registrados.</p>
<?php else : ?>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr>
                <th>Evento</th>
                <th>Circuito</th>
                <th>Ubicación</th>
                <th>Fecha</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $evento): ?>
                <tr>
                    <td><?= htmlspecialchars($evento['evento_nombre']) ?></td>
                    <td><?= htmlspecialchars($evento['circuito']) ?></td>
                    <td><?= htmlspecialchars($evento['ubicacion']) ?></td>
                    <td><?= htmlspecialchars($evento['fecha']) ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
<?php endif; ?>
