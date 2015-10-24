<?php
   if (isset($_POST["submit"])) {
   	$name = $_POST['name'];
   	$email = $_POST['email'];
   	$message = $_POST['message'];
   	$human = intval($_POST['human']);
   	$from = 'Contact Form'; 
   	$to = 'president@warriorpointe.org'; 
   	$subject = 'Message from WarriorPointe.org ';
   	$body ="From: $name\n E-Mail: $email\n Message:\n $message";
   	// Check if name has been entered
   	if (!$_POST['name']) {
   		$errName = 'Please enter your name';
   	}	
   	
   	// Check if email has been entered and is valid
   	if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
   		$errEmail = 'Please enter a valid email address';
   	}
   	
   	//Check if message has been entered
   	if (!$_POST['message']) {
   		$errMessage = 'Please enter your message';
   	}
   	//Check if simple anti-bot test is correct
   	if ($human !== 5) {
   		$errHuman = 'Your anti-spam is incorrect';
   	}
   // If there are no errors, send the email
   if (!$errName && !$errEmail && !$errMessage && !$errHuman) {
   if (mail ($to, $subject, $body, $from)) {
   	$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
   } else {
   	$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later.</div>';
   }
   }
   }
   ?>
<!DOCTYPE html>
<html itemscope="" itemtype="http://schema.org/WebPage" lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="IE=Edge" http-equiv="X-UA-Compatible">
      <meta content="width=device-width, initial-scale=1" name="viewport">
      <!-- SITE TITLE -->
      <title>Warrior Pointe, Inc</title>
      <!--META DATA-->
      <meta content="WP , Warrior Pointe Inc, Warrior Pointe , warriorpointe, New Veterans, " name="keywords">
      <meta content="Welcome to Warrior Pointe. Our oath has no expiration date, our enlistment or commission may have ended, but our oath has not. We are the uncommon few that share the common bond of Duty, Honor, and Country.  This organization is the rallying point for all veterans who have honorably served this great nation we call the United States of America." name="description">
      <meta content="index, follow" name="robots" />
      <meta content="15 days" name="revisit-after" />
      <meta property="og:image" content="http://www.warriorpointe.org/images/png/facebook1.png">
      <meta property="og:url" content="http://www.warriorpointe.org/">
      <meta property="og:site_name" content="Warrior Pointe">
      <meta property="og:title" content="Warrior Pointe">
      <meta property="og:type" content="website">
      <meta property="og:description" content="Welcome to Warrior Pointe. Our oath has no expiration date, our enlistment or commission may have ended, but our oath has not. We are the uncommon few that share the common bond of Duty, Honor, and Country.  This organization is the rallying point for all veterans who have honorably served this great nation we call the United States of America.">
      <meta name="HandheldFriendly" content="true" />
      <meta name="twitter:card" content="summary">
      <meta name="twitter:site" content="@warriorpointe">
      <meta name="twitter:creator" content="@raddaddesign"/>
      <link href="http://www.warriorpointe.org" rel="canonical">
      <link href="/images/png/favicon-128.png" sizes="128x128" rel="icon" type="image/png">
      <link href="/images/png/favicon-32.png" sizes="32x32" rel="icon" type="image/png">
      <link href="/images/png/favicon-16.png" sizes="16x16" rel="icon" type="image/png">
      <link href="/images/png/apple-touch-icon-128.png" rel="apple-touch-icon" sizes="128x128" type="image/png">
      <link href="/images/png/apple-touch-icon-57.png" rel="apple-touch-icon" sizes="57x57" type="image/png">
      <link href="https://plus.google.com/112627487019463176150" rel="publisher" />
      <!-- STYLESHEETS -->
      <link href="css/animate.min.css" rel="stylesheet">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link href="css/font-awesome.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
      <link href="css/footer.css" rel="stylesheet">
      <script src="js/jquery.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/jquery.singlePageNav.min.js"></script>
      <script src="js/typed.js"></script>
      <script src="js/wow.min.js"></script>
      <script src="js/custom.js"></script>
      <meta content="f0df3521e4cc9211106369134d7c8c29" name="p:domain_verify" />
      <!-- Google Search Engine Such and Such-->
      <script type='application/ld+json'>{"@context":"http:\/\/schema.org","@type":"WebSite","url":"http:\/\/www.warriorpointe.org\/","name":"Warrior Pointe","potentialAction":{"@type":"SearchAction","target":"http:\/\/www.warriorpointe.org\/?s={search_term_string}","query-input":"required name=search_term_string"}}</script>
      <script>
         (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
         (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
         m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
         })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
         
         ga('create', 'UA-63190565-1', 'auto');
         ga('send', 'pageview');
         
      </script>
      <script>
         /**
         * Function that tracks a click on an outbound link in Google Analytics.
         * This function takes a valid URL string as an argument, and uses that URL string
         * as the event label.
         */
         var trackOutboundLink = function(url) {
            ga('send', 'event', 'outbound', 'click', url, {'hitCallback':
              function () {
              document.location = url;
              }
            });
         }
      </script>
      <!--[if lt IE 7]>
      <div class="alert">Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</div>
      <![endif]-->
   </head>
   <body id="top">
      <!-- start navigation -->
      <nav class="navbar navbar-default nav" role="navigation">
         <img alt="warrior pointe banner" class="banner" src="images/png/banner.png">
         <div class="container">
            <div class="navbar-header">
               <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span><span class="icon-bar"></span>
               <span class="icon-bar"></span></button>
               <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav navbar-right">
                     <li><a href="index.php#top">Home</a></li>
                     <li><a href="index.php#mission">Our Mission</a></li>
                     <li><a href="staff.html">Our Team</a></li>
                     <li><a href="brigades.html">Join Us</a></li>
                     <li><a href="http://www.warriorpointe.org/anchor">The Warrior's Pointe</a></li>
                     <li><a href="http://www.warriorpointe.com">Forums</a></li>
                     <li><a href="supporters.html">Supporters</a></li>
                     <li><a href="donations.html">How you can Help</a></li>
                     <li><a href="index.php#contact">Contact WP</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </nav>
      <!-- end navigation -->
      <!-- start home -->
      <section id="home">
         <div class="container">
            <div class="row">
               <div class="col-md-offset-2 col-md-9">
                  <h1>
                     <span style="color:#ff0000;">#uncommonfew</span>
                  </h1>
                  <div class="element wow fadeIn" data-wow-delay="1.s" data-wow-offset="50">
                     <div class="sub-element">
                        We are your Rally Pointe
                     </div>
                     <div class="sub-element">
                        We are your Brotherhood
                     </div>
                     <div class="sub-element">
                        We are your Warrior Pointe
                     </div>
                  </div>
                  <a class="btn btn-default" data-scroll="" href="brigades.html">
                  Join Warrior Pointe</a> 
               </div>
            </div>
         </div>
      </section>
      <!-- end home -->
      <!-- start mission -->
      <section id="mission">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="wow">
                     <span style="color:#ff0000">Warrior Pointe's</span> Mission
                  </h2>
               </div>
               <div class="col-md-12 col-sm-12 col-xs-12 wow">
                  <div class="media">
                     <div class="media-heading-wrapper">
                        <div class="media-body">
                           <img alt="WP Logo" class="wplogo" src="images/jpg/spartangraphic.jpe">
                           <p>Warrior Pointe was created to be the rallying point for all veterans who have honorably served this great nation. Whether you served in peacetime, wartime, or are still serving in the Army, Navy, Air Force, Marines, Coast Guard, or National Guard, you are welcome at Warrior Pointe. Every soldier, sailor, marine, and airman, each a hero in their own right, joins our ranks to buttress one another, and to help raise awareness of the issues we face as defenders of our nation. We are dedicated to maintaining the brotherhood we shared when we served.</p>
                           <p>Warrior Pointe is unique as our mission is simple and effective. In recreating the brotherhood we shared while in the service our members act as a safety net, not only for each other but also for those who are lost and searching for that missing connection with their brothers-in-arms, to ensure they do not fall and are not forgotten. This basic offer of friendship and camaraderie can end the veteran isolation that often leads to joblessness, homelessness, and even suicide.</p>
                           <p>While we are a countrywide veteran organization our focus has been, and will always be, helping the veterans who need us the most in the communities our members call home. Our local chapters provide a safe place to meet, connect, and assist fellow warriors. Their members direct the focus of our outreach events based on the specific needs of the veterans in their geographical locations. We know that each Region, State, and Chapter faces its own challenges, the fiercest fight to assist our warriors in one city is not always the same as the one being fought in another. </p>
                           <p>There are no membership fees to join Warrior Pointe. We believe that you, our brothers and sisters, paid your dues when you raised your right hand and swore to serve this nation. Our oath has no expiration date, our enlistment or commission may have ended, but our oath has not. We are the uncommon few that share the common bond of duty, honor, and country.</p>
                           <br>	
						   <h3>Helpful Links</h3>
                           <a href="faq.html">Frequently Asked Questions</a><br>
                           <a href="privacy.html">Our Privacy Policy</a><br>
                           <a href="#top">Back to top</a> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
      <!-- end mission -->
      <!-- start wpmedia -->
      <section id="presents">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="wow bounceIn" data-wow-delay="0.3s" data-wow-offset="50">
                     <span style="color:#ff0000">Warrior Pointe</span> Presents
                  <br>
				  Of Men and War</h2>
                  
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <img src="images/png/omaw.png" alt="Of Men and War Movie Poster">
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12">
                  <h3 class="text-center">A film by Laurent Bécue-Renard</h3>
                  <h3 class="text-center">Production by Alice Films</h3>
				  <br>
                  <p class="text-center"><a href="mailto:contact@ofmenandwar.com">contact@ofmenandwar.com</a></p>
                  <ul class="text-center" style="list-style: none;">
                     <li>
                        <p>Twitter:<a href="http://www.twitter.com/ofmenandwar" target="_blank" onclick="trackOutboundLink('http://www.twitter.com/ofmenandwar'); return false;">@OfMenAnWar</a></p>
                     </li>
                     <li>
                        <p><a href=
                           "http://www.facebook.com/ofmenandwar" onclick="trackOutboundLink('http://www.facebook.com/ofmenandwar'); return false;">Facebook&nbsp;Page</a></p>
                     </li>
                     <li>
                        <p><a href="http://www.youtube.com/channel/UC8VN49McuwcF3aVaTotuzkA" onclick="trackOutboundLink('http://www.youtube.com/channel/UC8VN49McuwcF3aVaTotuzkA'); return false;">YouTube
                           Channel</a>
                        </p>
                     </li>
                     <li>
                        <p><a href="http://www.dailymotion.com/ofmenandwar" onclick="trackOutboundLink('http://www.dailymotion.com/ofmenandwar'); return false;">Dailymotion</a></p>
                     </li>
                  </ul>
				  <h4 class="text-center">Of Men and War Trailer</h4>
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/mNhuMqZk3Fg" frameborder="0" allowfullscreen></iframe>
				  <h5 class="text-center">Years after coming home,
a dozen veterans continue to wrestle demons from the war.
Will their therapist help them find meaning in their trauma
and leave the war behind?</h5>
               </div>
            </div>
            <a href="#top">Back to top</a>
         </div>
      </section>
      <!-- end wpmedia-->
      
      <!-- start contact -->
      <section id="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <h2 class="wow bounceIn" data-wow-delay="0.3s" data-wow-offset="50">
                     Contact <span style="color:#ff0000">Warrior Pointe</span>
                  </h2>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.9s" data-wow-offset="50">
                  <form class="form-horizontal" role="form" method="post" action="index.php">
                     <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="name" name="name" placeholder="First & Last Name" value="<?php echo htmlspecialchars($_POST['name']); ?>">
                           <?php echo "<p class='text-danger'>$errName</p>";?>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                           <input type="email" class="form-control" id="email" name="email" placeholder="example@domain.com" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                           <?php echo "<p class='text-danger'>$errEmail</p>";?>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="message" class="col-sm-2 control-label">Message</label>
                        <div class="col-sm-10">
                           <textarea class="form-control" rows="4" name="message">
                           <?php echo htmlspecialchars($_POST['message']);?>
                           </textarea>
                           <?php echo "<p class='text-danger'>$errMessage</p>";?>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
                           <?php echo "<p class='text-danger'>$errHuman</p>";?>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                           <input id="submit" name="submit" type="submit" value="Send it to me!" class="btn btn-primary">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="col-sm-10 col-sm-offset-2">
                           <?php echo $result; ?>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-delay="0.6s" data-wow-offset="50" itemscope itemtype="http://schema.org/Organization">
                  <ul class="social-icon">
                     <li>
                        <h4>WE ARE SOCIAL</h4>
                        <span itemscope itemtype="http://schema.org/Organization">
                           <link itemprop="url" href="http://www.warriorpointe.org">
                        </span>
                     </li>
                     <li>
                        <a itemprop="sameAs" class="fa fa-facebook" href="https://www.facebook.com/WarriorPointe">
                        </a>
                     </li>
                     <li>
                        <a itemprop="sameAs" class="fa fa-twitter" href="https://twitter.com/warriorpointe">
                        </a>
                     </li>
                     <!--<li><a class="fa fa-instagram" href="#"></a></li>-->
                     <li>
                        <a itemprop="sameAs" class="fa-pinterest fa" href="https://www.pinterest.com/warriorpointesm">
                        </a>
                     </li>
                     <li>
                        <a itemprop="sameAs" class="fa-google-plus fa" href="https://plus.google.com/112627487019463176150/">
                        </a>
                     </li>
                  </ul>
                  <p class="address-title " itemprop="name">Warrior Pointe, Inc</p>
                  <p>Whatever "it" is, we want to hear it. Whether you need more information on our services, want us to reach out to your community, or just have a killer oral hygiene tip to share, this is the place to let your voice be heard.</p>
                  <p></p>
                  <br>
                  <div>
                     <p>Also visit us @ <a href="http://www.warriorpointe.com/" itemprop="url">warriorpointe.com</a></p>
                     <div itemscope itemtype="http://schema.org/Person">
                        <p><span itemprop="jobTitle">Warrior Pointe, Inc. President and CEO</span> -  <span itemprop="name">Armen Mansouri</span></p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:president@warriorpointe.org"><span itemprop="email">Email Armen</span></a></p>
                     </div>
                     <div itemscope itemtype="http://schema.org/Person">
                        <p><span itemprop="jobTitle">Warriorpointe.org Full Stack Web Developer</span> -  <span itemprop="name">Patrick Hughes</span></p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:webmaster@warriorpointe.org"><span itemprop="email">Email Patrick</span></a></p>
                     </div>
                     <div itemscope itemtype="http://schema.org/Person">
                        <p><span itemprop="jobTitle">Warrior Pointe, Inc. Director of Social Media</span> -  <span itemprop="name">John Wimer</span></p>
                        <p><i class="fa fa-envelope-o"></i> <a href="mailto:directorsm@warriorpointe.org"><span itemprop="email">Email John</span></a></p>
                     </div>
                     <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-map-marker"></i> <span itemprop="addressLocality">Burbank, California </span><span itemprop="postalCode">91501</span></p>
                  </div>
               </div>
               <a href="#top">Back to top</a>
            </div>
         </div>
      </section>
      <!-- end Contact-->
      <!-- start copyright -->
      <footer id="content-info" role="contentinfo">
         <nav>
            <div class="row">
               <div class="col-xs-12">
                  <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
                     <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                        <a itemprop="item" href="http://www.warriorpointe.org/index.php"><span itemprop="name">Home</span></a>
                        <meta itemprop="position" content="1" />
                     </li>
                  </ol>
               </div>
            </div>
         </nav>
         <div class="container">
            <div class="col-md-5 text-justify menu">
               <ul class="nav">
                  <li class="footer-menu"><a href="http://www.warriorpointe.org/index.php#mission">About Warrior Pointe</a></li>
                  <li class="footer-menu"><a href="http://www.warriorpointe.org/privacy.html">Privacy Policy</a></li>
                  <li class="footer-menu"><a href="http://www.warriorpointe.org/donations.html">Donate</a></li>
               </ul>
               <ul class="nav">
                  <li class="footer-menu"><a href="https://a2plcpnl0031.prod.iad2.secureserver.net:2096/">Access Webmail</a></li>
                  <li class="footer-menu"><a href="http://www.warriorpointe.org/wpcloud/">Access Cloud</a></li>
                  <li class="footer-menu"><a href="http://www.warriorpointe.com">Warrior Pointe Forums</a></li>
               </ul>
               <ul class="nav">
                  <li class="footer-menu"><a href="http://www.warriorpointe.org/brigades.html">Join Warrior Pointe</a></li>
                  <li class="footer-menu"><a href="http://www.warriorpointe.org/index.php#contact">Contact Us</a></li>
               </ul>
            </div>
            <div class="col-md-4 social-footer text-justify ">
               <p>
                  <a class="fa fa-3x fa-facebook" href="https://www.facebook.com/WarriorPointe" title="Go to WP Facebook" target="_blank" onclick="ga('send', 'event', 'navigation', 'global footer', 'facebook');">
                  </a>
                  <a class="fa fa-3x fa-twitter" href="https://twitter.com/warriorpointe" title="Go to WP Twitter" target="_blank" onclick="ga('send', 'event', 'navigation', 'global footer', 'twitter');">
                  </a>
                  <a class="fa fa-3x fa-linkedin" href="https://www.linkedin.com/company/warrior-pointe-inc" title="Go to WP Linkedin" target="_blank" onclick="ga('send', 'event', 'navigation', 'global footer', 'linkedin');">
                  </a>
                  <a class="fa fa-pinterest fa-3x" href="https://www.pinterest.com/warriorpointesm" title="Go to WP Pinterest" target="_blank" onclick="ga('send', 'event', 'navigation', 'global footer', 'pinterest');">
                  </a>
                  <a class="fa fa-google-plus fa-3x" href="https://plus.google.com/112627487019463176150/" title="Go to WP Google+" target="_blank" onclick="ga('send', 'event', 'navigation', 'global footer', 'google+');">
                  </a>
               </p>
               <p><a href="mailto:patrick.h@warriorpointe.org">Contact Webmaster 
                  with suggestions and Problems</a>
               </p>
            </div>
            <div class="col-md-3 text-right">
               <p>Design and Development by 
                  <a href="http://www.raddaddesign.com"><img class="rdd_logo" alt="Rad Dad Design Logo" src="images/png/rdd_logo.png"></a>
               </p>
            </div>
         </div>
         </div>
         <div class="row-fluid copyright">
            <div class="span12">
               <p class="notice">Copyright &copy;2015 Warrior Pointe, Inc - All Rights Reserved. Warrior Pointe is a tax-exempt organization, and all contributions are tax-deductible according to IRS regulation. Warrior Pointe is a Service Mark of Warrior Pointe, Inc.</p>
            </div>
         </div>
         </div>
      </footer>
   </body>
   <!--<div id="future_company_footer">
      <div id="1">
         <script type="text/javascript" src="http://www.warriorpointe.org/js/banner.js" async defer></script>
      </div>
      </div>-->
</html>