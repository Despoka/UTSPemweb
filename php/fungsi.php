<?php
function cekId($input) {
    if (ctype_digit($input)) {
        return true;
    }
    else {
        return false;
    }
}
//Database home
function ambil_namaDepan($idNamaDepan){
    global $conn;
    $data = mysqli_query($conn, "SELECT namaDepan FROM home WHERE id='$idNamaDepan'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['namaDepan'];
    return $text;
}
function ambil_namaBelakang($idNamaBelakang){
    global $conn;
    $data = mysqli_query($conn, "SELECT namaBelakang FROM home WHERE id='$idNamaBelakang'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['namaBelakang'];
    return $text;
}
function ambil_deskripsiPanjang($idDeskripsiPanjang){
    global $conn;
    $data = mysqli_query($conn, "SELECT deskripsiPanjang FROM home WHERE id='$idDeskripsiPanjang'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['deskripsiPanjang'];
    return $text;
}
function ambil_bioHome($idBioHome){
    global $conn;
    $data = mysqli_query($conn, "SELECT biodataSingkat FROM home WHERE id='$idBioHome'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['biodataSingkat'];
    return $text;
}
// Database pendidikan
function ambil_namaInstansi($idNamaInstansi){
    global $conn;
    $data = mysqli_query($conn, "SELECT namaInstansi FROM pendidikan WHERE id='$idNamaInstansi'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['namaInstansi'];
    return $text;
}
function ambil_jelangPeriode($idJelangPeriode){
    global $conn;
    $data = mysqli_query($conn, "SELECT jelangPeriode FROM pendidikan WHERE id='$idJelangPeriode'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['jelangPeriode'];
    return $text;
}
function ambil_deskripsiPendidikan($idDeskripsiPendidikan){
    global $conn;
    $data = mysqli_query($conn, "SELECT deskripsiPendidikan FROM pendidikan WHERE id='$idDeskripsiPendidikan'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['deskripsiPendidikan'];
    return $text;
}
//Database pengalaman
function ambil_namaPengalaman($idNamaPengalaman){
    global $conn;
    $data = mysqli_query($conn, "SELECT namaPengalaman FROM pengalaman WHERE id='$idNamaPengalaman'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['namaPengalaman'];
    return $text;
}
function ambil_jelangPengalaman($idJelangPengalaman){
    global $conn;
    $data = mysqli_query($conn, "SELECT jelangPengalaman FROM pengalaman WHERE id='$idJelangPengalaman'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['jelangPengalaman'];
    return $text;
}
function ambil_deskripsiPengalaman($idDeskripsiPengalaman){
    global $conn;
    $data = mysqli_query($conn, "SELECT deskripsiPengalaman FROM pengalaman WHERE id='$idDeskripsiPengalaman'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['deskripsiPengalaman'];
    return $text;
}
//Database biodata
function ambil_tanggalLahir($idTanggalLahir){
    global $conn;
    $data = mysqli_query($conn, "SELECT tanggalLahir FROM biodata WHERE id='$idTanggalLahir'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['tanggalLahir'];
    return $text;
}
function ambil_pemahamanBahasa($idPemahamanBahasa){
    global $conn;
    $data = mysqli_query($conn, "SELECT pemahamanBahasa FROM biodata WHERE id='$idPemahamanBahasa'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['pemahamanBahasa'];
    return $text;
}
function ambil_bidangKeahlian($idBidangKeahlian){
    global $conn;
    $data = mysqli_query($conn, "SELECT bidangKeahlian FROM biodata WHERE id='$idBidangKeahlian'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['bidangKeahlian'];
    return $text;
}
function ambil_ketersediaanFreelance($idKetersediaanFreelance){
    global $conn;
    $data = mysqli_query($conn, "SELECT ketersediaanFreelance FROM biodata WHERE id='$idKetersediaanFreelance'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['ketersediaanFreelance'];
    return $text;
}
function ambil_deskripsiSingkat($idDeskripsiSingkat){
    global $conn;
    $data = mysqli_query($conn, "SELECT deskripsiSingkat FROM biodata WHERE id='$idDeskripsiSingkat'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['deskripsiSingkat'];
    return $text;
}
//Database contacts
function ambil_namaEmail($idNamaEmail){
    global $conn;
    $data = mysqli_query($conn, "SELECT namaEmail FROM contacts WHERE id='$idNamaEmail'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['namaEmail'];
    return $text;
}
function ambil_nomorHP($idNomorHP){
    global $conn;
    $data = mysqli_query($conn, "SELECT nomorHP FROM contacts WHERE id='$idNomorHP'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['nomorHP'];
    return $text;
}
function ambil_usernameIG($idUsernameIG){
    global $conn;
    $data = mysqli_query($conn, "SELECT usernameIG FROM contacts WHERE id='$idUsernameIG'");
    $row = mysqli_fetch_assoc($data);
    $text = $row['usernameIG'];
    return $text;
}
?>