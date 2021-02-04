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
    <h4>INPUT DATA MAHASISWA</h4>
</center>
<br><br>
<form action="proses.php" method="post" autocomplete="off">
    <table border="0" align="center">
        <tr>
            <td>NPM</td>
            <td> : </td>
            <td> <input type="text" name="NPM" size="15" maxlength="8" /> </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td> : </td>
            <td>
                <p>
                    <input type="text" name="Nama" size="40" />
            </td>
        <tr>
            <td>Tempat Lahir</td>
            <td> : </td>
            <td><input type="text" name="Tempat_Lahir" size= 40 >
            <td>
        </tr>
        <tr>
            <td colspan="3" align="right">
        <tr>
            <td>Tanggal Lahir</td>
            <td> : </td>
            <td><input type="date" name="Tanggal_Lahir" size="40" /> </td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td> : </td>
            <td>
                <input type="radio" name="Jenis_Kelamin" value="L">
                Laki-Laki<br>
                <input type="radio" name="Jenis_Kelamin" value="P">
                Perempuan<br>
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td> : </td>
            <td><textarea name="Alamat" cols="25" rows="5"></textarea>
            </td>
        </tr>
        <tr>
        <td colspan="3" align="right">
        <tr>
            <td>Kode Pos</td>
            <td> : </td>
                <td>
                <input type="text" name="Kode_Pos" size="15" maxlength="5">
            </td>
        </tr>
        <tr>
            <td colspan="3" align="center">
                <br>
                <br>
                <input type="submit" value="Simpan" />
                <input type="reset" value="Batal" onclick="window.history.back();">
            </td>
    </table>
</form>

</html>