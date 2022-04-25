
$( document ).ready(function() {
    //record view display/hide long online content
    $('.display-all-online-access').click(function(e){
        e.preventDefault();
        if($( ".online-access-urls-list" ).hasClass( "closed" )) {
            $('.online-access-urls-list').removeClass('closed').addClass('opened');
            $('.display-all-online-access > i').removeClass('fa-caret-down').addClass('fa fa-caret-up');            
        } else {
            $('.online-access-urls-list').removeClass('opened').addClass('closed'); 
            $('.display-all-online-access > i').removeClass('fa-caret-up').addClass('fa fa-caret-down');
        }
    });
    
    $('.display-all-authors').click(function(e){
        e.preventDefault();
       
        if($(this).parent("div").parent().parent('.authors-list').hasClass( "closed" )) {
            $(this).parent("div").parent().parent('.authors-list').removeClass('closed').addClass('opened');
            $(this).children('i').removeClass('fa-caret-down').addClass('fa fa-caret-up');            
        } else {
            $(this).parent("div").parent().parent('.authors-list').removeClass('opened').addClass('closed'); 
            $(this).children('i').removeClass('fa-caret-up').addClass('fa fa-caret-down');
        }
    });
    
});
