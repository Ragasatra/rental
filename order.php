<!doctype html>
<html lang="en">

<body>
    <?php
    include("konek.php");
    $cari = mysqli_query($konek, "select * from mobil1,sewa1 where mobil1.id_mobil=sewa1.id_mobil AND mobil1.id_admin=$_SESSION[id_admin]") or die(mysqli_error());

    ?>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>No Polisi</th>
                <th>Merk</th>
                <th>Nama Peminjam</th>
                <th>Tujuan Pinjam</th>
                <th>Tgl Mulai Order</th>
                <th>Tgl Selesai Order</th>
                <th>Lama Sewa</th>
                <Th>Total</Th>
                <th>Aksi</th>
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
                    <td><?php echo $data['nama_sewa']; ?></td>
                    <td><?php echo $data['tujuan']; ?></td>
                    <td><?php echo $data['tgl_sewa']; ?></td>
                    <td><?php echo $data['tgl_kembali']; ?></td>
                    <td><?php echo $data['lama']; ?></td>
                    <td><?php echo $data['harga_total']; ?></td>
                    <td>
                        <a href="?x=horder&id=<?php echo $data['id_sewa']; ?>" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
    </table>
    <a href="?x=torder" class="btn btn-primary">Tambah Order</a>

</body>

</html>