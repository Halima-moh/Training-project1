$(document).ready(function(){
    var vid = document.getElementById("gossVideo"); 
    
    function playVid() { 
        vid.play(); 
    } 
    function pauseVid() { 
        vid.pause(); 
    } 
    $('.modal').click(function() {
        vid.pause();
    });
    $('#gossVideo').click(function(event) {
        event.stopPropagation();
    });
    });
    