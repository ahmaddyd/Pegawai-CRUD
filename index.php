<?php
include_once("config.php");

$result = mysqli_query($mysqli, "SELECT * FROM tpegawai");
?>

<html>

<head>
    <title>Table Pegawai</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <table width='80%' border=1>

        <tr>
            <th>NPP</th>
            <th>NAMA PEGAWAI</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
            <th>JABATAN</th>
            <th>Action</th>
        </tr>
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['npp'] . "</td>";
            echo "<td>" . $user_data['nama_pegawai'] . "</td>";
            echo "<td>" . $user_data['jenis_kelamin'] . "</td>";
            echo "<td>" . $user_data['alamat'] . "</td>";
            echo "<td>" . $user_data['jabatan'] . "</td>";
            echo "<td><a href='update.php?npp=$user_data[npp]'>Edit</a> | <a href='delete.php?npp=$user_data[npp]' onClick=\"return confirm('Kamu yakin mau menghapus data pegawai ini?')\">Delete</a></td>";
        }
        ?>
    </table>

    <a href="create.php">Tambahkan Pegawai baru</a><br /><br />
</body>

</html>