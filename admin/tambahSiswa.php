<?php
include "../config/koneksi.php";
$kelas = $conn->query("SELECT * FROM tb_kelas");
$spp = $conn->query("SELECT * FROM tb_spp");
?>


<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Tambah Data Siswa</h1>
</div>

<div class="card" style="width:60%;">
    <div class="card-body">
    <form action="prosesSiswa.php" method="post">
        <div class="form-group">
            <label for="">NISN</label>
            <input type="number" name="nisn" class="form-control">
        </div>
        <div class="form-group">
            <label for="">NIS</label>
            <input type="number" name="nis" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nama Siswa</label>
            <input type="text" name="namaSiswa" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Kelas</label>
            <select name="id_kelas" id="" class="form-control">
                <option value=""> -- Pilih Kelas -- </option>
                <?php foreach($kelas as $kls){ ?>
                <option value="<?php echo $kls['id_kelas']?>"><?php echo$kls['nama_kelas']?> / <?php echo$kls['keahlian']?></option>

                <?php }?>    
            </select>
        </div>
        <div class="form-group">
            <label for="">Alamat</label>
            <textarea name="alamat" id="" class="form-control">

            </textarea>
        </div>
        <div class="form-group">
            <label for="">NO. Hp</label>
            <input type="text" name="noTlpn" class="form-control">
        </div>
        <div class="form-group">
            <label for="">SPP</label>
            <select name="id_spp" id="" class="form-control">
                <option value=""> -- Pilih SPP -- </option>
                <?php foreach($spp as $sp){ ?>
                <option value="<?php echo $sp['id_spp']?>"><?php echo$sp['tahun']?> / Rp. <?php echo number_format($sp['nominal'],0,',','.')?></option>

                <?php }?>    
            </select>
        </div>
        <button class="btn btn-success" type="submit" name="submit">
            Simpan  <i class="fa fa-save"></i>
        </button>

        <a href="?hal=dataKelas" class="btn btn-danger">Kembali</a>
    </form>
    </div>
</div>