<?php

require '../config/koneksi.php';

if(isset($_POST["submit"])){

$username = $_POST["username"];
$password = htmlspecialchars($_POST["password"]);
$nama_petugas = htmlspecialchars($_POST["nama_petugas"]);
$level = htmlspecialchars($_POST["level"]);

$query = "INSERT INTO tb_petugas VALUES
         ('','$username','$password','$nama_petugas','$level')";
mysqli_query($conn,$query);

if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = 'index.php?hal=dataPetugas'</script>";

}else{
    echo "<script>alert('Data Gagal !!!'); document.location = 'index.php?hal=tambahPetugas'</script>";

}


}if(isset($_POST["edit"])){
    $id_petugas = $_POST['id_petugas'];
    $username = $_POST["username"];
    $password = htmlspecialchars($_POST["password"]);
    $nama_petugas = htmlspecialchars($_POST["nama_petugas"]);
    $level = htmlspecialchars($_POST["level"]);

    $query2 = "UPDATE tb_petugas SET username='$username',password='$password',nama_petugas='$nama_petugas',level='$level' WHERE id_petugas = '$id_petugas'";

    mysqli_query($conn,$query2);

     if($query2){
       
        echo "<script>alert('Data Berhasil DIUBAH!'); document.location = 'index.php?hal=dataPetugas'</script>";	
        
      
    }else{
        echo "<script>alert('GAGAL DIMASUKAN !!!'); document.location = 'index.php?hal=editPetugas'</script>";	
    }
    return mysqli_affected_rows($conn);
}if($_GET["delete"]){
    $query1 = "DELETE FROM tb_petugas WHERE id_petugas = '$_GET[delete]'";
    mysqli_query($conn,$query1); 
    if($query1){
        echo "<script>alert('Data Berhasil DIhapus!'); document.location = 'index.php?hal=dataPetugas'</script>";

    }else{
        echo "<script>alert('Gagal Di hapus!'); document.location = 'index.php?hal=dataPetugas'</script>";
    }
    return mysqli_affected_rows($conn);
}

?>