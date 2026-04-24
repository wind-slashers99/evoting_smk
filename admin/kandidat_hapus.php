<?php include "../koneksi.php";
$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM kandidat WHERE kandidat_id='$id'");
mysqli_query($koneksi, "DELETE FROM voting WHERE voting_kandidat='$id'");

// echo "<script>
// alert('data berhasil di hapus')

// </script>"
header('location:kandidat.php');
