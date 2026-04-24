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
                        <h3 class="box-title">Filter Rekapitulasi</h3>
                        <a href="rekapitulasi.php" class="btn btn-default btn-sm pull-right"><i class="fa fa-close"></i> &nbsp;Reset</a>
                    </div>
                    <div class="box-body">
                        <form method="get" action="">
                            <div class="row">

                                <!-- Jenis Kelamin -->
                                <div class="col-lg-3 col-lg-offset-1">
                                    <div class="form-group">
                                        <label>Jenis Kelamin Pemilih</label>
                                        <select name="jk" class="form-control" required="required">
                                            <option <?php if (isset($_GET['jk'])) {
                                                        if ($_GET['jk'] == "semua") {
                                                            echo "selected='selected'";
                                                        }
                                                    } ?> value="semua">
                                                Laki-Laki & Perempuan
                                            </option>

                                            <option <?php if (isset($_GET['jk'])) {
                                                        if ($_GET['jk'] == "Laki-Laki") {
                                                            echo "selected='selected'";
                                                        }
                                                    } ?> value="Laki-Laki">
                                                Laki-Laki
                                            </option>

                                            <option <?php if (isset($_GET['jk'])) {
                                                        if ($_GET['jk'] == "perempuan") {
                                                            echo "selected='selected'";
                                                        }
                                                    } ?> value="perempuan">
                                                Perempuan
                                            </option>

                                        </select>
                                    </div>
                                </div>

                                <!-- Usia Pemilih -->
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Usia Pemilih</label>
                                        <input type="number" name="usia" placeholder="Masukkan Usia" class="form-control" required="required" min="0" value="<?php if (isset($_GET['usia'])) {
                                                                                                                                                                    echo $_GET['usia'];
                                                                                                                                                                } else {
                                                                                                                                                                    echo 0;
                                                                                                                                                                }
                                                                                                                                                                ?>">
                                        <small class="text-muted"><i>Biarkan 0 Untuk Menapilkan Semua usia</i></small>
                                    </div>
                                </div>

                                <!-- Kandidat -->
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Kandidat</label>
                                        <select name="kandidat" class="form-control" required="required">
                                            <option value="semua">Semua Kandidat</option>
                                            <?php
                                            $kandidat = mysqli_query($koneksi, "SELECT * FROM kandidat");
                                            while ($k = mysqli_fetch_array($kandidat)) {
                                            ?>
                                                <option <?php if (isset($_GET["kandidat"])) {
                                                            if ($_GET['kandidat'] == $k['kandidat_id']) {
                                                                echo "selected='selected'";
                                                            }
                                                        } ?> value="<?php echo $k['kandidat_id'] ?>"><?php echo $k['kandidat_nama']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-1">
                                    <div class="form-group">
                                        <br>
                                        <input type="submit" class="btn btn-primary btn-sm" value="Tampilan">
                                    </div>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>

                <?php
                if (isset($_GET['jk'])) {
                ?>

                    <?php
                    $jk = $_GET['jk'];
                    $usia = $_GET['usia'];
                    $kandidat = $_GET['kandidat'];
                    ?>

                    <div class="box box-success">
                        <div class="box-header">
                            <h3 class="box-title">Rekapitulasi Voting</h3>
                            <a href="rekapitulasi_print.php?jk=<?php echo $jk; ?>&usia=<?php echo $usia; ?>&kandidat=<?php echo $kandidat; ?>" target+="_blank" class="btn btn-default btn-sm pull-right"><i class="fa fa-print"></i>&nbsp; Print</a>
                        </div>
                        <div class="box-body">
                            <table class="table">
                                <tr>
                                    <th width="15%">Jenis Kelamin Pemilih</th>
                                    <th width="1%">:</th>
                                    <td>
                                        <?php
                                        if ($jk == "semua") {
                                            echo "Laki -Laki & Perempuan";
                                        } else {
                                            echo $jk;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Usia</th>
                                    <th>:</th>
                                    <td>
                                        <?php
                                        if ($usia == "0") {
                                            echo "Semua Usia";
                                        } else {
                                            echo $usia;
                                        }
                                        ?>
                                    </td>
                                </tr>
                                <tr>
                                    <th>Kandidat</th>
                                    <th>:</th>
                                    <td>
                                        <?php
                                        if ($kandidat == "semua") {
                                            echo "Semua Kandidat";
                                        } else {
                                            $id_kandidat = $kandidat;
                                            $kandidat1 = mysqli_query($koneksi, "SELECT * FROM kandidat WHERE kandidat_id ='$id_kandidat'");
                                            $k = mysqli_fetch_assoc($kandidat1);
                                            echo "(" . $k['kandidat_kode'] . ") - " . $k['kandidat_nama'];
                                        }
                                        ?>
                                    </td>
                                </tr>
                            </table>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped" id="table-datatable">
                                    <thead>
                                        <tr>
                                            <th width="1%">No</th>
                                            <th class="text-center">Waktu Voting</th>
                                            <th class="text-center">Pemilih</th>
                                            <th class="text-center">Kandidat Yang Dipilih</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        $a = "";
                                        if ($jk != "semua") {
                                            $a .= "and pemilih_jk='$jk'";
                                        }

                                        if ($usia != "0") {
                                            $a .= "and pemilih_umur='$usia'";
                                        }

                                        if ($kandidat != "semua") {
                                            $a .= "and kandidat_id='$kandidat'";
                                        }
                                        $data = mysqli_query($koneksi, "SELECT * FROM pemilih,kandidat,voting WHERE voting_pemilih=pemilih_id AND voting_kandidat=kandidat_id $a");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>

                                            <tr>
                                                <td class="text-center"><?php echo $no++; ?></td>
                                                <td class="text-center"><?php echo date('d,m,Y H:i:s', strtotime($d['voting_waktu'])); ?></td>
                                                <td class="text-center"><?php echo $d['pemilih_kode']; ?> - <?php echo $d['pemilih_nama']; ?></td>
                                                <td class="text-center"><?php echo $d['kandidat_kode']; ?> - <?php echo $d['kandidat_nama']; ?></td>
                                            </tr>

                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                <?php
                }
                ?>

            </section>
        </div>
    </section>
</div>
<?php include 'footer.php'; ?>