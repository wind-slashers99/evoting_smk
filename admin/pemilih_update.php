<?php
include '../koneksi.php';
$id = $_POST['id'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = $_POST['password'];
if ($_POST['password'] == "") {
    mysqli_query($koneksi, "update pemilih set  pemilih_nis='$nis',pemilih_kelas='$kelas', pemilih_nama='$nama', pemilih_jk='$jk', pemilih_username='$username' where pemilih_id='$id'");
    header("location:pemilih.php");
} else {
    mysqli_query($koneksi, "update pemilih set pemilih_kelas='$kelas', pemilih_nis='$nis', pemilih_nama='$nama', pemilih_jk='$jk', pemilih_username='$username', pemilih_password='$password' where pemilih_id='$id'");
    header("location:pemilih.php");
}
