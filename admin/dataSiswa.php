<?php
include "../config/koneksi.php";

$query = $conn->query("SELECT * FROM tb_siswa,tb_kelas,tb_spp WHERE tb_siswa.id_kelas=tb_kelas.id_kelas
AND tb_siswa.id_spp=tb_spp.id_spp ORDER BY namaSiswa ASC

");
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Data Siswa</h1>
</div>

<a href="?hal=tambahSiswa" class="btn btn-sm btn-success mb-3">
     Tambah Data <i class="fa fa-plus"></i>
</a>

<table class="table table-striped table-bordered" id="dataTable">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NISN</th>
            <th class="text-center">NIS</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">Alamat</th>
            <th class="text-center">No Hp</th>
            <th class="text-center">SPP</th>
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
            <td><?php echo $data['nisn']?></td>
            <td><?php echo $data['nis']?></td>
            <td><?php echo $data['namaSiswa']?></td>
            <td><?php echo $data['nama_kelas']?> - <?php echo $data['keahlian']?></td>
            <td><?php echo $data['alamat']?></td>
            <td><?php echo $data['noTlpn']?></td>
            <td>
                <center>
                    <?php echo $data['tahun']?> -

                    Rp. <?php echo number_format($data['nominal'],0,',','.')?>
                </center>
            </td>
            <td>
                <center>
                    <a href="prosesSiswa.php?delete=<?php echo $data['id_siswa']?>" class="btn btn-sm btn-danger" onclick=" return confirm('apakah anda yakin ingin menghapus?');" title="Hapus data"><i class="fa fa-trash"></i></a> |
                    <a href="index.php?hal=editSiswa&amp;id=<?php echo $data['id_siswa']?>" class="btn btn-sm btn-primary" title="Edit Data"><i class="fa fa-edit"></i></a>
                </center>
            </td>
        </tr>
        <?php }?>
    </tbody>



</table>