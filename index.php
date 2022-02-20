<?php
    extract($_REQUEST);
    $file = fopen("messages.txt", "a");

    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    fwrite($file, "name: ");
    fwrite($file, $name)
    fwrite($$file, "email: ");
    fwrite($file, $email)
    fwrite($file, "message: ");
    fwrite($file, $message);
    fwrite($file, "\n");
    fclose($file);
?>