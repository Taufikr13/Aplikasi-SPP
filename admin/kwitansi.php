<?php
include "../config/koneksi.php";

$id=$_GET['id'];
$query = $conn->query("SELECT * FROM tb_pembayaran, tb_siswa, tb_kelas, tb_spp, tb_petugas WHERE tb_pembayaran.id_siswa=tb_siswa.id_siswa AND tb_siswa.id_kelas=tb_kelas.id_kelas AND tb_pembayaran.id_spp=tb_spp.id_spp AND tb_pembayaran.id_petugas=tb_petugas.id_petugas AND id_pembayaran='$id'");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PRINT</title>
</head>
<body>
	<h2>Laporan Pembayaran</h2>
	<table width="500" border="0" cellpadding="4" cellspacing="0">
		<?php 

        $i=1;
        foreach($query as $data){

        
            ?>
		<tr>
			<td rowspan="9" width="100" style="border-right: 1px solid #000;">
				<img src="../img/logoyhy.png" alt="" width="100" height="100"></td>

			<td>No </td>
			<td><label> : <?php echo $i++; ?></label></td>
		</tr>
		<tr>
			<td>NISN</td>
			<td><label> : <?php echo $data['nisn']?></label></td>
		</tr>
		<tr>
			<td>Nama Siswa</td>
			<td><label> : <?php echo $data['namaSiswa']?></label></td>
		</tr>
		<tr>
			<td>Kelas</td>
			<td><label> : <?php echo $data['nama_kelas']?></label></td>
		</tr>
		<tr>
			<td>Tahun SPP</td>
			<td><label> : <?php echo $data['tahun']?></label></td>
		</tr>
		<tr>
			<td>Nominal Bayar</td>
			<td><label>
					
                    : Rp. <?php echo number_format($data['nominal'],0,',','.')?>
                
            	</label>
            </td>
		</tr>
		<tr>
			<td>Sudah Dibayar</td>
			<td><label>
				
                    : Rp. <?php echo number_format($data['jumlah_bayar'],0,',','.')?>
                
                </label>
            </td>
		</tr>
		<tr>
			<td>Tanggal bayar</td>
			<td><label> : <?php echo $data['tgl_bayar']?></label></td>
		</tr>
		<tr>
			<td>Petugas</td>
			<td><label>: <?php echo $data['nama_petugas']?></label></td>
		</tr>

		<?php }?>
	</table>
	<style>
		table{
			border: 1px solid #000;
		}
		h2{
			margin-left: 150px;
		}
	</style>
</body>
</html>
<script type="text/javascript">
    window.print();
</script>