<?php $base = '../'; $titulo = 'Lugares Turísticos'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/vallemantaro.png') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Lugares Turísticos de Huancayo</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Plaza Constitución</h5><p>Centro histórico y punto de encuentro de la ciudad.</p>
      <span class="badge bg-primary">Histórico</span>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Cerrito de la Libertad</h5><p>Mirador natural con vista panorámica del valle.</p>
      <span class="badge bg-success">Mirador</span>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Laguna de Paca</h5><p>Ideal para paseos y actividades recreativas.</p>
      <span class="badge bg-info">Naturaleza</span>
    </div></div></div>
  </div>

  <div id="carrusel" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active"><div class="bg-secondary text-white text-center py-5">Plaza Constitución de Huancayo</div></div>
      <div class="carousel-item"><div class="bg-primary text-white text-center py-5">Vista desde el Cerrito de la Libertad</div></div>
      <div class="carousel-item"><div class="bg-success text-white text-center py-5">Tranquilidad de la Laguna de Paca</div></div>
    </div>
    <button class="carousel-control-prev" data-bs-target="#carrusel" data-bs-slide="prev"><span class="carousel-control-prev-icon"></span></button>
    <button class="carousel-control-next" data-bs-target="#carrusel" data-bs-slide="next"><span class="carousel-control-next-icon"></span></button>
  </div>

  <div class="alert alert-warning mt-4">Lleve ropa abrigadora: Huancayo tiene clima templado-frío por las tardes.</div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
