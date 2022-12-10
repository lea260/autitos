<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <title>autitos</title>
  <!-- vista principal -->
</head>

<body>
  <input type="hidden" value="<?=$this->token;?>" id="token">
  <?php require 'views/header.php';?>
  <div class="container">
    <div class="row">
      <div class="col-sm">
        <h1>Ingresar</h1>
      </div>
    </div>


    <form action="<?php echo constant('URL'); ?>login/entrar" method="POST">
      <label for="usuario">usuario</label>
      <input type="text" name="nombre" id="usuario">
      <input type="submit" value="enviar">
    </form>

  </div>
  <?php require 'views/footer.php';?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
  </script>
  <script src="<?php echo constant('URL'); ?>public/js/login/ingresar.js"></script>
</body>

</html>