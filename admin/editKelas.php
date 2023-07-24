<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_kelas WHERE id_kelas = '$id'");


?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-edit"></i> Edit Kelas
</div>

<div class="card" style="width:60%;">
<?php 
foreach($query as $data):

?>
   <div class="card-body">
   <form action="prosesKelas.php" method="post">
        <div class="form-group">
            <label for="">Nama Kelas</label>
            <input type="hidden" name="id_kelas" class="form-control" value="<?php echo $data['id_kelas'];?>">
            <input type="text" name="nama_kelas" class="form-control" value="<?php echo $data['nama_kelas'];?>">
        </div>
        <div class="form-group">
            <label for="">Kompetensi Keahlian</label>
            <input type="text" name="keahlian" class="form-control" value="<?php echo $data['keahlian'];?>">
        </div>
        <button class="btn btn-success" type="submit" name="edit">
            Simpan  <i class="fa fa-save"></i>
        </button>

        <a href="?hal=dataKelas" class="btn btn-danger">Kembali</a>
    </form>
   </div>


<?php endforeach ?>
</div>