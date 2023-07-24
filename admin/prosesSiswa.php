<?php

require '../config/koneksi.php';

if(isset($_POST["submit"])){

$nisn = $_POST["nisn"];
$nis = htmlspecialchars($_POST["nis"]);
$namaSiswa = htmlspecialchars($_POST["namaSiswa"]);
$id_kelas = htmlspecialchars($_POST["id_kelas"]);
$alamat = htmlspecialchars($_POST["alamat"]);
$noTlpn = htmlspecialchars($_POST["noTlpn"]);
$id_spp = htmlspecialchars($_POST["id_spp"]);

$query = "INSERT INTO tb_siswa VALUES
         ('','$nisn','$nis','$namaSiswa','$id_kelas','$alamat','$noTlpn','$id_spp')";
mysqli_query($conn,$query);

if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = 'index.php?hal=dataSiswa'</script>";

}else{
    echo "<script>alert('Data Gagal !!!'); document.location = 'index.php?hal=tambahSiswa'</script>";

}


}if(isset($_POST["edit"])){
    $id_siswa = $_POST['id_siswa'];
    $nisn = $_POST["nisn"];
    $nis = htmlspecialchars($_POST["nis"]);
    $namaSiswa = htmlspecialchars($_POST["namaSiswa"]);
    $id_kelas = htmlspecialchars($_POST["id_kelas"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $noTlpn = htmlspecialchars($_POST["noTlpn"]);
    $id_spp = htmlspecialchars($_POST["id_spp"]);

    $query2 = "UPDATE tb_siswa SET nisn='$nisn',nis='$nis',namaSiswa='$namaSiswa',id_kelas='$id_kelas',alamat='$alamat',noTlpn='$noTlpn',id_spp='$id_spp' WHERE id_siswa = '$id_siswa'";

    mysqli_query($conn,$query2);

     if($query2){
       
        echo "<script>alert('Data Berhasil DIUBAH!'); document.location = 'index.php?hal=dataSiswa'</script>";	
        
      
    }else{
        echo "<script>alert('GAGAL DIMASUKAN !!!'); document.location = 'index.php?hal=editSiswa'</script>";	
    }
    return mysqli_affected_rows($conn);
}if($_GET["delete"]){
    $query1 = "DELETE FROM tb_siswa WHERE id_siswa = '$_GET[delete]'";
    mysqli_query($conn,$query1); 
    if($query1){
        echo "<script>alert('Data Berhasil DIhapus!'); document.location = 'index.php?hal=dataSiswa'</script>";

    }else{
        echo "<script>alert('Gagal Di hapus!'); document.location = 'index.php?hal=dataSiswa'</script>";
    }
    return mysqli_affected_rows($conn);
}

?>