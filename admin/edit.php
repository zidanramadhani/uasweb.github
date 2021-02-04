<?php 


include("koneksi.php");

$id = $_GET['id'];

$query_tampil = "SELECT * FROM web WHERE id = '$id'";
$connect_tampil = mysqli_query($conn, $query_tampil);
$data = mysqli_fetch_assoc($connect_tampil);


if (isset($_POST['Simpan'])) {
    $NPM=$_POST ['NPM'];
    $Nama=$_POST ['Nama'];
    $Tempat_Lahir=$_POST ['Tempat_Lahir'];
    $Tanggal_Lahir=$_POST ['Tanggal_Lahir'];
    $Jenis_Kelamin=$_POST ['Jenis_Kelamin'];
    $Alamat=$_POST ['Alamat'];
    $Kode_Pos=$_POST ['Kode_Pos'];
    

    $query_edit = "UPDATE web SET `NPM`='$NPM',`Nama`='$Nama',`Tempat_Lahir`='$Tempat_Lahir',`Tanggal_Lahir`='$Tanggal_Lahir',`Jenis_kelamin`='$Jenis_Kelamin',`Alamat`='$Alamat',`Kode_Pos`='$Kode_Pos' WHERE `id`='$id'";
    $sql = mysqli_query($conn, $query_edit);
    header("location:index.php");

}

?>
<html>

<head>
    <title>Belajar CRUD</title>

<body bgcolor=#B0E0E6>
    <div align="center">
        <p><b>
                <font face=couriernew color=teal>
</body>
<br><br>
<center>
    <h1>UNISKA</h1>
</center>
<center>
    <h4>EDIT DATA MAHASISWA</h4>
</center>
<br><br>
<form method="post" autocomplete="off">
    <table border="0" align="center">
        <tr>
            <td>NPM</td>
            <td> : </td>
            <td> <input type="text" name="NPM" size="8" value="<?php echo $data['NPM']?>" /> </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>
                <p>
                <input type="text" name="Nama" size="40" value="<?php echo $data['Nama']?>" /> 
            </td>
        <tr>
            <td>Tempat Lahir</td>
            <td> : </td>
            <td><input type="text" name="Tempat_Lahir" size= 30 value="<?php echo $data['Tempat_Lahir']?>" />
            </td>
        </tr>
        <tr>
            <td colspan="3" align="right">
        <tr>
            <td>Tanggal Lahir</td>
            <td> : </td>
            <td><input type="date" name="Tanggal_Lahir" size="40" value="<?php echo $data['Tanggal_Lahir']?>" /> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td>
            <select name="Jenis_Kelamin" id="">
                    <option value="<?=$data['Jenis_Kelamin']?>"><?=$data['Jenis_Kelamin']?></option>
                    <option value="L">L</option>
                    <option value="P">P</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><textarea name="Alamat" cols="25" rows="5"><?=$data['Alamat']?></textarea>
            </td>
        </tr>
        <tr>
            <td>Kode Pos</td>
            <td> : </td>
            <td>
                <input type="text" value="<?=$data['Kode_Pos']?>" name="Kode_Pos" size="15">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <br>
                <br>
                <input type="submit" value="Simpan" name="Simpan" />
                <input type="reset" value="Batal" onclick="window.history.back();">
            </td>
        </tr>
    </table>
</form>

</html>