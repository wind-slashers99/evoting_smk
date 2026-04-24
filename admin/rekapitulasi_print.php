<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Sistem E-Voting Pemilihan Ketua OSIS</title>
    <link rel="stylesheet" type="text/css" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/bower_components/bootstrap/dist/css/AdminLTE.min.css">

    <?php
    include '../koneksi.php';
    session_start();
    if ($_SESSION['level'] != "administrator") {
        header("location:../index.php?alert=belum_login");
    }
    ?>
</head>

<body>
    <center>
        <h3>REKAPITULASI DATA VOTING</h3>
        <h4>Sistem Informasi E-Voting Pemilihan Ketua OSIS</h4>
    </center>
    <table class="table table-bordered">
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
                        <?php echo $d['pemilih_kode']; ?> - <?php echo $d['pemilih_nama']; ?>
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
    <pre>
        Medan,<br>
        KEPALA SMK TI MEDAN<br>
        <br>
        <br>
        (                 )
    </pre>
    <script type="text/javascript">
        window.print();
    </script>
</body>

</html>