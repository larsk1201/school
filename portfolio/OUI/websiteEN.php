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
            if (!searchManager) {
                Microsoft.Maps.loadModule('Microsoft.Maps.Search', function () {
                    searchManager = new Microsoft.Maps.Search.SearchManager(map);
                    geocodeQuery(query);
                });
            } else {
                var searchRequest = {
                    where: query,
                    callback: function (r) {
                        if (r && r.results && r.results.length > 0) {
                            var pin = new Microsoft.Maps.Pushpin(r.results[0].location);
                            map.entities.push(pin);

                            map.setView({ bounds: r.results[0].bestView });
                        }
                    },
                    errorCallback: function (e) {
                        alert("No results found.");
                    }
                };

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
                        <li><a href="#about-us">About us</a></li>
                        <li><a href="#contact">Contact</a></li>
                        <li><a href="website.php"><img class="vlag-nederland" src="./photos/Vlag_Nederland.png" alt=""></a></li>
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
                            <p class="title-food">Food</p>
                            <div class="Pain-Croissant">
                                <p>Pain Croissant or Petit Pain</p>
                                <div class="Pain-list">
                                    <img class="img_croissant" src="photos/illustrations_light blue_croissant.png" alt="croissant">
                                    <ul class="food-list">
                                        <li>Naturel/ Plain</li>
                                        <li>Butter</li>
                                        <li>Jam or Nutella</li>
                                        <li>Brie or camembert</li>
                                        <li>Cheese with walnuts</li>
                                        <li>Cream cheese</li>
                                        <li>Soft goat cheese</li>
                                        <li>Smoked salmon</li>
                                        <li>Tuna salad</li>
                                        <li>Egg salad</li>
                                        <li>Hummus</li>
                                        <li>French ragout</li>
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
                                    <p>Sweets</p>
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
                            <p class="title-drink">Drinks</p>
                            <div class="coffee-tea"><p>Coffee & Tea</p>
                                <div class="coffee-tea-list">
                                    <img class="img_coffee" src="photos/illustrations_light blue_coffee.png" alt="coffee">
                                    <ul class="drinks-list">
                                        <li>Cappucino</li>
                                        <li>Latte</li>
                                        <li>Mocha</li>
                                        <li>Espresso</li>
                                        <li>Americano</li>
                                        <li>iced coffee</li>
                                        <li>Flat White</li>
                                        <li>Tea</li>
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
                                    <p>Cool Drinks</p>
                                    <div class="cool-drink-list">
                                        <img class="img_tea" src="photos/illustrations_light blue_tea.png" alt="tea">
                                        <ul class="cool-dink-list">
                                            <li>Home-made lemonade</li>
                                            <li>Jus D’orange</li>
                                            <li>Apple Juice </li>
                                            <li>Ice Tea</li>
                                            <li>Flat water</li>
                                            <li>Sparkling water</li>
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
        </div>

    <!-- reviews -->

        <div class="review-container">
            <div class="review1">
                <h1>PIET</h1>
                <h1>&starf; &starf; &starf; &starf; &starf;</h1>
                <p>“I was in Emmen for the first time and ended up here. What fantastic coffee, and the staff are very friendly. Hence five stars!”</p>
            </div>
            <div class="review2">
                <h1>KLAAS</h1>
                <h1>&starf; &starf; &starf; &starf; &starf;</h1>
                <p>“I study in Emmen and wanted a cup of coffee. When I came to OUI it felt absolutely right. The coffee is tasty and the staff is friendly. Five stars!”</p>
            </div>
        </div>

    <!-- about us -->

        <div id="about-us"></div>
            <div class="about-us-container">
                <div class="about-us-title">
                    <p>About us</p>
                </div>
                <div class="about-us">
                    <p>
                        Welcome to OUI! We greet every customer with open arms and a hot cup of coffee. Our mission is simple but of great importance: we want to make sure that you never stand in front of a closed door and that you find your way to us effortlessly. At OUI we strive to make your experience unforgettable. Our coffee is made with love, and our team is always ready to welcome you in a hospitable and cozy environment.
                    </p><br>
                    <p>
                        Whether you're just stopping by to enjoy a quiet moment with a book, joining us for breakfast with friends, or planning a business meeting, we're always here to help. We offer an extensive menu with delicious dishes and refreshing drinks, so there is something for everyone.
                    </p><br>
                    <p>
                    Thanks to our central location in the heart of the city, you can easily reach us and we are an ideal meeting place for everyone. We look forward to welcoming you to OUI and making your day a little more special.
                    </p><br>
                </div>
            </div>
        </div>

    <!-- slider -->

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
                    <p class="locatie-titel">Our location:</p>
                    <p class="locatie-text">Raadhuisplein 28, <br> Emmen</p>
                </div>
                <div class="contact-titel">
                    <p>Contact:</p>
                </div>
                <div class="contact-contact">
                    <ul>
                        <li>mail: Oui@mail.com</li>
                        <li>phone: 591-123123</li>
                    </ul>
                </div>
                <div class="openings-tijden-titel">
                    <p>Opening hours:</p>
                </div>
                <div class="contact-openingstijden">
                    <div class="contact-openingstijden-dag">
                        <ul>
                            <li>Monday:</li>
                            <li>Tuesday:</li>
                            <li>Wednesday:</li>
                            <li>Thursday:</li>
                            <li>Friday:</li>
                            <li>Saturday:</li>
                            <li>Sunday:</li>
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