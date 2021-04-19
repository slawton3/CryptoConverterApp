<?php

    require_once ('index.php');

    head('Crypto News');

	body('Crypto News');

        echo "<br />";

        //Latest Crypto News articles widget
        echo "<center><h2 style='background-color:#cae8ca; width: 80%; solid;'>Latest Crypto News<h2></center><br />";
        echo '<div class="cryptohopper-web-widget" data-id="5" style="width: 80%; margin-left: auto; margin-right: auto; margin-bottom: 10%;"></div><script src="https://www.cryptohopper.com/widgets/js/script" width="100%" height="50%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" ></script></div>';
        

    footer('Crypto Converter');



?>