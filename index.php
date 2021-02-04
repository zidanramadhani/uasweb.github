<?php
    $koneksi = mysqli_connect("localhost", "root", "", "db_mahasiswa");

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $cekuser = mysqli_query($koneksi, "SELECT * FROM user WHERE `username`='$username' AND `password`='$password'");
    
        if (mysqli_num_rows($cekuser) < 1) {
            echo "Maaf User Tidak Di temukan";
        }else {
            $cekstatus = mysqli_fetch_assoc($cekuser);
            $status = $cekstatus['status'];
            if ($status == 'admin') {
                echo "Admin";
                header("location:admin/");
            }else {
                echo "Tidak mempunyai status";
            }
        }
    
    }
?>
<link rel="stylesheet" href="style.css">
<div class="kotak_login">
<h1>Login</h1>
<form method="POST" autocomplete="off">

        <tr>
            <td>Username</td>
            <td>:</td>
            <td><input type="text" name="username" class="form_login" placeholder="Username"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td>:</td>
            <td><input type="password" name="password" class="form_login" placeholder="Password"></td>
        </tr>
        <tr>
            <td><button type="submit" name="login" class="tombol_login">Login</button></td>
        </tr>
    </div>
</form>