<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INCAS - Reserva</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <?php include("PHPControl/Conecction_control.php"); ?>
        <header>
                <div id="header"><br><br>
                        <img src="Logos/INCAS LOGO.png">
                        <h1 id="tema">Instituto Nacional Cornelio Azenón Sierra<br>
                                Bachillerato Técnico en Gestión
                                y desarrollo Turístico</h1><br>
        </header>
        <nav>
                <ul>
                        <li><a href="inicio.php"><img src="" alt=""><span>Iniciar sesión</span></a></li>
                        <li><a href="Formulario/Enroll.php"><span>Registrarse</span></a></li>
                        <li><a href="Bookings.php"><span>Ver matriculas</span></a></li>
                        <li><a href="Galeria.html"><img class="logo" src="Logos/imagen2.png">
                                        <span>Galeria</span></a></li>
                        <li><a href="ideario.html"><img class="logo1" src="Logos/birrete.png">
                                        <span>Ideario</span></a></li>
                        <li><a href="Misión.html"><img src="Logos/INCAS LOGO.png" class="logo1">
                                        <span>Misión</span></a></li>
                        <li><a href="Visión.html"><img src="Imagenes/WhatsApp Image 2023-08-23 at 9.22.01 AM (8).jpeg"
                                                class="logo">
                                        <span>Vision</span></a></li>
                        <li><a href="Historia.html"><img src="Logos/historia.png" class="logo">
                                        <span>Historia</span></a></li>
                        <li><a href="ventajas.html"><img class="logo" src="Imagenes/ventajas.jpg">
                                        <span>Ventajas y objetivos</span></a></li>
                </ul>
        </nav>

    <main>
        <br><br>
        
        <h1>Reserva de matricula para futuros estudiantes en desarrollo de software 2023</h1>

        <form method="POST">
            <h1>Reserva</h1>

            <span style="display: none;"><?php include("PHPControl/Enroll_control.php"); ?></span>

            
            <input type="text" placeholder="Nombres" name="nombres" id="nombres" autocomplete="off">
            <input type="text" placeholder="Apellidos" name="apellidos" id="apellidos" autocomplete="off">
            <input type="date" id="fecha" placeholder="Fecha de nacimiento" name="fecha-nacimiento">
            <input type="text" placeholder="NIE" name="nie" id="nie" autocomplete="off">
            <input type="email" placeholder="Correo Electronico (Opcional)" id="correo" name="correo-electronico" autocomplete="off">

            <div>
                <button type="submit">Reservar matricular</button>
            </div>
            <br>
        </form>

        <br><br><br>
    </main>
</body>
</html>