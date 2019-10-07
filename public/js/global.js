for (let i = 1; i < 18; i++) {
    $("[name=check" + i + "]").click(function() {
        if ($(this).val() == "true") {
            $("[name=" + i + "]").css("visibility", "hidden");
            $(this).val("false");
        } else {
            $("[name=" + i + "]").css("visibility", "visible");
            $(this).val("true");
        }
    });
}
