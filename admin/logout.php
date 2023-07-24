<?php 
  session_start();
  session_destroy();
  
	echo "<script>alert('Terimakasih Telah Berkunjung'); window.location = '../index.php'</script>";	
?>