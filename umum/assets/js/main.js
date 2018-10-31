load_content();
function load_content() {
    $(document).ready(function() {
        $.ajax({
            url: "index_ui.php",
            dataType: "html"
        }).done(function(hasil) {
            $('#target').hide().html(hasil).fadeIn('slow');
        })
    })

    /*$('#target')
         .hide()
         .load('index_ui.php', function(responseText, statusText, xhr) {
             if (statusText == "error") {
                 $(this).html("Error " + xhr.status + ": " + xhr.statusText).css({
                     'marginLeft': 400,
                     'marginTop': 200,
                     'fontSize': 40
                 });
             }

         })
         .fadeIn('slow');*/
}