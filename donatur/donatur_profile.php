<?php
$identifier = 0;
include("../php/page_header.php");
include("../config.php");
error_reporting(0);
$account = $_SESSION["donatur_email"];
?>
<div class="main-container">
    <section class="s6">
        <div class="main-container">
            <div class="hero-centertitle">
                <h1>donatur Profile</h1>
            </div>

            <div class="hero-subtitle">

                <?php
                $result1 = mysqli_query($con, "select * from donatur where Email = '$account' ");
                $num1 = mysqli_num_rows($result1);

                if ($num1 == 1) {
                    while ($account1 = mysqli_fetch_array($result1)) {
                ?>


                        <h5>donatur Information:</h5>
                        <br>

                        <p>Name : <?php echo $account1['Name']; ?> </p>
                        <p>Phone Number : <?php echo $account1['PhoneNum']; ?> </p>
                        <p>Email : <?php echo $account1['Email']; ?> </p>
                <?php
                    }
                }
                ?>
                <br>
                <br>
                
                <a class="btn btn-info" href="donatur_edit_profile.php">Edit Profile</a>
                
    </section>
</div>
</div>
<?php include("../php/page_footer.php"); ?>