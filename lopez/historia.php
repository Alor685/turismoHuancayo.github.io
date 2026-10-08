<?php $base = '../'; $titulo = 'Historia de Huancayo'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/historia.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Historia de Huancayo</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100 border-primary"><div class="card-body">
      <h5>Época Wanka</h5><p>Cultura originaria Wanka habitó el valle antes de la llegada española.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100 border-primary"><div class="card-body">
      <h5>Independencia</h5><p>Huancayo fue escenario de batallas por la libertad del Perú.</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100 border-primary"><div class="card-body">
      <h5>Guerra del Pacífico</h5><p>Ciudad estratégica durante el conflicto de 1879.</p>
    </div></div></div>
  </div>

  <table class="table table-bordered mt-5">
    <thead class="table-dark"><tr><th>Año</th><th>Hecho histórico</th></tr></thead>
    <tbody>
      <tr><td>1531</td><td>Llegada de los españoles al Valle del Mantaro</td></tr>
      <tr><td>1821</td><td>Proclamación de la independencia peruana</td></tr>
      <tr><td>1879</td><td>Participación en la Guerra del Pacífico</td></tr>
    </tbody>
  </table>

  <div class="alert alert-primary">Huancayo es conocida como la "Ciudad Incontrastable".</div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
