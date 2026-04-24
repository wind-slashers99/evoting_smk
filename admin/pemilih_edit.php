<?php include 'header.php'; ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pemilih
            <small>Data Pemilih</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#" class="fa fa-dashboard"></a>Home</li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <section class="col-lg-6 col-lg-offset-3">
                <div class="box box-success">

                    <div class="box-header">
                        <h3 class="box-title">Edit Pemilih</h3>
                        <a href="pemilih.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a>
                    </div>

                    <div class="box-body">
                        <form action="pemilih_update.php" method="post">
                            <?php
                            $id = $_GET['id'];
                            $data = mysqli_query($koneksi, "SELECT * FROM pemilih WHERE pemilih_id = '$id'");
                            while ($d = mysqli_fetch_array($data)) {
                            ?>

                                <div class="form-group">
                                    <label>NIS</label>
                                    <input type="hidden" name="id" value="<?php echo $d['pemilih_id'] ?>">
                                    <input type="text" class="form-control" name="nis" required="required" placeholder="Masukkan NIS.." value="<?php echo $d['pemilih_nis'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Kelas</label>
                                    <input type="text" class="form-control" name="kelas" required="required" placeholder="Masukkan Kelas.." value="<?php echo $d['pemilih_kelas'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input type="text" class="form-control" name="nama" required="required" placeholder="Masukkan Nama.." value="<?php echo $d['pemilih_nama'] ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select type="text" class="form-control" name="jk" required="required">
                                        <option value=""> - Pilih Jenis Kelamin - </option>
                                        <option <?php if ($d['pemilih_jk'] == "Laki-Laki") {
                                                    echo "selected='selected'";
                                                } ?> value="Laki-Laki">Laki-Laki</option>
                                        <option <?php if ($d['pemilih_jk'] == "Perempuan") {
                                                    echo "selected='selected'";
                                                } ?> value="Perempuan">Perempuan</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" class="form-control" name="username" required="required" placeholder="Masukkan Username.." value="<?php echo $d['pemilih_username'] ?>">
                                </div>

                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" class="form-control" name="password" placeholder="Masukkan Password..">
                                    <small class="text-muted">Kosongkan Jika tidak ingin diganti</small>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-success" value="simpan">
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