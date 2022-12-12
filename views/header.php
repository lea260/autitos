<header>
  <a href="<?php echo constant('URL'); ?>login/ingresar">ingresar</a>
  <?php $rol = "";?>
  <?php if (isset($_SESSION["esta_log"])) {
    $estaLogueado = $_SESSION["esta_log"];
    //$_SESSION['esta_log'] = $res->log;
    $rol = $_SESSION['rol'] ?? "";
} else {
    $estaLogueado = false;
}
if ($rol == "vendedor") {?>
  <a href="<?php echo constant('URL'); ?>login/vendedor">vendedor</a>
  <?php } elseif ($rol == "mecanico") {?>
  <a href="<?php echo constant('URL'); ?>login/mecanico">mecanico</a>
  <?php }
;?>
  <a href="<?php echo constant('URL'); ?>login/salir">salir</a>
</header>