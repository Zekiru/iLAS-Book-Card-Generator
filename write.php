<?php
    $data = json_decode(file_get_contents('php://input'), true);
    $file = 'ar_data.json';
    file_put_contents($file, json_encode($data));
    echo "PHP: Local Data Storing Initialized.";
?>