
<!DOCTYPE html>
<html>
<head>
    
    
    <title>News Website</title>
    <link rel="stylesheet" href="style.css">


</head>
<body>
    <header>
        <div class="logo">
            <h1>The New York Times</h1>
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
                        echo '<li><a href="dashboard.php">Admin</a></li>';
                        echo '<li><a href="newsdashboard.php">News</a></li>';
                        echo '<li><a href="insertNews.php">Insert</a></li>';
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
                    <div class="img"><img src="indexphoto/foto70.webp" alt="foto70"></div>
                    <h3>You can get Covid-19 and flu vaccines at the same time, but should you? What the science says</h3>
                    <p>
                        With holiday season underway, you may be realizing that you forgot to get your Covid-19 and flu vaccines, and now you’ll be sitting across the table from your elderly relatives.
                        The good news is that it’s not too late to get your shots, but what about knocking them both out at the same time? The US Centers for Disease Control and Prevention says this is an option, but should you?
                    </p>
                    </div>

                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto71.jpg" alt = "foto71" ></div>
                        <h3>Air pollution, health condition</h3>
                        <p>
                            No pollution is good for anyone’s health, but a new study found that scientists may have significantly underestimated just how deadly pollution from coal-fired plants can be. It also shows how tighter regulations can work.
                            The study, published Thursday in the journal Science, found that exposure to fine particulate air pollution from coal-fired plants is associated with a mortality risk that is 2.1 times greater than that of particle pollution from other sources.
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
                        <div class="img"><img src="indexphoto/foto72.webp" alt="foto72"></div>
                        <h3>Expert: What to do when the Thanksgiving buffet is too risky</h3>
                        <p>
                            As people gather for Thanksgiving, they might be bringing along some unexpected guests.
                            These get-togethers are occurring as respiratory viruses such as influenza are on the rise, and Covid-19 and the respiratory syncytial virus are circulating as well. Additionally, there are also foodborne illnesses going around that can result in stomach upset and other symptoms.
                        </p>
                        
                    </div>
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto73.jpg" alt="foto73"></div>
                        <h3>What you need to know about the FDA’s proposed ban of brominated vegetable oil</h3>
                        <p>
                            The US Food and Drug Administration has announced a proposal to revoke the nationwide regulation authorizing the use of brominated vegetable oil, or BVO, in food.
                            After a review of evidence, “the intended use of BVO in food is no longer considered safe after the results of studies conducted in collaboration with the National Institutes of Health (NIH) found the potential for adverse health effects in humans,” the FDA said in a November 2 statement.
                        </p>
    
                    </div> 
                </div>
            </div>
        </div>
    </div>

    

<div class="lajmi3">
    <div class="page2">
        <div class="box" >
            
           
            <div class="title">
                <h3>Latest in Health</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto74.jpg" alt = "foto74" ></div>
                    <h3>Just 2 minutes of walking after eating can help blood sugar, study says</h3>
                    <p>
                        For centuries, people in the sunny Mediterranean would get up after long, leisurely meals and take a walk, often to the town square to see neighbors and socialize. Walking is so much a part of that lifestyle it is listed as a foundation of the über-healthy Mediterranean diet.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto75.jpg" alt = "foto75" ></div>
                    <h3>Fascia training may help you live with less pain, experts say</h3>
                    <p>
                        f you’ve dealt with stiffness and pain in the recent past, you may have come across fascia training — an approach that many in the fitness realm are encouraging people to do. That means working to improve the health of your fascia, a web of connective tissue that holds the body’s organs, muscles, bones and tissues in place.
                    </p>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto76.jpg" alt = "foto76" ></div>
                    <h3>Bad habits of night owls may lead to type 2 diabetes, study says</h3>
                    <p>
                        If you’re groggy in the morning but perky in the evening, you may be a night owl — a sleep pattern or chronotype that makes you more inclined to want to stay up late and sleep in.
                        If so, you could be at higher risk of developing type 2 diabetes as well as a number of unhealthy lifestyle habits, a new study found.
                    </p>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto77.jpg" alt = "foto77" ></div>
                    <h3>When daylight saving ends, don’t be surprised if you feel these health impacts</h3>
                   <p>
                        When the clock is set back, does your world get turned a little upside down?
                        Daylight Saving Time will end on Sunday, November 5, moving the clocks in most US states back an hour – and that is no small thing for our health, according to Dr. Rajkumar Dasgupta, associate professor of clinical medicine at the University of Southern California Keck School of Medicine in Los Angeles.
                   </p>
                    
                </div>

            </div>
            
        </div>
     
    
    </div>
</div>
<div class="lajmi3">
    <div class="page3">
        <div class="box">  
            
            <div class="title">
                <h3>Latest in Health</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto78.jpg" alt = "foto78" ></div>
                    <h3>Cutting 1 teaspoon of salt works as well as blood pressure meds, study finds</h3>
                   <p>
                        Cutting 1 teaspoon of salt from your diet each day can lower your top blood pressure reading just as much as a typical hypertension medication, even if you don’t have high blood pressure, a new study found.
                         A teaspoon of salt is 2,300 milligrams — that’s the top daily limit for people over 14 recommended by the latest US nutritional guidelines. However, the American Heart Association recommends a diet with less than 1,500 milligrams of sodium a day.
                   </p>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto79.webp" alt = "foto79" ></div>
                    <h3>How your seasonal chores count toward your fitness goals</h3>
                    <p>
                        As the seasons change so do some of your inside and outside chores, especially if you live in a four-season climate. For those in the northern United States, heading into autumn usually means raking leaves, packing up summer clothes, and pulling coats and other warmer clothes out of storage.
                    </p>
                    
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto80.jpg" alt = "foto80" ></div>
                    <h3>Groundbreaking transatlantic flight using greener fuel takes off</h3>
                    <p>
                        The first transatlantic flight by a large passenger plane powered only by alternative fuels has taken off.
                        Operated by Virgin Atlantic, it is flying from London's Heathrow to New York's JFK airport.
                        Airlines see the flight, which is supported by government funding, as demonstrating that a greener way of flying is possible.
                        But a lack of fuel supply remains a challenge, while other technology will be needed to hit emissions targets.
                    </p>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto81.webp" alt = "foto81" ></div>
                    <h3>Vaping: Australia to ban disposable vape imports from January</h3>
                    <p>
                        Australia will ban imports of disposable vapes from January, in an effort to curb nicotine addiction in children.
                        New laws to stop single-use vapes from being made, advertised, and supplied in the country will also be introduced.
                        It comes amid a broader push to phase out recreational vaping completely.
                        Vaping has been marketed as a way to quit smoking, but Australia's health minister says it has created a "new generation of nicotine dependency".
                        
                    </p>
                    
                </div>

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
                        <div class="img"><img src="indexphoto/foto82.webp" alt="foto52"></div>
                        <h3>What is nitrous oxide and why is it being banned?</h3>
                        <p>
                            The government has made possession of nitrous oxide, or laughing gas, a criminal offence in England and Wales.
                            Its use soared during the pandemic, becoming one of the most-abused substances, especially by 16 to 24-year-olds.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in Health</h3>
                </div>
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto21.webp" alt="foto67"></div>
                        <h3>Ultraprocessed foods now account for two-thirds of calories in the diets of children and teens</h3>
                        <p>
                            Children and teens in the United States now get more than two-thirds of their calories from ultraprocessed foods, an analysis of almost two decades worth of data has found.
                            Ultraprocessed foods – such as frozen pizza, microwave meals, packaged snacks and desserts – accounted for 67% of calories consumed in 2018, up from 61% in 1999, according to research published in the medical journal JAMA Tuesday. 
                            The study analyzed the diet of 33,795 children and adolescents nationwide.
                        </p>
                        
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
                        <div class="img"><img src="indexphoto/foto20.webp" alt="foto68"></div>
                        <h3>Recalled applesauce pouches still on some store shelves, FDA says, as more illnesses reported</h3>
                        <p>
                            Cinnamon applesauce pouches that have been recalled after reports of high blood lead levels in children.
                            The are still on the shelves at some Dollar Tree stores, the US Food and Drug Administration said Wednesday.
                            The agency says that it’s working with Dollar Tree on getting those products off shelves but that, in the meantime, consumers should not buy them.
                        </p>
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "right">
            <div class="box">
                <div class="title">
                    <h3>Latest in Health</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto83.webp" alt="foto69"></div>
                        <h3>China says no 'unusual or novel pathogens' after WHO queries respiratory outbreaks</h3>
                       <p>
                            China has reported no "unusual or novel pathogens" in clusters of child pneumonia cases, the World Health Organization has said.
                             Beijing has attributed a rise in flu-like illnesses to the lifting of Covid curbs, said the WHO, which had requested for more data on the cases.
                            Still it urged residents in China to take precautions, like getting vaccinated and wearing masks.
                       </p>
                        
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
                <p>Phone:
                    <span>+383 123-456-789</span><br>
                    <span>+383 123-456-789</span></p><hr>
                    <p>Email:
                    <span>lindgeci@gmail.com</span><br>
                    <span>alketarama@gmail.com</span></p><hr>
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
