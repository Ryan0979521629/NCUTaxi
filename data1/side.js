
$(document).ready(function(){
    $("#room").on("click",function(){
        $("#sidebar").toggleClass("active");
        $(".fa-align-justify").toggleClass("fa-right-from-bracket");
    })
})