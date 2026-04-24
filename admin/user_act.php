<?php
include "../koneksi.php";

$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = md5($_POST['password']);
$level = $_POST['level'];

$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];

if ($filename == "") {
    mysqli_query($koneksi, "INSERT INTO user VALUES(
        'NULL','$nama','$username','$pass','$level',''
    )");
    header("location:user.php");
} else {
    $ext = pathinfo($filename, PATHINFO_EXTENSION);

    if (!in_array($ext, $allowed)) {
        header('location:user.php');
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/' . $rand . '_' . $filename);
        $file_gambar = $rand . '_' . $filename;
        mysqli_query($koneksi, "INSERT INTO user VALUES (
        'NULL','$nama','$username','$pass','$level','$file_gambar')
            ");
        header('location:user.php');
    }
}
