 <?php
//inclucion de conexion
include '../conexion/conexion.php';
// validacion de variables
$email = $_GET['email'];
$password = $_GET['password'];
$sql = "SELECT * FROM USUARIOS WHERE email='$email' and password='$password'";
//print_r($sql);die;
$result = $mysqli->query($sql);
//print_r($result->num_rows);
if ($result->num_rows == 0) {
    $mensaje = 'Consulta no válida: ' . mysqli_error($mysqli) . "\n";
    //header("Location: ../index.php");
}
while ($row = mysqli_fetch_all($result)) {
   echo json_encode($row);
}
