$(document).ready(function() {

    //GLOBALS
    var global_trigger = false;
    var can_activate_global_trigger = true;

    // Check aantal ingredienten
    var telIngredienten = function() {

        var hebik = $(".jQueryShopping:input").length - $(".jQueryShopping:input:checked").length;
        // $(".shoppinglisttext").text(hebik + (hebik == 1 ? " ingredient" : " ingredienten") + " in shoppinglijst");
        // console.log("Ingredienten die ik niet heb = " + hebik);
        return hebik;
    };
//
//
//
//
//
//
// GENERATED LIST TOGGLER

    var toggler = function () {

        if(can_activate_global_trigger)
        {
            $('.generated').show();
            $('.generated').removeClass('hidden');
            $('.shoppinglist-info-text').addClass('hidden');

            global_trigger = true;
            can_activate_global_trigger = false;
        }

        return global_trigger;
    }
    $("#shoppinglistbind").on("click", toggler);

//
//
//
//
//
//
// SHOPPING LIST - SHOW & HIDE VALUES

    // Check on change -> log de waarde van de checkbox
    $('.jQueryShopping').change(function () {

        // waarde van het geklikte ingredient
        var ingredientvalue = $(this).val();

        // console.log("ingredient = " + ingredientvalue);

        //loopt over elk item in de shoppinglist array
        $( ".shoppinglist>li" ).each(function( index ) {

        var shoppinglistvalue = $( this ).text();

            // console.log( index + ": " + $( this).find('.info-ingredient')).text();
            if(shoppinglistvalue.match(ingredientvalue))
            {
                if(!$(this).hasClass('hide'))
                {
                    $(this).addClass("hide");
                }
                else
                {
                    $(this).removeClass("hide");
                }
            }
            // console.log("hetzelfde op plaats: " + index );
        });

        // Check of er op de knop gedrukt is & zich in de true staat bevind
        if(global_trigger)
        {
            // Als je geen ingredienten nodig hebt moet je niet op "maak shoppinglijst" kunnen drukken
            if (telIngredienten() == 0)
            {
                can_activate_global_trigger = false;
                $('.generated').addClass('hidden');
            }
            if(!telIngredienten() == 0)
            {
                can_activate_global_trigger = true;
                $('.generated').removeClass('hidden');
            }
        }

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

        // document.querySelector('.added').innerHTML = shoppingarray.toString();
        $(".ingredientitems").text(shoppingarray.toString());
        $(".datumAangemaakt").text(getCurrentDate);

        console.log(shoppingarray + getCurrentDate());
    });
//
//
//
//
//
//
// CURRENT DATE

    function getCurrentDate() {
        var d = new Date();
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        return day + "/" + month + "/" + year;
    }

//
//
//
//
//
//
// SHOPPINGLIST TOGGLER
    $('.shoppinglist-btn').on("click", function(e) {
        e.preventDefault();
        $('.bordered.container-white.shoppinglist-btn-spacing').first().toggleClass('active-color');
        $('.shoppinglist-toggle').trigger('click');
    });

    $('.shoppinglist-toggle').on('click', function (e) {
        e.preventDefault();
        $('.shoppinglist-content').toggleClass('hide');
    });
});
