<?php
$identifier = 1;
session_start();
error_reporting(0);
include("../php/page_header.php");
include("../config.php");

//Databse Connection file
if (isset($_POST['upload'])) {
    //getting the post values
    $picture = $_FILES['picture']['name'];
    
    $description = $_POST['description'];
    $alamat = $_POST['alamat_donasi'];
    $name = $_SESSION['donatur_name'];
    $email = $_SESSION['donatur_email'];
    $PhoneNum = $_SESSION['donatur_PhoneNum'];
    // get the image extension
    $extension = substr($picture, strlen($picture) - 4, strlen($picture));
    // allowed extensions
    $allowed_extensions = array(".jpg", "jpeg", ".png", ".gif");
    // Validation for allowed extensions .in_array() function searches an array for a specific value.
    if (!in_array($extension, $allowed_extensions)) {
        echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
    } else {
        //rename the image file
        $imgnewfile = md5($imgfile) . time() . $extension;
        // Code for move image into directory
        move_uploaded_file($_FILES["picture"]["tmp_name"], "../img/" . $imgnewfile);
        // Query for data insertion
        $query = mysqli_query($con, "insert into donasi(id, picture, alamat_donasi, description, Name, email, PhoneNum) value('$id', '$imgnewfile','$alamat','$description','$name', '$email','$PhoneNum')");
        
        if ($query) {
            echo "<script>alert('Kamu Telah Berhasil Menambahkan Donasi!');</script>";
            echo "<script type='text/javascript'> document.location ='../donatur/donatur_upload.php'; </script>";
            } else {
            echo "<script>alert('Terjadi Kesalahan, Coba Lagi');</script>";
        }
    }
}
?>


<div class="main-container">
    <section class="s4">
        <div class="kain-container">
            <h1>Donasi</h1>
            <p>
                Silahkan lengkapi data donasi di bawah.<br>
                Donasi hanya akan disetujui bila pakaian berjumlah 5 atau lebih. Terimakasih.            
            </p>
        </div>
        <form method="post" enctype="multipart/form-data">
            
            <!-- <label for="donasi">Donasi:</label>
            <input type="text" name="donasi" placeholder="Nama Pakaian" required="true"><br> -->
            
            <label for="picture">Picture: (masukan foto pakaian)</label>
            <div class="form-group">
                <input type="file" class="form-control" name="picture" multiple required="true">
            </div>

            <label for="donasi">Alamat Donasi:</label>
            <input type="text" name="alamat_donasi" placeholder="Alamat Lengkap" required="true"><br>

            <label for="description">Catatan:</label>
            <textarea id="w3review" name="description" rows="4" cols="50" placeholder="Tambahkan Catatan Bila Perlu"></textarea><br>

            <input type="submit" name="upload" value="Submit" /><br>

        </form>
    </section>
</div>

</div>




<?php include("../php/page_footer.php"); ?>