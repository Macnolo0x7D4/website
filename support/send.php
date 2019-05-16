<?php
    $DEST = "admin@macnolo.tk";
    $NAME = $_POST["user"];
    $EMAIL = $_POST["email"];
    $DESCR = $_POST["description"];

    $CONT = "User: " . $NAME . "\nEmail: " . $EMAIL . "\nDescription: " . $DESCR;

    mail($DEST, "Support", $CONT);
    header("Location: success.html");
?>