$(document).ready(function(){
    $("#seguir").click(function(){
        if ($("#seguir").val() === "Seguir"){
            $("#seguir").val("Seguindo");
        } else {
            $("#seguir").val("Seguir");
        }
    });
});

$(document).ready(function(){
    $(".fa-heart").click(function(){
        $(this).toggleClass("fa-regular fa-solid");
        $(this).toggleClass("text-dark text-danger");
    });
});