

        // $(document).ready(function(){
        // $("img").mouseover(function(){
        // $(".caption").addClass("dispaly-none");/*attr("top","0");*//*css("top", "0px");*/
        /* animate({top: "0px"}, 700);*/
        // });
        // $("img").mouseout(function(){
        //     $(".caption")./*removeAttr("top");*//*css("top", "");*/
        //     /* animate({top: "-270px"},700);*/
        // });
        /*$('.photo').hover(function(){
        $(this)
        .find('caption')
        .stop()
        .animate({top:'0px'};{duration:1600, easing:"easeOutBounce"});
        },function (){
        $(this)
        .find('.caption')
        .stop()
        .animate({top:''};{duration:1600, easing:"easeOutQuard"});
        });*/
        // });
        /* $(function(){
        $('i').hover(function(){
        $(this).animate({rotate: '+=90deg'}, 100);
        });
        $('i').mouseover(function() {
        $(this).rotate({ count:4, duration:0.6, easing:'ease-out' });
        });
        })*/

       

   

 $('.photo').mouseenter(function(){
            $('.caption').fadeIn();
        })
        $('.photo').mouseleave(function(){
            $('.caption').fadeOut();
        })