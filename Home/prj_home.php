<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./prj_home.css">
    <link rel="stylesheet" href="./prj_header.css">
    <link rel="icon" type="image/x-icon" href="../Images/imgHome/LogoSito.png">
    <script src="../Home/prj_home.js" type="text/javascript" defer></script>
    <script src="../Home/prj_header.js" type="text/javascript" defer></script>
    <title>Train Travel Advisor</title>
</head>
<body>
    <?php require("./prj_header.php"); ?>
    <div class="video">
    <video src="../Images/imgHome/video_sfondo2.mp4" id="BackgroundVideo" autoplay muted loop>
    </video>
    </div>
    <div class="content">
        <?php
        if(isset($_SESSION['username'])){
            //utente loggato
            ?>
            <h1>Benvenuto <?php echo($_SESSION['username'])?></h1>
            <h2>Compila subito il form e scopri qual è il viaggio perfetto per te</h2>
            <a href="../Form/prj_form.php" style="text-decoration: none;">
                <button class="btn">COMPILA ORA!</button>
            </a>
        </div>
        <?php
        }else{
            ?>
            <h1>Benvenuto</h1>
            <h2>Compila subito il form e scopri qual è il viaggio perfetto per te</h2>
            <a href="../Form/prj_form.php" style="text-decoration: none;">
                <button class="btn">COMPILA ORA!</button>
            </a>
        </div>
            <?php
        }
        ?>
    

    <div class="travel-adv">
        <img class="icon" src="../Images/imgHome/baggage.jpg" alt="iconZaino">
        <div class="zaino50L">
            <a href="https://www.decathlon.it/p/zaino-viaggio-travel-100-50-litri-nero/_/R-p-6561?mc=8735043" target="_blank"><img src="../Images/imgHome/zaino2.jpg" class="zoom" alt="zaino50L"></a>
            <p>L'interrail è un viaggio estremamente emozionante e avventuroso, se viene fatto con le giuste attrezzature e il giusto equipagiamento, infatti il nostro team ti consiglia di viaggiare leggeri!<br>
                Esisto una miriade di attrezzature adatte, e proprio per questo, ci si può ritrovare spaesati dalla moltitudine di scelte che il mercato ci presenta d'avanti. 
                Ma anche <br>in questo caso il nostro team viene in tuo soccorso!!!<br><br><br>Per un viaggio di 3 settimane circa, ti consigliamo di visitare 
                <a href="https://www.decathlon.it/p/zaino-viaggio-travel-100-50-litri-nero/_/R-p-6561?mc=8735043"target="_blank">questo link</a>, che ti riporterà direttamente allo 
                zaino migliore per la tua avventura!
            </p>
        </div>
        <div class="zaino30L">
            <a href="https://www.amazon.it/SKYSPER-Ultraleggero-Ripiegabile-Riflettenti-ISHE30-Grigio/dp/B0BKG7HK4L/ref=sr_1_5?dib=eyJ2IjoiMSJ9.4uSEQ7zdR1yLHdpAc0Cs1uphzz7ckmrQSSKqzLsmGrRk_WqznZj4g9azxmDB77LB1Cl7nHTT2O2rnsBJ3yun_8EMfrWbhBEhW3HXWF6lmQ7QnbqknxCvl5jzAIzH2yTZLDUzNCbBpCVfPWnqy5O0oQ-50Z5KfR5_2stl0e2WM9YSiWepbIGPjXyiV4mMUWqYFEWt8poVNT8OQsLZL3WqwaJbd1ZVZSe81nkvFPgjuWInT8VUOQA3mhQ5oxMI8ajADzIhf8kauXk1HgvTMKtBFPHVVxEV1x0RMiAjYpXuu8k.w2QM8xy0fgUdOTX8PXrp2xVdS2h5JnfRbkLKKBktHoM&dib_tag=se&keywords=zaino%2Bda%2Btrekking%2B30%2Blitri&qid=1708507106&sr=8-5&th=1" target="_blank"><img class="zoom2" src="../Images/imgHome/zaino30L.png" alt="zaino30L"></a>
            <p>Non sempre è necessario uno zaino ultra capiente, in questo caso, visita <a href="https://www.amazon.it/SKYSPER-Ultraleggero-Ripiegabile-Riflettenti-ISHE30-Grigio/dp/B0BKG7HK4L/ref=sr_1_5?dib=eyJ2IjoiMSJ9.4uSEQ7zdR1yLHdpAc0Cs1uphzz7ckmrQSSKqzLsmGrRk_WqznZj4g9azxmDB77LB1Cl7nHTT2O2rnsBJ3yun_8EMfrWbhBEhW3HXWF6lmQ7QnbqknxCvl5jzAIzH2yTZLDUzNCbBpCVfPWnqy5O0oQ-50Z5KfR5_2stl0e2WM9YSiWepbIGPjXyiV4mMUWqYFEWt8poVNT8OQsLZL3WqwaJbd1ZVZSe81nkvFPgjuWInT8VUOQA3mhQ5oxMI8ajADzIhf8kauXk1HgvTMKtBFPHVVxEV1x0RMiAjYpXuu8k.w2QM8xy0fgUdOTX8PXrp2xVdS2h5JnfRbkLKKBktHoM&dib_tag=se&keywords=zaino%2Bda%2Btrekking%2B30%2Blitri&qid=1708507106&sr=8-5&th=1" target="_blank">questo link</a>, o clicca comodamente sull'immagine per andare direttamente al sito</p>
        </div>
        <img class="icon" src="../Images/imgHome/casual-t-shirt-.png" style="padding-bottom: 100px;" alt="iconTSHIRT">
        <div class="scarpe">
            <a href="https://www.zalando.it/reebok-work-n-cushion-scarpe-da-camminata-vector-navypure-grey-3ftwr-white-re542a0qj-k11.html" target="_blank"><img src="../Images/imgHome/scarpe.png" class="zoom3" alt="scarpe"></a>
            <p>Altro aspetto da non sottovalutare sono gli indumenti, risulteranno fondamentali per affrontare il viaggio in tutta comodità, qualsiasi sia il periodo in cui viaggerai:
            <br><br>Di seguito ti forniamo delle ottime scarpe rapporto qualità prezzo per sostenere al meglio le tue lunghe camminate, senza risentirne a livello muscolare! 
            </p>
        </div>
        <div class="giubbotto">
            <a href="https://www.decathlon.it/p/mp/therm-ic/giacca-da-uomo-riscaldata-e-tecnica-con-batteria-powerbank-powerjacket-speed/_/R-p-e75d70a8-9578-48ba-9652-6a86e1d978ff?mc=e75d70a8-9578-48ba-9652-6a86e1d978ff_c1.c61&c=nero_rosso" target="_blank"><img src="../Images/imgHome/giacca.png" class="zoom4" alt="giubbotto"></a>
            <p>Se deciderai di partire in inverno un indumento che non può mancare sarà il giubbotto, quest'ultimo dovrà avere determinate caratteristiche, come la resistenza al freddo. Il nostro team ti propone la seguente scelta:</p>
        </div>
        <img class="icon" src="../Images/imgHome/valuta-icon.png" alt="iconValuta">
        <div class="valuta">
        <p>Ovviamente non in ogni paese dell'europa si può pagare con l'euro. Ti può essere utile una lista dei paesi in cui dovrai fare il cambio valuta:</p>
                <div class="nation">
                    <div class="text">Svizzera</div>
                    <div class="image"><img src="../Images/imgHome/icons8-switzerland-96.png" style="width: 33px; height: 33px" alt="svizzera"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Franco</div>
                    <div class="image"><img src="../Images/imgHome/icons8-swiss-franc-96.png" alt="valuta-nazione"></div>
                </div>  
                <div class="nation">
                    <div class="text">Gran Bretagna</div>
                    <div class="image"><img src="../Images/imgHome/icons8-great-britain-96.png" style="width: 33px; height: 33px" alt="GranBretagna"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Sterlina</div>
                    <div class="image"><img src="../Images/imgHome/icons8-pound-sterling-96.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Norvegia</div>
                    <div class="image"><img src="../Images/imgHome/icons8-norway-96.png" style="width: 33px; height: 33px" alt="Norvegia"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Corona norvegese</div>
                    <div class="image"><img src="../Images/imgHome/icons8-swedish-krona-96.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Svezia</div>
                    <div class="image"><img src="../Images/imgHome/icons8-sweden-96.png" style="width: 33px; height: 33px" alt="Svezia"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Corona svedese</div>
                    <div class="image"><img src="../Images/imgHome/icons8-swedish-krona-96.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Danimarca</div>
                    <div class="image"><img src="../Images/imgHome/icons8-denmark-96.png" style="width: 33px; height: 33px" alt="Danimarca"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Corona danese</div>
                    <div class="image"><img src="../Images/imgHome/icons8-swedish-krona-96.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Polonia</div>
                    <div class="image"><img src="../Images/imgHome/icons8-poland-96.png" style="width: 33px; height: 33px" alt="Polonia"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Zloty polacco</div>
                    <div class="image"><img src="../Images/imgHome/icons8-zloty-96.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Ungheria</div>
                    <div class="image"><img src="../Images/imgHome/icons8-hungary-96.png" style="width: 33px; height: 33px" alt="Ungheria"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Fiorino ungherese</div>
                    <div class="image"><img src="../Images/imgHome/icons8-business-96.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Bosnia</div>
                    <div class="image"><img src="../Images/imgHome/icons8-bosnia-and-herzegovina-96.png" style="width: 33px; height: 33px" alt="Bosnia"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Marco bosniaco</div>
                    <div class="image"><img src="../Images/imgHome/apple-touch-icon.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Serbia</div>
                    <div class="image"><img src="../Images/imgHome/icons8-serbia-96.png" style="width: 33px; height: 33px" alt="Serbia"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Dinaro serbo</div>
                    <div class="image"><img src="../Images/imgHome/serbiandinar1.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Romania</div>
                    <div class="image"><img src="../Images/imgHome/icons8-romania-96.png" style="width: 33px; height: 33px" alt="Romania"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">leu romeno</div>
                    <div class="image"><img src="../Images/imgHome/leurumeno.jpg" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Bulgaria</div>
                    <div class="image"><img src="../Images/imgHome/icons8-bulgaria-96.png" style="width: 33px; height: 33px" alt="Bulgaria"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Lev bulgaro</div>
                    <div class="image"><img src="../Images/imgHome/icons8-bulgaria-value-96.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Macedonia del nord</div>
                    <div class="image"><img src="../Images/imgHome/icons8-macedonia-96.png" style="width: 33px; height: 33px" alt="Macedonia del nord"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Dinaro macedone</div>
                    <div class="image"><img src="../Images/imgHome/serbiandinar1.png" alt="valuta-nazione"></div>
                </div>
                <div class="nation">
                    <div class="text">Turchia</div>
                    <div class="image"><img src="../Images/imgHome/icons8-turkey-96.png" style="width: 33px; height: 33px" alt="Turchia"></div>
                    <div class="image"><img src="../Images/imgHome/spazio.png" alt="spazio"></div>
                    <div class="text">Lira turca</div>
                    <div class="image"><img src="../Images/imgHome/simbololiraturca2.jpg" alt="valuta-nazione"></div>
                </div>
        </div>
    </div>
    <div class="link">
        <h2 style="text-align: center; padding-top: 25px">Link utili per viaggiare</h2>
        <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="slide-container">
                <div class="numbertext">1 / 6</div>
                <a href="https://www.interrail.eu/it" target="_blank">
                    <img src="../Images/imgHome/interrail_logo.jpg.png" alt="interrailLogo">
                </a>
                <div class="textEU">Interrail Eurail è il sito ufficiale per acquistare il pass europeo,<br> in modo da viaggiare in tutta calma e sicurezza</div>
            </div>
        </div>
           
        <div class="mySlides fade">
            <div class="slide-container">
                <div class="numbertext">2 / 6</div>
                <a href="https://www.trivago.it/" target="_blank">
                    <img class="trivago" src="../Images/imgHome/trivago.jpg" alt="TrivagoLogo">
                </a>
                <div class="textTR">Trivago è uno dei migliori siti per la prenotazione di hotel e appartamenti in cui soggiornare, durante il tuo viaggio</div>
            </div>
        </div>

        <div class="mySlides fade">
            <div class="slide-container">
                <div class="numbertext">3 / 6</div>
                <a href="https://www.airbnb.it/" target="_blank">
                    <img src="../Images/imgHome/airbnb_logo.jpg" alt="airbnbLogo">
                </a>
                <div class="textBNB">Airbnb offre l'opzione alternativa a Trivago, soprattutto se si punta a risparmiare qualche euro a discapito della comodità</div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="slide-container">
                <div class="numbertext">4 / 6</div>
                <a href="https://www.trenitalia.com/it.html" target="_blank">
                    <img src="../Images/imgHome/trenITA.jpg" alt="TreniITAlogo">
                </a>
                <div class="textTRIT">Trenitalia, ferrovie dello stato italiano. Sito fondamentale per controllare l'orario dei treni da usufruire, partendo ovviamente dall'Italia</div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="slide-container">
                <div class="numbertext">5 / 6</div>
                <a href="https://www.thetrainline.com/it/treni/europa" target="_blank">
                    <img src="../Images/imgHome/trainline_logo.jpg" alt="TrainlineLogo">
                </a>
                <div class="textTRLine">Trainline, uno dei siti migliori per gli orari dei treni in tutta europa</div>
            </div>
        </div>
        <div class="mySlides fade">
            <div class="slide-container">
                <div class="numbertext">6 / 6</div>
                <a href="https://www.tripadvisor.it/" target="_blank">
                    <img class="" src="../Images/imgHome/TripAd_logo.jpg" alt="TripADVlogo">
                </a>
                <div class="textADV">Tripadvisor, sito in cui potrete trovare recensioni accurate su ogni paese e regione</div>
            </div>
        </div>
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>
    <div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>
    </div>
    <div class="coupon">

        <?php
            if(isset($_SESSION['authorized'])){
                ?>
                    <div class="thanks">
                        <div>PER RINGRAZIARTI DELLA FIDUCIA CHE HAI RIPOSTO NEL NOSTRO TEAM, REGISTRANDOTI AL SITO <br> ECCO A TE DEI COUPN UTILIZZABILI NEI SITI A NOI AFFILIATI:</div>
                        <div class="gridContainer">
                            <div class="titolo">
                                <img src="../Images/imgHome/icons8-amazon-96.png" class="logoCoupon" alt="amazonLogo">
                            </div>
                            <div class="contenuti">
                                <div style="text-align: center;">COUPON AMAZON DA 30€</div>
                                <div style="text-align: center;">COUPON AMAZON DA 30€ <br> SOLO PER GLI INDUMENTI</div>
                                <div style="text-align: center;">XcVZN30</div>
                            </div>
                        </div>
                        <div class="gridContainer">
                            <div class="titolo">
                                <img src="../Images/imgHome/brand-zalando.243x256.png" class="logoCoupon" alt="zalandoLogo">
                            </div>
                            <div class="contenuti">
                                <div style="text-align: center;">COUPON ZALANDO DA 10€</div>
                                <div style="text-align: center;">COUPON ZALANDO DA 10€ <br> ESCLUSIVO PER SCARPE DA GINNASTICA</div>
                                <div style="text-align: center;">ZJkpL10</div>
                            </div>
                        </div>
                        <div class="gridContainer">
                            <div class="titolo">
                                <img src="../Images/imgHome/airbnb.234x256.png" class="logoCoupon" alt="airbnbLogo">
                            </div>
                            <div class="contenuti">
                                <div style="text-align: center;">COUPON AIRBNB DA 5%</div>
                                <div style="text-align: center;">COUPON AIRBNB DA 5% <br> SCONTO DEL 5% SUL TOTALE, SU UNA SPESA DI ALMENO 50€</div>
                                <div style="text-align: center;">PGhIP5</div>
                            </div>
                        </div>
                    </div>
                <?php
            }else{
                ?>
                    <div class="thanks">
                        ACCEDI O REGISTRATI PER VISIONARE COUPON ESCLUSIVI E RISERVATI AI NOSTRI SUPPORTERS !
                        <div class="gridContainer">
                            <div class="titolo">
                                <img src="../Images/imgHome/icons8-amazon-96.png" class="logoCoupon" alt="amazonLogo">
                            </div>
                            <div class="contenuti">
                                <div style="text-align: center;">COUPON AMAZON DA 30€</div>
                                <div style="text-align: center;">COUPON AMAZON DA 30€ <br> SOLO PER GLI INDUMENTI</div>
                                <div class="text-blur">XXXXX</div>
                            </div>
                        </div>
                        <div class="gridContainer">
                            <div class="titolo">
                                <img src="../Images/imgHome/brand-zalando.243x256.png" class="logoCoupon" alt="zalandoLogo">
                            </div>
                            <div class="contenuti">
                                <div style="text-align: center;">COUPON ZALANDO DA 10€</div>
                                <div style="text-align: center;">COUPON ZALANDO DA 10€ <br> ESCLUSIVO PER SCARPE DA GINNASTICA</div>
                                <div class="text-blur">XXXXX</div>
                            </div>
                        </div>
                        <div class="gridContainer">
                            <div class="titolo">
                                <img src="../Images/imgHome/airbnb.234x256.png" class="logoCoupon" alt="airbnbLogo">
                            </div>
                            <div class="contenuti">
                                <div style="text-align: center;">COUPON AIRBNB DA 5%</div>
                                <div style="text-align: center;">COUPON AIRBNB DA 5% <br> SCONTO DEL 5% SUL TOTALE, SU UNA SPESA DI ALMENO 50€</div>
                                <div class="text-blur">XXXXX</div>
                            </div>
                        </div>
                    </div>
                <?php
            }
        ?>
    </div>
    <?php  require("./prj_footer.php");?>    
</body>
</html>
