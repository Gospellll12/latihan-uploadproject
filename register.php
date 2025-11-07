<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    
    $nama_lengkap = $_POST['nama_lengkap'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);

    $query = "INSERT INTO users (username, password, nama_lengkap) VALUES ('$username', '$password','$nama_lengkap')";
    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Registrasi berhasil! Silakan login.'); window.location='login.php';</script>";
    } else {
        echo "<script>alert('Registrasi gagal! Silakan coba lagi.');</script>";
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style3.css">

</head>
<body>
    <style>
    body {
        background-color:aquamarine; /* background color */
    }
</style>

    <div class="container" style="background-color:aliceblue;">
        <br><h2>Form Pendaftaran</h2></br>
        <form method="post">
            <tr><td><label for="nama_lengkap">Masukkan Nama</label></td></tr>
            <td>:</td>
            <input type="text" name="nama_lengkap" placeholder="Nama Lengkap" required><br>

            <label for="username">Masukkan Username</label>
            <td>:</td>
            <input type="text" name="username" placeholder="Username" required><br>

            <label for="password">Masukkan Password</label>
            <td>:</td>
            <input type="password" name="password" placeholder="Password" required><br><br>
            
            <button type="submit" name="register" >Register</button>

        </form>
        <p>
            "Login page"
            <a href="login.php">Klik Disini</a>
        </p>
    </div>
</body>
</html>