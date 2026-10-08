<?php $base = '../'; $titulo = 'Eventos'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/eventos.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Eventos y Festividades</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Fiestas Patrias</h5><p>Celebración con danzas, desfiles y comidas típicas.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Santísima Virgen del Rosario</h5><p>Fiesta patronal con procesión multitudinaria.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Carnaval Huanca</h5><p>Danzas de tijeras y música tradicional.</p>
    </div></div></div>
  </div>

  <table class="table table-bordered mt-5">
    <thead class="table-dark"><tr><th>Evento</th><th>Mes</th></tr></thead>
    <tbody>
      <tr><td>Fiestas Patrias</td><td>Julio</td></tr>
      <tr><td>Virgen del Rosario</td><td>Octubre</td></tr>
      <tr><td>Carnaval</td><td>Febrero</td></tr>
    </tbody>
  </table>

  <div class="alert alert-info">Próximo evento: Fiestas Patrias en julio. ¡No te lo pierdas!</div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
