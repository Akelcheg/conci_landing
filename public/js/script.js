$(document).ready(function () {

    var $win = $(window);
    var $lay = $('.scale-container');
    var baseSize = {
        w: 1366,
        h: 768
    };

    function updateScale() {

        var ww = $win.width();
        var wh = $win.height();
        var newScale = 1;

        // compare ratios
        if (ww / wh < baseSize.w / baseSize.h) { // tall ratio
            newScale = ww / baseSize.w;
        } else { // wide ratio
            newScale = wh / baseSize.h;
        }

        $lay.css('transform', 'scale(' + newScale + ',' + newScale + ')');
        /*
                console.log(newScale);*/
    }

    $(window).resize(updateScale);
    updateScale();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $("#get-started-send").click(function () {
        $.post("get-started",
            $("#get-started-form").serialize(), function (data) {
                console.log(data);
                $("p.error").hide();

                if (data['status'] == 0) {
                    $(".error").show();
                    $(".error").text(data['message']);
                } else {
                    $("p.error").hide();
                    $('#get-started-modal').modal('hide');
                    $("#dancing-modal").modal();
                }


            });
    });

    $('#phone_number').mask('(000) 000-0000');
});