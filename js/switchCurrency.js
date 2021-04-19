$("#switchCurrency").click(function(e){
    e.preventDefault();
    $("#error").empty();
    err = document.getElementById("error");
    labelSwitch = $("#currLabel").html();
    if(labelSwitch === "Fiat to Crypto"){
        $("#currLabel").html("Crypto To Fiat");
    }
    else{
        $("#currLabel").html("Fiat to Crypto");
    }
});