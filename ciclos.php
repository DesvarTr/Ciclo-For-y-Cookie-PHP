<?php

    setcookie("usuario", "Juan", time() + (86400*30), "/");

?>

<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTS-8">
    <title>Ciclo for en PHP</title>

</head>

<body>

    <h1>Ciclo for</h1>

    <ul>
        <?php
            for ($i = 1; $i <= 5; $i++) {
                echo "<li>Elemento $i</li>";
            }
        ?>
    </ul>

    <h1>Cookie Set</h1>

        <?php

            if (isset($_COOKIE["usuario"])){
                echo "Cookie 'usuario' esta configurada, Valor: " . $_COOKIE["usuario"];
            } else {
                echo "Cookie 'usuario' no esta configurada";
            }

        ?>

</body>
</html>