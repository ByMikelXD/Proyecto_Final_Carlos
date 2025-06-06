<style>
  body {
    margin: 0;
    padding: 40px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background-color: #f4f4f4;
    color: #333;
  }

  h1 {
    text-align: center;
    font-size: 32px;
    margin-bottom: 40px;
    color: #222;
  }

  .container1 {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 30px;
  }

  .card {
    position: relative;
    width: 350px;
    background-color: white;
    border-radius: 15px;
    box-shadow: 0 10px 20px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
  }

  .card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 25px rgba(0,0,0,0.15);
  }

  .card .bg.uwu {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 6px;
    background: #007BFF;
  }

  .card .bg {
    position: absolute;
    top: 6px;
    left: 0;
    width: 100%;
    height: 6px;
    background: #00BFFF;
  }

  .content {
    padding: 20px;
  }

  .content .img img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    margin-bottom: 15px;
  }

  .content .h1 {
    font-size: 22px;
    font-weight: bold;
    margin-bottom: 10px;
    color: #007BFF;
  }

  .content .p {
    font-size: 16px;
    line-height: 1.5;
    color: #444;
  }

  .content .p p {
    margin-top: 10px;
    font-size: 14px;
    color: #555;
  }
</style>

<h1>Información del Evento</h1>
<br>
<div class="container1">
  <div class="card">
    <div class="bg uwu"></div>
    <div class="bg"></div>
    <div class="content">
      <div class="h1">
        <?= htmlspecialchars($data['evento']['nombre'] ?? 'N/A') ?>
      </div>
      <div class="p">
        Ubicación: <?= htmlspecialchars($data['evento']['ubicacion'] ?? 'N/A') ?><br>
        Fecha: <?= htmlspecialchars($data['evento']['fecha'] ?? 'N/A') ?>
        <p>
          <?= nl2br(htmlspecialchars($data['evento']['descripcion'] ?? '')) ?>
        </p>
      </div>
    </div>
  </div>
</div>