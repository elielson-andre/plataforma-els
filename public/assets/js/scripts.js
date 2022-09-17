
// Feedback Aula
$('.undertand-yes').click(()=>{
    $('.fb-understand-no').fadeOut(0);
    $('.fb-understand-yes').fadeIn(100);
})
$('.undertand-no').click(()=>{
    $('.fb-understand-yes').fadeOut(0);
    $('.fb-understand-no').fadeIn(100);
})



setTimeout(() => {
    $('.overlay-wellcome-message').fadeIn(80);
    $('.wellcome-message').fadeIn(80);
}, 0);

setTimeout(() => {
    $('.overlay-wellcome-message').fadeOut(100);
    $('.wellcome-message').fadeOut(100);
}, 5600);

// var txtTitulo = document.getElementById('inputTitulo')
// var txtSlug = document.getElementById('inputSlug')

// $( txtTitulo ).keyup(function() {
//     txtSlug.value = txtTitulo.value
// });


// Validacao de input slug
function trim(str) {
    let texto = removeAcento(str)
    return texto.replace(/[" "]/g, '-' )
}

function removeAcento (text)
{       
    text = text.toLowerCase();                                                         
    text = text.replace(new RegExp('[ÁÀÂÃ]','gi'), 'a');
    text = text.replace(new RegExp('[ÉÈÊ]','gi'), 'e');
    text = text.replace(new RegExp('[ÍÌÎ]','gi'), 'i');
    text = text.replace(new RegExp('[ÓÒÔÕ]','gi'), 'o');
    text = text.replace(new RegExp('[ÚÙÛ]','gi'), 'u');
    text = text.replace(new RegExp('[Ç]','gi'), 'c');
    return text;                 
}

let input = document.getElementById('inputTitulo')
let input2 = document.getElementById('inputSlug')

input.onkeyup = function(){ 
    let input1 = input.value

   input2.value = trim(input1)
}


