<!DOCTYPE html>
<head>
    <title>Belajar PHP - 3</title>
</head>

<?php
$MultiArray = [
    [
    'Nama' => 'Satria',
    'Kelas' => 'RPL 1'
],
[
    'Nama' => 'Arsyi',
    'Kelas' => 'RPL 2',
],
[
    'Nama' => 'Dhika',
    'Kelas' => 'RPL 3',
],
[
    'Nama' => 'Evan',
    'Kelas' => 'RPL 2',
],
[
    'Nama' => 'Fabian',
    'Kelas' => 'RPL 5',
],
[
    'Nama' => 'Irfan',
    'Kelas' => 'RPL 6',
]
]

?>
<?php
$Hasil = array_slice($MultiArray,0,2);
echo "<pre>";
print_r($Hasil);
echo "</pre>";
?>