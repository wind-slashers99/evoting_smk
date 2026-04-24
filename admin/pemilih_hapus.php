<?php include "../koneksi.php";
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM pemilih WHERE pemilih_id='$id'");
mysqli_query($koneksi, "DELETE FROM voting WHERE voting_pemilih='$id'");

// echo "<script>
// alert('data berhasil di hapus')

// </script>"
header('location:pemilih.php');
