<?php $base = ''; $titulo = 'Inicio'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include 'includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('includes/img/huancayo.jpg') no-repeat center center fixed; background-size: cover;">
<?php include 'includes/navbar.php'; ?>

<div class="container my-5">
  <div class="p-5 mb-4 bg-light rounded-3 text-center">
    <h1 class="display-4">Turismo en Huancayo</h1>
    <p class="lead">Descubre la ciudad incontrastable: cultura, gastronomía y aventura en el Valle del Mantaro.</p>
    <a class="btn btn-primary btn-lg" href="integrantes.php">Conoce al equipo</a>
  </div>

  <div class="row g-4">
    <div class="col-md-4">
      <div class="card h-100"><div class="card-body">
        <h5 class="card-title">Lugares Turísticos</h5>
        <p class="card-text">Conoce los destinos más visitados de Huancayo.</p>
        <a href="alor/lugares.php" class="btn btn-outline-primary">Ver más</a>
      </div></div>
    </div>
    <div class="col-md-4">
      <div class="card h-100"><div class="card-body">
        <h5 class="card-title">Historia</h5>
        <p class="card-text">Un recorrido por el pasado de la región Junín.</p>
        <a href="lopez/historia.php" class="btn btn-outline-primary">Ver más</a>
      </div></div>
    </div>
    <div class="col-md-4">
      <div class="card h-100"><div class="card-body">
        <h5 class="card-title">Eventos</h5>
        <p class="card-text">Fiestas y actividades durante todo el año.</p>
        <a href="santiago/eventos.php" class="btn btn-outline-primary">Ver más</a>
      </div></div>
    </div>
  </div>

  <div class="alert alert-info mt-4">Proyecto académico desarrollado con Bootstrap 5.</div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
