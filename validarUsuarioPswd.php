
        <?php
        try {
            session_start();

            require_once 'consultaBD.php';

            $conn = Conecta();

            $usuario = $_POST['username'];
            $clave = $_POST['pswd'];


            $consulta = "SELECT * FROM usuarios WHERE Usuario = '$usuario' AND Pass = '$clave'";

            $resultado = mysqli_query($conn, $consulta);
            $filas = ConsultaSQL($consulta);


            if ($filas > 0) {
                while ($row = $filas->fetch_assoc()) {
                    $usuarioPrueba = $row["Usuario"];
                    $passPrueba = $row["Pass"];
                    if ($usuario == $usuarioPrueba && $clave == $passPrueba) {
                        $_SESSION['user'] = $usuario;
                        header("location: http://localhost:80/ProyectoAmbienteWeb/index.php");
                    }else{
                        header("location: http://localhost:80/ProyectoAmbienteWeb/Login.php");
                    }
                }
                
            }
            //code...
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }

        ?>



   