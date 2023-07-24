<?php

$query = $conn -> query("SELECT * FROM tb_pembayaran,tb_petugas,tb_siswa WHERE tb_pembayaran.id_petugas=tb_petugas.id_petugas AND tb_pembayaran.id_siswa=tb_siswa.id_siswa AND tb_pembayaran.id_spp=tb_siswa.id_spp
");
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">LAPORAN PEMBAYARAN</h1>
</div>

<a href="print.php" class="btn btn-sm btn-danger mb-3">
     PRINT <i class="fa fa-print"></i>
</a>
<a href="excel.php" class="btn btn-sm btn-success mb-3">
     EXCEL <i class="fa fa-excel"></i>
</a>

<table class="table table-striped table-bordered" id="dataTable">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Nama Petugas</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">Tanggal Bayar</th>
            <th class="text-center">Bulan Bayar</th>
            <th class="text-center">Tahun Bayar</th>
            <th class="text-center">ID SPP</th>
            <th class="text-center">Jumlah bayar</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        $i=1;
        foreach($query as $data){
            ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['nama_petugas']?></td>
            <td><?php echo $data['namaSiswa']?></td>
            <td><?php echo $data['tgl_bayar']?></td>
            <td><?php echo $data['bulan_bayar']?></td>
            <td><?php echo $data['tahun_bayar']?></td>
            <td><?php echo $data['id_spp']?></td>
            <td><?php echo $data['jumlah_bayar']?></td>
           
        </tr>
        <?php }?>
    </tbody>



</table>