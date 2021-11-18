(function($){
    function processForm( e ){
        $.ajax({
            url: 'app/model/m_pokedex.php',
            dataType: 'text',
            type: 'post',
            contentType: 'application/x-www-form-urlencoded',
            data: $(this).serialize(),
            /*success: function( data, textStatus, jQxhr ){
                $('#response pre').html( data );
            },*/
            success: function(data){
                console.log(data);
            }, 
            error: function( jqXhr, textStatus, errorThrown ){
                console.log( errorThrown );
            }
        });

        e.preventDefault();
    }

    $('#search_id_form').submit( processForm );
})(jQuery);