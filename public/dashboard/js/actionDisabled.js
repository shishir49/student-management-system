$(document).ready(function(){
    $('button').on('click', function() {
        alert("All Actions are Disabled in Demo Mode");
    })

    $("form").submit(function(e){
        e.preventDefault();
    });
});