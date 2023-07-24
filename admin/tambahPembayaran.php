<?php
include "../config/koneksi.php";

$id = $_GET['id'];
$kekurangan = $_GET['kekurangan'];

$query = mysqli_query($conn, "SELECT * FROM tb_siswa,tb_kelas,tb_spp WHERE tb_siswa.id_kelas=tb_kelas.id_kelas
AND tb_siswa.id_spp=tb_spp.id_spp AND id_siswa='$id'");


?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800"><i class="fa fa-edit"></i> Tambah Pembayaran
</div>

<div class="card" style="width:60%;">
<?php 
foreach($query as $data):

?>
   <div class="card-body">
   <form action="proseesBayar.php" method="post">
        <div class="form-group">
            <label for="">Nama Petugas</label>  
            <input type="hidden" name="id_petugas" class="form-control" value="<?php echo $_SESSION['id_petugas'];?>">
            <input type="hidden" name="id_spp" class="form-control" value="<?php echo $data['id_spp'];?>">

            <input type="text" class="form-control" value="<?php echo $_SESSION['nama_petugas'];?>" disabled>
        </div>
        <div class="form-group">
            <label for="">NISN</label>
            <input type="hidden" name="id_siswa" class="form-control" value="<?php echo $data['id_siswa'];?>">
            <input type="text" class="form-control" value="<?php echo $data['nisn'];?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Nama Siswa</label>  
            <input type="text" class="form-control" value="<?php echo $data['namaSiswa'];?>" disabled>
        </div>
        <div class="form-group">
            <label for="">Tanggal Bayar</label>  
            <input type="date" class="form-control" name="tgl_bayar">
        </div>
        <div class="form-group">
            <label for="">Bulan Bayar</label>  
            <select name="bulan_bayar" id="" class="form-control">
                <option value=""> -- Pilih Bulan -- </option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">september</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
            </select>
        </div>
        <div class="form-group">
            <label for="">Tahun Bayar</label> 
            <select name="tahun_bayar" id="" class="form-control">
                <option value=""> -- Pilih Tahun -- </option>
            <?php 
            
            for($i=2010; $i<=date('Y'); $i++){

                 echo"<option value='$i'> $i </option>";
            }
            ?>
            </select> 
        </div>
        <div class="form-group">
            <label for="">Jumlah Bayar (Jumlah Yang Harus Dibayar adalah <b>Rp.<?php echo number_format($kekurangan,0,',','.')?>)</b></label>
            <input type="number" name="jumlah_bayar" class="form-control" max="<?php echo $kekurangan?>">
        </div>
        <button class="btn btn-success" type="submit" name="submit">
            Simpan  <i class="fa fa-save"></i>
        </button>

        <a href="?hal=dataKelas" class="btn btn-danger">Kembali</a>
    </form>
   </div>


<?php endforeach ?>
</div>