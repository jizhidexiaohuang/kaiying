$(function(){
    $('.nav>ul>li').each(function(i){
        $(this).hover(function(){
            $(this).addClass('active').siblings().removeClass('active');
            $(this).find('.menu').show();
        },function(){
            $(this).removeClass('active');
            $(this).find('.menu').hide();
        })
    })
})