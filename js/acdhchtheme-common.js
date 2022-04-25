
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
        if($( ".authors-list" ).hasClass( "closed" )) {
            $('.authors-list').removeClass('closed').addClass('opened');
            $('.display-all-authors > i').removeClass('fa-caret-down').addClass('fa fa-caret-up');            
        } else {
            $('.authors-list').removeClass('opened').addClass('closed'); 
            $('.display-all-authors > i').removeClass('fa-caret-up').addClass('fa fa-caret-down');
        }
    });
    
});
