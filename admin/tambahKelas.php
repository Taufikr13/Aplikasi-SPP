<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Tambah Data Kelas</h1>
</div>

<div class="card" style="width:60%;">
    <div class="card-body">
    <form action="prosesKelas.php" method="post">
        <div class="form-group">
            <label for="">Nama Kelas</label>
            <input type="text" name="nama_kelas" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Kompetensi Keahlian</label>
            <input type="text" name="keahlian" class="form-control">
        </div>
        <button class="btn btn-success" type="submit" name="submit">
            Simpan  <i class="fa fa-save"></i>
        </button>

        <a href="?hal=dataKelas" class="btn btn-danger">Kembali</a>
    </form>
    </div>
</div>