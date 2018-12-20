$(document).ready(function(){
    $('#btn-loc').click(function(){
        $nhommau = $('#select-hienmau-nhommau :selected').val();
        $quanhuyen = $('#select-hienmau-quanhuyen :selected').val();
        // alert($nhommau);
        $.post("danh-sach-hien-mau.php",  {nhommau: $nhommau, quanhuyen: $quanhuyen}, function(data){
            alert(data);
        });
    })
})