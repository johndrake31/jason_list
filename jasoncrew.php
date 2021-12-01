<?php
require "connection.php";


$sql = "SELECT * FROM `crew_manifest`";
$results = mysqli_query($conn, $sql);
$table = [];
foreach ($results as $key => $value) {
    $id = $value['id'];
    $nom = $value['nom'];
    $prenom = $value['prenom'];
    $table[] = array('crew_member' => array('id' => $id, 'nom' => $nom, 'prenom' => $prenom));
}
$json = json_encode($table);
header('Content-type: application/json');
echo $json;
