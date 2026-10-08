<?php $base = ''; $titulo = 'Integrantes del Grupo'; ?>
<!DOCTYPE html>
<html lang="es">
<head><?php include 'includes/head.php'; ?></head>
<body style="background: linear-gradient(rgba(243,233,210,0.88), rgba(243,233,210,0.88)), url('includes/img/eventos.jpg') no-repeat center center fixed; background-size: cover;">
<?php include 'includes/navbar.php'; ?>

<div class="container my-5">
  <h2 class="mb-4">Integrantes del Grupo</h2>

  <div class="card mb-4">
    <div class="card-body">
      <h4>Alor V. Junior</h4>
      <ul>
        <li><strong>Lugares turísticos:</strong> página con cards descriptivas de los principales destinos (Huancayo, Cerrito de la Libertad, Laguna de Paca), carrusel de imágenes y lista de datos útiles.</li>
        <li><strong>Gastronomía:</strong> página con tarjetas de platos típicos (pachamanca, huancaína, papi), tabla de precios estimados y alert informativo.</li>
        <li><strong>Consejos de viaje:</strong> página con accordion de preguntas frecuentes, alertas de recomendaciones y badges de categorías.</li>
      </ul>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <h4>Lopez E. Valois</h4>
      <ul>
        <li><strong>Historia:</strong> página con línea de tiempo en cards, tabla de fechas importantes y alert de contexto histórico.</li>
        <li><strong>Transporte:</strong> página con cards de medios de transporte, tabla comparativa y accordion de rutas.</li>
        <li><strong>Alojamiento:</strong> página con cards de hospedajes, precios en badges y alert de recomendación.</li>
      </ul>
    </div>
  </div>

  <div class="card mb-4">
    <div class="card-body">
      <h4>Santiago R. Idelfonso</h4>
      <ul>
        <li><strong>Eventos:</strong> página con cards de festividades, tabla de fechas y alert de próximas celebraciones.</li>
        <li><strong>Deportes y aventura:</strong> página con cards de actividades, carrusel de destinos para aventura y lista de requerimientos.</li>
        <li><strong>Contacto:</strong> página con formulario de contacto, accordion de preguntas y cards con datos de contacto.</li>
      </ul>
    </div>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
</body>
</html>
