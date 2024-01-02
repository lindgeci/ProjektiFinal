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
                <li><a href="Login.php">Log-in</a></li>
            </ul>
        </nav>
    </header>
    
    <div class="LoginRegister">
        <div class="Register">
            <form action="register.php" method="post" onsubmit="return validateRegistrationForm()">
                <h2>Register</h2>
                <p>Name: <input id="name" type="text" name="name" required autocomplete="given-name"></p>
                <p>Surname: <input id="surname" type="text" name="surname" required autocomplete="family-name"></p>
                <p>Email: <input id="regEmail" type="email" name="regEmail" required autocomplete="email"></p>
                <p>Password: <input id="regPassword" type="password" name="regPassword" required autocomplete="new-password"></p>
                <button type="submit">Register</button>
            </form>
        </div>

        <div class="Log-in">
            <form action="log-in.php" method="post" onsubmit="return validateLoginForm()">
                <h1>Log-In</h1>
                <p>Email: <input id="loginEmail" type="email" name="loginEmail" required autocomplete="email"></p>
                <p>Password: <input id="loginPassword" type="password" name="loginPassword" required autocomplete="current-password"></p>
                <button type="submit">Log in</button>
            </form>
        </div>
    </div>

    <h2 id = "h2Login">Things you may have missed </h2>
    <div class="main">
        <div class="left">
            <div class="box">
                <div class="title">
                    <h3>Breaking News</h3>
                </div>
                <div class="newsBox1">
                <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto2.webp" alt="foto2"></div>
                        <h2>About three-quarters of Americans do not fear getting Covid-19 this holiday season, KFF survey finds</h2>
                        <p>Most adults in the United States are not worried about getting sick with Covid-19 or spreading it over the holidays, a new survey from KFF found. Only about half say they plan to get the latest vaccine, and there’s a similar split around plans to take other precautions.</p>
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
                        <h2>Expert: What to do when the Thanksgiving buffet is too risky</h2>
                        <p>
                            As people gather for Thanksgiving, they might be bringing along some unexpected guests.
                            These get-togethers are occurring as respiratory viruses such as influenza are on the rise, and Covid-19 and the respiratory syncytial virus are circulating as well. Additionally, there are also foodborne illnesses going around that can result in stomach upset and other symptoms.
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
    </div>

    

<div class="lajmi3">
    <div class="page2">
        <div class="box" >
            
           
            <div class="title">
                <h3>Latest in Health</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">
                    <div class="img1"><img src="indexphoto/foto74.jpg" alt = "foto74" ></div>
                    <h3>Just 2 minutes of walking after eating can help blood sugar, study says</h3>
                    <p>
                        For centuries, people in the sunny Mediterranean would get up after long, leisurely meals and take a walk, often to the town square to see neighbors and socialize. Walking is so much a part of that lifestyle it is listed as a foundation of the über-healthy Mediterranean diet.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img1"><img src="indexphoto/foto75.jpg" alt = "foto75" ></div>
                    <h3>Fascia training may help you live with less pain, experts say</h3>
                    <p>
                        f you’ve dealt with stiffness and pain in the recent past, you may have come across fascia training — an approach that many in the fitness realm are encouraging people to do. That means working to improve the health of your fascia, a web of connective tissue that holds the body’s organs, muscles, bones and tissues in place.
                    </p>
                </div>
                <div class="newsItem">
                    <div class="img1"><img src="indexphoto/foto76.jpg" alt = "foto76" ></div>
                    <h3>Bad habits of night owls may lead to type 2 diabetes, study says</h3>
                    <p>
                        If you’re groggy in the morning but perky in the evening, you may be a night owl — a sleep pattern or chronotype that makes you more inclined to want to stay up late and sleep in.
                        If so, you could be at higher risk of developing type 2 diabetes as well as a number of unhealthy lifestyle habits, a new study found.
                    </p>
                </div>
                <div class="newsItem">
                    <div class="img1"><img src="indexphoto/foto77.jpg" alt = "foto77" ></div>
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
</div>
<div class="lajmi3">
        <div class="page2">
            <div class="box" >
                
               
                <div class="title">
                    <h3>Latest in Business</h3>
                </div>
                <div class="newsBox">
    
                    <div class="newsItem">
                        <div class="img1"><img src="indexphoto/foto4.webp" alt = "foto4" ></div>
                        <h3>ChatGPT parent company OpenAI fires CEO Sam Altman</h3>
                        <p>OpenAI, the company behind the viral chatbot ChatGPT, fired its CEO and founder, Sam Altman, on Friday. His stunning departure sent shockwaves through the budding AI industry.
                            The company, in a statement, said an internal investigation found that Altman was not always truthful with the board.                        
                        </p>
                        <a href="Business.php">Read more</a>
                    </div>
                    <div class="newsItem">
                        <div class="img1"><img src="indexphoto/foto6.webp" alt = "foto6" ></div>
                        <h3>A record number of $50 bills were printed last year. It’s not why you think</h3>
                        <p>
                            Unless you’re an avid currency collector, an employee of the Bureau of Engraving and Printing, or work at the Federal Reserve, you likely didn’t know that last year a record number of $50 bills were printed.
                            Last year, the government printed 756,096,000 of those bills — the highest total of the denomination printed in one year in more than 40 years. If you put all those $50s together, you’d have about $37.8 billion. That’s enough to afford Taco Bell’s parent Yum Brands, Inc. $35.3 billion market cap.
                            
                        </p>
                        <a href="Business.php">Read more</a>
                    </div>
                    <div class="newsItem">
                        <div class="img1"><img src="indexphoto/foto11.webp" alt = "foto11" ></div>
                        <h3>With Black Friday deals and flashy displays, retailers try to convince reluctant shoppers to spend</h3>
                        <p>
                           Over the past two weeks, many retailers, including Walmart, Nordstrom and Target have said shoppers have made fewer store trips, postponed big purchases or held out for better deals. This week, Lowe’s, Best Buyand Kohl’s
                            all cut their sales forecasts. Even some retailers that raised their outlooks.
                            
                        </p>
                        <a href="Business.php">Read more</a>
                    </div>
                    <div class="newsItem">
                        <div class="img1"><img src="indexphoto/foto12.webp" alt = "foto12" ></div>
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
    </div>
    


  



    

    <footer>
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
        </div>
    </footer>  




    
 <script>
    function validateRegistrationForm() {
        var name = document.getElementById("name").value;
        var surname = document.getElementById("surname").value;
        var email = document.getElementById("regEmail").value;
        var password = document.getElementById("regPassword").value;

        var nameRegex = /^[a-zA-Z\s]+$/;
        if (!nameRegex.test(name)) {
            alert("Please enter a valid name");
            return false;
        }

        var surnameRegex = /^[a-zA-Z\s]+$/;
        if (!surnameRegex.test(surname)) {
            alert("Please enter a valid surname");
            return false;
        }

        var emailRegex = /^[a-zA-Z0-9._+-]+@[a-zA-Z]+\.[a-zA-Z]{3,}$/;
        if (!emailRegex.test(email)) {
            alert("Please enter a valid email address");
            return false;
        }

        if (password.length < 6) {
            alert("Password must be at least 6 characters");
            return false;
        }

        alert("Registration validation successful");
        return true;
    }

    function validateLoginForm() {
        var loginEmail = document.getElementById("loginEmail").value;
        var loginPassword = document.getElementById("loginPassword").value;

        var emailRegex = /^[a-zA-Z0-9._+-]+@[a-zA-Z]+\.[a-zA-Z]{1,3}$/;
        if (!emailRegex.test(loginEmail)) {
            alert("Please enter a valid email address");
            return false;
        }

        
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{6,}$/;
        if (!passwordRegex.test(loginPassword)){
            alert("Password must have at least 6 characters, including one uppercase, one lowercase, and one digit.");
            return false;
        }

        alert("Login validation successful");
        return true;
    }
</script>



</body>
</html>
