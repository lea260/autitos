<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>listar personas</h1>
  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Precio Compra</th>
        <th>Precio Venta</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Anio</th>
      </tr>
      <tr>
    </thead>
    <tbody>
      <?php

foreach ($this->lista as $ind => $auto) {;
    //$auto = new auto(); //$auto = $auto;
    ?>
      <?php if ($auto->precioVenta >= 500) {

        ;?>
      <tr style="background: #ff0000">
        <?php } else {

        ;?>
      <tr style="background: #ffffff">
        <?php }
    ;?>
        <td>
          <?php echo $auto->id; ?>
        </td>
        <td>
          <?php echo $auto->precioCompra; ?>
        </td>
        <td>
          <?php echo $auto->precioVenta; ?>
        </td>
        <td>
          <?php echo $auto->marca; ?>
        </td>
        <td>
          <?php echo $auto->modelo; ?>
        </td>
        <td>
          <?php echo $auto->anio; ?>
        </td>

      </tr>
      <?php ;}
;?>
    </tbody>
  </table>
  <?php ;?>


</body>

</html>