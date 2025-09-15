<?php
$identifier = 1;
session_start();
error_reporting(0);
include("../php/page_header.php");
include("../config.php");
$id = $_GET['id'];
$sql = "SELECT * FROM donasi where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
//Databse Connection file

?>

<div class="main-container">
    <section class="s4">
        <div class="kain-container">
            <h1>Donation</h1><br><br>
        </div>
        <div class="container">
            <h4>
                <?php echo $row['donasi']; ?>
            </h4>
            <form method="POST">
                <input type="hidden" name="nama_donasi" value="<?php echo $row['donasi']; ?>">
            </form>
            <!-- <h4><?php echo $row['donasi']; ?></h4><br> -->
            <div class="row">
                <div class="col-md-12">
                    <form method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-5">
                                <label for="picture">Picture:</label>
                                <div class="form-group">
                                    <img class="card-img-top" src="../img/<?php echo $row['picture']; ?>"
                                        style="width: 450px; heigh:auto;">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <label for="donasi">Distributor Name:</label>
                                <input type="text" name="name" value="<?php echo $row['name']; ?>" readonly><br>
                                <label for="donasi">Distributor Email:</label>
                                <input type="text" name="email" value="<?php echo $row['email']; ?>" readonly><br>
                                <label for="donasi">Distributor Phone Number:</label>
                                <input type="text" name="phonenum" value="<?php echo $row['PhoneNum']; ?>" readonly><br>
                                <label for="donasi">Description:</label>
                                <textarea id="w3review" rows="4" cols="50" name="description" readonly><?php echo $row['description']; ?> </textarea><br>
                                
                                <label for="jadwal">Jadwal Penjemputan:</label>
                                <input type="date" name="tanggal" id="tanggal"><br><br>
                                
                                <label for="donasi">Lokasi Donasi:</label>
                                <input type="text" name="lokasi" id="lokasi" required><br>
                                <button type="submit">Simpan Jadwal dan Lokasi</button><br>

                                <?php
                                if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                                    // Ambil nilai tanggal dan lokasi yang diinput oleh pengguna
                                    $jadwalPenjemputan = $_POST['tanggal'];
                                    $lokasi = $_POST['lokasi'];

                                    // Lakukan validasi atau manipulasi data jika diperlukan sebelum menyimpan ke tabel

                                    // Simpan tanggal dan lokasi ke tabel "jadwal" dalam database dengan mencantumkan $id yang sesuai
                                    $query = "INSERT INTO jadwal (id, tanggal, lokasi) VALUES ('$id', '$jadwalPenjemputan', '$lokasi')";
                                    $result = mysqli_query($con, $query);

                                    if ($result) {
                                        echo "Jadwal dan Lokasi donasi telah ditentukan!.<br>";
                                        echo "$jadwalPenjemputan <br>";
                                        echo "$lokasi";
                                    } else {
                                        echo "Terjadi kesalahan!.";
                                    }
                                }
                                ?>

                                


    </section>
</div>
</div>
</div>

</div>
</div>
</form>
</section>
</div>

</div>




<?php include("../php/page_footer.php"); ?>