<?php
include("konek.php");
$id = $_GET['id'];
$hapus = mysqli_query($konek, "delete from sewa1 where id_sewa='$id'") or die(mysqli_error());
if ($hapus) {
    header("Location:index.php?x=order");
}
