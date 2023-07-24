<?php 
include "../config/koneksi.php";

$query = $conn->query("SELECT * FROM tb_spp");


?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Data SPP</h1>
</div>

<a href="?hal=tambahSpp" class="btn btn-sm btn-success mb-3">
     Tambah Data <i class="fa fa-plus"></i>
</a>

<table class="table table-striped table-bordered" id="dataTable">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Tahun</th>
            <th class="text-center">Nominal</th>
            <th class="text-center">Action</th>
        </tr>
    </thead>

    <tbody>
        <?php
        $i=1;
        foreach($query as $data){
        ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['tahun']?></td>
            <td>Rp. <?php echo number_format($data['nominal'],0,',','.')?></td>
            <td>
                <center>
                    <a href="proses-spp.php?delete=<?php echo $data['id_spp']?>" class="btn btn-sm btn-danger" onclick=" return confirm('apakah anda yakin ingin menghapus?');"><i class="fa fa-trash"></i></a> |
                    <a href="index.php?hal=editspp&amp;id=<?php echo $data['id_spp']?>" class="btn btn-sm btn-primary" ><i class="fa fa-edit"></i></a>
                </center>
            </td>
        </tr>
        <?php }?>
    </tbody>



</table>