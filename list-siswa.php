<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru</title>
</head>

<body>
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    <nav>
        <a href="form-daftar.php">[+] Tambah Baru</a>
    </nav>

    <br>
<?php 
    $sql = 'Select * from calon_siswa';
    $result = mysqli_query($conn, $sql);

?>
    <table border="1">
    <thead>
        <tr>
        <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
        </tr>
    </thead>
    <tbody>

        <?php
        
        while($siswa = mysqli_fetch_assoc($result)){   ?>
         <td><?php echo $siswa ['nama']?></td>
         <td><?php echo $siswa ['alamat']?></td>
         <td><?php echo $siswa ['jenis kelamin']?></td>
         <td><?php echo $siswa ['agama']?></td>
         <td><?php echo $siswa ['sekolah asal']?></td>

    <?php  } ?>
     

    </tbody>
    </table>
    </body>
</html>