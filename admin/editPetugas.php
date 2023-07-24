<?php
include "../config/koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($conn, "SELECT * FROM tb_petugas WHERE id_petugas = '$id'");


?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Edit Data Petugas
</div>
<?php foreach($query as $pts):?>
<div class="card" style="width:60%;">
   <div class="card-body">
   <form action="prosesPetugas.php" method="post">
        <div class="form-group">
            <label for="">Username</label>
            <input type="hidden" name="id_petugas" class="form-control" value="<?php echo $pts['id_petugas']?>">
            <input type="text" name="username" class="form-control" value="<?php echo $pts['username']?>">
        </div>
        <div class="form-group">
            <label for="">Password</label>
            <input type="text" name="password" class="form-control" value="<?php echo $pts['password']?>">
        </div>
        <div class="form-group">
            <label for="">Nama Petugas</label>
            <input type="text" name="nama_petugas" class="form-control" value="<?php echo $pts['nama_petugas']?>">
        </div>
        <div class="form-group">
            <label for="">Level</label>
            <select name="level" id="" class="form-control">
                <option value="<?php echo $pts['level']?>"><?php echo $pts['level']?></option>
                <option value="admin"> Admin </option>
                <option value="petugas">Petugas</option>
            </select>
        </div>
        <button class="btn btn-success" type="submit" name="edit">
            Simpan  <i class="fa fa-save"></i>
        </button>
        <a href="?hal=dataPetugas" class="btn btn-danger">Kembali</a>
    </form>
   </div>
</div>
<?php endforeach?>