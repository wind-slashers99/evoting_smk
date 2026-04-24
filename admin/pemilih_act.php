<?php
include "../koneksi.php";
$kode = $_POST['kode'];
$tgldaftar = $_POST['tgl_daftar'];
$ktp = $_POST['ktp'];
$nama = $_POST['nama'];
$umur = $_POST['umur'];
$alamat = $_POST['alamat'];
$jk = $_POST['jk'];
$username = $_POST['username'];
$password = md5($_POST['password']);

mysqli_query($koneksi, "INSERT INTO pemilih values ('','$kode','$tgl_daftar','$ktp','$nama','$umur','$alamat'
,'$jk','$username','$password')");
header("location:pemilih.php");
