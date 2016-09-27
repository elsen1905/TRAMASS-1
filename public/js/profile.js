 $(document).ready(function(){

    $("#left").click(function(){ 
        $(".line").animate({
        "left":"0%"
    },500);
       /* .css("border-bottom","2px solid #417630");
         $("#right").css("border-bottom","");*/
    $(".seed")
    $(".rightInfo")
    .hide(); 
    $(".leftInfo")
    .show();



  })

    $("#right").click(function(){
        $(".line").animate({
        "left":"50%"
    },500);
         /*$(this) 
        .css("border-bottom","2px solid gray");
        $("#left").css("border-bottom","#417630");*/
        $(".seed")
         $(".leftInfo").hide(); 
         $(".rightInfo").show();

    })


  

  

});
