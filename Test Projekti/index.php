
<!DOCTYPE html>
<html>
<head>
    
    
    <title>News Website</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>

    <header>
        <div class="logo">
            <h1>𝔗𝔥𝔢 𝔑𝔢𝔴 𝔜𝔬𝔯𝔨 𝔗𝔦𝔪𝔢𝔰</h1>
        </div>
        <nav>
            <ul>
            <li><a href="index.php">Home</a></li>
                <li><a href="Business.php">Business</a></li>
                <li><a href="Technology.php">Technology</a></li>
                <li><a href="World.php">World</a></li>
                <li><a href="Sports.php">Sports</a></li>
                <li><a href="Health.php">Health</a></li>

                <?php
                 session_start();
                    if (isset($_SESSION["user"]) && $_SESSION["user"] == "yes") {
           
                    if ($_SESSION["Rolet"] == "admin") {
                        echo '<li><a href="dashboard.php">Admin Dashboard</a></li>';
                        echo '<li><a href="newsdashboard.php">News Dashboard</a></li>';
                        echo '<li><a href="insertNews.php">Insert News</a></li>';
                    } else {
                        echo '<li><a href="user-dashboard.php">User Dashboard</a></li>';
                    }
                        echo '<li><a href="logout.php">Logout</a></li>';
                    } else {
                        echo '<li><a href="Login.php">Log-in</a></li>';
                        echo '<li><a href="Register.php">Register</a></li>';
                    }
                ?>
            </ul>
        </nav>
    </header>
    
    
    <div class="search">
        <div class="search1">
            <input type="search" id="pc" placeholder="Search...">
            <button onclick="checkSearch()">Search</button>
        </div>
    </div>
    
    <div class="main">
        <div class="left">
            <div class="box">
                <div class="title">
                    <h3>Breaking News</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                    <div class="img"><img src="indexphoto/foto1.jpg" alt="foto1"></div>
                    <h3> Jude Bellingham: England and Real Madrid midfielder wins Golden Boy award.</h3>
                    <p>England and Real Madrid midfielder Jude Bellingham has won the 
                        2023 Golden Boy award - given to the best under-21 player in Europe's top flights.
                        Bellingham, 20, moved from Borussia Dortmund to Real in the summer and has scored 13 goals in 14 appearances.
                        This award comes after he was recognised as the best under-21 player in world football 
                        at the Ballon d'Or ceremony in October.
                        Deep into injury time, he latched onto Luka Modrić’s cross and volleyed a late winner into the net to sink Barcelona and prompt wild celebrations on and off the field.
                       </p>
                     </div>

                    <div class="newsItem1">
                            <div class="img"><img src="indexphoto/foto22.webp" alt = "foto22" ></div>
                            <h3>Shein files for U.S. IPO as fast-fashion giant   looks to expand its global reach</h3>
                            <p>
                                Shein has confidentially filed to go public in the U.S. as the Chinese-founded fast-fashion juggernaut looks to expand its global reach with a long-rumored initial public offering, CNBC has learned. 
                                The retailer was last valued at $66 billion and could be ready to start trading on the public markets as soon as 2024, people familiar with the matter said Monday. 
                                It is unclear how much the company is currently worth, but its valuation has been a central point of debate among Shein and the advisors it’s working with, people familiar with the matter said.
                            </p>
                    </div>
                </div>
                
            </div>
        </div>

        <div class="right">
            <div class="box">
                <div class="title">
                    <h3>Headlines</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto2.webp" alt="foto2"></div>
                        <h3>About three-quarters of Americans do not fear getting Covid-19 this holiday season, KFF survey finds</h3>
                        <p>Most adults in the United States are not worried about getting sick with Covid-19 or spreading it over the holidays, a new survey from KFF found. Only about half say they plan to get the latest vaccine, and there’s a similar split around plans to take other precautions.</p>
                    </div>
                
                    <div class="newsItem1"> 
                        <div class="img"><img src="indexphoto/foto3.jpg" alt="foto3"></div>
                        <h3>Patients and staff leave Gaza's largest hospital.</h3>
                        <p>Israel’s Benjamin Netanyahu battles on all fronts, amid growing pressure to free hostages
                            CNN analysis: Video suggests IDF might have rearranged weaponry at Al-Shifa prior to news crew visits
                            Opinion Fights over bread, toilets without water, cars run on cooking oil. This is Gaza now.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lajmi3">
        <div class="page3">
            <div class="box" >
                
               
                <div class="title">
                    <h3>Latest in Business</h3>
                </div>
                <div class="newsBox">
    
                    <div class="newsItem">
                        <div class="img"><img src="indexphoto/foto4.webp" alt = "foto4" ></div>
                        <h3>ChatGPT parent company OpenAI fires CEO Sam Altman</h3>
                        <p>OpenAI, the company behind the viral chatbot ChatGPT, fired its CEO and founder, Sam Altman, on Friday. His stunning departure sent shockwaves through the budding AI industry.
                            The company, in a statement, said an internal investigation found that Altman was not always truthful with the board.                        
                        </p>
                        <a href="Business.php">Read more</a>
                    </div>
                    <div class="newsItem">
                        <div class="img"><img src="indexphoto/foto6.webp" alt = "foto6" ></div>
                        <h3>A record number of $50 bills were printed last year. It’s not why you think</h3>
                        <p>
                            Unless you’re an avid currency collector, an employee of the Bureau of Engraving and Printing, or work at the Federal Reserve, you likely didn’t know that last year a record number of $50 bills were printed.
                            Last year, the government printed 756,096,000 of those bills — the highest total of the denomination printed in one year in more than 40 years. If you put all those $50s together, you’d have about $37.8 billion. That’s enough to afford Taco Bell’s parent Yum Brands, Inc. $35.3 billion market cap.
                            
                        </p>
                        <a href="Business.php">Read more</a>
                    </div>
                    <div class="newsItem">
                        <div class="img"><img src="indexphoto/foto11.webp" alt = "foto11" ></div>
                        <h3>With Black Friday deals and flashy displays, retailers try to convince reluctant shoppers to spend</h3>
                        <p>
                           Over the past two weeks, many retailers, including Walmart, Nordstrom and Target have said shoppers have made fewer store trips, postponed big purchases or held out for better deals. This week, Lowe’s, Best Buyand Kohl’s
                            all cut their sales forecasts. Even some retailers that raised their outlooks.
                            
                        </p>
                        <a href="Business.php">Read more</a>
                    </div>
                    <div class="newsItem">
                        <div class="img"><img src="indexphoto/foto12.webp" alt = "foto12" ></div>
                        <h3>Immigration needs urgent review, says business boss</h3>
                        <p>
                            The head of the Chamber of Commerce is asking the government to "urgently review" its immigration policy over fears thousands of hospitality workers will leave at the same time
                            Seasonal workers have been able stay in Jersey for up to three years since 2021, with the first intake set to soon leave.
                            The government says the sector should have benefited from workers staying for three years.
    
                        </p>
                        <a href="Business.php">Read more</a>
                    </div>
    
                </div>
                
            </div>
         
        
        </div>
    </div>

<div class="lajmi3">
    <div class="page3">
        <div class="box">  
            
            <div class="title">
                <h3>Latest in Tech</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto5.webp" alt = "foto5" ></div>
                    <h3>Major advertisers flee X, deepening crisis at Elon Musk’s social media site</h3>
                    <p>
                        A torrent of prominent brands halted their advertising on X on Friday, dealing a massive reputational blow to Elon Musk’s social media company after his public embrace this week of an antisemitic conspiracy theory favored by White supremacists.
                        The high-profile advertiser revolt includes some of the world’s largest media companies, such as Disney, Paramount, NBCUniversal, Comcast, Lionsgate and Warner Bros. 
                    </p>
                    <a href="Technology.php">Read more</a>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto13.webp" alt = "foto13" ></div>
                    <h3>Welsh technology to join search for life on Mars</h3>
                    <p>
                        A scientific instrument built in Wales will lead the search for life on Mars at the end of this decade. Enfys, meaning "rainbow" in Welsh, is an infrared spectrometer and will be assembled at Aberystwyth University.
                        It will be fitted to the European Space Agency's Rosalind Franklin rover, which launches to the Red Planet in 2028.
                        Enfys will work alongside the robot's other camera systems to identify the most promising rocks to drill and test for evidence of ancient biology.
                    </p>
                    <a href="Technology.php">Read more</a>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto14.avif" alt = "foto14" ></div>
                    <h3>Nissan will invest $1.4 billion to make EV versions of its best-selling cars at its UK factory</h3>
                    <p>
                        Nissan will invest $1.4 billion to update its factory in northeast England to make electric versions of its two best-selling cars, a boost for the British government as it tries to revive the country's ailing economy.
                        The Japanese automaker manufactures the gasoline or gas-hybrid Qashqai and smaller Juke crossover vehicles at the factory in Sunderland, which employs 6,000 workers.
                    </p>
                    <a href="Technology.php">Read more</a>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto15.avif" alt = "foto15" ></div>
                    <h3>One of world's largest icebergs drifting beyond Antarctic waters</h3>
                    <p>
                        One of the world’s largest icebergs is drifting beyond Antarctic waters, after being grounded for more than three decades, according to the British Antarctic Survey.
                        The iceberg, known as A23a, split from the Antarctic's Filchner Ice Shelf in 1986. But it became stuck to the ocean floor and had remained for many years in the Weddell Sea.
                        The iceberg is about three times the size of New York City and more than twice the size of Greater London.
                    </p>
                    <a href="Technology.php">Read more</a>
                </div>

            </div>
            
        </div>
   </div>
</div> 
<div class="lajmi3">
    <div class="page3">
        <div class="box">  
            
            <div class="title">
                <h3>Latest in Sports</h3>
            </div>
            <div class="newsBox">
                <div class="newsItem">
                    <div class="img"> <img src="indexphoto/foto7.jpg" alt = "foto7"></div>
                    <h3>The most powerful rocket ever built just went farther than it had ever gone, then was lost</h3>
                    <p>SpaceX’s gargantuan deep-space rocket system, Starship, safely lifted off Saturday morning but ended prematurely with an explosion and a loss of signal.
                        The Super Heavy booster and Starship spacecraft successfully separated after liftoff, as the Starship lit up its engines and pushed away. That process ended up destroying the Super Heavy booster, which erupted into a ball of flames over the Gulf of Mexico. But the Starship spacecraft was able to briefly continue its journey.</p>
                    <a href="World.php">Read more</a>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto8.webp" alt="foto8"></div>
                    <h3>Dwindling ammunition, a jailed artist and Kyiv’s new ‘foothold’ in the south: The latest from Ukraine</h3>
                    <p>Ukraine this week claimed to have “gained a foothold” on the left bank of the Dnipro River, a welcome boost after its much vaunted counteroffensive failed to make major gains.
                        But it has been worse news elsewhere for Kyiv, after Germany admitted European targets for providing ammunition would fall short.                     
                        Here are the main developments from Ukraine this week.</p>
                    <a href="World.php">Read more</a>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto9.jpg" alt="foto9"></div>
                    <h3>Gaza's largest hospital is a 'death zone,' WHO says</h3>
                    <p>The Israeli military announced a brief suspension on Sunday of “military activities” in the city of Rafah, in the southern Gaza Strip, for "humanitarian purposes." 
                        The pause took place from 10 a.m. to 2 p.m. local time (3 a.m. to 7 a.m. ET) Sunday, according to an IDF spokesperson. 
                        At the southern part of Rafah city is the Rafah border crossing between Gaza and Egypt– the only crossing in and out of Gaza that is not controlled by Israel, making it the sole option for foreigners trying to leave the besieged enclave.</p>
                    <a href="World.php">Read more</a>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto10.webp" alt="foto10"></div>
                    <h3>Turmoil in UK government after key minister slams police ahead of pro-Palestinian march on Armistice Day</h3>
                    <p>The British government is braced for a tricky weekend.
                        Tricky because Rishi Sunak, a prime minister whose grip on power appears to slip at every turn, is a crisis-time leader who seemingly struggles with handling crises.                           
                        On Saturday, the UK will mark Armistice Day – the date commemorating the de-facto end of World War I. Also on Saturday, pro-Palestinian protesters will march through central London demanding a ceasefire in the Israel-Hamas conflict. The march will end outside the US embassy in south London.</p>
                    <a href="World.php">Read more</a>
                </div>
            </div>
            
        </div>
   </div>
</div> 
    

    <div class="main">
        <div class="left">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in Sports</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto16.jpg" alt="foto16"></div>
                        <h3>Tottenham 1-2 Aston Villa: Ollie Watkins scores winner as visitors move fourth in Premier League</h3>
                        <p>
                            Aston Villa came from behind in a pulsating encounter at Tottenham to claim a 2-1 win and hand Ange Postecoglou’s side their third successive defeat.
                            There were emotional scenes before kick-off as both sets of supporters paid tribute to former Spurs boss Terry Venables, whose death at the age of 80 was announced on Sunday.
                        </p>
                        <a href="Sports.php">Read more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in Sports</h3>
                </div>
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto17.jpg" alt="foto17"></div>
                        <h3>Francesco Bagnaia wins Valencia MotoGP to retain title as Jorge Martin crashes out</h3>
                        <p>
                            Ducati's Francesco Bagnaia won the season-ending Valencia GP to retain his MotoGP title after his only rival Jorge Martin crashed out early in the race.
                            Pramac Racing's Martin clipped Marc Marquez's Honda in the sixth lap, causing both drivers to crash out and hand Bagnaia the title.
                            However, on the second lap he dropped back to eighth after clipping Bagnaia's bike, although he was able to stay in the race.
                            A few laps later a second collision, this time with Marquez, ended his race.
                        </p>
                        <a href="Sports.php">Read more</a>
                    </div>
                
            </div>
        </div>
    </div>
        


    <div class="main">
        <div class="left">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in Health</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto20.webp" alt="foto20"></div>
                        <h3>Recalled applesauce pouches still on some store shelves, FDA says, as more illnesses reported</h3>
                        <p>
                            Cinnamon applesauce pouches that have been recalled after reports of high blood lead levels in children.
                            The are still on the shelves at some Dollar Tree stores, the US Food and Drug Administration said Wednesday.
                            The agency says that it’s working with Dollar Tree on getting those products off shelves but that, in the meantime, consumers should not buy them.
                        </p>
                        <a href="Health.php">Read more</a>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "right">
            <div class="box">
                <div class="title">
                    <h3>Latest in health</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto21.webp" alt="foto21"></div>
                        <h3>Ultraprocessed foods now account for two-thirds of calories in the diets of children and teens</h3>
                        <p>
                            Children and teens in the United States now get more than two-thirds of their calories from ultraprocessed foods, an analysis of almost two decades worth of data has found.
                            Ultraprocessed foods – such as frozen pizza, microwave meals, packaged snacks and desserts – accounted for 67% of calories consumed in 2018, up from 61% in 1999, according to research published in the medical journal JAMA Tuesday. 
                            The study analyzed the diet of 33,795 children and adolescents nationwide.
                        </p>
                        <a href="Health.php">Read more</a>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <footer class="footer">
        <div class="container">
            <div class="section">
                <h2>Categories</h2>
                <div class="kategorite">
                    <p>Business</p>
                    <p>Technology</p>
                    <p>Sports</p>
                    <p>World</p>
                    <p>Health</p>
                </div>
            </div>
    
            <div class="section">
                <h2>Contact Us</h2>
                <div class="contact-info">
                    <p>Phone: <span>+383 123-456-789</span></p>
                    <p>Email: <span>NYTimes@gmail.com</span></p>
                    <p>Address: <span>Prishtine, Kosove</span></p>
                </div>
                <textarea id="commentInput" name="comment" placeholder="Write your comment..."></textarea>
            </div>
    
            <div class="section1">
                <h2>Follow Us</h2>
                <div class="icon">
                    <a href="https://twitter.com/?lang=en"><img src="indexphoto/twitter-icon.png" alt="Twitter"></a>
                    <a href="https://www.instagram.com/"><img src="indexphoto/instagram-icon.png" alt="Instagram"></a>
                    <a href="https://www.facebook.com/login/"><img src="indexphoto/facebook-icon.png" alt="Facebook"></a>
                </div>
            </div>
    
            <div class="section">
                <h2>Subscribe to Our News</h2>
                <div class="email">
                    <input type="email" id="emailInput" placeholder="Enter Your Email Here">
                    <button onclick="checkEmail()">Subscribe</button>
                </div>
            </div>
        </div>
    
        <div class="copyrights">
            <p>&copy; 2023 𝔗𝔥𝔢 𝔑𝔢𝔴 𝔜𝔬𝔯𝔨 𝔗𝔦𝔪𝔢𝔰</p>
        </div>
    </footer>
        
        
        
        <script>


            function checkEmail() {


                let domain = document.getElementById("emailInput").value.split('@')[1];
        
                if (domain !== "@gmail.com") {
                    alert("Please use the correct email domain!");
                } else {
                    alert("You have successfully subscribed!");
                }
            }


            function checkSearch() {

                if(document.getElementById("pc").value===''){
                    alert("Please put something on the search bar!");
                } 
            }

            


        </script>
</body>
</html>
