
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
                    <div class="img"><img src="indexphoto/foto54.jpg" alt="foto54"></div>
                    <h3>Lionel Messi: Inter Miami forward is 'gripping' United States, says Guillem Balague</h3>
                    <p>
                        The timing could not have been better with the Copa America taking place there next year and the final set to be played in Miami at the Hard Rock Stadium on July 14. The Club World Cup is due to be held in the States in 2025, and what will be the biggest World Cup yet is coming to the USA, Canada and Mexico in 2026.
                        When it comes to a well-oiled machine looking to promote and grow a brand, nobody does it better than the USA. 
                    </p>
                    </div>

                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto55.webp" alt = "foto55" ></div>
                        <h3>Cristiano Ronaldo asks referee to overturn penalty decision given to him during Asian Champions League game</h3>
                        <p>
                            Cristiano Ronaldo told a referee to overturn a penalty awarded in his favor during Al-Nassr’s Asian Champions League game against Persepolis.
                            The act of sportsmanship occurred in the second minute of Monday’s match as Ronaldo was brought down in the box, prompting referee Ma Ning to award a penalty to the home side.
                            But the Portuguese star approached the referee and argued that the decision should be reversed.
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
                        <div class="img"><img src="indexphoto/foto57.webp" alt="foto57"></div>
                        <h3>Max Verstappen ends record-breaking season with Abu Dhabi Grand Prix win</h3>
                        <p>
                            And so the curtain falls on a Formula One season dominated by Max Verstappen and his Red Bull team, with the Dutchman securing a record-extending 19th victory of the year at the Abu Dhabi Grand Prix.
                            Never before has the sport seen a driver win with such regularity and ease, the three-time world champion again comfortably crossing the finishing line first at the season-ending race at the Yas Marina Circuit.
                            The 26-year-old’s victory moves him to third on the all-time list of career F1 wins with 54 overall, behind seven-time world champion Lewis Hamilton, who has 103 victories, and Michael Schumacher on 91.
                        </p>
                        
                    </div>
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto56.webp" alt="foto56"></div>
                        <h3>LeBron James suffers worst loss of career against Joel Embiid-led Philadelphia 76ers</h3>
                        <p>
                            NBA superstar LeBron James suffered the worst loss of his legendary career on Monday as his Los Angeles Lakers side was routed by 44 points on the road by the Philadelphia 76ers, 138-94.
                            Per the NBA, the biggest margin that James had lost by coming into Monday’s matchup was 42 points, when the Lakers were thrashed by the Indiana Pacers in 2019.
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
                <h3>Latest in Sports</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto58.webp" alt = "foto58" ></div>
                    <h3>Erling Haaland breaks a Premier League scoring record as Manchester City held by Liverpool in top-of-the-table encounter</h3>
                    <p>
                        Ever since he joined Manchester City in June 2022, Erling Haaland has scored goals and broken records and, on Saturday against Liverpool, the striker continued to make his mark on history by scoring his 50th league goal for the reigning Premier League champion.
                        No player in Premier League history has reached half a century of goals quicker – Haaland doing so in 48 games.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto59.jpg" alt = "foto59" ></div>
                    <h3>Doc Rivers: NBA champion coach on leadership, what it takes to win and Donald Sterling</h3>
                    <p>
                        Former NBA champion coach Doc Rivers speaks with CNN This Morning's Poppy Harlow about the situation the Los Angeles Clippers lived in 2014 with Donald Sterling and reflects on his 2008 championship run with the Boston Celtics.
                    </p>
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto60.webp" alt = "foto60" ></div>
                    <h3>Manchester United’s Harry Maguire accepts Ghana MP’s apology for mockery</h3>
                    <p>
                        Manchester United footballer Harry Maguire on Wednesday accepted the apology of a Ghanaian MP who mocked him during a parliamentary debate on the budget last year.
                        Opposition lawmaker Isaac Adongo compared Vice-President Mahamadu Bawumia’s economic management of the embattled West African nation to Maguire’s performance on the pitch.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto61.webp" alt = "foto61" ></div>
                    <h3>Tiger Woods to make first competitive start since Masters withdrawal at Hero World Challenge</h3>
                   <p>
                    Tiger Woods is set for his first competitive appearance in seven months at the Hero World Challenge later this month.
                    The 47-year-old has not played a tournament since his early withdrawal from The Masters in April but will tee off as tournament host at the unofficial PGA Tour event in Albany, The Bahamas, on November 30, organizers announced Saturday.            
                    Woods underwent ankle surgery in May after enduring “constant” pain across his three rounds at Augusta National the previous month, only his second competitive appearance of 2023
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
                <h3>Latest in Sports</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto62.webp" alt = "foto62" ></div>
                    <h3>Formula One driver Lance Stroll suffers huge crash during Singapore GP qualifying</h3>
                   <p>
                        Formula One driver Lance Stroll will miss Sunday’s Singapore Grand Prix after the Canadian suffered a huge crash in Saturday’s qualifying, his Aston Martin team said.
                        Pushing to make it through to the next round of qualifying, Stroll crashed into the barriers at high speed at the final corner at the end of Q1, causing significant damage to his Aston Martin with debris across the track and a front wheel coming off the car.
                   </p>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto63.webp" alt = "foto63" ></div>
                    <h3>Scary high-speed crash, described as ‘one of … if not, the biggest’ in Formula E, leaves multiple cars unable to continue</h3>
                    <p>
                        High-speed racing is accustomed to high-speed collisions, such is the nature of the sport.
                        But rarely have we seen a crash as dramatic as what took place on Saturday during the first of Formula E’s double-header of races in Rome.
                        On turn six of the ninth lap, Jaguar driver Sam Bird – leading the race at the time – appeared to lose control of the back of his car before colliding with the barrier to spin his car into the middle of the track.
                    </p>
                    
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto64.webp" alt = "foto64" ></div>
                    <h3>Rafael Nadal says he’s feeling ‘better’ but isn’t ‘setting deadlines’ for his return to tennis</h3>
                    <p>
                        Rafael Nadal says he’s not setting any “deadlines” for his long-anticipated return to tennis, with the Spaniard still recovering from a hip injury.
                        The 22-time grand slam champion has been out of action since the Australian Open in January and underwent surgery in June which ruled him out for the rest of the 2023 calendar.
                        Earlier this month, Australian Open’s tournament director Craig Tiley said Nadal would make his return at the 2024 edition, though following those comments, the Spaniard’s representative Benito Pérez-Barbadillo told CNN that there were “no dates confirmed yet.”
                    </p>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto65.webp" alt = "foto65" ></div>
                    <h3>Max Verstappen wins record 10th consecutive race with victory at Italian Grand Prix</h3>
                    <p>
                        Max Verstappen further cemented his status as the dominant driver of his generation with a historic victory at the Italian Grand Prix, his 10th consecutive race win.
                        No Formula One driver has ever won as many races in a row in a season. The Red Bull driver had matched the previous all-time record of nine, set by Sebastian Vettel 10 years ago, at last weekend’s Dutch Grand Prix.
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
                    <h3>Latest in Sports</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto66.jpg" alt="foto52"></div>
                        <h3>‘Mia, thanks for inspiring me’: After unimaginable personal tragedy, Camilo Villegas is a champion again</h3>
                        <p>
                            For the briefest of moments, Camilo Villegas simply stood motionless, staring down at the hole and the ball that had just trickled into it. Then, accompanied by the deftest pump of his right fist, he turned his gaze skyward and whispered a message. “Mia, thanks for inspiring me.” Nine years and 8,496 holes since his last win on the PGA Tour, Villegas was a champion again, as a two-stroke victory at the Bermuda Championship earlier this month sealed a long-awaited return to the winner’s circle.
                        </p>
                        
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
                        <div class="img"><img src="indexphoto/foto67.webp" alt="foto67"></div>
                        <h3>The football jersey Tom Brady wore on his final game is headed to auction, where it could sell for a record $2.5 million</h3>
                       <p>
                            The jersey Tom Brady wore in the last game of his 23-season career is heading to auction in Las Vegas next month, where it could fetch as much as $2.5 million.
                            If snagged at that price, it would be the most valuable football jersey sold at an auction. Brady’s Tampa Bay Buccaneers No. 12 jersey will be featured in an auction held by RM Sotheby’s and Wynn Las Vegas in association with Formula 1 Las Vegas Grand Prix on November 17, according to auction organizers. Its listed price range is between $1.5 million and $2.5 million.
                       </p>
                        
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
                        <div class="img"><img src="indexphoto/foto68.webp" alt="foto68"></div>
                        <h3>Buffalo Bills’ Damien Harris was removed from the field on a gurney during New York Giants game</h3>
                        <p>
                            Buffalo Bills running back Damien Harris was transported off the field in an ambulance after sustaining a neck injury during the team’s home game against the New York Giants on Sunday night.
                            “Damien Harris (neck) is out for the game,” the Bills said in a statement on X, formerly Twitter. “He has movement in his arms and legs. Harris is being taken to hospital for further testing.”
                        </p>
                        
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "right">
            <div class="box">
                <div class="title">
                    <h3>Latest in Sports</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto69.webp" alt="foto69"></div>
                        <h3>World Series Fast Facts</h3>
                       <p>
                            Here’s a look at Major League Baseball’s World Series.
                            November 1, 2023 - The Texas Rangers win the World Series for the first time in franchise history, defeating the Arizona Diamondbacks 5-0 in Game 5.
                            November 5, 2022 - The Houston Astros win the World Series, defeating the Philadelphia Phillies 4-1 in Game 6.
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
