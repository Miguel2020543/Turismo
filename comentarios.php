<?php

    if ($_POST["mensaje"]) {
        mail("elmich843@gmail.com", "Texto de prueba",
        $_POST["Su mensaje"]. "Mensaje");
    }

?>