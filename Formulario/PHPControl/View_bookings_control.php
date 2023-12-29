<?php 

$query = "SELECT * FROM reservas";

$result = mysqli_query($conecction, $query);

if ($result) {
    while($row = $result -> fetch_array()) {
        $nie = $row["id"];
        $nombres = $row["nombres"];
        $apellidos = $row["apellidos"];
        $correo = $row["correo"];
        $fecha = $row["fecha_nacimiento"]
        ?>
        <tr>
            <td><div class="del_button" title="Eliminar registro" onclick="getId('<?php echo $nie; ?>')"><img src="Resources/x-icon.png" alt="button-div"><p id="inner_element"></p></div><?php echo $nie; ?></td>
            <td><?php echo $nombres; ?></td>
            <td><?php echo $apellidos; ?></td>
            <td><?php echo $fecha; ?></td>
            <td><?php echo $correo; ?></td>
        </tr>
        <?php
    }
}
?>