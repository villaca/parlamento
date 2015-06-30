$(function(){
    $('.sublista').click(function(){
        if($(this).closest('li').children('ul').is(':hidden')){
            $(this).closest('li').children('ul').show();
        }
        else if($(this).closest('li').children('ul').is(':visible')) {
            $(this).closest('li').children('ul').hide();
        }
    });

});
