

$('.btn-send-pwd-code').click(() => {
    $('.btn-send-pwd-code').hide()
    $('.txt-aguarde').show()
})


$( ".input-mail" ).keyup(function() {
    var text = $(".input-mail").val();
    if(text.length >= 10){
        if(text.includes('@gmail.com') || text.includes('@hotmail.com') || text.includes('@icloud') || text.includes('@yahoo.com')){
            $('.btn-send-pwd-code').show()
        }else{
            $('.btn-send-pwd-code').hide()
        }
    }else{
        $('.btn-send-pwd-code').hide()
    }
});

$( ".input-codigo" ).keyup(function() {
    var text = $(".input-codigo").val();
    if(text.length >= 6){
        $('.btn-code-verify').show()
    }else{
        $('.btn-code-verify').hide()
    }
});


function validate(){
    var pw1 = $(".pw1").val();
    var pw2 = $(".pw2").val();

    if(pw1.length >= 4){
        $('.min-lengh-txt').hide()
        if(pw2 === pw1){
            $('.btn-set-pwd').show()
        }else{
            $('.btn-set-pwd').hide()
        }
    }else{
        $('.min-lengh-txt').show()
    }
}



