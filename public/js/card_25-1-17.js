var currentCard ,dropCard;
var smallWidth = 50, largeWidth=88;

var rightAudioElement = document.createElement('audio');
rightAudioElement.setAttribute('src', 'sound/clapping.mp3');

var wrongAudioElement = document.createElement('audio');
wrongAudioElement.setAttribute('src', 'sound/answer_incorrect.mp3');
wrongAudioElement.volume = 0.2;

function getQuestion(){

  $.ajax({
    url: BASE_URL+'/next-question',
    type:'POST',
    data:{'qus_id':$(".card-question.active").attr('data-card')},
    dataType:'JSON',
    success:function(response){
      $(".card-question.active").attr('data-card',response.id)
                                .attr('data-click',true);
      $(".question").html(response.description);
      $(".help-ans-p span").html(response.answer);
      
    }
    });
}
$(function(){

$("li.card").mouseover(function(){
        if(!$(this).hasClass("removeHover")){
        var html = '<div class="card-modal">';
        html += '<div class="modal-left">';
        html += '<img src="'+$(this).find('img').attr('src')+'" />'
        html += '</div>';
        html += '<div class="modal-right">';
        html += '<h2>I Have: <span class="modal-answer">'+$(this).attr('data-answer')+'</span></h2>'
        /*html += '<div class="modal-next-question">'+$(this).attr('data-question')+'</div>'*/
        html += '</div>'
        html += '</div>';
        $(".hover-modal").html(html);
        var pos = $(this).position();
        $(".hover-modal").show();
        var left = pos.left-($(".hover-modal").width()/3);
        var right = 0;
        if (left < 0) {
          left = 0 ;
        }
        $(".hover-modal").css({'top':pos.top-$(".hover-modal").height()-20,'left':left});
        }
});
$("li.card").mouseout(function(){
  $(".hover-modal").hide();
  $(".hover-modal").empty();
  })

      
getQuestion();


$(".help-btn").on('click',function(){
  $(".help-ans-p span").toggle();
})


    $(".card-container .card").draggable({
        revertDuration: 200,
        revert:function(event){
          if (dropCard != currentCard) {
            return !event;
            }
          },
       // helper: "clone",
        start: function( event, ui ) {
           currentCard = $(event.target).attr('data-card');
           $(event.target).css({'opacity':'0.5'});
           $(".hover-modal").hide();
          },
        stop:function(event,ui){
          $(event.target).css({'opacity':'1'})
        }
    
    });
    
    $( ".game-container li" ).droppable({
        over:function(event, ui){
            dropCard = $(event.target).attr('data-card');
            $(".hover-modal").hide();
        },
       drop:function(event,ui){
            checkAnswer(ui.draggable,event);
        }
    });
        
});
function checkAnswer(draggable, event) {
  var tryCount = Number($(event.target).attr('data-count'));
  $(event.target).attr('data-count',(tryCount+1));
  if (dropCard == currentCard) {
    $('.card[data-card='+currentCard+']').addClass('removeHover');
    //$('.card[data-card='+currentCard+'] img').addClass('removeHover12');
    rightAudioElement.play();  
     /*$(".card[data-card="+currentCard+"]").resizable({
            maxHeight: smallWidth,
            maxWidth: smallWidth,
            minHeight: smallWidth,
            minWidth: smallWidth,
          create: function( event, ui ) {
              $(event.target).find('img').attr('width',smallWidth).attr('height',smallWidth)
            }
      });*/
     
     draggable.position({
        my: "center",
        at: "center",
        of: $(".card-question.active"),
        using: function(pos) {
          $(this).css({'z-index':0});
          $(this).animate(pos, 200, "linear");
        }
      });
      draggable.draggable('option','revert',false); 
      draggable.draggable('option','disabled',true); 
      $(event.target).attr('data-success',true);
       
       
      var activequs  = $(".card-question.active");
      $(".card-question.active").next().attr('data-card',(Number(activequs.attr('data-card'))+1));
      activequs.removeClass('active');
      activequs.next().addClass('active');
      
     
      getQuestion();
      if(tryCount > 2) {
        $(".ans-panel span").html('There you go!');
      } else {
        $(".ans-panel span").html('Good Thinking!');  
      }
      
      $(".ans-panel .right").show();
      $(".ans-panel .wrong").hide();
      $(".ans-panel").fadeIn('slow');
      
      $(".help-ans-p span").hide();
       if ($(".card-question[data-success=true]").length == $(".card-question").length) {
         getScore();
       }
  }else{
      $(".ans-panel .right").hide();
      $(".ans-panel .wrong").show();
      $(".ans-panel").fadeIn('slow');
     wrongAudioElement.play(); 
     $(event.target).attr('data-success',false);
     draggable.draggable('option','revert',true);
     $(".ans-panel span").html('Not quite! Think hard!');
  }
  setTimeout(function(){
      $(".ans-panel").fadeOut('slow');
      $(".ans-panel span").empty();
  },2000);
}
function getScore(){
  var card = $(".card-question[data-success=true]");
  var score =0;
  $(".card-question[data-success=true]").each(function(){
    switch(Number($(this).attr('data-count'))){
      case 1:
        score +=10;
        break;
      case 2:
        score +=5;
        break;
      case 3:
        score +=1;
        break;
      default:
        score +=0;
        break;
     }       
  });
  window.location.href=BASE_URL+'/set-score/'+score;
}