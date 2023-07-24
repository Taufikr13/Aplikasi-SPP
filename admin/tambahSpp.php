<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Tambah Data SPP</h1>
</div>

<div class="card" style="width:60%;">
    <div class="card-body">
    <form action="proses-spp.php" method="post">
        <div class="form-group">
            <label for="">Tahun</label>
            <input type="text" name="tahun" class="form-control">
        </div>
        <div class="form-group">
            <label for="">Nominal</label>
            <input type="text" name="nominal" class="form-control">
        </div>
        <button class="btn btn-success" type="submit" name="submit">
            Simpan  <i class="fa fa-save"></i>
        </button>

        <a href="?hal=dataSpp" class="btn btn-danger">Kembali</a>
    </form>
    </div>
</div>