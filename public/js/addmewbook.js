$('input[name="Sale"]').click(function() {
    if($('input[name="Sale"]').is(':checked')) { 
        if($(this).val() === "yes"){
            $('input[id="inputnewPrice"]').removeAttr( "disabled" );
        } else{
            $('input[id="inputnewPrice"]').attr( "disabled","" );
        }
    }
 });


  
