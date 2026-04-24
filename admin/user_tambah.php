<?php include "header.php"; ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            User
            <small>Data User</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <section class="col-lg-6 col-lg-offset-3 ">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Tambah User</h3>
                        <a href="user.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i>&nbsp Kembali</a>
                    </div>
                    <div class="box-body">
                        <form action="user_act.php" method="post" enctype="multipart/form-data">

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama...">
                            </div>

                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required placeholder="Masukkan Username...">
                            </div>

                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="nama" class="form-control" required placeholder="Masukkan Password...">
                            </div>

                            <div class="form-group">
                                <label>Jabatan</label>
                                <select class="form-control" required="required" name="level">
                                    <option>~ Pilih Level ~</option>
                                    <option value="Administrator">Administrator</option>
                                    <option value="Panitia">Panitia</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto">
                                <small class="text-muted">Upload Foto User</small>
                            </div>

                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
</div>
<?php include "footer.php"; ?>