// fetch track from last.fm API every 5 seconds

(function(){

    $( "#music" ).load(window.location.href + " #music ");

    setTimeout(arguments.callee, 5000);

})();