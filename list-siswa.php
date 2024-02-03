<?php include_once ("config.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PPDB by WebPro</title>
    <link rel="stylesheet" href="css/menu.css">
    <link rel="shortcut icon" href="webpro.jpg" type="image/x-icon">
</head>
<body>
    <header>
        <h1>Webpro X</h1>
        <h3>Penerimaan Peserta Didik Baru</h3>
    </header>
    <nav>
        <ul>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Pendaftar</a></li>
        </ul>
    </nav>

    <h4>List siswa yang mendaftar</h4>
    <table border="1">
    <thead>
        <tr bgcolor="red">
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);
        $no=1;

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td align='center'>".$no."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<a href='form-edit.php?id=".$siswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$siswa['id']."' onclick='return confirm(\"yakin dek\")'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
            $no++;
        }
        ?>

    </tbody>
    </table>
    
    <p>Total: <?php echo mysqli_num_rows($query) ?></p>
    <h5><a href="form-daftar.php">Daftar Baru</a></h5>

    </body>
</html>
Pertama kita membutuhkan koneksi ke database, maka kita harus mengimpor file config.php agar variabel $db dapat dibaca.

<?php include("config.php"); ?>
