<?php
$identifier = 1;
include("../php/page_header.php");
include("../config.php");

?>


<div class="main-container">
    <section class="s2">
        <h1>Daftar Donasi</h1>

        <div class="card-columns">
            <?php
            $ret = mysqli_query($con, "select * from donasi");
            $cnt = 1;
            $row = mysqli_num_rows($ret);
            $date = date('Y-m-d');


            if ($row > 0 && isset($_SESSION['donatur_email'])) {
                while ($row = mysqli_fetch_array($ret)) {

            ?>
                    <div class="card text-center">
                        <img class="card-img-top" src="../img/<?php echo $row['picture']; ?>" alt="Card image cap">
                        <div class="card-body">
                            
                            <p class="card-text"><b>Catatan: <br></b><?php echo $row['description']; ?></p>
                        </div>
                    </div>

                <?php
                    $cnt = $cnt + 1;
                }
            } elseif ($row > 0 && isset($_SESSION['admin_email'])) {
                while ($row = mysqli_fetch_array($ret)) { ?>
                    <div class="card text-center">
                        <img class="card-img-top" src="../img/<?php echo $row['picture']; ?>" alt="Card image cap">
                        <div class="card-body">
                            
                            <p class="card-text"><b>Catatan: <br></b><?php echo $row['description']; ?></p><br><br>
                            <p class="card-text"><b>Alamat Donasi: <br></b><?php echo $row['alamat_donasi']; ?></p><br><br>
                            <p class="card-text"><b>Alamat Tujuan Donasi: <br></b><?php echo $row['alamat_tujuan_donasi']; ?></p><br><br>
                            <p class="card-text"><b>Tanggal Jemput Donasi: <br></b><?php echo $row['tanggal_jemput_donasi']; ?></p><br><br>
                            
                            <?php
                            
                                $tanggal = $row['tanggal_jemput_donasi'];
                                
                                
                                if ($tanggal <= $date) {
                                    echo "<br>SUDAH DIJEMPUT";
                                } else {
                                    echo "<br>BELUM DIJEMPUT";
                                }
                            
                            ?>
                        </div>
                    </div>

                <?php $cnt = $cnt + 1;
                }
            } else { ?>
                <tr>
                    <th style="text-align:center; color:red;" colspan="6">Belum ada Donasi yang tersedia</th>
                </tr>
            <?php } ?>
        </div>
    </section>
</div>

</div>


<?php include("../php/page_footer.php"); ?>