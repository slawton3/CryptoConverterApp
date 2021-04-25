<?php

    require_once ('index.php');

    head('About Crypto');

	body('About Crypto');

    // Why did we create this platform?
echo "<center><h2 style='background-color:#cae8ca; width: 80%; solid;'>Why did we create this platform?</h2>";
echo "<h5 class='text-center' style='width: 80%;'>The COVID-19 pandemic has brought global and domestic finance into the spotlight.  With stimulus checks and other stimulus payments being given to individuals, businesses and other foreign entities, financial education is more important than ever. We hope that this platform can help people educate themselves in cryptocurrency.</h5>";

//Page breaks
echo "<br />";
echo "<br />";

// What is cryptocurrency?
echo "<h2 style='background-color:#cae8ca; width: 80%; solid;'>What is cryptocurrency?</h2>";
echo "<h5 class='text-center' style='width: 80%;'>Cryptocurrency is a digital currency that is secured by cryptography. Cryptocurrencies are comprised of decentralized networks based on blockchain technology—a distributed ledger enforced by a network of computers. What separates cryptocurrency from fiat currencies more widely used today is that they are generally not issued by any central authority. This renders cryptocurrencies theoretically immune to government interference or manipulation.</h5>";

//Page breaks
echo "<br />";
echo "<br />";

//Why are cryptocurrencies so popular?
echo "<h2 style='background-color:#cae8ca; width: 80%; solid;'>Why are cryptocurrencies so popular?</h2>";
echo "<h5 class='text-center' style='width: 80%;'>
        <ul style='list-style:none;'>
        <li>Supporters view cryptocurrencies as the currency of the future. Because cryptocurrencies are not associated or tied to world governments, they have the potential to remain stable throughout events that may plague a specific government.</li>
        <br /><li>Some supporters are drawn to the fact that cryptocurrency removes the notion of central banks from managing money. There are also very few fees associated with using cryptocurrency, and can be a more cost effective way of managing your money. </li>
        <br /><li>Other supports value the technology behind cryptocurrencies, the blockchain, because of its decentralized processing and recording system. This enables cryptocurrency exchanges to be more anonymous and secure than traditional payment systems. </li>
        <br /><li>Some speculators have no interest in the currencies’ long-term acceptance as a way to move money, but buy into cryptocurrency stocks solely because they have dramatically increased in value over the past couple years. </li>
        </ul>
        </h5></center>";

//Page breaks
echo "<br />";

//Image Carousel
$imagecarousel = "<div id='image-slider' class='splide'>
                    <div class='splide__track'>
                        <ul class='splide__list'>
                            <li class='splide__slide' role='button' tabindex='0'>
                                <img src='Images/Crypto1.jpg' alt='Thumbnail 01'>
                            </li>
                            <li class='splide__slide' role='button' tabindex='0'>
                                <img src='Images/Crypto2.jpg' alt='Thumbnail 02'>
                            </li>
                            <li class='splide__slide' role='button' tabindex='0'>
                                <img src='Images/golden_bitcoin.jpg' alt='Thumbnail 02'>
                            </li>
                            <li class='splide__slide' role='button' tabindex='0'>
                                <img src='Images/gold_coin_bitcoin.jpg' alt='Thumbnail 02'>
                            </li>
                            <li class='splide__slide' role='button' tabindex='0'>
                                <img src='Images/star_wars_bitcoin.jpg' alt='Thumbnail 02'>
                            </li>
                        </ul>
                    </div>
                </div>";


echo $imagecarousel;
echo "<script src='js/imageCarousel.js'></script>";



    footer('Crypto Converter');


?>