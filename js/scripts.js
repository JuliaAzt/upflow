$(document).ready(function(){
    
    /* Verifica e cria numero de campos*/
    $("#gerar-campos").on('click', function() {
        
        $("span.aviso1").hide();
        $("span.aviso2").hide();
        $("#campos").empty();
        $("#resultado").val("");

        var num = parseInt($("#numero-campos").val());
        if (num >= 2){
            if (num<=500) {
                $("#campos").html(function() {
                    for (var i = 0; i < num; i++) {
                       $( "#campos" ).append('<input type="number" class="form-control field" required>');
                    }
                });
            }else{$("span.aviso2").show();}
        }
        else {$("span.aviso1").show();}

    });

    
    $("#soma").on('click', function() {
        var soma=0;
       $("#campos" ).children().each(function() {
            soma = soma + parseFloat($(this).val()) ;
        });
       $("#resultado").val(soma);
    });

    $("#subtracao").on('click', function() {
        var sub = 2*(parseFloat($("#campos").children(0).val()));
       $("#campos" ).children().each(function() {
            sub = sub - parseFloat($(this).val());
        });
       $("#resultado").val(sub);
    });

     /* Esvazia os campos do formulario */
    $("#limpar").on('click', function() {
       $("#campos").empty();
       $("#resultado").val("");
       $("#numero-campos").val("");
    });

    /* Verifica se todos os campos foram preenchidos antes de liberar os botoes*/
    $("#campos").bind('click keyup', function() {
        var empty = false;
        $("input.field").each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });
        if (empty) {
            $('#soma').attr('disabled', 'disabled'); 
            $('#subtracao').attr('disabled', 'disabled'); 
        } else {
            $('#soma').removeAttr('disabled'); 
            $('#subtracao').removeAttr('disabled'); 
        }
    });

});