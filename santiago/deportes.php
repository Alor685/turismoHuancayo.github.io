<?php $base = '../'; $titulo = 'Deportes y Aventura'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/aventura.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Deportes y Aventura</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Parapente</h5><p>Vuela sobre el Valle del Mantaro desde bases locales.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Ciclismo de montaña</h5><p>Rutas por los cerros y pueblos cercanos.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Senderismo</h5><p>Caminatas a lagunas y miradores de la zona.</p>
    </div></div></div>
  </div>

  <div id="carruselAdv" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active"><div class="bg-dark text-white text-center py-5">Parapente sobre el valle</div></div>
      <div class="carousel-item"><div class="bg-primary text-white text-center py-5">Rutas de ciclismo</div></div>
      <div class="carousel-item"><div class="bg-secondary text-white text-center py-5">Caminata a la laguna</div></div>
    </div>
    <button class="carousel-control-prev" data-bs-target="#carruselAdv" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
    <button class="carousel-control-next" data-bs-target="#carruselAdv" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
  </div>

  <ul class="list-group mt-4">
    <li class="list-group-item">Ropa deportiva y bloqueador solar</li>
    <li class="list-group-item">Guía certificado para actividades extremas</li>
    <li class="list-group-item">Hidratación constante</li>
  </ul>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
