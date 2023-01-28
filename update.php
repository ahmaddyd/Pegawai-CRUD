<?php
include_once("config.php");

if (isset($_POST['update'])) {
    $npp = $_POST['npp'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $jabatan = $_POST['jabatan'];

    $result = mysqli_query($mysqli, "UPDATE tpegawai SET  nama_pegawai='$nama_pegawai', jenis_kelamin='$jenis_kelamin', alamat='$alamat', jabatan='$jabatan' WHERE npp='$npp'");

    header("Location: index.php");
}
?>
<?php

$npp = $_GET['npp'];

$result = mysqli_query($mysqli, "SELECT * FROM tpegawai WHERE npp=$npp");

while ($user_data = mysqli_fetch_array($result)) {
    $npp = $user_data['npp'];
    $nama_pegawai = $user_data['nama_pegawai'];
    $jenis_kelamin = $user_data['jenis_kelamin'];
    $alamat = $user_data['alamat'];
    $jabatan = $user_data['jabatan'];
}
?>
<html>

<head>
    <title>Update Pegawai</title>
    <link rel="stylesheet" href="css/update.css">
</head>

<body>
    <a href="index.php">Kembali</a>
    <br /><br />

    <form name="update_pegawai" method="post" action="update.php">
        <table border="0">
            <tr>
                <td>Npp</td>
                <td><input type="text" name="npp" value=<?php echo $npp; ?>></td>
            </tr>
            <tr>
                <td>Nama Pegawai</td>
                <td><input type="text" name="nama_pegawai" value=<?php echo $nama_pegawai; ?>></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="text" name="jenis_kelamin" value=<?php echo $jenis_kelamin; ?>></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat; ?>></td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td><input type="text" name="jabatan" value=<?php echo $jabatan; ?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="npp" value=<?php echo $_GET['npp']; ?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>

</html>