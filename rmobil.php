<!doctype html>
<html lang="en">

<body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "select * from mobil1 where id_admin=$_SESSION[id_admin]") or die(mysqli_error());

    ?>
    <h3>Laporan Data Mobil</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>No Polisi</th>
                <th>Merk</th>
                <th>Tahun</th>
                <th>Harga/Hari</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            while ($data = mysqli_fetch_array($cari)) {
                ?>
                <tr>
                    <th scope="row"><?php echo $no; ?></th>
                    <td><?php echo $data['no_polisi']; ?></td>
                    <td><?php echo $data['merk']; ?></td>
                    <td><?php echo $data['tahun']; ?></td>
                    <td><?php echo $data['harga']; ?></td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <a href="crmobil.php" target="blank" class="btn btn-primary">Cetak</a>
    <a href="pdfmobil.php" target="blank" class="btn btn-primary">PDF</a>
</body>

</html>