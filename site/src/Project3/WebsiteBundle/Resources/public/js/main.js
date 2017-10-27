$(document).ready(function() {

    //GLOBALS
    var global_trigger = false;
    var can_activate_global_trigger = true;
    var counter = 0;

// CHECK INGREDIENTS

    // Check aantal ingredienten
    var telIngredienten = function() {

        var hebikniet = $(".jQueryShopping:input").length - $(".jQueryShopping:input:checked").length;
        // $(".shoppinglisttext").text(hebik + (hebik == 1 ? " ingredient" : " ingredienten") + " in shoppinglijst");
        // console.log("Ingredienten die ik niet heb = " + hebikniet);
        return hebikniet;
    };
////////////////


// GENERATED LIST TOGGLER

    // Activate the generated list
    var toggler = function () {
        // Check op dat er mag geklikt worden of niet
        if(can_activate_global_trigger && telIngredienten() > 0)
        {
            $('.generated').show();
            $('.generated').removeClass('hidden');
            $('.shoppinglist-info-text').addClass('hidden');

            global_trigger = true;
            can_activate_global_trigger = false;
        }

        if(!($(".jQueryShopping:input").length == $(".jQueryShopping:input:checked").length))
        {
            $('.shoppinglist-info-text').addClass('hidden');
        }

        return global_trigger;
    }
    $("#shoppinglistbind").on("click", toggler);
////////////////


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
                    counter++;
                }
                else
                {
                    $(this).removeClass("hide");
                    counter--;
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
                $('.all-ingredients-confirm').removeClass('hidden');
            }
            if(telIngredienten() != 0)
            {
                console.log(counter);
                can_activate_global_trigger = true;
                $('.generated').removeClass('hidden');
                $('.all-ingredients-confirm').addClass('hidden');
            }
        }

        if($(".jQueryShopping:input").length == $(".jQueryShopping:input:checked").length) {
            $('.all-ingredients-confirm').removeClass('hidden');
            $('.shoppinglist-info-text').addClass('hidden');
        }

        if(!($(".jQueryShopping:input").length == $(".jQueryShopping:input:checked").length))
        {
            $('.all-ingredients-confirm').addClass('hidden');
        }

        if($('.shoppinglist-content').hasClass('hide'))
        {
            $('.shoppinglist-info-text').removeClass('hidden');
        }

    });
////////////////


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
////////////////


// SHOPPINGLIST ARRAY OPSLAG

    // Voeg de ingredienten toe die je nog nodig hebt in het gerecht
    $('#addToShoppinglist').click(function() {
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

        // console.log(shoppingarray + getCurrentDate());
    });
////////////////


// CURRENT DATE

    // Geef de huidige datum terug
    function getCurrentDate() {
        var d = new Date();
        var day = d.getDate();
        var month = d.getMonth();
        var year = d.getFullYear();
        return day + "/" + month + "/" + year;
    }
////////////////


// SHOPPINGLIST TOGGLER

    // Toggle shoppinglist TRIGGER
    $('.shoppinglist-btn').on("click", function(e) {
        e.preventDefault();
        $('.bordered.container-white.shoppinglist-btn-spacing').first().toggleClass('active-color');
        $('.shoppinglist-toggle').trigger('click');
    });

    // Toggle shoppinglist TOGGLER
    $('.shoppinglist-toggle').on('click', function (e) {
        e.preventDefault();
        $('.shoppinglist-content').toggleClass('hide');
    });
////////////////


// EXTRA UITLEG HOMEPAGE TOGGLER

    // Activeer uitleg / disable uitleg
    $('.btn-toggle-extra-uitleg').on("click", function(e) {
        e.preventDefault();
        $('.uitleg-content').toggleClass('hidden');
    });
////////////////

// TIJDELIJKE SAVE STOP

    // Zet een timeout op het toevoegen van klaargemaakte gerechten (om duplicate errors te vermijden)
    $('.btn-klaargemaakt').on("click", function() {
        $('.btn-klaargemaakt').disable(true);
    });
////////////////


});
