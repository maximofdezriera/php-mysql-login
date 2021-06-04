<?php

  session_start();

  require 'dao.php';

  if (!empty($_POST['pcorreo']) && !empty($_POST['contrasinal'])) {
    $records = $conn->prepare('SELECT codigo, correo, contrasenya FROM usuarios WHERE correo = :pcorreo');
    $records->bindParam(':pcorreo', $_POST['pcorreo']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['contrasinal'], $results['contrasinal'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /php-mysql-login");
    } else {
      $message = 'Acceso no permitido';
    }
  }

?>
<html>
<head>
<meta charset="UTF-8"/>
<title>Login</title>
<link href="estilos.css" rel="stylesheet">
</head>
<body>
<form action="login.php" method="post">
<fieldset>
<legend>Datos de acceso</legend>
Usuario: <input type="text" name="usuario" id="usuario" />
<br /><br />
Contrasinal: <input type="password" name="contrasinal" id="contrasinal" />
<br /><br />
<input type="submit" name ="enviar" id="enviar" value="Iniciar sesión" />
</fieldset>
</form>
</body>
</html>
