<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Hasil Form</title>
<link rel="stylesheet" href="assets/style1.css">

</html>

<body>
    <div class="container">

        <!-- Navigasi Bar -->
        <nav>

            <div class="navbar_form ">
                <a href="index.html"><img class="logo" src="img/logo.png" alt="logo"></a>
            </div>
        </nav>
        <!-- END -->
        <!-- CONTENT -->
        <div class="hasil">
            <br>
            <br>
            <h1 class="center">Hasil Registrasi</h1>
            <table border="1" cellpacing="0" cellpading="0" class="tabel_hasil">
                <tr class="center">
                    <td colspan=2 align="center" bgcolor="silver"><b>Data Booking</b></td>
                </tr class="center">
                <tr>
                <tr class="center">
                    <td>
                        Nama :
                    </td>
                    <td>
                        <?php echo htmlspecialchars($_POST["nama"]); ?>
                    </td>
                </tr class="center">

                <tr class="center">
                    <td>
                        HP Anda:
                    <td>
                        <?php echo htmlspecialchars($_POST["nohp"]); ?> </td>
                    </td>
                    </td>
                </tr class="center">
                <tr class="center">
                    <td>
                        Tanggal :
                    </td>
                    <td>
                        <?php echo $_POST["tanggal"]; ?> </t>
                    </td>
                </tr class="center">
                <tr class="center">
                    <td>
                        Jam Mulai :
                    </td>
                    <td>
                        <?php echo $_POST["start_time"]; ?>
                    </td>
                </tr class="center">
                <tr class="center">
                    <td>
                        Jam Selesai :
                    </td>
                    <td>
                        <?php echo $_POST["end_time"]; ?>
                    </td>
                <tr class="center">
                    <td>Lapangan :</td>
                    <td><?php echo htmlentities($_POST["lapangan"]) ?></td>
                </tr>
                </tr class="center">
                <tr class="center">
                    <td>
                        Kegiatan :
                    </td>
                    <td>
                        <?php echo $_POST["kegiatan"]; ?>
                    </td>
                </tr class="center">
                <tr class="center">
                    <td>
                        Total jam :
                    </td>
                    <td>
                        <?php
                        $test = date_format(date_create(($_POST['end_time'])), 'h');
                        $test1 = date_format(date_create(($_POST['start_time'])), 'h');
                        $total_jam = $test - $test1;
                        echo $total_jam;
                        ?>
                    </td>
                </tr class="center">

                <tr class="center">
                    <td>Total Harga :</td>
                    <td>
                        <?php
                        $total_harga = $total_jam * 75000;
                        echo $total_harga;
                        ?>
                    </td>
                </tr>
                <tr class="center">
                    <td>
                        keterangan :
                    </td>
                    <td>
                        <?php echo htmlspecialchars($_POST["keterangan"]); ?>
                    </td>
                </tr class="center">
            </table>
        </div>
        <!-- END -->
        <!-- FOOTER -->
        <div class="container_footer">
            <h1 class="h1_footer">GOR © 2024 ERIF</h1>
        </div>
        <!-- END -->
    </div>
    </div>
</body>

</html>