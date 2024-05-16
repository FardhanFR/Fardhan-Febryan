<h3> Data Siswa</h3>

<form action="" method="post">
    <table>
    <tr>
        <td width="120"> Nama Siswa</td>
        <td> <input type="text" name="nama_siswa"> </td>
    </tr>
    <tr>
        <td> Kelas </td>
        <td> <input type="text" name="kelas"> </td>
    </tr>
    <tr>
        <td> Mapel </td>
        <td> <input type="text" name="mapel"> </td>
    </tr>
    <tr>
        <td></td>
        <td> <input type="submit" name="proses" value="simpan"> </td>
    </tr>
    </table>
</form>

<?php
include "Koneksi.php";


if(isset($_POST['proses'])){
    mysqli_query($Koneksi,"insert into tabel_mapel set
    Nama_Siswa = '$_POST[nama_siswa]',
    Kelas = '$_POST[kelas]',
    Mapel = '$_POST[mapel]'");

    echo "Data baru telah di tersimpan";

    include "mapel-data.php";

}
?>