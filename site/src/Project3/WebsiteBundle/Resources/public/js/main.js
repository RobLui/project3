$(document).ready(function() {

    // Check aantal ingredienten
    var telIngredienten = function() {

        var hebik = $(".jQueryShopping:input:checked").length;
        $(".shoppinglisttext").text(hebik + (hebik === 1 ? " ingredient" : " ingredienten") + " in shoppinglijst");
        console.log("Ingredienten die ik heb = " + hebik);
    };
    $("#shoppinglistbind").on("click", telIngredienten);


    // Check on change -> log de waarde van de checkbox
    $('input:checked').change(function () {
        console.log($(this).val());
    });

    // Check op welke inputbox de grijswaarden mogen komen
    $('input:checkbox').change(function(){
        if($(this).is(':checked')) {
            if ($(this.closest('.stap').length != null)) {
                $(this).closest(".col-sm-12").addClass('greybox');
            }
        }
        else {
            $(this).closest(".col-sm-12").removeClass('greybox')
        }
    });


});
