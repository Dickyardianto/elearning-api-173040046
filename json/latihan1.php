<?php
// $mahasiswa = [
//     "nama" => "ABCD",
//     "nrp" => "173040047",
//     "email" => "dikiardianto19@gmail.com"
// ];

$dbh = new PDO('mysql:host=localhost;dbname=phpdasar', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;