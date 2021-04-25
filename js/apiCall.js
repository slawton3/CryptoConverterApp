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
    keyArray = ['5d05c6dee6a858a4b6e6897b9f0649e37acd714afe1abde8758d7d1ad981b120'
                , 'f5dfe2277813d5a6315ea255542173df978407c5d0a255a587759ff27ffd0fbd'
                , 'B4bbc00382fdccb3e1c111f9f7b597d038457b09ae0f10a05a0ed705e8938669'
                , 'c20878160bd6153399798fae885acf580032a2907e67101e5cfe083099dff3b4'
                , '7902ec0d4328a397e4237013a20db75a2be4b3bb88cd8bdab0eca5f2d6a4ca81'
                , '996c48b98b6d2dabc31614fde221dcbae7731d4cc8b860a8b0b469d1b24846bb'
                , '9320f448ed3604d020dd0c636d5c8e5d726228f3be29a590bc31b274b5eb91ec'
                , 'dbd3fcba1af8abf313569a136e7691157fd65b593ab350a1669cc9d7a7cf1a5d'];

    apiKey = "e89c4ed8536037b97dd7229e562490ce50e7173ef85ef4884d00110479d0deed"
    url = "https://min-api.cryptocompare.com/data/"
    queryString = "price?fsym="+fromSymbol+"&tsyms="+toSymbol+"&api_key="+apiKey;
    query = url+queryString;
    console.log(query);
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