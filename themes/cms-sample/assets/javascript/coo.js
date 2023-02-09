$(function(){
    var $li = $('ul.header li');
        $($li. eq(0) .addClass('active').find('a').attr('href')).siblings('.maincc').hide();
    
        $li.click(function(){
            $($(this).find('a'). attr ('href')).show().siblings ('.maincc').hide();
            $(this).addClass('active'). siblings ('.active').removeClass('active');
        });
    });








        









