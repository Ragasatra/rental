<!doctype html>
<html lang="en">

<head>
 <!-- Required meta tags -->
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>REGISTER</title>
</head>

<body>
    <div class="card">
        <h5 class="card-header">FORM REGISTER</h5>
        <div class="card-body">
            <form method="post" action="sadmin.php">
                <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="txtNama">
                </div>
                <div class="form-group">
                    <label>Jenis Kelamin</label>
                    <select name="kelamin" class="form-control">
                        <option value="Laki-Laki">Laki-Laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" class="form-control" name="txtUsername">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="txtPassword">
                </div>
                <div class="form-group">
                    <label>Level</label>
                    <select name="level" class="form-control">
                        <option value="FREE">FREE</option>
                        <option value="REGULAR">REGULAR</option>
                        <option value="PREMIUM">PREMIUM</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>
            </form>
    
</body>

</html>