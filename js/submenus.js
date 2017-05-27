$('#header-menu').hover(
    function(){
        $('.sub-menu li').this().slideDown();
    },
    function () {
        $('.sub-menu li').slideUp();
    }
);