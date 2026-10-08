<?php $base = isset($base) ? $base : ''; ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
    <a class="navbar-brand" href="<?php echo $base; ?>index.php">Turismo Huancayo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="menu">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>index.php">Inicio</a></li>
        <li class="nav-item"><a class="nav-link" href="<?php echo $base; ?>integrantes.php">Integrantes</a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Alor V. Junior</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $base; ?>alor/lugares.php">Lugares turísticos</a></li>
            <li><a class="dropdown-item" href="<?php echo $base; ?>alor/gastronomia.php">Gastronomía</a></li>
            <li><a class="dropdown-item" href="<?php echo $base; ?>alor/consejos.php">Consejos de viaje</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Lopez E. Valois</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $base; ?>lopez/historia.php">Historia</a></li>
            <li><a class="dropdown-item" href="<?php echo $base; ?>lopez/transporte.php">Transporte</a></li>
            <li><a class="dropdown-item" href="<?php echo $base; ?>lopez/alojamiento.php">Alojamiento</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Santiago R. Idelfonso</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?php echo $base; ?>santiago/eventos.php">Eventos</a></li>
            <li><a class="dropdown-item" href="<?php echo $base; ?>santiago/deportes.php">Deportes y aventura</a></li>
            <li><a class="dropdown-item" href="<?php echo $base; ?>santiago/contacto.php">Contacto</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
