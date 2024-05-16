<h3> Data Mapel </h3>

<table border="1">
    <tr>
        <th>No</th>
        <th>Nama Siswa</th>
        <th>Kelas</th>
        <th>Mata Pelajaran</th>
    </tr>

    <?php
    include "Koneksi.php";

    $no=1;
    $ambildatal = mysqli_query($Koneksi,"select * from tabel_mapel ");
    /* While untuk mengulang*/
    while($tampil = mysqli_fetch_array($ambildatal)){
        echo"
        <tr>
            <td>$no</td>
            <td>$tampil[Nama_Siswa]</td>
            <td>$tampil[Kelas]</td>
            <td>$tampil[Mapel]</td>
        </tr>";
        $no++;
    }
    ?>
</table>