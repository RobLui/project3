$(document).ready(function() {

    var telIngredienten = function() {

        var hebik = $( "input:checked" ).length;
        $( ".shoppinglisttext" ).text( hebik + (hebik === 1 ? " ingredient" : " ingredienten") + " toegevoegd" );
        alert("Ingredienten die ik heb = " + hebik);

        };
        $( "#shoppinglistbind" ).on( "click", telIngredienten) ;

});
