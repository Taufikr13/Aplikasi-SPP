<?php
include "../config/koneksi.php";

$query = $conn->query("SELECT * FROM tb_siswa,tb_kelas,tb_spp WHERE tb_siswa.id_kelas=tb_kelas.id_kelas
AND tb_siswa.id_spp=tb_spp.id_spp ORDER BY namaSiswa ASC


");
?>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
 <h1 class="h3 mb-0 text-gray-800">Data Pembayaran</h1>
</div>


<table class="table table-striped table-bordered" id="dataTable">
    <thead>
        <tr>
            <th class="text-center">No</th>
            <th class="text-center">NISN</th>
            <th class="text-center">Nama Siswa</th>
            <th class="text-center">Kelas</th>
            <th class="text-center">SPP</th>
            <th class="text-center">Nominal</th>
            <th class="text-center">Sudah Dibayar</th>
            <th class="text-center">Kekurangan</th>
            <th class="text-center">Status</th>
        </tr>
    </thead>

    <tbody>
        <?php 
        include"../config/koneksi.php";
        $i=1;
        foreach($query as $data){

        $dataBayar = $conn->query("SELECT SUM(jumlah_bayar) as jumlah_bayar FROM tb_pembayaran WHERE id_siswa ='$data[id_siswa]'");
        $bayar = mysqli_fetch_array($dataBayar);
        $sudahBayar = $bayar['jumlah_bayar'];
        $kekurangan = $data['nominal'] - $bayar['jumlah_bayar'];
            ?>
        <tr>
            <td><?php echo $i++; ?></td>
            <td><?php echo $data['nisn']?></td>
            <td><a href="?hal=history&id=<?php echo$data['id_siswa']?>" title="Lihat History"><?php echo $data['namaSiswa']?></a></td>
            <td><?php echo $data['nama_kelas']?> - <?php echo $data['keahlian']?></td>
            <td><?php echo $data['tahun']?></td>
            <td>
                <center>
                    Rp. <?php echo number_format($data['nominal'],0,',','.')?>
                </center>
            </td>
            <td>
                <center>
                    Rp. <?php echo number_format($sudahBayar,0,',','.')?>
                </center>
            </td>
            <td>
                <center>
                    Rp. <?php echo number_format($kekurangan,0,',','.')?>
                </center>
            </td>
            <td>
                <?php
                // if($kekurangan==0){
                //     echo"<span class='badge text-bg-success'>Sudah Lunas</span>";
                // }else{

                    if($kekurangan==0){
                ?>
                   <center><span class="btn btn-sm btn-success" style="cursor: default;">Lunas</span></center>
                <?php }else{?>
                    <center><a href="?hal=tambahPembayaran&id=<?php echo$data['id_siswa']?>&kekurangan=<?php echo $kekurangan?>" class="btn btn-danger">Bayar</a></center>
                <?php }?>    
                
            </td>
            
        </tr>
        <?php }?>
    </tbody>



</table>