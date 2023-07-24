<?php
include "../config/koneksi.php";

$query = $conn -> query("SELECT * FROM tb_petugas")

?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Data Petugas</h1>
</div>

<a href="?hal=tambahPetugas" class="btn btn-sm btn-success mb-3">
     Tambah Data <i class="fa fa-plus"></i>
</a>

<table class="table table-striped table-bordered" id="dataTable">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">Username</th>
            <th class="text-center">Nama Petugas</th>
            <th class="text-center">Level</th>
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
            <td><?php echo $data['username']?></td>
            <td><?php echo $data['nama_petugas']?></td>
            <td><?php echo $data['level']?></td>
            <td>
                <center>
                    <a href="index.php?hal=detailPetugas&amp;id=<?php echo $data['id_petugas']?>" class="btn btn-sm btn-warning" title="Detai Petugas"><i class="fa fa-eye"></i></a> |
                    <a href="prosesPetugas.php?delete=<?php echo $data['id_petugas']?>" class="btn btn-sm btn-danger" onclick=" return confirm('apakah anda yakin ingin menghapus?');" title="Hapus Data"><i class="fa fa-trash"></i></a> |
                    <a href="index.php?hal=editPetugas&amp;id=<?php echo $data['id_petugas']?>" class="btn btn-sm btn-primary" title="Edit Data"><i class="fa fa-edit"></i></a>
                </center>
            </td>
        </tr>
        <?php }?>
    </tbody>



</table>