<?php

// Bagian 1: Mencetak struktur dasar HTML dan CSS
echo "<!DOCTYPE html>";
echo "<html lang='id'>";
echo "<head>";
echo "    <meta charset='UTF-8'>";
echo "    <meta name='viewport' content='width=device-width, initial-scale=1.0'>";
echo "    <title>Inventaris Ruang UKS</title>";
echo "    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css'>";
echo "    <style>";
echo "        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap');";
echo "        :root {";
echo "            --color-primary: #3498db;";
echo "            --color-secondary: #2ecc71;";
echo "            --color-text-dark: #2c3e50;";
echo "            --color-text-light: #ecf0f1;";
echo "            --color-bg-light: #f4f7f9;";
echo "            --color-bg-white: #ffffff;";
echo "            --color-border: #e0e6ed;";
echo "            --color-success: #27ae60;";
echo "            --color-alert: #e74c3c;";
echo "        }";
echo "        body {";
echo "            font-family: 'Poppins', sans-serif;";
echo "            background-color: var(--color-bg-light);";
echo "            color: var(--color-text-dark);";
echo "            margin: 0;";
echo "            padding: 40px;";
echo "            display: flex;";
echo "            justify-content: center;";
echo "            align-items: flex-start;";
echo "            min-height: 100vh;";
echo "        }";
echo "        .container {";
echo "            width: 100%;";
echo "            max-width: 900px;";
echo "            background-color: var(--color-bg-white);";
echo "            padding: 30px;";
echo "            border-radius: 16px;";
echo "            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);";
echo "            border-top: 5px solid var(--color-primary);";
echo "        }";
echo "        .header {";
echo "            display: flex;";
echo "            justify-content: space-between;";
echo "            align-items: center;";
echo "            margin-bottom: 25px;";
echo "        }";
echo "        h2 {";
echo "            color: var(--color-primary);";
echo "            margin: 0;";
echo "            font-weight: 700;";
echo "            display: flex;";
echo "            align-items: center;";
echo "            gap: 10px;";
echo "        }";
echo "        h2 i {";
echo "            color: var(--color-secondary);";
echo "        }";
echo "        .btn {";
echo "            padding: 12px 24px;";
echo "            border: none;";
echo "            border-radius: 8px;";
echo "            font-size: 15px;";
echo "            font-weight: 600;";
echo "            cursor: pointer;";
echo "            transition: all 0.3s ease;";
echo "            text-decoration: none;";
echo "            display: inline-flex;";
echo "            align-items: center;";
echo "            gap: 8px;";
echo "        }";
echo "        .btn-tambah {";
echo "            background-color: var(--color-secondary);";
echo "            color: var(--color-bg-white);";
echo "            box-shadow: 0 4px 10px rgba(46, 204, 113, 0.3);";
echo "        }";
echo "        .btn-tambah:hover {";
echo "            background-color: var(--color-success);";
echo "            transform: translateY(-2px);";
echo "        }";
echo "        table {";
echo "            width: 100%;";
echo "            border-collapse: separate;";
echo "            border-spacing: 0;";
echo "            margin-top: 20px;";
echo "            border-radius: 12px;";
echo "            overflow: hidden;";
echo "            box-shadow: 0 5px 15px rgba(0,0,0,0.05);";
echo "        }";
echo "        th, td {";
echo "            text-align: left;";
echo "            padding: 18px 20px;";
echo "            border-bottom: 1px solid var(--color-border);";
echo "        }";
echo "        th {";
echo "            background-color: var(--color-primary);";
echo "            color: var(--color-bg-white);";
echo "            font-weight: 600;";
echo "            text-transform: uppercase;";
echo "            font-size: 14px;";
echo "        }";
echo "        tr:last-child td {";
echo "            border-bottom: none;";
echo "        }";
echo "        tr:nth-child(even) {";
echo "            background-color: #f9fbfc;";
echo "        }";
echo "        tr:hover {";
echo "            background-color: #eaf1f7;";
echo "        }";
echo "        input[type=\"number\"], input[type=\"text\"], select {";
echo "            width: 100%;";
echo "            max-width: 120px;";
echo "            padding: 10px;";
echo "            border: 1px solid var(--color-border);";
echo "            border-radius: 6px;";
echo "            transition: all 0.3s ease;";
echo "            font-family: 'Poppins', sans-serif;";
echo "        }";
echo "        input[type=\"text\"] {";
echo "            max-width: none;";
echo "        }";
echo "        input:focus, select:focus {";
echo "            border-color: var(--color-primary);";
echo "            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.2);";
echo "            outline: none;";
echo "        }";
echo "        select {";
echo "            max-width: 180px;";
echo "            cursor: pointer;";
echo "        }";
echo "        .btn-update {";
echo "            display: block;";
echo "            width: 100%;";
echo "            padding: 16px;";
echo "            margin-top: 30px;";
echo "            background-color: var(--color-primary);";
echo "            color: var(--color-bg-white);";
echo "            border-radius: 8px;";
echo "            font-size: 18px;";
echo "            font-weight: 600;";
echo "            cursor: pointer;";
echo "            transition: background-color 0.3s ease, transform 0.2s;";
echo "            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.2);";
echo "        }";
echo "        .btn-update:hover {";
echo "            background-color: #2980b9;";
echo "            transform: translateY(-2px);";
echo "        }";
echo "        .alert {";
echo "            margin-top: 20px;";
echo "            padding: 15px;";
echo "            border-radius: 8px;";
echo "            font-weight: 600;";
echo "            text-align: center;";
echo "            display: flex;";
echo "            align-items: center;";
echo "            justify-content: center;";
echo "            gap: 10px;";
echo "        }";
echo "        .alert-success {";
echo "            background-color: #d4edda;";
echo "            color: var(--color-success);";
echo "        }";
echo "        .alert-success i {";
echo "            color: var(--color-success);";
echo "        }";
echo "    </style>";
echo "</head>";
echo "<body>";
echo "<div class='container'>";
echo "    <div class='header'>";
echo "        <h2><i class='fas fa-first-aid'></i> Inventaris Ruang UKS</h2>";
echo "        <button type='button' class='btn btn-tambah' onclick='tambahBarang()'><i class='fas fa-plus'></i> Tambah Barang</button>";
echo "    </div>";

// Bagian 2: Memproses data form dan mencetak pesan sukses
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Di sini akan ada logika untuk menyimpan data ke database atau file.
    // Karena ini contoh sederhana, kita hanya menampilkan pesan sukses.
    echo '<div class="alert alert-success"><i class="fas fa-check-circle"></i> Data inventaris berhasil diperbarui!</div>';
}

// Bagian 3: Data inventaris (array sederhana)
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
echo "        <tbody id='inventaris-table-body'>";

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
echo "    <button type='submit' class='btn btn-update'>Perbarui Inventaris</button>";
echo "</form>";
echo "</div>";

// Bagian 6: Script JavaScript untuk menambahkan baris baru
echo "<script>";
echo "function tambahBarang() {";
echo "    const tbody = document.getElementById('inventaris-table-body');";
echo "    const newRow = document.createElement('tr');";
echo "    newRow.innerHTML = `";
echo "        <td><input type='text' name='nama_barang_baru[]' placeholder='Nama Barang Baru' required></td>";
echo "        <td><input type='number' name='jumlah_baru[]' value='1' min='0'></td>";
echo "        <td>";
echo "            <select name='kondisi_baru[]'>";
echo "                <option value='Baik' selected>Baik</option>";
echo "                <option value='Kurang Baik'>Kurang Baik</option>";
echo "                <option value='Habis'>Habis</option>";
echo "                <option value='Rusak'>Rusak</option>";
echo "            </select>";
echo "        </td>";
echo "    `;";
echo "    tbody.appendChild(newRow);";
echo "}";
echo "</script>";

echo "</body>";
echo "</html>";

?>
