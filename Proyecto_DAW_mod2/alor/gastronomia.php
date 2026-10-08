<?php $base = '../'; $titulo = 'Gastronomía'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/gastronomia.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Gastronomía Huanca</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Pachamanca</h5><p>Carnes y papas cocidas en horno de tierra con piedras calientes.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Papa a la Huancaína</h5><p>Clásico plato con crema de ají amarillo y queso fresco.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Queso Huancayo</h5><p>Queso fresco artesanal reconocido en todo el país.</p>
    </div></div></div>
  </div>

  <table class="table table-striped mt-5">
    <thead class="table-dark"><tr><th>Plato</th><th>Precio estimado (S/)</th></tr></thead>
    <tbody>
      <tr><td>Pachamanca</td><td>S/ 25 - 40</td></tr>
      <tr><td>Papa a la Huancaína</td><td>S/ 8 - 15</td></tr>
      <tr><td>Plato de queso Huancayo</td><td>S/ 10 - 20</td></tr>
    </tbody>
  </table>

  <div class="alert alert-info">Visita el Mercado Modelo para probar estos platos a precios accesibles.</div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
