<!DOCTYPE html>
<html lang="en">
    <!-- HEADER -->
    <head>
         <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    	<title>Vision Christian Fellowship | Gateshead, Tyne and Wear, United Kingdom</title>
        
        <!--CSS references -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    	<link rel="stylesheet" type="text/css" href="css/custom.css">
    	
    	<!-- Script references -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- shortcut icon / favicon -->
        <link rel="icon" href="favicon.ico">

    </head>
    
    <!-- BODY STARTS HERE -->
    <body id = "myPage" data-spy="scroll" data-target=".navbar" data-offset="200">
        
        <!-- NAVIGATION -->
        <nav class="navbar navbar-default navbar-fixed-top ">
          <div class="container">
            <div class="navbar-header">
                <!-- button to open and close menu -->
                <button type="button" class="navbar-toggle" data-toggle="collapse" 
                data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <!-- home link -->
                <a class="navbar-brand" href="#myPage">Vision Christian Fellowship</a>
            </div>
            <!-- navigation links -->
            <div>
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#mission">Mission</a></li>
                    <li><a href="#israel">Israel & the Jews</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
        </nav>
        
        <!-- CONTENT -->
        <!-- logo -->
        <img class="logo" src="img/logo.svg">
        <!-- ParallaxImage#1 -->
        <div class="parallax-image" id="bgAngelOfNorth"></div>
        <!-- Content#1 -->
        <div class="content" id="introduction">
            <h1>Vision Christian Fellowship | Gateshead</h1>
            <!--introduction-->
            <h2>Introduction</h2>
            <p>Welcome to the website of Vision Christian Fellowship in Gateshead.  Find out who we are, the ministries we are involved in and what we believe.</p>
            
            <p>Vision Christian Fellowship meets in Gateshead, Tyne and Wear for teaching, worship and fellowship.  Vision Christian Fellowship is also passionate about wider mission and is actively involved in wider ministries.</p>
            <!--meetings-->
            <h2 id="meetings">Fellowship Meetings</h2>
                <h3>Sunday 6pm</h3>
                    <p>Vision Christian Fellowship meet at 6pm for fellowship, worship and teaching.  Visitors seeking faith, to be part of a new church or simply interested in what goes on at Vision Christian Fellowsip are welcome to join us.  There are opportunities to be prayed for after the service.</p>
                    
                    <p>Sunday meetings are held at <a href="http://www.mulberry-house.org.uk/" target="_blank" title="Visit the website of Mulberry House Community">Mulberry House</a>, 18 Kells Lane, Gateshead NE9 5SJ</p>
                        <!-- Add Google Maps -->
                        <div id="googleMap" style="height:400px;width:100%;"></div>
                        <script>
                            function myMap() {
                                var myCenter = new google.maps.LatLng(54.940905, -1.589538);
                                var mapProp = {center:myCenter, zoom:16, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
                                var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                                var marker = new google.maps.Marker({position:myCenter});
                                marker.setMap(map);
                            }
                        </script>
                        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCCtIlEw_f7pmUP98Y7mWk3l6CF_d0_-_w&amp;callback=myMap"></script>
                <h3>Wednesday 7.30pm | Felling</h3>
                    <p>Vision Christian Fellowship meets for fellowship, Bible study and prayer during the week.  Please contact us for further details</p>
                
                <h3>Thursday 1.30pm | Low Fell</h3>
                    <p>Vision Christian Fellowship meets for fellowship, Bible study and prayer during the week.  Please contact us for further details</p>
            <div class="container-fluid text-center">
                <!-- arrow link to top of page -->
                <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
            </div>
        </div>
        <!-- ParallaxImage#2 -->
        <div class="parallax-image" id="mission"></div>
        <!-- Content#2 -->
        <div class="content" >
            <!-- Mission -->
            <h2 >Mission</h2>
            <h3>General Mission</h3>
                <p>Members of the fellowship have been involved in mission visits to many countries over the past 20 years.  At present  members are involved in regular mission visits to Malawi, India, and Uganda.</p>
                <p>The mission work in Malawi is through <a href="http://www.reaperministries.org.uk/" target="_blank" title="Visit the Reaper Ministries website">Reaper Ministries</a>, run by members of the fellowship and partners, including Richard Trotter (the Director), in Derbyshire.</p>
            <h3>Malawi</h3>
                <p>In recent years, the main mission emphasis has been on visits for teaching and outreach ministry in and around Lilongwe, Malawi, and the building, running and development of Good Hope Free Primary School, providing free education to those too poor for the state system</p>
                <p>You can support this school by earning commission while you shop online. All you need to do is use our easyfundraising page to initiate your shopping and they'll pay a small percentage towards the cause, at no extra cost to you.</p>
                <p class="text-center"><a href="https://www.easyfundraising.org.uk/causes/goodhopefreeps/" target="_blank" title="Go to Easy Fundraising's page for Good Hope Free Primary School"><img src="img/EF-Banner-560x90.png" alt="Easy Fundraising banner for Good Hope Free Primary School" title="Raise funds for Good Hope Free Primary School with Easy Fundraising" class="img-responsive"></a></p>
            <div class="container-fluid text-center">
                <!-- arrow link to top of page -->
                <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
            </div>
        </div>
        <!-- ParallaxImage#3 -->
        <div class="parallax-image" id="israel"></div>
        <!-- Content#3 -->
        <div class="content" >
            <!-- Israel -->
            <h2>Israel and the Jewish People</h2>
                <p>Vision Christian Fellowship comprises both Gentile and Jewish believers in Jesus Christ/Yeshua the Messiah.</p>
                <p>We include teaching on the Hebraic and Jewish background to the faith, recognising its importance.
                <p>We seek to understand and pray for Jewish people and the nation of Israel today.</p> 
                <p>Many VCF members are actively involved in the work of <a href="http://www.beityeshua.org.uk/" target="_blank" title="Visit the web site of Beit Yeshua North East Messianic Fellowship">Beit Yeshua North East Messianic Fellowship</a>.</p>
            <div class="container-fluid text-center">
                <!-- arrow link to top of page -->
                <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
            </div>
        </div>

        <!-- ParallaxImage#4 -->
        <div class="parallax-image" id="bgTyneBridge"></div>
        <!-- Content#4 -->
        <div class="content" id="about">
            <!-- about us -->
            <h2>About us</h2>
				<!-- What we consider important -->
				<h3>What we consider important</h3>
				    <ol class="indent-list">
                    	<li>We believe that the Bible is the inspired Word of God, and is the foundation on which we base our faith, teaching and lifestyle.</li>
                    	<li>Whilst Biblical doctrine is fixed, the way we do things is open to change as the Holy Spirit leads.</li>
                    	<li>Whilst we are based in Gateshead,  where God has placed us, we are involved in ministries in other parts of the world</li>
                    	<li>We aim to express a sense of family, friendship and hospitality. We consider meeting in homes is important so that deeper relationships are formed and where there is a freedom for all to play a part, and we aim to have a non-judgmental attitude</li>
                    	<li>We aim to develop people's talents and gifting by  equipping and motivating them.</li>
                    	<li>We aim to put prayer and worship at the centre of our lifestyle as individuals and as a gathering of believers.</li>
                    	<li>We seek to reach out to the local community in a variety of ways.</li>
                    	<li>We seek to explore Hebraic heritage of the faith and to understand God's purposes for Israel and
                    		the Jewish people. We seek to explore the related destinies of the Church and Israel.</li>
                    	<li>We subscribe to the <a href="http://www.eauk.org/about/basis-of-faith.cfm" target="_blank" title="View the Evangelical Alliance Basis of faith">Evangelical Alliance Basis of faith</a></li>
                    </ol>
            <h3>Leadership Team</h3>
                <p>Vision Christian Fellowship is led by John Webster, together with his wife Marjorie, and Laurence Levine</p>
            <h3>Charity</h3>
                <p>Vision Christian Fellowship, Gateshead is a Registered Charity, No: 106913. </p>
                <p><a href="http://beta.charitycommission.gov.uk/charity-details/?subid=0&regid=1069134" target="_blank" title="View the Charity Commission page for Vision Christian Fellowship, Gateshead">View the Charity Commission page</a></p>
            <h3>Organisations we have links to</h3>
                <ul class="indent-list">
                    <li>
                        <a href="http://howardmorganministries.org/" target="_blank" title="Visit Howard Morgan Ministries' website">Howard Morgan Ministries</a>
                    </li>
                    <li>
                        <a href="http://www.cvm.org.uk/" target="_blank" title="Visit Christian Vision for Men's website">Christian Vision for Men</a>
                    </li>
                    <li>
                        <a href="http://www.mulberry-house.org.uk/" target="_blank" title="Visit Mulberry House Community's website">Mulberry House Community</a>
                    </li>
                    <li>
                        <a href="http://www.reaperministries.org.uk/" target="_blank" title="Visit Reaper Ministries' website">Reaper Ministries</a>
                    </li>
                    <li>
                        <a href="http://www.beityeshua.org.uk/" target="_blank" title="Visit the web site of Beit Yeshua North East Messianic Fellowship">Beit Yeshua - North East Messianic Fellowship</a>
                    </li>
                    <li>
                        <a href="https://www.surroundedministries.com " target="_blank" title="Visit Surrounded Ministries' website">Surrounded Ministries</a>
                    </li>
                </ul>
            <div class="container-fluid text-center">
                <!-- arrow link to top of page -->
                <a href="#myPage" title="To Top">
                    <span class="glyphicon glyphicon-chevron-up"></span>
                </a>
            </div>
        </div>
        
        <!-- ParallaxImage#5 -->
        <a id="contact"></a>
        <div class="parallax-image" id="bgAngelOfNorth"></div>
        <!-- Content#5 -->
        <div class="content" >
            <!-- Contact -->
            <div class="container-fluid bg-grey">
                <h2>Contact</h2>
                <div class="row">
                    <!-- Contact details-->
                    <div class="col-sm-5">
                        <p>Contact us for further information.</p>
                        <p><span class="glyphicon glyphicon-map-marker"></span> Gateshead, Tyne and Wear, United Kingdom</p>
                        <p><span class="glyphicon glyphicon-user"></span> John and Marjorie Webster</p>
                        <p><span class="glyphicon glyphicon-earphone"></span> +44 (0)191 420 1218</p>
                        <p><span class="glyphicon glyphicon-user"></span> Laurence Levine</p>
                        <p><span class="glyphicon glyphicon-earphone"></span> +44 (0)191 528 2822</p>
                    </div>
                    <!-- Contact form -->
                    <div class="col-sm-7">
                        <!-- Contact send status message -->
                        <?php
                            $status = isset($_GET['status']) ? $_GET['status'] : FALSE;
                            if ($status == 'success') {
                                echo '<div class="alert alert-success">
                                        <strong>Success!</strong> Your email has been successfully sent. 
                                    </div>';
                            } 
                            elseif ($status == 'error'){
                                echo '<div class="alert alert-danger">
                                        <strong>Error!</strong> Your email has not been sent. Please try again.
                                    </div>';
                            }
                            else {}//do nothing
                        ?>
                        <form method="post" action="contact.php" enctype="multipart/form-data">
                            <div class="row" id="your-details">
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" name="name" placeholder="Name" type="text" required>
                                </div>
                                <div class="col-sm-6 form-group">
                                    <input class="form-control" name="email" placeholder="Email" type="email" required>
                                </div>
                            </div>
                            <div class="row" id="subject">
                                <div class="col-sm-12 form-group">
                                    <input class="form-control" name="subject" placeholder="Subject" type="text" autocomplete="nope">
                                </div>
                            </div> 
                            <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea><br>
                            <div class="row" id="submit">
                                <div class="col-sm-12 form-group">
                                    <input class="btn btn-default pull-right" id="submit" name="submit" type="submit" value="send">
                                </div>
                            </div> 
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
         
        <!-- FOOTER -->    
        <footer class="container-fluid text-center">
            <!-- arrow link to top of page -->
            <a href="#myPage" title="To Top">
            <span class="glyphicon glyphicon-chevron-up"></span><br>Back to the Top
            </a>
            <!-- credits -->
            <p>&copy; 2018 Vision Christian Fellowship</p>
            <p>'Tyne Bridge' image by Tagishsimon [<a href="https://creativecommons.org/licenses/by-sa/3.0">CC BY-SA 3.0</a> or <a href="http://www.gnu.org/copyleft/fdl.html">GFDL</a>], <a href="https://commons.wikimedia.org/wiki/File:Tyne_Bridge_-_Newcastle_Upon_Tyne_-_England_-_2004-08-14.jpg">from Wikimedia Commons</a></p>
            <p>Site designed and developed by <a href="https://www.systemhorizons.co.uk" title="Visit System Horizons" target="_blank" rel="nofollow">System Horizons</a> using <a href="https://getbootstrap.com/" target="_blank" rel="nofollow">BootStrap</a></p> 
        </footer>
        <!-- SMOOTH SCROLLING -->
        <script>
            $(document).ready(function(){
                // Add smooth scrolling to all links in navbar + footer link
                $(".navbar a, .navbar-brand a, footer a[href='#myPage'], a[href='#myPage']" ).on('click', function(event) {
        
                    // Make sure this.hash has a value before overriding default behavior
                    if (this.hash !== "") {
        
                        // Prevent default anchor click behavior
                        event.preventDefault();
        
                        // Store hash
                        var hash = this.hash;
        
                        // Using jQuery's animate() method to add smooth page scroll
                        // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
                        $('html, body').animate({
                          scrollTop: $(hash).offset().top
                        }, 900, function(){
                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
                $(window).scroll(function() {
                    $(".slideanim").each(function(){
                        var pos = $(this).offset().top;
                        var winTop = $(window).scrollTop();
                        if (pos < winTop + 600) {
                            $(this).addClass("slide");
                        } // End if
                    });
                });
            })
        </script>
    </body>
</html>