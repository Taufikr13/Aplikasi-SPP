<?php


include "config/koneksi.php";
$nisn = $_POST["nisn"];
$nis = $_POST["nis"];

$sql = "SELECT * FROM tb_siswa WHERE nisn='$nisn' AND nis='$nis'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_siswa'] = $data['id_siswa'];
    $_SESSION['nisn'] = $data['nisn'];
    $_SESSION['nis'] = $data['nis'];
    $_SESSION['namaSiswa'] = $data['namaSiswa'];
    
        header("location: siswa/index.php");
}else{
    echo"<script>alert('maaf username atau password salah'); window.location.assign('index.php')</script>";
}

?>