<?php

include 'header.php';

include '../koneksi.php';
?>
<div class="content-wrapper">

    <section class="content-header">

        <h1>

            User

            <small>Edit user</small>
        </h1>
        <ol col class="breadcrumb">

            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></11>>

            <li class="active">Dashboard</li>

        </ol>

    </section>

    <section class="content">

        <div class="row">

            <section class="col-lg-6 col-lg-offset-3">

                <div class="box box-success">

                    <div class="box-header">

                        <h3 class="box-title">Edit User</h3>

                        <a href="user.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a>

                    </div>

                    <div class="box-body">

                        <form action="user_update.php" method="post" enctype="multipart/form-data">
                            <?php
                            $id = $_GET['id'];

                            $data = mysqli_query($koneksi, "SELECT * FROM user where user_id='$id'");
                            while ($d = mysqli_fetch_array($data)) {

                            ?>

                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" name="nama" class="form-control" required value="<?php echo $d['user_nama'] ?>">
                                    <input type="hidden" class="form-control" name="id" required="required" value="<?php echo $d['user_id'] ?>" class="form-group">
                                </div>

                                <div>
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control" required value="<?php echo $d['user_username'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control" placeholder="Kosongkan Jika Tidak Ingin Mengganti">
                                </div>

                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <select class="form-control" required="required" name="level">
                                        <option>~ Pilih Level ~</option>
                                        <option <?php if ($d['user_level'] == "administrator") {
                                                    echo "selected = 'selected'";
                                                } ?>value="Administrator">Administrator</option>
                                        <option <?php if ($d['user_level'] == "panitia") {
                                                    echo "selected = 'selected'";
                                                } ?> value="panitia">Panitia</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Foto</label>
                                    <input type="file" name="foto">
                                    <small class="text-muted">Abaikan Jika Tidak Ingin Mengganti Foto</small>
                                </div>

                                <br>
                                <div class="form-group">
                                    <input type="submit" class="btn-success">
                                </div>
                            <?php
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>