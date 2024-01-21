<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <script type='text/javascript'>
            var map, searchManager;

            function GetMap() {
                map = new Microsoft.Maps.Map('#myMap', {
                    credentials: 'AmGg7bKbDv096VFC3dt8jfHaGgbY3WZrS6y6KV9kKM3_RCdcRV-mAUKo-1LRKcNT'
                });
                geocodeQuery("Raadshuisplein 28, Emmen");
            }

            function geocodeQuery(query) {
                //If search manager is not defined, load the search module.
                if (!searchManager) {
                    //Create an instance of the search manager and call the geocodeQuery function again.
                    Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
                        searchManager = new Microsoft.Maps.Search.SearchManager(map);
                        geocodeQuery(query);
                    });
                } else {
                    var searchRequest = {
                        where: query,
                        callback: function (r) {
                            //Add the first result to the map and zoom into it.
                            if (r && r.results && r.results.length > 0) {
                                var pin = new Microsoft.Maps.Pushpin(r.results[0].location);
                                map.entities.push(pin);

                                map.setView({ bounds: r.results[0].bestView });
                            }
                        },
                        errorCallback: function (e) {
                            //If there is an error, alert the user about it.
                            alert("No results found.");
                        }
                    };

                    //Make the geocode request.
                    searchManager.geocode(searchRequest);
                }
            }
        </script>
        <script type='text/javascript' src='http://www.bing.com/api/maps/mapcontrol?callback=GetMap' async defer></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/website.css">
        <link href='https://fonts.googleapis.com/css?family=Caveat' rel='stylesheet'>
        <title>OUI Website</title>
    </head>
    <body>

    <!-- header -->

        <header>
            <div class="header-container">
                <div class="header-logo">
                    <a href="#home"><img class="logo" src="Logos/Logo-01.png" alt="OUI"></a>
                </div>
                <div class="header-links">
                    <ul>
                        <li><a href="#menu">Menu</a></li>
                        <li><a href="#about-us">Over ons</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="websiteEN.php"><img class="vlag-brits" src="./photos/Brits.png" alt="Britse-vlag"></a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class="home" id="home">
            <div class="home-content">OUI</div>
        </div>

    <!-- menu -->

        <div id="menu"></div>
            <div class="menu-container">
                <div class="title">
                    <h1>Menu</h1>
                </div>
                <div class="menu-kaart">
                    <div class="food">
                        <p class="title-food">Eten</p>
                        <div class="Pain-Croissant">
                            <p>Croissants en Broodjes</p>
                            <div class="Pain-list">
                                <img class="img_croissant" src="photos/illustrations_light blue_croissant.png" alt="croissant">
                                <ul class="food-list">
                                    <li>Naturel/ Neutraal</li>
                                    <li>Boter</li>
                                    <li>Jam of Nutella</li>
                                    <li>Brie of camembert</li>
                                    <li>Kaas met walnoten</li>
                                    <li>Roomkaas</li>
                                    <li>Geitenkaas</li>
                                    <li>Gerookte zalm</li>
                                    <li>Tonijnsalade</li>
                                    <li>Eisalada</li>
                                    <li>Hummus</li>
                                    <li>Franse ragout</li>
                                </ul>
                                <ul class="price-list">
                                    <li>€1,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                    <li>€2,30</li>
                                </ul>
                            </div>
                            <div class="sweets-container">
                                <p>Zoetigheden</p>
                                <div class="sweets-list">
                                    <img class="img_merengue" src="photos/illustrations_light blue_merengue.png" alt="merengue">
                                    <ul class="sweet-list">
                                        <li>Macrons</li>
                                        <li>Paris-Brest</li>
                                        <li>Cream Puffs</li>
                                        <li>Eclair</li>
                                        <li>Milleteuille</li>
                                    </ul>
                                    <div class="sweets-price">
                                        <ul class="sweet-price-list">
                                            <li>€1,50</li>
                                            <li>€2,50</li>
                                            <li>€2,50</li>
                                            <li>€2,50</li>
                                            <li>€2,50</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="drinks">
                        <p class="title-drink">Drinken</p>
                        <div class="coffee-tea"><p>Koffie & Thee</p>
                            <div class="coffee-tea-list">
                                <img class="img_coffee" src="photos/illustrations_light blue_coffee.png" alt="coffee">
                                <ul class="drinks-list">
                                    <li>Cappucino</li>
                                    <li>Latte</li>
                                    <li>Mocha</li>
                                    <li>Espresso</li>
                                    <li>Americano</li>
                                    <li>IJskoffie</li>
                                    <li>Flat White</li>
                                    <li>Thee</li>
                                </ul>
                                <ul class="drinks-price-list">
                                    <li>€1,50</li>
                                    <li>€2,50</li>
                                    <li>€2,50</li>
                                    <li>€2,50</li>
                                    <li>€2,50</li>
                                    <li>€2,50</li>
                                    <li>€2,50</li>
                                    <li>€2,50</li>
                                </ul>
                            </div>
                            <div class="cool-drinks">
                                <p>Koude Dranken</p>
                                <div class="cool-drink-list">
                                    <img class="img_tea" src="photos/illustrations_light blue_tea.png" alt="tea">
                                    <ul class="cool-dink-list">
                                        <li>Huisgemaakte limonade</li>
                                        <li>Jus D’orange</li>
                                        <li>Appelsap </li>
                                        <li>IJsthee</li>
                                        <li>Water</li>
                                        <li>Bruizend water</li>
                                    </ul>
                                    <div class="cool-drink-price">
                                        <ul class="sweet-price-list">
                                            <li>€1,50</li>
                                            <li>€2,50</li>
                                            <li>€2,50</li>
                                            <li>€2,50</li>
                                            <li>€2,50</li>
                                            <li>€2,50</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <!-- reviews -->

        <div class="review-container">
            <div class="review1">
                <h1>PIET</h1>
                <h1>&starf; &starf; &starf; &starf; &starf;</h1>
                <p>“Ik was voor het eerst in Emmen en kwam hier terecht. Wat een fantastische koffie, 
                    en het personeel is erg vriendelijk. Vandaar vijf sterren!”</p>
            </div>
            <div class="review2">
                <h1>KLAAS</h1>
                <h1>&starf; &starf; &starf; &starf; &starf;</h1>
                <p>“Ik studeer in Emmen, en had zin in een kopje koffie. Toen ik bij OUI kwam voelde het helemaal goed. 
                    De koffie is lekker en het personeel is vriendelijk. Vijf sterren!”</p>
            </div>
        </div>

    <!-- about us -->

        <div id="about-us"></div>
            <div class="about-us-container">
                <div class="about-us-title">
                    <p>Over Ons</p>
                </div>
                <div class="about-us">
                    <p>
                        Welkom bij OUI! Wij begroeten elke klant met open armen en een warme kop koffie. Onze missie is simpel maar van groot belang: we willen er zeker van zijn dat u nooit voor een gesloten deur staat en dat u moeiteloos de weg naar ons vindt. Bij OUI streven we ernaar om uw ervaring onvergetelijk te maken. Onze koffie is met liefde gezet, en ons team staat altijd klaar om u te verwelkomen in een gastvrije en gezellige omgeving.
                    </p><br>
                    <p>
                        Of u nu alleen langskomt om te genieten van een rustig moment met een boek, met vrienden bij ons komt ontbijten, of een zakelijke bijeenkomst plant, we staan altijd voor u klaar. We bieden een uitgebreid menu met heerlijke gerechten en verfrissende drankjes, zodat er voor ieder wat wils is.
                    </p><br>
                    <p>
                        Dankzij onze centrale locatie in het hart van de stad, kunt u ons gemakkelijk bereiken en zijn we een ideale ontmoetingsplek voor iedereen. We kijken ernaar uit om u te verwelkomen bij OUI en uw dag een beetje specialer te maken.
                    </p><br>
                </div>
            </div>
        </div>

    <!-- slideshow -->

        <div id="container-slider">
            <div id="slider1">
                <figure>
                    <img class="center-img" src="photos/pexels-chevanon-photography-302894.jpg" alt="koffie">
                    <img class="center-img" src="photos/pexels-lilartsy-1793035.jpg" alt="thee">
                    <img class="center-img" src="photos/pexels-maria-tyutina-814264.jpg" alt="thee 2">
                    <img class="center-img" src="photos/pexels-christina-polupanova-10281101-2.jpg" alt="thee 2">
                </figure>
            </div>
            <div id="slider2">
                <figure>
                    <img class="center-img" src="photos/pexels-chevanon-photography-302902.jpg" alt="koffie">
                    <img class="center-img" src="photos/pexels-marta-dzedyshko-7597263-2.jpg" alt="thee">
                    <img class="center-img" src="photos/pexels-chevanon-photography-302896-2.jpg" alt="thee 2">
                    <img class="center-img" src="photos/pexels-chevanon-photography-302904-2.jpg" alt="thee 2">
                </figure>
            </div>
        </div>

    <!-- contact -->

    <div class="contact-header" id="contact">Contact</div>
        <div class="contact-container">
            <div class="contact-informatie">
                <div class="contact-locatie">
                    <p class="locatie-titel">Onze locatie:</p>
                    <p class="locatie-text">Raadhuisplein 28, <br> Emmen</p>
                </div>
                <div class="contact-titel">
                    <p>Contact:</p>
                </div>
                <div class="contact-contact">
                    <ul>
                        <li>Mail: Oui@mail.com</li>
                        <li>Telefoonnummer: 591-123123</li>
                    </ul>
                </div>
                <div class="openings-tijden-titel">
                    <p>Openingstijden:</p>
                </div>
                <div class="contact-openingstijden">
                    <div class="contact-openingstijden-dag">
                        <ul>
                            <li>Maandag:</li>
                            <li>Dinsdag:</li>
                            <li>Woensdag:</li>
                            <li>Donderdag:</li>
                            <li>Vrijdag:</li>
                            <li>Zaterdag:</li>
                            <li>Zondag:</li>
                        </ul>
                    </div>
                    <div class="contact-openingstijden-tijd">
                        <ul>
                            <li>12:00-18:00</li>
                            <li>12:00-18:00</li>
                            <li>12:00-18:00</li>
                            <li>12:00-18:00</li>
                            <li>12:00-18:00</li>
                            <li>15:00-21:00</li>
                            <li>15:00-21:00</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="contact-maps">
                <div id="myMap" class="maps-area"></div>
            </div>
        </div>
    </body>
</html>