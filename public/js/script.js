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
});