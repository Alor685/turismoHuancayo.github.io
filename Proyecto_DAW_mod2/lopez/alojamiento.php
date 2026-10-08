<?php $base = '../'; $titulo = 'Alojamiento'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/alojamiento.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Opciones de Alojamiento</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Hoteles céntricos</h5><p>Cerca de la Plaza Constitución, con todos los servicios.</p>
      <span class="badge bg-warning text-dark">S/ 80 - 150/noche</span>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Hostales</h5><p>Opción económica para viajeros jóvenes.</p>
      <span class="badge bg-success">S/ 30 - 60/noche</span>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Alojamientos rurales</h5><p>Experiencia en comunidades del valle.</p>
      <span class="badge bg-info">S/ 50 - 90/noche</span>
    </div></div></div>
  </div>

  <div class="alert alert-warning mt-4">Reserva con anticipación en temporada alta (julio y fiestas patrias).</div>
  <ul class="list-group mt-3">
    <li class="list-group-item">WiFi gratuito en la mayoría de hospedajes</li>
    <li class="list-group-item">Desayuno incluido en hoteles de 3 estrellas</li>
    <li class="list-group-item">Parqueos privados disponibles</li>
  </ul>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
