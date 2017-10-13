document.addEventListener('DOMContentLoaded', function () {
    
    $(".card-category > a").removeAttr("href");
    $('body > #fademain').animate(
        {
            opacity: -1,
        },
        1000,
        function () {
            $(this).remove();
        });
        AddFadeToSidebar();
        window.scrollTo(0, 0);
}, { passive: true });

//Animação ao abrir link            
function openPage(value) {
    
    var t = $('#menuButton').prop('checked', false);
    console.log(t);
    $('body').prepend('<div id="fademain" style="z-index: 4; opacity : 0; position : fixed; height : 100vh; width:100vw; background:white;"></div>')
    $('body > #fademain').animate(
        {
            opacity: 2,
        },
        1000,
        function () {
            window.open(value, "_self");
        });
}

    function AddFadeToSidebar() {
        var elements = $('a');
        elements.each (function (obj, $val) {
            var link = $($val).attr("href");
            $($val).click(function () { openPage(link); });
            $($val).removeAttr('href').css('cursor', 'pointer');
        });
}