<!DOCTYPE html>
<html>
<body>
        <div class="content-lihatdata" style="">
                        <div id="0" style="display:show; position: relative;">
                            <div class="row">
                                <div class="col-md-3 title-box">
                                    <h2>
                                    <img src="../../assets/ico/button_forward.png" width="50px" alt="" onclick="pages(1);">
                                    Lihat Data
                                    </h2>
                                </div>
                                <div class="col-md-9 ">
                                    <img class="pict" style="margin-left:150px;" width="300px" src="../../assets/ico/nfc.png" alt="">
                                    <p style="margin-left:100px;font-size: 20px;">Tempelkan Kartu Elektronik ke Mesin Pembaca NFC</p>
                                </div>
                            </div>
                        </div>
                        <div id="1" style="display:none; position: relative;">
                            <div class="row">
                                <div class="col-md-3 title-box">
                                    <h2>
                                         <img src="../../assets/ico/button_back.png" width="50px" alt="" onclick="pages(-1);">
                                          John Doe
                                    </h2>
                                </div>
                                <div class="col-md-6 data-nfc">
                                    <p>Nama Lengkap :</p>
                                    <p>NIK : </p>
                                    <p>Tempat Tgl Lahir :</p>
                                    <p>Jenis Kelamin : </p>
                                    <p>Alamat : </p>
                                    <p>Kecamatan : </p>
                                    <p>Kabupaten : </p>
                                </div>
                                <div class="col-md-3">
                                     <img class="pict" src="../../assets/profil/photo.jpg" alt="ini gambar" width="80%;">
                                    <br>
                                    <img src="" alt="ini gambar" width="50px;">
                                    <button id="submit" style="width: 200px;" onclick="pages(1);">
                                        Selanjutnya
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div id="2" style="display:none; position: relative;">
                            <div class="row">
                                <div class="col-md-4 title-box">
                                    <h2>
                                         <img src="../../assets/ico/button_back.png" width="50px" alt="" onclick="pages(-1);">
                                          Lihat Data
                                    </h2>
                                </div>
                            </div>
                            <center>
                            <div class="row">
                                <div class="col-md-12 jenis-data">
                                    <h2>
                                    <div class="card"><a href="" onclick="pages(1);">SIM A</a></div>
                                    <div class="card"><a href="" onclick="pages(1);">SIM B1</a></div>
                                    <div class="card"><a href="" onclick="pages(1);">SIM B2</a></div>
                                    <div class="card"><a href="" onclick="pages(1);">SIM C</a></div>
                                    <div class="card"><a href="" onclick="pages(1);">SIM D</a></div>
                                    <div class="card"><a href="" onclick="pages(1);">SKCK</a></div>
                                    </h2>
                                </div>
                            </div>
                            </center>
                        </div>
    
                        <div id="3" style="display:none; position: relative;">
                            <div class="row">
                                <div class="col-md-3 title-box">
                                    <h2>
                                         <img src="../../assets/ico/button_back.png" width="50px" alt="" onclick="pages(-1);">
                                          SIM A
                                    </h2>
                                </div>
                                <div class="col-md-6 data-sim">
                                    <p>Nama Lengkap : </p>
                                    <p>No. SIM : </p>
                                    <p>Tempat Tgl Lahir: </p>
                                    <p>Jenis Kelamin : </p>
                                    <p>Berat / Tinggi : </p>
                                    <p>Alamat :</p>
                                    <p>Kecamatan : </p>
                                    <p>Kabupaten : </p>
                                    <p>Masa Berlaku : </p>
                                </div>
                                <div class="col-md-3">
                                    <img class="pict" src="../../assets/profil/photo.jpg" alt="ini gambar" width="80%;">
                                    <br>
                                    <img src="" alt="ini gambar" width="50px;">
                                </div>
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

var index = 0;
var id = 0;

function pages(index) {
    $('a').on('click',function(event){
        event.preventDefault();
    });
    if (id >= 0) {
        id += parseInt(index);
        for (i = 0; i < 6; i++) {
            if (i == id) {
                $('#' + id).fadeIn('slow');
            } else {
                $('#' + i).css({ 'display': 'none' });
            }
        }
    }
}
function toHome(){
    setTimeout(function(){
        window.location.replace('../');
    },5000);
}
</script>
<!-- <script src="../../assets/js/main.js"></script>-->

</html>