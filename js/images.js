$(document).ready(function(){
    function getAbsolutePath() {
        var loc = window.location;
        var pathName = loc.pathname.substring(0, loc.pathname.lastIndexOf('/') + 1);
        return loc.href.substring(0, loc.href.length - ((loc.pathname + loc.search + loc.hash).length - pathName.length));
    }
    

    $('img').click(function (){
        var ruta= getAbsolutePath();
        window.location.href = ruta+'alternativa.php';
    });
    $('img').hover(function (){
        $(this).css({"cursor":"pointer"})
    });
})

