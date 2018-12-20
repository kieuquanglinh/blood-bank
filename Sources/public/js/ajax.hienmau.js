$(document).ready(function(){
    $('#timkiem_hienmau').click(function(){
        $nhommau = $('#sl_nhommau :selected').val();
        $quanhuyen = $('#sl_quanhuyen :selected').val();
        $.get("views/bang-timkiem-hienmau.php",  {nhommau: $nhommau, quanhuyen: $quanhuyen}, function(data){
            $('#bang_timkiem_hienmau').html(data);
            // alert(data);
          });
    })
})