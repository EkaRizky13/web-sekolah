<?php
//membuat query untuk hapus data
$sql="DELETE FROM guru WHERE id_guru ='".$_GET['id']."'";
$query=mysqli_query($koneksi, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=guru&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=guru&actions=tampil');</scripr>";
}

