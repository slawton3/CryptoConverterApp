$("#convButton").click(function(e){
    e.preventDefault();
    labelSwitch = $("#currLabel").html();
    if(labelSwitch === "Fiat to Crypto"){
        fromSymbol = document.getElementById("fromCurrency").value;
        toSymbol = document.getElementById("toCurrency").value;
    }
    else{
        toSymbol = document.getElementById("fromCurrency").value;
        fromSymbol = document.getElementById("toCurrency").value;
    }
    apiKey = "914ded2d3dbe96d6b1fa31c9c3884caf5a9d093a572de7c38dba8f99d2e0cfce"
    url = "https://min-api.cryptocompare.com/data/"
    queryString = "price?fsym="+fromSymbol+"&tsyms="+toSymbol+"&api_key="+apiKey;
    query = url+queryString;
    $.ajax({
        url: query,
        type: 'GET',
        success: callback,
        error: function(xhr, status, error) {
            err.innerHTML = "An AJAX error occured:"+"<br /> Error: " + error;
        }
    });

    function callback(res){
        $("#error").empty();
        $("#output").empty();
        console.log(res);
        currInput = $("#currInput").val();
        let curr = currInput.replace(/,/g, "");
        curr = parseInt(curr);
        if(!Number.isInteger(curr)){
            $("#error").css("color", "red").html("Error, please enter a valid number.");
        }
        else{
            output = (curr * res[toSymbol]);
            $("#output").css("color", "green").html(currInput + " " + fromSymbol + " is worth " + output.toFixed(4) + " in " + toSymbol + ".");
        }
    }
});