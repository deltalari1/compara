$(document).ready(function(){
    $(".fa-heart").click(function(){
        $(this).toggleClass("fa-regular fa-solid");
        $(this).toggleClass("text-dark text-danger");
    });
});