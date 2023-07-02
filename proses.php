<?php


$list = array (
    array($_POST["hari1"], $_POST["waktu1"], $_POST["matkul1"], $_POST["dosen1"], $_POST["ruang1"]),
    array($_POST["hari1"], $_POST["waktu2"], $_POST["matkul2"], $_POST["dosen2"], $_POST["ruang2"]),
    array($_POST["hari1"], $_POST["waktu3"], $_POST["matkul3"], $_POST["dosen3"], $_POST["ruang3"]),
    array($_POST["hari1"], $_POST["waktu4"], $_POST["matkul4"], $_POST["dosen4"], $_POST["ruang4"])
);

$fp = fopen('file\file.csv', 'w');

foreach ($list as $fields) {
    fputcsv($fp, $fields);
}

fclose($fp);

header('Location: index.php');
?>
