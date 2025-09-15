<?php
session_start();
error_reporting(0);
$identifier = 1;
include("../php/page_header.php");
include("../config.php");

?>

<div class="main-container">
    <section class="s2">
        <h1>Donasi Ku</h1>
        <div class="form-group">
            <tbody>
                <?php
                $id = $_SESSION['donatur_email'];
                $ret = mysqli_query($con, "select * from donasi where email = '$id'");
                $cnt = 1;
                $row = mysqli_num_rows($ret);
                $date = date('Y-m-d');

                if ($row > 0) {
                    while ($row = mysqli_fetch_array($ret)) {

                ?>
                        <?php

                        $account = $_SESSION["donatur_email"];
                        $account_result = mysqli_query($con, "select Name from donatur where Email = '$account'");

                        ?>

                        <div class="card-body">
                            <ul class="w-100 list-group" id="topic-list">
                                <li class="list-group-item mb-4">
                                    <img src="../img/avatar.png" alt="Avatar" class="float-left margin-right" style="width:30px">
                                    <h3>
                                        <?php
                                        while ($info = $account_result->fetch_assoc()) {
                                            $myvalue = $info['Name'];
                                            $arr = (explode(' ', trim($myvalue)));
                                            echo strtoupper($arr[0]);
                                        }
                                        ?>
                                    </h3>

                                    <div class="media">
                                        <img class="align-self-start mr-3" src="../img/<?php echo $row['picture']; ?>" style="width: 300px; height:auto;">
                                        <div class="media-body">

                                            <p><b>Catatan: </b><br><?php echo $row['description']; ?><br></p>
                                            <p><b>Alamat donasi: </b><br><?php echo $row['alamat_donasi']; ?><br></p>

                                            <?php
                                            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                                // Periksa apakah tombol Simpan diklik
                                                if (isset($_POST['simpan' . $row['id']])) {
                                                    // Ambil nilai alamat tujuan donasi yang dipilih
                                                    $alamat = $_POST['alamat' . $row['id']];

                                                    // Ambil nilai tanggal jemput donasi yang dipilih
                                                    $tanggalJemput = $_POST['tanggal_jemput' . $row['id']];

                                                    // Simpan data alamat tujuan donasi dan tanggal jemput donasi ke tabel donasi
                                                    $query = "UPDATE donasi SET alamat_tujuan_donasi = '$alamat', tanggal_jemput_donasi = '$tanggalJemput' WHERE id = '" . $row['id'] . "'";
                                                    mysqli_query($con, $query);

                                                    // Tindakan lain setelah menyimpan data
                                                    // ...
                                                }
                                            }
                                            
                                            
                                            // Mengambil data tanggal jemput donasi dari database
                                            $ret2 = mysqli_query($con, "SELECT tanggal_jemput_donasi FROM donasi WHERE id = '" . $row['id'] . "'");
                                            $row2 = mysqli_fetch_array($ret2);

                                            // Memeriksa apakah tanggal jemput donasi sudah tersimpan
                                            if ($row2['tanggal_jemput_donasi']) {
                                                // Jika tanggal jemput donasi sudah tersimpan, tampilkan tanggal tersebut
                                                echo "<b>Tanggal donasi dijemput: </b>" . $row2['tanggal_jemput_donasi'];
                                            }
                                            ?>
                                            <br>
                                            <p>
                                                <br>
                                                <b>Pilih Tujuan Donasi:</b><br>
                                                <?php
                                                // Mengambil alamat tujuan donasi dari database
                                                $ret2 = mysqli_query($con, "SELECT alamat_tujuan_donasi FROM donasi WHERE id = '" . $row['id'] . "'");
                                                $row2 = mysqli_fetch_array($ret2);
                                                
                                                // Memeriksa apakah alamat tujuan donasi sudah tersimpan
                                                if ($row2['alamat_tujuan_donasi']) {
                                                    // Jika alamat tujuan donasi sudah tersimpan, tampilkan alamat tersebut
                                                    echo $row2['alamat_tujuan_donasi'];
                                                    
                                                } else {
                                                    // Jika alamat tujuan donasi belum tersimpan, tampilkan pilihan dropdown
                                                    ?>
                                                    <form method="POST" action="">
                                                        <select name="alamat<?php echo $row['id']; ?>" id="tujuanDonasiDropdown">
                                                        <?php
                                                            // Mengambil data alamat dari tabel tujuan_donasi
                                                            $ret3 = mysqli_query($con, "SELECT nama FROM tujuan_donasi");
                                                            while ($row3 = mysqli_fetch_array($ret3)) {
                                                                echo '<option value="' . $row3['nama'] . '">' . $row3['nama'] . '</option>';
                                                            }
                                                            ?>
                                                            </select>
                                                            <br>
                                                            <?php
                                                            // Memeriksa apakah tanggal jemput donasi sudah tersimpan
                                                            if ($row2['tanggal_jemput_donasi']) {
                                                                // Jika tanggal jemput donasi sudah tersimpan, tampilkan tanggal tersebut
                                                                echo "Tanggal donasi dijemput: " . $row2['tanggal_jemput_donasi'];
                                                            }
                                                            ?>
                                                            <label for="tanggalJemputInput"><b>Tentukan Tanggal donasi dijemput:</b></label><br>
                                                            <input type="date" name="tanggal_jemput<?php echo $row['id']; ?>" id="tanggalJemputInput"><br>
                                                            <button type="submit" name="simpan<?php echo $row['id']; ?>">Simpan</button>
                                                            </form>
                                                            <?php } ?>
                                                        
                                                <br>
                                                <?php
                                                
                                                $tanggal = $row['tanggal_jemput_donasi'];
                                                
                                                // Mengambil data tanggal jemput donasi dari database
                                                $ret2 = mysqli_query($con, "SELECT tanggal_jemput_donasi FROM donasi WHERE id = '" . $row['id'] . "'");
                                                $row2 = mysqli_fetch_array($ret2);

                                                // Memeriksa apakah tanggal jemput donasi sudah tersimpan
                                                if ($row2['tanggal_jemput_donasi']) {
                                                    // Jika tanggal jemput donasi sudah tersimpan, tampilkan tanggal tersebut
                                                    

                                                    $tanggalJemput = $row2['tanggal_jemput_donasi'];
                                                    $date = date('Y-m-d');
                                                    if ($tanggalJemput <= $date) {
                                                        echo "<br>SUDAH DIJEMPUT";
                                                    } else {
                                                        echo "<br>BELUM DIJEMPUT";
                                                    }
                                                } else {
                                                    echo "Tanggal jemput donasi belum diatur.";
                                                }

                                                
                                                
                                                
                                                // if ($tanggal <= $date) {
                                                //     echo "<br>SUDAH DIJEMPUT";
                                                // } else {
                                                //         echo "<br>BELUM DIJEMPUT";
                                                // }
                                                    
                                                    ?>
                                                    </p>
                                                    
                                                    <script>
                                                    document.getElementById("tujuanDonasiDropdown").addEventListener("change", function() {
                                                        var selectedAlamat = this.value;
                                                        console.log("Alamat yang dipilih:", selectedAlamat);
                                                    // Anda dapat melakukan tindakan lain dengan nilai selectedAlamat
                                                });

                                                document.getElementById("tanggalJemputInput").addEventListener("change", function() {
                                                    var selectedTanggal = this.value;
                                                    console.log("Tanggal yang dipilih:", selectedTanggal);
                                                    // Anda dapat melakukan tindakan lain dengan nilai selectedTanggal
                                                });
                                            </script>

                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    <?php
                        $cnt = $cnt + 1;
                    }
                } else { ?>
                    <tr>
                        <th style="text-align:center; color:red;" colspan="6">Kamu Belum Berdonasi</th>
                    </tr>
                <?php } ?>

            </tbody>
        </div>
    </section>
</div>

<?php include("../php/page_footer.php"); ?>
