$(document).ready(function() {

    // Check aantal ingredienten
    var telIngredienten = function() {

        var hebik = $(".jQueryShopping:input").length - $(".jQueryShopping:input:checked").length;
        // $(".shoppinglisttext").text(hebik + (hebik == 1 ? " ingredient" : " ingredienten") + " in shoppinglijst");
        // console.log("Ingredienten die ik heb = " + hebik);

        $('.generated').show();
        $('.generated').removeClass('hidden');

    };
    $("#shoppinglistbind").on("click", telIngredienten);
//
//
//
//
//
//
// SHOPPING LIST - SHOW & HIDE VALUES

    // Check on change -> log de waarde van de checkbox
    $('input:checked').change(function () {

        // waarde van het geklikte ingredient
        var ingredientvalue = $(this).val();
        // console.log("ingredient = " + ingredientvalue);


        //loopt over elk item in de shoppinglist array
        $( ".shoppinglist>li" ).each(function( index ) {

        var shoppinglistvalue = $( this ).text();

            // console.log( "shoppinglist = " + shoppinglistvalue);

            // console.log( index + ": " + $( this).find('.info-ingredient')).text();
            if(shoppinglistvalue.match(ingredientvalue))
            {
                if($(this).hasClass('hide'))
                {
                    $(this).removeClass("hide");
                }
                else
                {
                    $(this).addClass("hide");
                }
                // console.log("hetzelfde op plaats: " + index );
            }
        });
    });
//
//
//
//
//
//
// STAPPEN

    // Check op welke inputbox de grijswaarden mogen komen
    $('input:checkbox.stapnummer').change(function(){
        if($(this).is(':checked')) {
            if ($(this.closest('.stap').length > 0)) {
                $(this).closest(".col-sm-12").addClass('greybox');
            }
        }
        else {
            $(this).closest(".col-sm-12").removeClass('greybox')
        }
    });

//
//
//
//
//
//
// SHOPPINGLIST ARRAY OPSLAG

    $('#addToShoppinglist').click(function()
    {
        var shoppingarray = [];

            $( ".shoppinglist>li" ).each(function( index ) {
                if (!$(this).hasClass("hide")) {
                    shoppingarray.push($(this).text());
                    // console.log(index + $(this).text());
                }
            });
            shoppingarray = shoppingarray.join('-');

        console.log(shoppingarray + getCurrentDate());
    });


    function getCurrentDate() {
        var d = new Date();
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        return day + "/" + month + "/" + year;
    }


    // for li item in shoppinglist class
    //      -> name gerecht
    //      -> save current date
    //      -> push to database on click shoppinglist
    //      -> add mail ding in view


});
