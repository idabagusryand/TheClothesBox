<?php
$identifier = 3;
error_reporting(0);
session_start();
include("../php/page_header.php");

include("../config.php");

$sql = "SELECT alamat_tujuan_donasi FROM donasi";
$result = mysqli_query($con, $sql);

$donasi = array();

while ($rows = mysqli_fetch_assoc($result)) {
    $lokasi = $rows['alamat_tujuan_donasi'];
    if (isset($donasi[$lokasi])) {
        $donasi[$lokasi]++;
    } else {
        $donasi[$lokasi] = 1;
    }
}

?>

</div>


<section class="s5">
    <div class="main-container">
        <div class="content-wrapper-contact">
            <div class="hero-title-contact">
                <div class="hero-v2">
                    <div class="main-container">

                        <h1 style="position: absolute; top: 40%; left: 40%;">Laporan</h1>
                        <table class="table"
                            style="position: absolute; top: 60%; left: -5%; border-collapse: collapse;">
                            <thead>
                                <tr>
                                    <th style="border: 1px solid; border-width: 2px;">Tujuan Donasi</th>
                                    <th style="border: 1px solid; border-width: 2px;">Jumlah Donasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($donasi as $lokasi => $jumlahDonasi) {
                                    echo "<tr>";
                                    echo "<td style='border: 1px solid; border-width: 2px;'>$lokasi</td>";
                                    echo "<td style='border: 1px solid; border-width: 2px;'>$jumlahDonasi</td>";
                                    echo "</tr>";
                                }
                                ?>
                            </tbody>
                        </table>
</section>



<?php include("page_footer.php"); ?>