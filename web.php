<!DOCTYPE html>
<html>
<head>
    <title>HASIL NILAI SISWA</title>
</head>
<body bgcolor="#926E68">
    
<center>
<h2>form hasil penilaian</h2>

<?php //mulai jalan perintah
 $nama   = $_POST['nama']; //$_POST = kotak pengambil data
 $NISN   = $_POST['NISN']; //['nama'] = nama data yang dikirim dari form
 
 $mtkk   = $_POST['mtkk'];
 $indo   = $_POST['indo'];
 $ipas   = $_POST['ipas'];
 $inggris   = $_POST['inggris'];
 $daskom   = $_POST['daskom'];



 $rata = ($mtkk + $indo + $ipas + $inggris + $daskom) / 5;

//tentukan kelulusan
 if ($rata >= 75) {
    $status = "<font color='green'><b>LULUS</b></font>";
     } else {
        $status = "<font color='red'><b>TIDAK LULUS</b></font>";
     }
 ?>
  
   
<table border="1" cellpadding="8" cellspacing="0" align="center" width="60%">
    <tr bgcolor="#A75E2F">
        <th colspan="2">Data Siswa</th>
    </tr>
    <tr bgcolor="#E3BB9D">
        <td>Nama Siswa</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr bgcolor="#E3BB9D">
        <td>NISN</td>
        <td><?php echo $NISN; ?></td>
    </tr>

    <tr bgcolor="#E8D9CE">
        <th colspan="2">Nilai Mata Pelajaran</th>
        </tr>

    <tr bgcolor="#E3BB9D">
        <td>Bahasa Indonesia</td>
        <td><?php echo $indo; ?></td>
    </tr>

    <tr bgcolor="#E3BB9D">
        <td>Bahasa Inggris</td>
        <td><?php echo $inggris; ?></td>
    </tr>

   <tr bgcolor="#E3BB9D">
        <td>Matematika</td>
        <td><?php echo $mtkk; ?></td>
    </tr>

    <tr bgcolor="#E3BB9D">
        <td>IPAS</td>
        <td><?php echo $ipas; ?></td>
    </tr>

    <tr bgcolor="#E3BB9D">
        <td>Dasar Komputer</td>
        <td><?php echo $daskom; ?></td>
    </tr>

    <tr bgcolor="#fffdd0">
        <td><b>Rata-rata</b></td>
        <td><b><?php echo $rata; ?></b></td>
    </tr>

    <tr bgcolor="#fff8e7">
        <td><b>Status</b></td>
        <td>
            <b style="color:<?php echo $warnaStatus; ?>">
                <?php echo $status; ?>
            </b>
        </td>
    </tr>
</table>

<br>

<center>
   <br><br>
   <a href="index.html">Kembali Ke Form</a>

</body>
</html>
