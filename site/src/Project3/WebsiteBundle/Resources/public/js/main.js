$(document).ready(function() {

    var telIngredienten = function() {

        var hebik = $("input:checked").length;
        $(".shoppinglisttext").text(hebik + (hebik === 1 ? " ingredient" : " ingredienten") + " in shoppinglijst");
        // alert("Ingredienten die ik heb = " + hebik);
    };




    // Check on change
    $('input:checked').change(function () {
        console.log($(this).val());
    })


    $('input:checkbox').change(function(){
        if($(this).is(':checked'))
        // $(this).parent().parent().parent().addClass('greybox');
        $(this).closest(".col-sm-12").addClass('greybox');
        else
        $(this).closest(".col-sm-12").removeClass('greybox')
        // $(this).parent().parent().parent().removeClass('greybox')
    });


    // add box if checked
    // $('input:checkbox').change(function(){
    //     if($(this).is(":checked")) {
    //         $('.stap').addClass("greybox");
    //     } else {
    //         $('.stap').removeClass("greybox");
    //     }
    // });

    //
    // $('input[type=checkbox]').each(function () {
    //     if (this.checked) {
    //         console.log($(this).val());
    //     }
    // });

    // Tel ingredienten die ik heb
    $("#shoppinglistbind").on("click", telIngredienten);

});
