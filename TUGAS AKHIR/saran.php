<!DOCTYPE html>
<html>
    <head>
        <title>Buku Tamu - Words N' Pages</title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="style-buku_tamu.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Overlock&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images/logo.jpg">
        <script src="javascript-buku_tamu.js"></script>
    </head>
    <body>
        <!-- Header -->
        <header>
            <div class="header">
                <h1>Buku Tamu -Words N' Pages</h1>
                <p>Surganya para pencinta buku!</p>
            </div>
            <div class="topnav">
                <a href="index.html">Home</a>
                <a href="about.html">About</a>
                <a href="product.html">Product</a>
                <a href="buku_tamu.php">Buku Tamu</a>
            </div>
        </header>
        
        <!-- Section Pertama -->
        <div class="isi-section-buku_tamu">
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>" onsubmit="validasi()">
                <p>
                    <label>Nama:</label><br>
                    <input type="text" name="fnama" size="60px" id="nama">
                </p>
                <p>
                    <label>Saran</label><br>
                    <input type="text" name="fsaran" size="60px"><br><br>
                    <input type="submit" name="Submit" class="tombol-akhir"><input type="reset" name="Reset" class="tombol-akhir">
                </p>
            </form>
        </div>
        <div class="isi-section-buku_tamu">
            <?php
                if(isset($_POST['fnama'])){
                    $nama = $_POST['fnama'];
                    $saran = $_POST['fsaran'];

                    echo"
                        <div>
                            <p>Nama: $nama</p>
                            <p>Saran Singkat: $saran</p>
                        </div>
                    ";
                }
            ?>
        </div>

        <!-- FOOTER -->
        <div class="footer">
            <footer id="copyright">
                <p>Copyright &copy; 2022 Muhammad Alhafiz</p>
            </footer>
        </div>
    </body>
</html>