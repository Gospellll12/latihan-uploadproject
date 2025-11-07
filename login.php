<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM users WHERE username = '$username'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];
        header("Location: afterlogin.php");
        
    } else {
        echo "<script>alert('Login gagal! Periksa username dan password Anda.');</script>";
    }
}
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
        <br><h2>Login</h2></br>
    <form method="post">
        <td>
        <label for="username">Masukkan Username</label>
        </td>

        <td>:</td>

        <td>
        <input type="text" name="username" placeholder="Username" required><br><br>
        </td>

        <td>
        <label for="password">Masukkan Password</label>
        </td>
        
        <td> :</td>

        <td>
        <input type="password" name="password" placeholder="Password" required><br><br><br>
        </td>

        <td>
        <button type="submit" name="login" >Login</button>
        </td>

    </form>
    <p>
        "Register Akun"
        <a href="register.php">Klik Disini</a>
    </p>
    </div>
</body>
</html>
