<?php

include 'header.php';

include '../koneksi.php';
?>
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Voting
            <small>Data Voting</small>
        </h1>
        <ol col class="breadcrumb">
            <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></11>>
            <li class="active">Dashboard</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <section class="col-lg-12">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">Voting</h3>
                        <a href="voting_print.php" target+="_blank" class="btn btn-default btn-sm pull-right"><i class="fa fa-print"></i>&nbsp; Print</a>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-stripped" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th widht="1%" class="text-center">No</th>
                                        <th class="text-center">Waktu Voting</th>
                                        <th class="text-center">Pemilih</th>
                                        <th class="text-center">Kandidat dipilih</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include "../koneksi.php";
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM pemilih,kandidat,voting WHERE  voting_pemilih = pemilih_id AND voting_kandidat = kandidat_id");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>
                                        <tr>
                                            <td class="text-center">
                                                <?php echo $no++; ?>
                                            </td>

                                            <td class="text-center">
                                                <?php echo date('d,m,Y H:i:s', strtotime($d['voting_waktu'])); ?>
                                            </td>

                                            <td class="text-center">
                                                <?php echo $d['pemilih_kelas']; ?> - <?php echo $d['pemilih_nama']; ?>
                                            </td>

                                            <td class="text-center">
                                                <?php echo $d['kandidat_kode']; ?> - <?php echo $d['kandidat_nama']; ?>
                                            </td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>