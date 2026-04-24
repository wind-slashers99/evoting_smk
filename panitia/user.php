<?php include 'header.php'; ?>
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
            <section class="col-lg-10 col-lg-offset-1">
                <div class="box box-success">
                    <div class="box-header">
                        <h3 class="box-title">User</h3>

                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped" id="table-datatable">
                                <thead>
                                    <tr>
                                        <th width="1%" align="center">No</th>
                                        <th align="center">Nama</th>
                                        <th align="center">Username</th>
                                        <th align="center">Level</th>
                                        <th width="10%" align="center">Foto</th>
                                        <th width="10%" align="center">Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    include '../koneksi.php';
                                    $no = 1;
                                    $data = mysqli_query($koneksi, "SELECT * FROM user");
                                    while ($d = mysqli_fetch_array($data)) {
                                    ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $d['user_nama']; ?></td>
                                            <td><?php echo $d['user_username']; ?></td>
                                            <td><?php echo $d['user_level']; ?></td>
                                            <td>
                                                <center>
                                                    <?php if ($d['user_foto'] == "") { ?>
                                                        <img src="../gambar/sistem/user.png" style="width:90px;
                                                        height:auto">
                                                    <?php } else { ?>
                                                        <img src="../gambar/user/<?php echo $d['user_foto'] ?>" style="width:90px;height:auto">
                                                    <?php } ?>
                                                </center>
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
</div>
<?php include 'footer.php'; ?>