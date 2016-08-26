/* Team Gallery accordion*/

$('.teams_grid_wrap li .tg_img a').click(function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    $this = $(this);
    if ($(this).closest('li').hasClass("isExpanded")) {
        $(this).closest('li').removeClass("isExpanded").addClass("closed");
    } else {
        $(this).closest('li').siblings().removeClass("isExpanded").addClass("closed");
        $(this).closest('li').removeClass("closed").addClass("isExpanded");
    }

    $(this).closest('li').siblings().find('.full_data').hide();

    $(this).closest('li').find('.full_data').stop(true, false, true).slideToggle(500);
    return false;
});


$('.close_btn').click(function (e) {
    e.preventDefault();
    e.stopImmediatePropagation();
    $(this).closest('li').find('.full_data').slideUp(500, function () {
        $('.teams_grid_wrap li').removeClass("isExpanded");
    });

});

$(document).keyup(function(e) {
    
     if (e.keyCode == 27) { // escape key maps to keycode `27`
   $('.full_data').slideUp(500, function () {
        $('.teams_grid_wrap li').removeClass("isExpanded");
    });
    }
});


/* Team Gallery accordion ends */

    $(function(){
    $(".dropdown").hover(            
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
                $(this).toggleClass('open');
                $('span', this).toggleClass("caret caret-up");                
            },
            function() {
                $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
                $(this).toggleClass('open');
                $('span', this).toggleClass("caret caret-up");                
            });
    });
    