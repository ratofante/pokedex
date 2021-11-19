(function($){
    function processForm( e ){
        /*$.ajax({
            url: 'app/model/m_pokedex.php',
            dataType: 'text',
            type: 'get',
            contentType: 'json',
            data: $("id_search").serialize(),
            success: function(data){
                console.log( data );
            }, 
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });*/

        e.preventDefault();
    }

    $('#search_id_form').submit( processForm );
})(jQuery);
