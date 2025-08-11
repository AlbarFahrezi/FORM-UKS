<?php

// Bagian 1: Mencetak struktur dasar HTML dan CSS
echo "<!DOCTYPE html>";
echo "<html lang='id'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Inventaris Ruang UKS - Form</title>";
echo "    <style>";
echo "        body {";
echo "            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;";
echo "            background-color: #f4f7f9;";
echo "            color: #333;";
echo "            margin: 0;";
echo "            padding: 40px;";
echo "        }";
echo "        .container {";
echo "            max-width: 800px;";
echo "            margin: auto;";
echo "            background-color: #ffffff;";
echo "            padding: 30px;";
echo "            border-radius: 12px;";
echo "            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);";
echo "        }";
echo "        h2 {";
echo "            text-align: center;";
echo "            color: #2c3e50;";
echo "            margin-bottom: 25px;";
echo "        }";
echo "        table {";
echo "            width: 100%;";
echo "            border-collapse: collapse;";
echo "            margin-top: 20px;";
echo "        }";
echo "        th, td {";
echo "            text-align: left;";
echo "            padding: 12px;";
echo "            border-bottom: 1px solid #ddd;";
echo "        }";
echo "        th {";
echo "            background-color: #f2f2f2;";
echo "            color: #555;";
echo "            font-weight: 600;";
echo "        }";
echo "        input[type=\"number\"], select {";
echo "            width: 80px;";
echo "            padding: 8px;";
echo "            border: 1px solid #ccc;";
echo "            border-radius: 4px;";
echo "        }";
echo "        select {";
echo "            width: 120px;";
echo "        }";
echo "        .btn-update {";
echo "            display: block;";
echo "            width: 100%;";
echo "            padding: 12px;";
echo "            margin-top: 20px;";
echo "            background-color: #3498db;";
echo "            color: white;";
echo "            border: none;";
echo "            border-radius: 4px;";
echo "            font-size: 16px;";
echo "            cursor: pointer;";
echo "            transition: background-color 0.3s ease;";
echo "        }";
echo "        .btn-update:hover {";
echo "            background-color: #2980b9;";
echo "        }";
echo "        .alert {";
echo "            margin-top: 20px;";
echo "            padding: 15px;";
echo "            border-radius: 4px;";
echo "            font-weight: bold;";
echo "        }";
echo "        .alert-success {";
echo "            background-color: #d4edda;";
echo "            color: #155724;";
echo "        }";
echo "    </style>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "    <h2>Daftar Inventaris Ruang UKS 📝</h2>";

// Bagian 2: Memproses data form dan mencetak pesan sukses
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo '<div class="alert alert-success">✅ Data inventaris berhasil diperbarui!</div>';
}

// Bagian 3: Data inventaris (tetap menggunakan array untuk kemudahan)
$inventaris_uks = [
    ['nama_barang' => 'Kotak P3K', 'jumlah' => 1, 'kondisi' => 'Baik'],
    ['nama_barang' => 'Tandu', 'jumlah' => 1, 'kondisi' => 'Baik'],
    ['nama_barang' => 'Termometer', 'jumlah' => 3, 'kondisi' => 'Baik'],
    ['nama_barang' => 'Bantal & Selimut', 'jumlah' => 2, 'kondisi' => 'Kurang Baik'],
    ['nama_barang' => 'Obat Sakit Kepala', 'jumlah' => 0, 'kondisi' => 'Habis'],
];

// Bagian 4: Mencetak tag <form> dan tabel
echo "<form method='post' action=''>";
echo "    <table>";
echo "        <thead>";
echo "            <tr>";
echo "                <th>Nama Barang</th>";
echo "                <th>Jumlah</th>";
echo "                <th>Kondisi</th>";
echo "            </tr>";
echo "        </thead>";
echo "        <tbody>";

// Bagian 5: Perulangan dan mencetak setiap baris tabel
foreach ($inventaris_uks as $item) {
    echo '<tr>';
    echo '    <td>' . htmlspecialchars($item['nama_barang']) . '</td>';
    echo '    <td><input type="number" name="jumlah[]" value="' . htmlspecialchars($item['jumlah']) . '" min="0"></td>';
    echo '    <td>';
    echo '        <select name="kondisi[]">';
    echo '            <option value="Baik" ' . ($item['kondisi'] == 'Baik' ? 'selected' : '') . '>Baik</option>';
    echo '            <option value="Kurang Baik" ' . ($item['kondisi'] == 'Kurang Baik' ? 'selected' : '') . '>Kurang Baik</option>';
    echo '            <option value="Habis" ' . ($item['kondisi'] == 'Habis' ? 'selected' : '') . '>Habis</option>';
    echo '            <option value="Rusak" ' . ($item['kondisi'] == 'Rusak' ? 'selected' : '') . '>Rusak</option>';
    echo '        </select>';
    echo '    </td>';
    echo '</tr>';
}

echo "        </tbody>";
echo "    </table>";
echo "    <button type='submit' class='btn-update'>Perbarui Inventaris</button>";
echo "</form>";
echo "</div>";
echo "</body>";
echo "</html>";

?>