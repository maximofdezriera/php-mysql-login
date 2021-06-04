EJERCICIO 1
EJERCICIO 1.1
Desarrollar una aplicación con scripts PHP en su versión 7.x que realice un control de acceso a la página de perfil
de los usuarios de un sitio web. La aplicación tendrá una página de inicio de sesión (login.php) que permitirá
indicar las credenciales de un usuario para validar su acceso a la aplicación.
• Código de tipo autoincremento.
• Usuario, 12 caracteres alfanuméricos.
• Contraseña, constará de 8 caracteres alfanuméricos incluyendo como caracteres especiales la arroba, el
punto y coma, el símbolo del dólar, del euro, y almohadilla. Se almacenará en la base de datos habida
cuenta las consideraciones de seguridad implícitas para este tipo de páginas.
• Correo electrónico, 255 caracteres alfanuméricos.
• Un campo numérico que guarde el número de accesos a la web de ese usuario.
• Fecha y hora del último acceso del usuario.
La tabla de roles debe contener:
• Código, de tipo autoincremento.
• Nombre del rol.
Un usuario puede tener varios roles.
El código de la aplicación debe cumplir con los estándares de programación para programación orientada a
objetos y el patrón arquitectónico modelo-vista-controlador así como todas las consideraciones de seguridad
necesarias. Debe ser compatible con diferentes sistemas gestores de bases de datos.
Procura comentar tu código para una mejor comprensión del mismo.
Desarrolla los siguientes aspectos del sitio web:
a) Los scripts SQL para crear las tablas necesarias en un servidor MySQL 5.7.
b) Completa la página login.php con los scripts necesarios.
<!DOCTYPE html>
<?php
//Lugar para los scripts solicitados
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
c) El Data Access Object (dao.php) con los siguientes métodos:
a. Conexión a la base de datos.
b. Recuperación de los datos de un usuario.
c. Comprobación de que las credenciales son correctas.
d) La página logout.php, que contendrá un script que desconectará al usuario autenticado para forzar a que
en el siguiente acceso tenga que volver a autenticarse, devolviéndolo a la página login.php.
