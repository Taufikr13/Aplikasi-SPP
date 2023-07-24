<?php

require '../config/koneksi.php';

if(isset($_POST["submit"])){

$nama_kelas = $_POST["nama_kelas"];
$keahlian = htmlspecialchars($_POST["keahlian"]);


$query = "INSERT INTO tb_kelas VALUES
         ('','$nama_kelas','$keahlian')";
mysqli_query($conn,$query);

if(mysqli_affected_rows($conn) > 0){
    echo "<script>alert('Data Berhasil DIMASUKAN !!!'); document.location = 'index.php?hal=dataKelas'</script>";

}else{
    echo "<script>alert('Data Gagal !!!'); document.location = 'index.php?hal=tambahKelas'</script>";

}


}if(isset($_POST["edit"])){
    $id_kelas = $_POST['id_kelas'];
    $nama_kelas = $_POST["nama_kelas"];
    $keahlian = htmlspecialchars($_POST["keahlian"]);

    $query2 = "UPDATE tb_kelas SET nama_kelas='$nama_kelas',keahlian='$keahlian' WHERE id_kelas = '$id_kelas'";

    mysqli_query($conn,$query2);

     if($query2){
       
        echo "<script>alert('Data Berhasil DIUBAH!'); document.location = 'index.php?hal=dataKelas'</script>";	
        
      
    }else{
        echo "<script>alert('GAGAL DIMASUKAN !!!'); document.location = 'index.php?hal=editKelas'</script>";	
    }
    return mysqli_affected_rows($conn);
}if($_GET["delete"]){
    $query1 = "DELETE FROM tb_kelas WHERE id_kelas = '$_GET[delete]'";
    mysqli_query($conn,$query1); 
    if($query1){
        echo "<script>alert('Data Berhasil DIhapus!'); document.location = 'index.php?hal=dataKelas'</script>";

    }else{
        echo "<script>alert('Gagal Di hapus!'); document.location = 'index.php?hal=dataKelas'</script>";
    }
    return mysqli_affected_rows($conn);
}

?>