<html>
    <?php 
        include("koneksi.php");
        
        $query = mysqli_query($conn, "SELECT * FROM web");

    ?>
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
    <h4>DATA MAHASISWA</h4>
</center>
<center>
    <a href="input.php">Tambahkan Data</a>
</center>
<br><br>
<form action="proses.php" method="post" autocomplete="off">
    <table border="1" cellpadding ="10px">
        <tr>
            <td>No</td>
            <td>NPM</td>
            <td>Nama</td>
            <td>Tempat Lahir</td>
            <td>Tanggal Lahir</td>
            <td>Jenis Kelamin</td>
            <td>Alamat</td>
            <td>Kode Pos</td>
            <td>Action</td>
        </tr>

        <?php $no = 1;
            while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $no++;?></td>
            <td><?php echo $data['NPM'];?></td>
            <td><?php echo $data['Nama'];?></td>
            <td><?php echo $data['Tempat_Lahir'];?></td>
            <td><?php echo $data['Tanggal_Lahir'];?></td>
            <td><?php echo $data['Jenis_Kelamin'];?></td>
            <td><?php echo $data['Alamat'];?></td>
            <td><?php echo $data['Kode_Pos'];?></td>
            <td>
                <!-- <a href="output.php?id=<?php echo $data['id'];?>">Detail</a>&nbsp;&nbsp;&nbsp; -->
                <a href="edit.php?id=<?php echo $data['id'];?>">Edit</a>&nbsp;&nbsp;&nbsp;
                <a href="hapus.php?id=<?php echo $data['id'];?>">Hapus</a> 
            </td>
        </tr>
        <?php }?>
    </table>
</form>

</html>