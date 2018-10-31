<!DOCTYPE html>
<html>
<body>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
        <div class="content-tambahdata" style="">
                        <div id="0" style="display:show; position: relative;">
                            <div class="row">
                                <div class="col-md-3 title-box">
                                    <h2>
                                    <img class="pict" src="../../assets/ico/button_forward.png" width="50px" alt="" onclick="pages(1);">
                                    Penyimpanan Data
                                    </h2>
                                </div>
                                <div class="col-md-9 ">
                                   <table>
                                   <tr>
                                       <th>Nama</th>
                                       <th><center>Diubah</center></th>
                                       <th><center>Hak Akses</center></th>
                                       <th><center>Keterangan</center></th>
                                    </tr>
                                    <tr>
                                        <td><a href="" title="click to download">Akta Lahir.pdf</a></td>
                                        <td id="date"></td>
                                        <td><center>740</center></td>
                                        <td>-</td>
                                    </tr>
                                   </table>
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
    var today = new Date();
    var day = today.getDay();
    var month = today.getMonth()+1;
    var year = today.getFullYear();

    if(day < 10) day = '0'+day;
    if(month < 10) day = '0'+month;
    
    $('#date').html('<center>'+day + '-' + month + '-' + year + '</center>');
</script>
<!-- <script src="../../assets/js/main.js"></script>-->

</html>