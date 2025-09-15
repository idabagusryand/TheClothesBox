<?php
$identifier = 2;
include("../php/page_header.php");
include("../config.php");

?>


<div class="main-container">
    <section class="s2">
        <h1>Daftar Tempat</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
            Tambah Tempat
        </button>
        <?php
        if (isset($_POST['upload'])) {
            $namaTempat = $_POST['namaTempat'];
            $alamatTempat = $_POST['alamatTempat'];
            $deskripsiTempat = $_POST['deskripsiTempat'];

            $fotoTempat = $_FILES['fotoTempat']['name']; // Nama file foto yang diunggah
            
            // get the image extension
            $extension = substr($fotoTempat, strlen($fotoTempat) - 4, strlen($fotoTempat));
            // allowed extensions
            $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
            // Validation for allowed extensions .in_array() function searches an array for a specific value.
            if (!in_array(strtolower($extension), $allowed_extensions)) {
                echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
            }
            
             else {
                //rename the image file
                $fotoTempat = md5($imgfile) . time() . $extension;
                // Code for move image into directory
                move_uploaded_file($_FILES["fotoTempat"]["tmp_name"], "../img/" . $fotoTempat);
                // Query for data insertion

            $query = mysqli_query($con, "insert into tujuan_donasi(nama, alamat, foto, deskripsi) value('$namaTempat', '$alamatTempat', '$fotoTempat','$deskripsiTempat')");
            }  
            }?>
        
        <!-- Modal Pop-up Form -->
        <div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <form method="POST" action="">
                        <div class="modal-header">
                            <h5 class="modal-title" id="formModalLabel">Pop-up Form</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="namaTempat">Nama Tempat:</label>
                                <input type="text" class="form-control" id="namaTempat" name="namaTempat">
                            </div>
                            <div class="form-group">
                                <label for="alamatTempat">Alamat Tempat:</label>
                                <input type="text" class="form-control" id="alamatTempat" name="alamatTempat">
                            </div>
                            <div class="form-group">
                                <label for="fotoTempat">Foto Tempat:</label>
                                <input type="file" class="form-control-file" name="fotoTempat">
                            </div>
                            <div class="form-group">
                                <label for="deskripsiTempat">Deskripsi Tempat:</label>
                                <textarea class="form-control" id="deskripsiTempat" name="deskripsiTempat" rows="2"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary" id="simpanButton" name="upload">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="card-columns">
            <?php
            $ret = mysqli_query($con, "SELECT * FROM tujuan_donasi");
            $cnt = 1;
            $row_count = mysqli_num_rows($ret);
            
            if ($row_count > 0) {
                while ($row = mysqli_fetch_array($ret)) {
                    ?>
                    <div class="card text-center">
                        <img class="card-img-top" src="../img/<?php echo $row['foto']; ?>" alt="Card image cap">
                        <div class="card-body">
                            <p class="card-text"><b>Nama: <br></b><?php echo $row['nama']; ?></p>
                            <br>
                            <p class="card-text"><b>Alamat: <br></b><?php echo $row['alamat']; ?></p>
                            <br>
                            <p class="card-text"><?php echo $row['deskripsi']; ?></p>
                        </div>
                    </div>
            
                    <?php
                    $cnt = $cnt + 1;
                }
            }else { ?>
                <tr>
                    <th style="text-align:center; color:red;" colspan="6">Belum ada Tempat Tujuan Donasi yang ditambahkan</th>
                </tr>
            <?php } ?>
        </div>
    </section>

    <script>
        document.getElementById("simpanButton").addEventListener("click", function() {
            var namaTempat = document.getElementById("namaTempat").value;
            var alamatTempat = document.getElementById("alamatTempat").value;
 
        });
    </script>
</div>

</div>


<?php include("../php/page_footer.php"); ?>