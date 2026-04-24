<?php include "header.php"; ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pemilih
            <small>Tambah Pemilih</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <section class="col-lg-6 col-lg-offset-3">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">
                            Tambah Pemilih Baru
                        </h3>
                        <a href="pemilih.php" class="btn btn-success btn-sm pull-right">
                            <i class="fa fa-reply"></i>&nbsp Kembali</a>
                    </div>
                    <div class="box-body">
                        <form action="pemilih_act.php" method="post">
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" required placeholder="Masukkan Kode...">
                            </div>
                            <div class="form-group">
                                <label>TGL. Daftar</label>
                                <input type="date" name="tgl_daftar" class="form-control" required placeholder="Masukkan Tanggal Daftar...">
                            </div>
                            <div class="form-group">
                                <label>No. KTP</label>
                                <input type="text" name="ktp" class="form-control" required placeholder="Masukkan No KTP...">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama...">
                            </div>
                            <div class="form-group">
                                <label>Umur</label>
                                <input type="text" name="umur" class="form-control" required placeholder="Masukkan Umur...">
                            </div>
                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea name="alamat" class="form-control" required placeholder="Masukkan Alamat..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control" required>
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="username" class="form-control" required placeholder="Masukkan Username...">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="text" name="password" class="form-control" required placeholder="Masukkan Password...">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn-success">
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
<?php include "footer.php"; ?>