<html>

<head>
    <title>Create Pegawai</title>
    <link rel="stylesheet" href="css/create.css">
</head>

<body>
    <a href="index.php">Kembali</a>
    <br /><br />

    <form action="create.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr>
                <td>NPP</td>
                <td><input type="text" name="npp"></td>
            </tr>
            <tr>
                <td>NAMA PEGAWAI</td>
                <td><input type="text" name="nama_pegawai"></td>
            </tr>
            <tr>
                <td>JENIS KELAMIN</td>
                <td><input type="text" name="jenis_kelamin"></td>
            </tr>
            <tr>
                <td>ALAMAT</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>JABATAN</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="Submit" value="Tambahkan"></td>
            </tr>
        </table>
    </form>

    <?php
    if (isset($_POST['Submit'])) {
        $npp = $_POST['npp'];
        $nama_pegawai = $_POST['nama_pegawai'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $alamat = $_POST['alamat'];
        $jabatan = $_POST['jabatan'];

        include_once("config.php");

        if (empty($npp) || empty($nama_pegawai) || empty($jenis_kelamin) || empty($alamat) || empty($jabatan)) {
            echo "Data tidak boleh kosong";
        } else {
            $result = mysqli_query($mysqli, "INSERT INTO tpegawai(npp, nama_pegawai, jenis_kelamin, alamat, jabatan) VALUES('$npp', '$nama_pegawai', '$jenis_kelamin', '$alamat', '$jabatan')");

            echo "Pegawai baru berhasil di tambahkan <a href='index.php'>Lihat Data Pegawai</a>";
        }
    }
    ?>
</body>

</html>