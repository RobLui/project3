$(document).ready(function() {

    // Check aantal ingredienten
    var telIngredienten = function() {

        var hebik = $(".jQueryShopping:input:checked").length;
        $(".shoppinglisttext").text(hebik + (hebik === 1 ? " ingredient" : " ingredienten") + " in shoppinglijst");
        console.log("Ingredienten die ik heb = " + hebik);
    };



    // Check on change -> log de waarde van de checkbox
    $('input:checked').change(function () {
        console.log($(this).val());
    });



    $('input:checkbox').change(function(){
        if($(this).is(':checked'))
        // $(this).parent().parent().parent().addClass('greybox');
        $(this).closest(".col-sm-12").addClass('greybox');
        else
        $(this).closest(".col-sm-12").removeClass('greybox')
        // $(this).parent().parent().parent().removeClass('greybox')
    });


    // Tel ingredienten die ik heb
    $("#shoppinglistbind").on("click", telIngredienten);

});
