<?php include "header.php"; ?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Kandidat
            <small>Data Kandidat</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <section class="col-lg-8 col-lg-offset-2">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Kandidat</h3>
                        <a href="kandidat.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-reply"></i>&nbsp Kembali</a>
                    </div>
                    <div class="box-body">
                        <form action="kandidat_act.php" method="post">
                            <div class="form-group">
                                <label>Kode</label>
                                <input type="text" name="kode" class="form-control" required placeholder="Masukkan Kode...">
                            </div>

                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" name="nama" class="form-control" required placeholder="Masukkan Nama...">
                            </div>

                            <div class="form-group">
                                <label>Tentang</label>
                                <textarea id="editor1" style="resize: vertical; height:200px" name="tentang" class="form-control" required="required" placeholder="Masukkan Tentang..." placeholder="isi Deskripsi Tentang Kandidat (Visi, Misi, Dan Lainnya)"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Foto</label>
                                <input type="file" name="foto">
                                <small class="text-muted">Upload kandidat</small>
                            </div>

                            <br>
                            <div class="form-group">
                                <input type="submit" class="btn-success">
                            </div>

                    </div>
                </div>
            </section>
        </div>
</div>
<?php include "footer.php"; ?>