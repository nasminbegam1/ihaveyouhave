
$(document).ready(function(){
    
    setTimeout(function () {
        $("#flashmessage").animate({opacity: 1.0}, 1000).fadeOut("900")
    }, 10000
    );
    
    $(".change_status_btn").click(function(ev){
         ev.preventDefault();
         var element = $(this);
         var link = $(element).attr('href');
         $.ajax({
            url : link,
            type: 'GET',
            success:function(response){
                $(element).parents('tr').find('.status_span').text(response);
            }
        });
    });
   
});


