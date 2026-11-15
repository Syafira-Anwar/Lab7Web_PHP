<?php
$data = null;
$error = [];

// Nilai default sesuai data Anda
$nama = "Syafira";
$nim = "312510179";
$prodi = "Teknik Informatika";
$semesterInput = "3";
$email = "syafiraanwar15@gmail.com";
$tugas = "85";
$uts = "90";
$uas = "88";

// [INSTRUKSI 3] Function untuk mengubah format harga menjadi Rupiah
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

// [INSTRUKSI 2] Contoh GET untuk mencari nama dari array data sederhana
$daftarMahasiswa = ["Syafira", "Budi Santoso", "Ani Lestari", "Joko Widodo", "Siti Aminah", "Dewi Lestari"];
$hasilPencarian = null;
if (isset($_GET['cari']) && !empty(trim($_GET['cari']))) {
    $keyword = strtolower(trim($_GET['cari']));
    $hasilPencarian = array_filter($daftarMahasiswa, function($mhs) use ($keyword) {
        return strpos(strtolower($mhs), $keyword) !== false;
    });
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semesterInput = $_POST["semester"] ?? "";
    $email = trim($_POST["email"] ?? "");
    $tugas = $_POST["tugas"] ?? "";
    $uts = $_POST["uts"] ?? "";
    $uas = $_POST["uas"] ?? "";

    // Validasi dasar
    if ($nama === "") $error[] = "Nama wajib diisi.";
    
    // [INSTRUKSI 4] Validasi NIM: harus angka dan panjangnya tepat 9 digit (sesuai NIM Anda)
    if ($nim === "") {
        $error[] = "NIM wajib diisi.";
    } elseif (!ctype_digit($nim) || strlen($nim) !== 9) {
        $error[] = "NIM harus berupa angka dan panjangnya harus tepat 9 digit (Contoh: 312510179).";
    }

    if ($prodi === "") $error[] = "Program studi wajib diisi.";
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error[] = "Format email tidak valid.";
    }
    
    if (!ctype_digit((string)$semesterInput) || (int)$semesterInput < 1 || (int)$semesterInput > 14) {
        $error[] = "Semester harus berupa angka 1-14.";
    }

    // [INSTRUKSI 1] Validasi komponen nilai
    if (!is_numeric($tugas) || !is_numeric($uts) || !is_numeric($uas)) {
        $error[] = "Komponen nilai Tugas, UTS, dan UAS harus berupa angka.";
    }

    if (!$error) {
        // [INSTRUKSI 1] Perhitungan nilai rata-rata dari tiga komponen nilai (Tugas, UTS, UAS)
        $rataRata = ((float)$tugas + (float)$uts + (float)$uas) / 3;

        $data = compact("nama", "nim", "prodi", "email", "tugas", "uts", "uas");
        $data["semester"] = (int)$semesterInput;
        $data["rata_rata"] = round($rataRata, 2);
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eksperimen Mandiri PHP - Syafira</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 30px;
        }
        .container {
            max-width: 550px;
            margin: auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2, h3 {
            color: #333;
        }
        .form-group {
            margin-bottom: 12px;
        }
        label {
            display: block;
            margin-bottom: 4px;
            font-weight: bold;
            color: #555;
            font-size: 14px;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"] {
            width: 100%;
            padding: 7px 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .btn-group {
            display: flex;
            gap: 10px;
            margin-top: 15px;
        }
        button, .btn-reset {
            flex: 1;
            padding: 10px;
            border: none;
            border-radius: 4px;
            font-size: 15px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }
        button[type="submit"] {
            background-color: #007bff;
            color: white;
        }
        button[type="submit"]:hover {
            background-color: #0056b3;
        }
        /* [INSTRUKSI 5] Tombol Reset */
        button[type="reset"], .btn-reset {
            background-color: #6c757d;
            color: white;
            display: inline-block;
        }
        button[type="reset"]:hover {
            background-color: #5a6268;
        }
        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px 15px;
            border-radius: 4px;
            margin-bottom: 15px;
            border: 1px solid #f5c6cb;
        }
        .alert-error ul {
            margin: 0;
            padding-left: 20px;
        }
        .result-box {
            background-color: #d4edda;
            color: #155724;
            padding: 15px;
            border-radius: 4px;
            margin-top: 20px;
            border: 1px solid #c3e6cb;
        }
        .section-box {
            background: #e9ecef;
            padding: 12px;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }
    </style>
</head>
<body>