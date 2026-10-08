<?php $base = '../'; $titulo = 'Contacto'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/huancayo.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Contacto</h2>

  <div class="row g-4">
    <div class="col-md-4"><div class="card h-100 text-center"><div class="card-body">
      <h5>Teléfono</h5><p>(064) 123-456</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100 text-center"><div class="card-body">
      <h5>Correo</h5><p>info@turismohuancayo.pe</p>
    </div></div></div>
    <div class="col-md-4"><div class="card h-100 text-center"><div class="card-body">
      <h5>Dirección</h5><p>Plaza Constitución, Huancayo</p>
    </div></div></div>
  </div>

  <form class="mt-5" method="post">
    <div class="mb-3"><label class="form-label">Nombre</label><input type="text" class="form-control" required></div>
    <div class="mb-3"><label class="form-label">Correo</label><input type="email" class="form-control" required></div>
    <div class="mb-3"><label class="form-label">Mensaje</label><textarea class="form-control" rows="4"></textarea></div>
    <button class="btn btn-primary">Enviar</button>
  </form>

  <div class="alert alert-success mt-4">¡Gracias por escribirnos! Responderemos pronto.</div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
