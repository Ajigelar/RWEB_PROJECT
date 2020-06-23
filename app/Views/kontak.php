<?php
    
?>

<html>
    <head>
        <!--Metadata-->
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="public/css/settings.css" />
        <link rel="stylesheet" href="public/css/kontak.css" />
        <link rel="stylesheet" href="public/css/bootstrap.min.css" />
        <script src="public/js/jquery.min.js"></script>  
        <script src="public/js/bootstrap.min.js"></script>
        <title></title>
    </head>
    <body>
        <div class="header">
            <?php include 'nav.php'; ?>
        </div>
        
        <div class="sub-nav-header center">
            <hr>
            <button type="button" class="btn-mod btn-sub-nav clp1" >Kesan Dan Pesan</button>
            <button type="button" class="btn-mod btn-sub-nav clp2" >Info Kami</button>
        </div>
        
        <div class="body">
            <!-- ganti in nanti dengan jquery peraktif collapse -->
            <div id="knp" class="collapse in">
                <h4>Kesan dan Pesan</h4>
                <p>Ada kesan, pesan, kritikan dan saran anda tentang pelayanan di RSUD Kota Yogyakarta dapat anda sampaikan disini</p>
                <p>Kesan, pesan, kritikan dan saran anda akan mnenjadi bagian dari peningkatan pelayanan kami</p>

                <form action="#" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required="require">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="alamat" placeholder="Masukkan Alamat" required="require">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="nohp" placeholder="Masukkan Nomor Handphone" required="require">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Masukkan Email (Optional)">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" name="subjek" placeholder="Masukkan Subjek ( Judul )" required="require">
                    </div>


                    <div class="check">
                        <label class="chk-txt">CENTANG INI JIKA ANDA MANUSIA<input class="chk-box" type="checkbox" value="chk"></label>
                        <input type="submit" name="submit" class="btn btn-primary" value="Kirimkan / Submit">
                    </div>
                </form>
            </div>

            <div id="info" class="collapse text-center">
                <h4>Hubungi Kami</h4>
                <p>Hotline SMS Pengaduan</p><br>
                <p>No. Telp (Dengan Handphone) :</p>
                <h4>081578600900</h4><br>
                <p>No. Telp (Dengan Telepon Pesawat) :</p>
                <h4>0274-371195 | 386691 | 386692</h4><br>
                <p>Email :</p>
                <h4>rsud@jogjakota.go.id</h4><br>
                <p>Alamat :</p>
                <h4>Jl. Wirosaban No.1 Yogyakarta 55162</h4><br>
            </div>
        </div>
    </body>
</html>

<script>
$(document).ready(function(){
    $('.clp1').on('click', function() {
        $("#knp").collapse('show');
        $("#info").collapse('hide');
    });
    $('.clp2').on('click', function() {
        $("#info").collapse('show');
        $("#knp").collapse('hide');
    });
})
</script>

