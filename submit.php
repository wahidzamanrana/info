<?php
    $data_file = fopen("example.txt", "w");
    $name = $_POST["user"];
    $name = $_POST["age"];
    $text_to_write = $user . " " . $age;

    fwrite($data_file, $text_to_write);
    fclose($data_file);
?>