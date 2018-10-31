<!DOCTYPE html>
<html>
<head>
</head>
<body>
                    <div class="content-beranda" style="">
                        <div class="col-md-3 col-sm-3" style="float: left;">
                            <div class="box1-beranda" style="background-color: #db3a4c;">
                                <img src="../assets/ico/pemilukada.png" alt="" width="45%">
                            </div>
                            <div class="box1-beranda" style="background-color: #e4642e;">
                                <img src="../assets/ico/perpanjang_sk.png" alt="" width="45%">
                            </div>
                            <div class="box1-beranda" style="background-color: #29acda">
                                <img src="../assets/ico/kuota.png" alt="" width="45%">
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3" style="float: center;">
                            <div class="berita-beranda" style="background-color: #db3a4c;">
                                <img src="../assets/bg/berita.jpg" alt="" width="430px" height="310px">
                            </div>
                            <div class="box2-beranda" style="background-color: #595857;">
                                <center>
                                <img src="../assets/ico/cuaca1.png" alt="" width="80%">
                                </center>
                            </div>
                            <div class="box2-beranda" style="background-color: #438a7b; margin-left: 300px;">
                            <center><img class="pict" src="../assets/ico/tambah_pintasan.png" alt="" width="80%"></center>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3">
                            <div class="notify-beranda" style="background-color: #c9c9ca;">
                            </div>
                        </div>
                    </div>
              
</body>
<script>
    var check = setTimeout(function(){
         $('#preload').fadeOut('slow');
         $('#target').fadeIn('400', function(){
            $(this).html('Connection Timed Out');
        });
    },15000);
    $('img.pict').on('load',function(){
        $('#preload').fadeOut('slow');
        clearTimeout(check);
    });
   
</script>

</html>