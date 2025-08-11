<?php
function berikanObat($gejala) {
    if ($gejala == "demam") {
        return "Berikan Paracetamol 500mg.";
    } else if ($gejala == "batuk") {
        return "Berikan Sirup Batuk.";
    } else if ($gejala == "pilek") {
        return "Berikan Obat Pilek.";
    } else if ($gejala == "sakit kepala") {
        return "Berikan Ibuprofen 400mg.";
    } else {
        return "Gejala tidak dikenali. Silakan konsultasikan dengan dokter.";
    }
}

$gejalaSiswa = "demam"; 
$obat = berikanObat($gejalaSiswa);

echo "Siswa mengalami: " . $gejalaSiswa . "<br>";
echo "Obat yang diberikan: " . $obat;
?>