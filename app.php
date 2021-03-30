<?php

    require_once ('index.php');

    head('Crypto Converter');

	body('Crypto Converter');

    $fiats = array("USD", "EUR", "JPY", "GBP", "AUD", "CAD", "CHF", "CNY", "SEK", "NZD");
    $cryptos = array("BTC", "ETH", "XRP", "ADA", "USDT", "BNB", "DOT", "UNI", "LTC", "DOGE");



    $convertForm = "<div id='calcContainer'>
                        <form>
                            <div class='form-row'>
                                <div class='col'>
                                    <label for='fromCurrency'>Select Currency</label>
                                    <select class='form-control' id='fromCurrency'>";
            
                    foreach($fiats as $fiat){
                        $convertForm .= "<option value=".$fiat.">".$fiat."</option>";
                    }
                    
                    
                    $convertForm .= "</select>
                                </div>
                                <div class='col'>
                                    <label id='currLabel' for='switchCurrency'>Fiat to Crypto</label>
                                    <button class='form-control type='text' id='switchCurrency'><i class='fa fa-exchange fa-1x' style='margin-left: auto; margin-right: auto;'aria-hidden='true'></i></button>
                                </div>
                                <div class='col'>
                                <label for='toCurrency'>Select Crypto</label>
                                <select class='form-control' id='toCurrency'>";
            
                    foreach($cryptos as $crypto){
                        $convertForm .= "<option value='".$crypto."'>".$crypto."</option>";
                    }
            
            
                    $convertForm .= "</select>
                                </div>
                            </div>
                            <div class='form-row'>
                                <div class='col'>
                                    <label for='currInput'>Value to Convert</label>
                                    <input class='form-control' type='text' id='currInput' placeholder='Ex: 1,000' />
                                </div>
                            </div>
                            <button type='submit' class='btn btn-primary' id='convButton'>Convert</button>
                            <p id='output'></p>
                            <p id='error'></p>
                        </form>
                    </div>";

  echo $convertForm;
  echo "<script src='js/apiCall.js'></script>";
  echo "<script src='js/switchCurrency.js'></script>";
  echo "<div style='width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 10%;'><iframe src='https://www.widgets.investing.com/top-cryptocurrencies?theme=lightTheme' width='100%' height='50%' frameborder='0' allowtransparency='true' marginwidth='0' marginheight='0'></iframe></div>";
  echo "<div id='footer'></div>";

?>