<?php include "temp/header.php";?>

<?php  include "temp/sidebar.php";?>
                
                <div class="container-fluid">                   
                 <?php
                        $halaman = (isset($_GET['hal']))?$_GET['hal']:'home';
                        if($halaman){
                            if(file_exists($halaman.".php")){
                                include $halaman.".php";
                            } else {
                                echo "Halaman Tidak Ditemukan!";
                            }
                        }else{
                            include "home.php";
                        }
                    ?>
                </div>
              

            </div>
          
            <?php include "temp/footer.php"; ?>