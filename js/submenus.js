$('.submenu li').hide();
$('#header-menu li > .sub-menu').parent().hover(
    function(){
        $(this).children('.sub-menu').slideDown(200);
    },
    function () {
        $(this).children('.sub-menu').slideUp(200);
    }
);