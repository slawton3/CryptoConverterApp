<?php

    require_once ('index.php');

    head('Crypto Converter');

	body('Crypto Converter');

    $fiats = array("USD", "EUR", "JPY", "GBP", "AUD", "CAD", "CHF", "CNY", "SEK", "NZD");
    $cryptos = array("BTC", "ETH", "XRP", "ADA", "USDT", "BNB", "DOT", "UNI", "LTC", "DOGE");


    echo "<center><h2 style='background-color:#cae8ca; width: 80%; solid;'>Convert Crypto and Fiat</h2></center>";

    $convertForm = "<div id='calcContainer'>
                        <form>
                            <div class='form-row'>
                                <div class='col'>
                                    <label for='fromCurrency'>Select Currency</label>

                                    <input class='form-control' type='text' name='fromCurrency' id='fromCurrency' list='fromCurrencyList' />
                                    <datalist  id='fromCurrencyList'>";
            
                    foreach($fiats as $fiat){
                        $convertForm .= "<option value=".$fiat.">".$fiat."</option>";
                    }
                    
                    
                    $convertForm .= "</datalist>
                                </div>
                                <div class='col'>
                                    <label id='currLabel' for='switchCurrency'>Fiat to Crypto</label>
                                    <button class='form-control type='text' id='switchCurrency'><i class='fa fa-exchange fa-1x' style='margin-left: auto; margin-right: auto;'aria-hidden='true'></i></button>
                                </div>
                                <div class='col'>
                                <label for='toCurrency'>Select Crypto</label>
                                <input class='form-control' type='text' name='toCurrency' id='toCurrency' list='toCurrencyList' />
                                    <datalist  id='toCurrencyList'>";
            
                    foreach($cryptos as $crypto){
                        $convertForm .= "<option value='".$crypto."'>".$crypto."</option>";
                    }
            
            
                    $convertForm .= "</datalist>
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
  echo "<br /><br /><center><h2 style='background-color:#cae8ca; width: 80%; solid;'>Crypto Market Capitalization</h2></center>";
  echo "<div class='cryptohopper-web-widget' data-id='1'></div><script src='https://www.cryptohopper.com/widgets/js/script'></script>";
  //echo "<div style='width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 10%;'><iframe src='https://www.widgets.investing.com/top-cryptocurrencies?theme=lightTheme' width='100%' height='50%' frameborder='0' allowtransparency='true' marginwidth='0' marginheight='0'></iframe></div>";
  footer('Crypto Converter');

?>