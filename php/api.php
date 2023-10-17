<?php
$serverName = "localhost";
$userName = "root";
$password = "";
$dbName = "UTS-BADUDU";

// Buat koneksi
$conn = mysqli_connect($serverName, $userName, $password, $dbName);

// Cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

$data = array(); // Array untuk menyimpan data yang akan diambil

// Ambil data dari tabel "home" sesuai dengan struktur
$result_home = mysqli_query($conn, "SELECT id, namaDepan, namaBelakang, deskripsiPanjang, biodataSingkat FROM home");
$data['home'] = mysqli_fetch_all($result_home, MYSQLI_ASSOC);

// Ambil data dari tabel "biodata" sesuai dengan struktur
$result_biodata = mysqli_query($conn, "SELECT id, tanggalLahir, pemahamanBahasa, bidangKeahlian, ketersediaanFreelance, deskripsiSingkat FROM biodata");
$data['biodata'] = mysqli_fetch_all($result_biodata, MYSQLI_ASSOC);

// Ambil data dari tabel "pendidikan" sesuai dengan struktur
$result_pendidikan = mysqli_query($conn, "SELECT id, namaInstansi, jelangPeriode, deskripsiPendidikan FROM pendidikan");
$data['pendidikan'] = mysqli_fetch_all($result_pendidikan, MYSQLI_ASSOC);

header('Content-Type: application/json');
echo json_encode($data);

// Tutup koneksi
mysqli_close($conn);
?>
