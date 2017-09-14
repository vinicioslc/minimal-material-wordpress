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

// retorna se o elemento é visivel
function isElementInViewport(elem) {
    var $elem = $(elem);

    // pega a posição do scroll na pagina
    var scrollElem = ((navigator.userAgent.toLowerCase().indexOf('webkit') != -1) ? 'body' : 'html');
    var viewportTop = $(scrollElem).scrollTop();
    var viewportBottom = viewportTop + $(window).height();

    // Pega posição do elemento na pagina.
    var elemTop = Math.round($elem.offset().top);
    var elemBottom = elemTop + $elem.height();
    // Offset para animação ser executada com atraso
    var offset = 200;

    return ((elemTop + offset < viewportBottom) && (elemBottom > viewportTop));
}

//Checa se é tempo de iniciar a animação.
function checkAnimation() {
    console.log('checking');
    // para cada item com a classe " scroll-animation" faça...
    var $elem = $('.scroll-animation').each(function (element) {
        // ja esta visivel ? faça-o
        if ($(this).hasClass('fade-in')) {
            console.log('have class');
            return;
        }
        if (isElementInViewport($(this))) {
            console.log('doesnt hav a class');
            $(this).addClass('fade-in');
        }
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

// quando o documento estiver pronto...
document.addEventListener('DOMContentLoaded', function () {

    window.scrollTo(0, 0);
    // Capture o evento de scroll
    $(window).scroll(function () {
        // checka se os items precisam ser animados
        checkAnimation();
    });

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
}, { passive: true });

