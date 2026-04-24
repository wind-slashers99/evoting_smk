<?php

include '../koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = md5($_POST['password']);
$pwd = $_POST['password'];
$level = $_POST['level'];

// cek gambar
$rand = rand();
$allowed = array('gif', 'png', 'jpg', 'jpeg');
$filename = $_FILES['foto']['name'];
$ext = pathinfo($filename, PATHINFO_EXTENSION);
if ($pwd == "" && $filename = "") {
    mysqli_query($koneksi, "UPDATE user SET user_nama='$nama', user_username='$username',user_level='$level' WHERE user_id='$id'");
} elseif ($pwd == "") {
    if (!in_array($ext, $allowed)) {
        header("location: user.php?alert=gagal");
    } else {
        move_uploaded_file($_FILES['foto']['tmp_name'], '../gambar/user/' . $rand . '_' . $filename);
        $x = $rand . "_" . $filename;
        mysqli_query($koneksi, "UPDATE user set user_nama='$nama', user_foto='$x',user_username='$username',user_level='$level' where user_id='$id'");
        header("location: user.php?alert=berhasil");
    }
} else if ($filename == "") {
    mysqli_query($koneksi, "UPDATE user set user_nama='$nama', user_username='$username',user_level='$level' WHERE user_id='$id'");
    header("location: user.php");
}
