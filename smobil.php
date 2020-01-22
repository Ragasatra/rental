<?php
include("konek.php");
$nopolisi = $_POST['txtPolisi'];
$merk = $_POST['txtMerk'];
$tahun = $_POST['txtTahun'];
$harga = $_POST['txtHarga'];
$simpan = mysqli_query($konek, "insert into mobil1(no_polisi,merk,tahun,harga,id_admin) values ('$nopolisi','$merk','$tahun','$harga','$_SESSION[id_admin]')");
if ($simpan) {
    header("Location:index.php?x=mobil");
}
