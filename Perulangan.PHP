<?php
function berikanObat($gejala) {
    $daftarObat = [
        ["gejala" => "demam", "obat" => "Berikan Paracetamol 500mg."],
        ["gejala" => "batuk", "obat" => "Berikan Sirup Batuk."],
        ["gejala" => "pilek", "obat" => "Berikan Obat Pilek."],
        ["gejala" => "sakit kepala", "obat" => "Berikan Ibuprofen 400mg."]
    ];
    
    for ($i = 0; $i < count($daftarObat); $i++) {
        if ($gejala == $daftarObat[$i]["gejala"]) {
            return $daftarObat[$i]["obat"];
        }
    }
    
    return "Gejala tidak dikenali. Silakan konsultasikan dengan dokter.";
}

$gejalaSiswa = "pilek"; 
$obat = berikanObat($gejalaSiswa);

echo "Siswa mengalami: " . $gejalaSiswa . "<br>";
echo "Obat yang diberikan: " . $obat;
?>