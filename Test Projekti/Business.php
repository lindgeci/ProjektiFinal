
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
                    <div class="img"><img src="indexphoto/foto4.webp" alt="foto4"></div>
                    <h3>ChatGPT parent company OpenAI fires CEO Sam Altman</h3>
                    <p>
                        OpenAI, the company behind the viral chatbot ChatGPT, fired its CEO and founder, Sam Altman, on Friday. His stunning departure sent shockwaves through the budding AI industry.
                        The company, in a statement, said an internal investigation found that Altman was not always truthful with the board.
                        “Mr. Altman’s departure follows a deliberative review process by the board, which concluded that he was not consistently candid in his communications with the board, hindering its ability to exercise its responsibilities,” the company said in its statement. “The board no longer has confidence in his ability to continue leading OpenAI.”
                    </p>
                    </div>

                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto33.webp" alt = "foto33" ></div>
                        <h3>Disney’s box office problems ramp up pressure on CEO Bob Iger and studio chief Alan Bergman</h3>
                        <p>
                            It’s rare for Disney Chief Executive Bob Iger to acknowledge his company has had creative missteps. So when he does, it’s probably wise to pay attention.
                            “As I’ve looked at our overall output, meaning the studio, it’s clear that the pandemic created a lot of challenges creatively for everybody, including for us,” Iger said last week during Disney’s earnings conference call. “I’ve always felt that quantity can be actually a negative when it comes to quality, and I think that’s exactly what happened, we lost some focus.”
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
                        <div class="img"><img src="indexphoto/foto12.webp" alt="foto12"></div>
                        <h3>Immigration needs urgent review, says business boss</h3>
                        <p>
                            The head of the Chamber of Commerce is asking the government to "urgently review" its immigration policy over fears thousands of hospitality workers will leave at the same time
                            Seasonal workers have been able stay in Jersey for up to three years since 2021, with the first intake set to soon leave.
                            The government says the sector should have benefited from workers staying for three years.
                        </p>
                        
                    </div>
                
                    <div class="newsItem1"> 
                        <div class="img"><img src="indexphoto/foto11.webp" alt="foto11"></div>
                        <h3>With Black Friday deals and flashy displays, retailers try to convince reluctant shoppers to spend</h3>
                        <p>
                            Over the past two weeks, many retailers, including Walmart, Nordstrom and Target have said shoppers have made fewer store trips, postponed big purchases or held out for better deals. This week, Lowe’s, Best Buyand Kohl’s
                             all cut their sales forecasts. Even some retailers that raised their outlooks.
                             
                         </p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="lajmi2">
        <div class="page2">
            <div class="box" >
                <div class="title">
                    <h3>Business</h3>
                </div>
                            
                            <div class="mySlides fade">
                            <img src="indexphoto/foto6.webp">
                            </div>
                        
                            <div class="mySlides fade">
                            <img src="indexphoto/foto22.webp">
                            </div>
                          
                            <div class="mySlides fade">
                            <img src="indexphoto/foto23.webp">
                            </div>

                            <div class="mySlides fade">
                            <img src="indexphoto/foto24.webp">
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
                    <div class="img"><img src="indexphoto/foto6.webp" alt = "foto6" ></div>
                    <h3>A record number of $50 bills were printed last year. It’s not why you think</h3>
                    <p>
                        Unless you’re an avid currency collector, an employee of the Bureau of Engraving and Printing, or work at the Federal Reserve, you likely didn’t know that last year a record number of $50 bills were printed.
                        Last year, the government printed 756,096,000 of those bills — the highest total of the denomination printed in one year in more than 40 years. If you put all those $50s together, you’d have about $37.8 billion. That’s enough to afford Taco Bell’s parent Yum Brands, Inc. $35.3 billion market cap.
                        
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto22.webp" alt = "foto22" ></div>
                    <h3>Shein files for U.S. IPO as fast-fashion giant looks to expand its global reach</h3>
                    <p>
                        Shein has confidentially filed to go public in the U.S. as the Chinese-founded fast-fashion juggernaut looks to expand its global reach with a long-rumored initial public offering, CNBC has learned. 
                        The retailer was last valued at $66 billion and could be ready to start trading on the public markets as soon as 2024, people familiar with the matter said Monday. 
                        It is unclear how much the company is currently worth, but its valuation has been a central point of debate among Shein and the advisors it’s working with, people familiar with the matter said.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto23.webp" alt = "foto23" ></div>
                    <h3>You can now lease a Rivian R1T electric pickup in select markets</h3>
                    <p>
                        Rivian on Monday started leasing select models of its all-electric R1T pickup truck, a move to expand sales and its customer base beyond early adopters of electric vehicles.
                        The company said the program is available to customers in 14 states: Arizona, California, Colorado, Florida, Georgia, Massachusetts, Michigan, Missouri, New Jersey, New York, Nevada, Pennsylvania, Texas and Washington.
                        A Rivian spokeswoman said the automaker is working with its existing financial partner Chase for the leasing program, which she said will expand over time.
                    </p>
                    
                </div>
                <div class="newsItem">
                    <div class="img"><img src="indexphoto/foto24.webp" alt = "foto24" ></div>
                    <h3>These regional banks are at greatest risk of being taken over by rivals, according to KBW</h3>
                    <p>
                        A trio of regional banks faces increasing pressure on returns and profitability that makes them potential targets for acquisition by a larger rival, according to KBW analysts.
                        Banks with between $80 billion and $120 billion in assets are in a tough spot, says Christopher McGratty of KBW. That’s because this group has the lowest structural returns among banks with at least $10 billion in assets, putting them in the position of needing to grow larger to help pay for coming regulations — or struggling for years.
                        
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
                <h3>Latest in Business</h3>
            </div>
            <div class="newsBox">

                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto25.webp" alt = "foto25" ></div>
                    <h3>RETAIL
                        Best Buy cuts sales forecast, as holiday shoppers hunt for deals</h3>
                    <p>
                        Best Buy cut its full-year sales outlook Tuesday, as the company weathers a period of cooler demand and prepares for price-conscious holiday shoppers.
                        The consumer electronics retailer beat Wall Street’s quarterly earnings expectations, but fell short on revenue.
                        Best Buy said it now expects revenue to range from $43.1 billion to $43.7 billion for the fiscal year, down from its previous range of between $43.8 billion and $44.5 billion. The retailer said it expects comparable sales to decline by between 6% and 7.5%, lower than its previous guidance of a 4.5% to 6% drop.
                    </p>
                    
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto26.webp" alt = "foto26" ></div>
                    <h3>The hot word for CEOs on earnings calls is ‘choiceful’</h3>
                    <p>
                        “Choiceful” doesn’t exactly roll off the tongue, but chief executives love it.
                    It’s how Walmart CEO Doug McMillon described the average consumer, who is trying to cut back on spending but is still willing to splurge on what’s worth it. 
                    McDonald’s CEO Chris Kempczinski used the word to characterize the company’s strategy on price increases.
                    </p>
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto27.webp" alt = "foto27" ></div>
                    <h3>Building an e-commerce sales success story is getting more complex and costly</h3>
                    <p>
                        Amazon may be the epitome of big business, but more than 60% of the behemoth’s sales last year came from small- and medium-sized businesses. Small businesses rely on Amazon for its reach and breadth, while Amazon needs independent sellers to fill its site with products.
                        But the relationship can be uneasy. Sellers have complained about rising costs to sell on the site. The Federal Trade Commission antitrust lawsuit against Amazon, meanwhile, accusing the e-commerce giant of wielding its “monopoly power” to raise prices, stifle competition and leave shoppers with worse service. 
                    </p>
                    
                </div>
                <div class="newsItem">  
                    <div class="img"><img src="indexphoto/foto28.webp" alt = "foto28" ></div>
                    <h3>The last resort of bankruptcy is rising among Main Street businesses across America</h3>
                    <p>
                        Small business bankruptcies are on the rise.
                        Subchapter V filings — which most small businesses these days are using to reorganize a floundering business — have outpaced filings from 2022. There were 1,659 Subchapter V filings through October, compared with 1,553 for the full year earlier, according to the American Bankruptcy Institute.
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
                    <h3>Latest in Business</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto29.webp" alt="foto29"></div>
                        <h3>Running a franchise business like fast food is getting more expensive</h3>
                        <p>
                            McDonald’s decision to raise royalty fees for the first time in nearly three decades doesn’t mean a wave of franchisees across corporate brands are about to see their cost of doing business go up, but it does underscore the need for business owners to keep up with changes in the franchise business model. The economics of being in the franchise business may, in fact, continue to increase based on a number of factors, from regulation of the industry to the cost of technological adaptation.
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="right">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in Business</h3>
                </div>
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto30.webp" alt="foto30"></div>
                        <h3>A big climate change stress test is coming for Amazon sellers and suppliers</h3>
                        <p>
                            As Amazon and other big businesses ramp up efforts to reduce their carbon footprint, they’re putting pressure on their suppliers to do the same, and those who don’t may pay a big price. Starting in 2024, Amazon
                            will require suppliers to share their emissions data, set emissions goals, and report on their progress, the e-commerce giant said in its recently released sustainability report. With that move, it joins Microsoft, Walmart, Apple, and others in saying that suppliers must step up decarbonization efforts. 
                        </p>
                        
                    </div>
                
            </div>
        </div>
    </div>
        


    <div class="main">
        <div class="left">
            <div class="box"> 
                <div class="title">
                    <h3>Latest in Business</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto31.webp" alt="foto21"></div>
                        <h3>The IRS is cracking down on a popular small business tax break that could lead to a costly audit    </h3>
                        <p>
                            A cottage industry of specialist firms has sprung up to help business owners claim the Employee Retention Credit (ERC), a governmental tax incentive intended for companies stressed by the pandemic. But businesses need to be careful not to get hoodwinked. 
                            There are strict eligibility requirements for the ERC — one way it can be claimed is for wages paid during pandemic periods when gross receipts declined — and many owners may not really understand the criteria.
                        </p>
                        
                    </div>                    
                </div>
            </div>
        </div>
        <div class = "right">
            <div class="box">
                <div class="title">
                    <h3>Latest in Business</h3>
                </div>
                <div class="newsBox1">
                    <div class="newsItem1">
                        <div class="img"><img src="indexphoto/foto32.webp" alt="foto32"></div>
                        <h3>The Fed may wreck one of the greatest booms in history of Main Street America</h3>
                        <p>
                            If a recession is coming, someone forgot to tell the entrepreneurs. As interest rates rise, inflation lingers and home equity that many business founders use to get started shrinks, small business formations are doing something unexpected – they’re rising. Indeed, after a small lull earlier this year, new business formations have recovered to the elevated levels seen last fall, and their owners are hiring quickly, said John Haltiwanger, a University of Maryland economist whose new paper with Federal Reserve economist Ryan Decker documents the trend.
                            If the data persists, the resilience in small business formation points to a “new plateau” of activity that may add millions of jobs to the economy, Haltiwanger says.
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
                    <input type="search" id="emailInput" placeholder="Enter Your Email Here">
                    <button onclick="checkSearch()">Subscribe</button>
                </div>
            </div>
        </div>
    
        <div class="copyrights">
            <p>&copy; 2023 𝔗𝔥𝔢 𝔑𝔢𝔴 𝔜𝔬𝔯𝔨 𝔗𝔦𝔪𝔢𝔰</p>
        </div>
    </footer>
          
        
        
        <script>


            function checkSearch() {

                if(document.getElementById("pc").value===''){
                    alert("Please put something on the search bar!");
                }

                
            }

            let slideIndex = 0;
             showSlides();


             function showSlides() {
   
                let i;
   
                let slides = document.getElementsByClassName("mySlides");
   
                for (i = 0; i < slides.length; i++) {
      
                    slides[i].style.display = "none";
   
                }
   
                slideIndex++;
   
                if (slideIndex > slides.length) {
      
                    slideIndex = 1;
   
                }
   
                slides[slideIndex - 1].style.display = "block";
   
                setTimeout(showSlides, 2000);

            }


            


        </script>
</body>
</html>
