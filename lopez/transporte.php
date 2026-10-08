<?php $base = '../'; $titulo = 'Transporte'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/transporte.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Medios de Transporte</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Bus interprovincial</h5><p>Desde Lima son 6-7 horas por carretera central.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Colectivos y combis</h5><p>Movilidad urbana económica y frecuente.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100"><div class="card-body">
      <h5>Tren a Huancavelica</h5><p>El famoso "Tren Macho", experiencia única por el valle.</p>
    </div></div></div>
  </div>

  <table class="table table-striped mt-5">
    <thead class="table-dark"><tr><th>Medio</th><th>Tiempo Lima-Huancayo</th><th>Costo aprox.</th></tr></thead>
    <tbody>
      <tr><td>Bus</td><td>6-7 horas</td><td>S/ 40 - 70</td></tr>
      <tr><td>Combi</td><td>6-8 horas</td><td>S/ 30 - 50</td></tr>
      <tr><td>Tren turístico</td><td>Variable</td><td>S/ 100+</td></tr>
    </tbody>
  </table>

  <div class="accordion mt-4" id="rutas">
    <div class="accordion-item">
      <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#r1">Lima → Huancayo</button></h2>
      <div id="r1" class="accordion-collapse collapse show" data-bs-parent="#rutas"><div class="accordion-body">Vía carretera central, con parada en La Oroya.</div></div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#r2">Huancayo → Huancavelica</button></h2>
      <div id="r2" class="accordion-collapse collapse" data-bs-parent="#rutas"><div class="accordion-body">Por carretera vía Izcuchaca, unas 4-5 horas.</div></div>
    </div>
  </div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
