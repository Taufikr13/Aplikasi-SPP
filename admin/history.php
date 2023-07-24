<?php
include "../config/koneksi.php";
$id=$_GET['id'];

$query = $conn->query("SELECT * FROM tb_pembayaran, tb_siswa, tb_kelas, tb_spp, tb_petugas WHERE tb_pembayaran.id_siswa=tb_siswa.id_siswa
AND tb_siswa.id_kelas=tb_kelas.id_kelas AND tb_pembayaran.id_spp=tb_spp.id_spp AND tb_pembayaran.id_petugas=tb_petugas.id_petugas AND tb_pembayaran.id_siswa='$id' ORDER BY tgl_bayar DESC


");
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">History Pembayaran</h1>
</div>


<table class="table table-striped table-bordered" id="dataTable">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NISN</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">Tahun SPP</th>
            <th class="text-center">Nominal Bayar</th>
            <th class="text-center">Sudah Dibayar</th>
            <th class="text-center">Tanggal Bayar</th>
            <th class="text-center">Petugas</th>
            
        </tr>
    </thead>

    <tbody>
        <?php 
        include"../config/koneksi.php";
        $i=1;
        foreach($query as $data){

        
            ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['nisn']?></td>
            <td><?php echo $data['namaSiswa']?></td>
            <td><?php echo $data['nama_kelas']?> - <?php echo $data['keahlian']?></td>
            <td><?php echo $data['tahun']?></td>
            <td>
                <center>
                    Rp. <?php echo number_format($data['nominal'],0,',','.')?>
                </center>
            </td>
            <td>
                <center>
                    Rp. <?php echo number_format($data['jumlah_bayar'],0,',','.')?>
                </center>
            </td>
            <td><?php echo $data['tgl_bayar']?></td>
             <td><?php echo $data['nama_petugas']?></td>
            <td>
                <center>
                   
                  
                      <a href="kwitansi.php?id=<?php echo $data['id_pembayaran']?>" class="btn btn-sm btn-warning"><i class="fa fa-print"></i></a>


                </center>
            </td>
        </tr>
        <?php }?>
    </tbody>



</table>