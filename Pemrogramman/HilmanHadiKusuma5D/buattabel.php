<?php

$nama = "Hilman Hadi Kusuma";
$nim = "22524123";
$program_studi = "Pendikdikan Teknik Informatika";
$angkatan = 2024;
//mebuat variabel untuk menapilkan staus mahasisa
$status_mahasiswa = "Aktif";
$nama1 = "iksamul";
$nim1 = "22524123";
$program_studi1 = "Pendikdikan Teknik Informatika";
$angkatan1 = 2024;
$status_mahasiswa1 = "Aktif";
$nama2 = "rahmat";
$nim2 = "22524123";
$program_studi2 = "Pendikdikan Teknik Informatika";
$status_mahasiswa2 = "Aktif";
?>

<!--mebuatt tabel untuk menampilkan data mahasiswa -->
<table border="1" cellpadding="8">

<!--membuat baris untuk menampilkan data mahasiswa -->
    <tr style="background-color: #f2f2f2;">
        <!--membuat kolom untuk menampilkan data mahasiswa -->
        <th>no</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Program Studi</th>
        <th>Angkatan</th>
        <th>Status Mahasiswa</th>
    </tr>
    <tr style="text-align: center;">
        <td>1</td>
        <td><?php echo $nama; ?></td>
        <td><?php echo $nim; ?></td>
        <td><?php echo $program_studi; ?></td>
        <td><?php echo $angkatan; ?></td>
        <td><?php echo $status_mahasiswa; ?></td>
    </tr>
    <tr style="text-align: center;">
        <td>2</td>
        <td><?php echo $nama1; ?></td>
        <td><?php echo $nim1; ?></td>
        <td><?php echo $program_studi1; ?></td>
        <td><?php echo $angkatan1; ?></td>
        <td><?php echo $status_mahasiswa1; ?></td>
    </tr>
    <tr style="text-align: center;">
        <td>3</td>
        <td><?php echo $nama2; ?></td>
        <td><?php echo $nim2; ?></td>
        <td><?php echo $program_studi2; ?></td>
        <td><?php echo $angkatan1; ?></td>
        <td><?php echo $status_mahasiswa2; ?></td>
</table>