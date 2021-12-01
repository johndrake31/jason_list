<?php
require "connection.php";

if (isset($_POST['lastname']) && isset($_POST['firstname'])) {
    $lastName = mysqli_real_escape_string($conn, $_POST["lastname"]);
    $firstName = mysqli_real_escape_string($conn, $_POST["firstname"]);
    var_dump($firstName . " " . $lastName);
    $sql = "INSERT INTO crew_manifest (id, nom, prenom) VALUES (NULL, '$lastName', '$firstName');";
    $results = mysqli_query($conn, $sql);
    if ($results) {
        header("Location: index.php");
    }
    //$json = json_encode($table);
}
