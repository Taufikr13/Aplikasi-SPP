<?php

require '../config/koneksi.php';

if(isset($_POST["submit"])){

$tahun = $_POST["tahun"];
$nominal = $_POST["nominal"];


$query = "INSERT INTO tb_spp VALUES
         ('','$tahun','$nominal')";
mysqli_query($conn,$query);

if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = 'index.php?hal=dataSpp'</script>";

}else{
    echo "<script>alert('Data Gagal !!!'); document.location = 'index.php?hal=tambahSpp'</script>";

}


}if(isset($_POST["edit"])){
    $id_spp = $_POST['id_spp'];
    $tahun = htmlspecialchars($_POST["tahun"]);
    $nominal = htmlspecialchars($_POST["nominal"]);

    $query2 = "UPDATE tb_spp SET tahun='$tahun',nominal='$nominal' WHERE id_spp = '$id_spp'";

    mysqli_query($conn,$query2);

     if($query2){
       
        echo "<script>alert('Data Berhasil DIUBAH!'); document.location = 'index.php?hal=dataSpp'</script>";	
        
      
    }else{
        echo "<script>alert('GAGAL DIMASUKAN !!!'); document.location = 'index.php?hal=editspp'</script>";	
    }
    return mysqli_affected_rows($conn);
}if($_GET["delete"]){
    $query1 = "DELETE FROM tb_spp WHERE id_spp = '$_GET[delete]'";
    mysqli_query($conn,$query1); 
    if($query1){
        echo "<script>alert('Data Berhasil DIhapus!'); document.location = 'index.php?hal=dataSpp'</script>";

    }else{
        echo "<script>alert('Gagal Di hapus!'); document.location = 'index.php?hal=dataSpp'</script>";
    }
    return mysqli_affected_rows($conn);
}