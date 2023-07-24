<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_petugas WHERE id_petugas = '$id'");


?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Detail Petugas
</div>

<div class="card" style="width:60%;">
<?php 
foreach($query as $data):

?>
   <div class="card-body">
   <form action="prosesKelas.php" method="post">
        <div class="form-group">
            <label for="">Nama Petugas</label>
            <input type="text" name="nama_kelas" class="form-control" value="<?php echo $data['nama_petugas'];?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Username</label>
            <input type="text" name="keahlian" class="form-control" value="<?php echo $data['username'];?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="keahlian" class="form-control" value="<?php echo $data['password'];?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Level</label>
            <input type="text" name="keahlian" class="form-control" value="<?php echo $data['level'];?>" disabled>
        </div>
        <a href="?hal=dataPetugas" class="btn btn-danger">Kembali</a>
    </form>
   </div>


<?php endforeach ?>
</div>