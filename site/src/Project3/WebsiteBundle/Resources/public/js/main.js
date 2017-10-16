$(document).ready(function() {

    var telIngredienten = function() {

        var hebik = $( "input:checked" ).length;
        $( ".shoppinglisttext" ).text( hebik + (hebik === 1 ? " ingredient" : " ingredienten") + " in shoppinglijst" );
        // alert("Ingredienten die ik heb = " + hebik);
    };






    // Tel ingredienten die ik heb
    $( "#shoppinglistbind" ).on( "click", telIngredienten) ;

});
