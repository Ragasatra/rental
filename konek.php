<?php
$konek = mysqli_connect("us-cdbr-iron-east-05.cleardb.net", "b8898429b14cc9", "34c3402d", "heroku_fb33cb54d03c199");
if (mysqli_connect_errno()) {
    echo "Koneksi Gagal " . mysqli_connect_error();
}
