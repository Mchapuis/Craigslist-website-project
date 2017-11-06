$(function(){
    $("#province").on("change", function(){
        var val = $(this).val();
        var sub = $("#sub-choice");
        $("option", sub).filter(function(){
            if (
                 $(this).attr("data-group") === val 
              || $(this).attr("data-group") === "SHOW"
            ) {
                $(this).show();
            } else {
                $(this).hide();
            }
        });
    });
    $('#province').trigger("change");
});