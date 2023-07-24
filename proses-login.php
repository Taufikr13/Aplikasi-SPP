<?php


include "config/koneksi.php";
$username = $_POST["username"];

$password = $_POST["password"];

$sql = "SELECT * FROM tb_petugas WHERE username='$username' AND password='$password'";
$query = mysqli_query($conn,$sql);

if(mysqli_num_rows($query)>0){
    $data = mysqli_fetch_array($query);
    session_start();
    $_SESSION['id_petugas'] = $data['id_petugas'];
    $_SESSION['nama_petugas'] = $data['nama_petugas'];
    $_SESSION['level'] = $data['level'];
    if($data['level']=='admin'){
        header("location: admin/index.php");
    }elseif($data['level']=='petugas'){
        header("location: petugas/index.php");
    }
}else{
    echo"<script>alert('maaf username atau password salah'); window.location.assign('index.php')</script>";
}

?>