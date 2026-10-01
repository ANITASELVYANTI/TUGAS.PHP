<?php 
$nama = "Budi Santoso";
$kelas = "XII RPL 1";
$nilai_tugas = "85";
$nilai_uts = "80";
$nilai_uas = "90";
$nilai_akhir = ($nilai_tugas * 30 / 100) +
               ($nilai_uts * 30 / 100) +
               ($nilai_uas * 40 / 100);
  $nilai = "75";
  if ($nilai_akhir >= 90) {
    $predikat = "A";
} elseif ($nilai_akhir >= 80) {
    $predikat = "B";
} elseif ($nilai_akhir >= 75) {
    $predikat = "C";
} elseif ($nilai_akhir >= 60) {
    $predikat = "D";
} else {
    $predikat = "E";
}         
if ($nilai_akhir >= 75) {
    $status = "LULUS";
} else {
    $status = "TIDAK LULUS";
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Penilaian Siswa</title>
</head>
<body>

    <h2>Hasil Penilaian Siswa</h2>

    <?php
    echo "Nama: " . $nama . "<br>";
    echo "Kelas: " . $kelas . "<br>";
    echo "Nilai Tugas: " . $nilai_tugas . "<br>";
    echo "Nilai UTS: " . $nilai_uts . "<br>";
    echo "Nilai UAS: " . $nilai_uas . "<br>";
    echo "Nilai Akhir: " . $nilai_akhir . "<br>";
    echo "Predikat: " . $predikat . "<br>";
    echo "Status: " . $status;
    ?>

</body>
</html>