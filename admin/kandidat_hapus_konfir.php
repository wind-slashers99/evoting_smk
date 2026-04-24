<?php include "header.php"; ?>

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Kandidat
            <small>Data Kandidat</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <section class="col-lg-10 col-lg-offset-1">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-header">
                            Konfirmasi Penghapusan Data kandidat
                        </h3>
                    </div>
                    <div class="box-body">
                        <center>
                            <p>Yakin??</p>
                            <p>Data yang berhubungan dengan Kandidat ini akan hilang</p>
                        </center>
                        <?php $id = $_GET['id']; ?>
                        <a href="kandidat.php" class="btn btn-warning btn-sm"><i class="fa fa-reply"></i>&nbsp; Ga jadi</a>
                        <a href="kandidat_hapus.php?id=<?php echo $id ?>" class="btn btn-danger btn-sm pull-right"><i class="fa fa-trash"></i>&nbsp;
                            Hapus</a>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
<?php include "footer.php"; ?>