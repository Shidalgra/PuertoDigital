<!doctype html>
<html lang="es">

<head>
  <title>Procesamiento Login</title>
  <meta name="robots" content="noindex, nofollow">
  <meta name="description" content="Gestiona el puerto desde donde estes">
  <meta name="keywords" content="Puerto Automatizado, gestion de puerto, puerto">
  <link rel="canonical" href="http://localhost/ProyectoAmbienteWeb/ProcesamientoLogin.php">
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <script src="js/jquery-3.5.1.js"></script>
  <script src="js/jquery-ui-1.12.1/jquery-ui.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <pre>
    <?php

    require_once 'conection.php';

    function recogePost($var, $m = "")
    {
      if (!isset($_POST[$var])) {
        $tmp = (is_array($m)) ? [] : "";
      } elseif (!is_array($_POST[$var])) {
        $tmp = trim(htmlspecialchars($_POST[$var], ENT_QUOTES, "UTF-8"));
      } else {
        $tmp = $_POST[$var];
        array_walk_recursive($tmp, function (&$valor) {
          $valor = trim(htmlspecialchars($valor, ENT_QUOTES, "UTF-8"));
        });
      }
      return $tmp;
    }

    $id2 = recogePost("id2");
    $nombre = recogePost("Nombre2");
    $apellido1 = recogePost("Apellidos2_1");
    $apellido2 = recogePost("Apellidos2_2");
    $usuario = recogePost("Usuario2");
    $pass = recogePost("pswd2");

    $id2Ok = false;
    $nombreOk = false;
    $apellido1Ok = false;
    $apellido2Ok = false;
    $usuarioOk = false;
    $passOk = false;

    if (!($id2 == "") && !($id2 == " ")) {
      $id2Ok = true;
    }

    if (!($nombre == "") && !($nombre == " ")) {
      $nombreOk = true;
    }

    if (!($apellido1 == "") && !($apellido1 == " ")) {
      $apellido1Ok = true;
    }

    if (!($apellido2 == "") && !($apellido2 == " ")) {
      $apellido2Ok = true;
    }

    if (!($usuario == "") && !($usuario == " ")) {
      $usuarioOk = true;
    }

    if (!($pass == "") && !($pass == " ")) {
      $passOk = true;
    }

    if (
      $id2Ok && $nombreOk && $apellido1Ok
      && $apellido2Ok && $usuarioOk && $passOk
    ) {

      echo insertaDatos($id2, $nombre, $apellido1, $apellido2, $usuario, $pass);
    }

    function insertaDatos($pid2, $pnombre, $papellido1, $papellido2, $pusuario, $ppass)
    {
      $conn = Conecta();
      $stmt = $conn->prepare("INSERT INTO usuarios (Cedula, Nombre, priApe, segApe, Usuario, Pass)VALUES(?,?,?,?,?,?)");
      $stmt->bind_param("isssss", $iCedula, $iNombre, $iApellido1, $iApellido2, $iUsuario, $iPass);

      $iCedula = $pid2;
      $iNombre = $pnombre;
      $iApellido1 = $papellido1;
      $iApellido2 = $papellido2;
      $iUsuario = $pusuario;
      $iPass = $ppass;

      $stmt->execute();


      echo '<script language="javascript">alert("Usuario registrado satisfactoriamente");</script>';

      $stmt->close();
      $conn->close();
    }

    header("Location: http://localhost/ProyectoAmbienteWeb/Login.php");
    ?> 
    </pre>
</body>

</html>