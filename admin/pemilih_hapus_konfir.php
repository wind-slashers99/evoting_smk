<?php include "header.php"; ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Pemilih
            <small>Data Pemilih</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i>Home</li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <section class="col-lg-10 col-lg-offset-1">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-header">
                            Konfirmasi Penghapusan Data Pemilih
                        </h3>
                    </div>
                    <div class="box-body">
                        <center>
                            <p>Yakin??</p>
                            <p>Data yang berhubungan dengan pemilih ini akan hilang</p>
                        </center>
                        <?php $id = $_GET['id']; ?>
                        <a href="pemilih.php" class="btn btn-danger btn-sm">Ga jadi</a>
                        <a href="pemilih_hapus.php?id=<?php echo $id ?>" class="btn btn-warning btn-sm pull-right"><i class="fa fa-check"></i>&nbsp;
                            Hapus</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
<?php include "footer.php"; ?>