<?php 

$nombres = $_POST["nombres"];
$apellidos = $_POST["apellidos"];
$fecha_nacimiento = $_POST["fecha-nacimiento"];
$nie = $_POST["nie"];
$correo = $_POST["correo-electronico"];

if (!empty($nombres) && !empty($apellidos) && !empty($fecha_nacimiento) && !empty($nie)) {
    $query = "SELECT COUNT(*) FROM reservas WHERE id = '$nie'";

    $result = mysqli_query($conecction, $query);
    
    if(!(mysqli_fetch_row($result)[0])) {   
        $sql = $conecction -> query("INSERT INTO reservas(nombres, apellidos, fecha_nacimiento, id, correo)VALUES('$nombres', '$apellidos', '$fecha_nacimiento', '$nie', '$correo')");
        header(("location: MessageIfEnroll.html"));
    } else {
        header(("location: MessageElseEnroll.html"));
    }
}

?>