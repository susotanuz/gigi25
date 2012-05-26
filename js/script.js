/* Author: Suso
*/
$(".grouped").fancybox({
    'overlayOpacity': 0.7,
    'overlayColor': '#000'
});
$(document).ready(function(){ 
        var button = $('#upload'), interval;
        new AjaxUpload(button,{
            action: 'js/procesa.php',
            name: 'image',
            onSubmit : function(file, ext){
                // cambiar el texto del boton cuando se selecicione la imagen
                button.text('Subiendo');
                // desabilitar el boton
                this.disable();
 
                interval = window.setInterval(function(){
                    var text = button.text();
                    if (text.length < 11){
                        button.text(text + '.');
                    } else {
                        button.text('Subiendo');
                    }
                }, 200);
            },
            onComplete: function(file, response){
                $('html, body').animate({scrollTop:$(document).height()}, 'slow');
                button.text('Subir Foto');
                window.clearInterval(interval);
                // Habilitar boton otra vez
                this.enable();
 
                // Añadiendo las imagenes a mi lista
 
                if($('#gallery li').length == 0){
                    $('#gallery').html(response).fadeIn("fast");
                    $('#gallery li').eq(0).hide().show("slow");
                }else{
                    $('#gallery').prepend(response);
                    $('#gallery li').eq(0).hide().show("slow");
                }
            }      
        });        
        // Listar  fotos que hay en mi tabla
        $("#gallery").load("js/procesa.php?action=listFotos");
    });
$(document).ready(function(){ 
        var button = $('#upload-dos'), interval;
        new AjaxUpload(button,{
            action: 'js/procesa.php',
            name: 'image',
            onSubmit : function(file, ext){
                // cambiar el texto del boton cuando se selecicione la imagen
                button.text('Subiendo');
                // desabilitar el boton
                this.disable();
 
                interval = window.setInterval(function(){
                    var text = button.text();
                    if (text.length < 11){
                        button.text(text + '.');
                    } else {
                        button.text('Subiendo');
                    }
                }, 200);
            },
            onComplete: function(file, response){
                $('html, body').animate({scrollTop:$(document).height()}, 'slow');
                button.text('Subir Foto');
                window.clearInterval(interval);
                // Habilitar boton otra vez
                this.enable();
 
                // Añadiendo las imagenes a mi lista
 
                if($('#gallery li').length == 0){
                    $('#gallery').html(response).fadeIn("fast");
                    $('#gallery li').eq(0).hide().show("slow");
                }else{
                    $('#gallery').prepend(response);
                    $('#gallery li').eq(0).hide().show("slow");
                }
            }      
        });        
        // Listar  fotos que hay en mi tabla
        $("#gallery").load("js/procesa.php?action=listFotos");

    });

$("#fotos").click(function() {
     $('html, body').animate({
         scrollTop: $("#content").offset().top
     }, 2000);
 });
$(".scroll-top").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

$(".youtube").fancybox({
    'padding' : 0,
    'autoScale' : false,
    'transitionIn' : 'fade',
    'transitionOut' : 'fade',
    'width' : 960,
    'height' : 595,
    'overlayOpacity': 0.7,
    'overlayColor': '#000'
});
$('.grouped').live('click', function () {
    $.fancybox({ 
        type: 'image', 
        href: $(this).attr('href'), 
        'overlayOpacity': 0.7, 
        'overlayColor': '#000', 
        'transitionIn' : 'elastic',
        'transitionOut' : 'elastic'
    });
    //$.fancybox($(this).html());
    return false;

  });



















