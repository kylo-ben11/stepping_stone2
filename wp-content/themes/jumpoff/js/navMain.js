/* js/navMain.js */

jQuery( document ).ready(function( $ ) {







    $('.navMain').dropit({
        beforeShow: function(){
            $('body').addClass('dropit-is-open');
        },
        afterLoad: function(){


            $( "<li class='js-subTitle'>Title</li>" ).prependTo( ".dropit-submenu" );

            $('.dropit-trigger > a').each(function () {



                $(this).parent().find('.js-subTitle').text($(this).text());


            });


            $( "<li class='js-closeSub'>Back</li>" ).prependTo( ".dropit-submenu" );

        },
        beforeHide: function(){
            $('body').removeClass('dropit-is-open');
        },
        /*afterHide: function(){
            $('.js-closeSub').remove();
        }*/

    });




    $('.navMain').before('<i class="js_navMain_trigger navMain_trigger fa fa-bars" aria-hidden="true"></i>');

    $('body').on('click', '.js_navMain_trigger', function(){
        $('body').toggleClass('navMain-open');
    });



});