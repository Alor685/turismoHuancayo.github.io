<?php $base = '../'; $titulo = 'Consejos de Viaje'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include '../includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('../includes/img/turismo.jpg') no-repeat center center fixed; background-size: cover;">
<?php include '../includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Consejos de Viaje</h2>

  <div class="accordion" id="faq">
    <div class="accordion-item">
      <h2 class="accordion-header"><button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#c1">¿Cuándo es mejor viajar?</button></h2>
      <div id="c1" class="accordion-collapse collapse show" data-bs-parent="#faq"><div class="accordion-body">Entre abril y octubre, con clima seco y cielos despejados.</div></div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#c2">¿Qué ropa llevar?</button></h2>
      <div id="c2" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Ropa de abrigo para la noche, bloqueador solar y calzado cómodo.</div></div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#c3">¿Es seguro recorrer la ciudad?</button></h2>
      <div id="c3" class="accordion-collapse collapse" data-bs-parent="#faq"><div class="accordion-body">Sí, durante el día; de noche prefiere zonas iluminadas y transporte formal.</div></div>
    </div>
  </div>

  <div class="mt-4">
    <span class="badge bg-secondary">Seguridad</span>
    <span class="badge bg-secondary">Salud</span>
    <span class="badge bg-secondary">Presupuesto</span>
  </div>

  <div class="alert alert-success mt-4">Hidrátate constantemente para aclimatarte a la altitud (3,259 m).</div>
</div>

<?php include '../includes/footer.php'; ?>
</body>
</html>
