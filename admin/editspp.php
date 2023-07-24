<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_spp WHERE id_spp = '$id'");


?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-edit"></i> Edit SPP
</div>

<div class="card" style="width:60%;">
<?php 
foreach($query as $data):

?>
   <div class="card-body">
   <form action="proses-spp.php" method="post">
        <div class="form-group">
            <label for="">Tahun</label>
            <input type="hidden" name="id_spp" class="form-control" value="<?php echo $data['id_spp'];?>">
            <input type="text" name="tahun" class="form-control" value="<?php echo $data['tahun'];?>">
        </div>
        <div class="form-group">
            <label for="">Nominal</label>
            <input type="text" name="nominal" class="form-control" value="<?php echo $data['nominal'];?>">
        </div>
        <button class="btn btn-success" type="submit" name="edit">
            Simpan  <i class="fa fa-save"></i>
        </button>

        <a href="?hal=dataSpp" class="btn btn-danger">Kembali</a>
    </form>
   </div>


<?php endforeach ?>
</div>