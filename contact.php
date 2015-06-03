<!DOCTYPE html>
<!---
/***********************************/
/*          CYCLE FITNESS          */
/*      (c) 2015 Derek Howard      */
/*      handcoded with love <3     */
/***********************************/
!-->
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cycle Fitness</title>
        <link rel="stylesheet" href="styles/fonts.css"/>
        <link rel="stylesheet" href="styles/cyclefitness.css"/>
    </head>
    
    <body>
        
        <div id="content">
            <header>
                <div>
                    <a href="/"><h1>Cycle Fitness</h1></a>
                </div>
                <div id="social" class="desktop">
                    <h1><a href="https://facebook.com/howderek"><span class="fa fa-facebook-square facebook"></span></a> <a href="https://twitter.com/howderek97"><span class="fa fa-twitter-square twitter"></span></a> <a href="https://instagram.com/howderek"><span class="fa fa-instagram instagram"></span></a></h1>
                </div>
                <nav class="desktop">
                    <a href="faq">FAQ</a>
                    <a href="events" class="active">Events</a>
                    <a href="contact">Contact</a>
                    <a id="close" class="mobile" href="">Close Navigation</a>
                </nav>
                <div id="dropdown" class="mobile">
                    <!-- Three bars for hamburger menu !-->
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </header>


<section class="contact bikes">
    <div class="row">
        <div class="col">
            <div class="row">
                <div class="col">
                    <h2>Hours</h2>
                    <h3>Monday: 6 a.m. - 6 p.m.</h3>
                    <h3>Tuesday: 6 a.m. - 6 p.m.</h3>
                    <h3>Wednesday: 6 a.m. - 6 p.m.</h3>
                    <h3>Thursday: 6 a.m. - 6 p.m.</h3>
                    <h3>Friday: 6 a.m. - 6 p.m.</h3>
                    <h3>Saturday: 6 a.m. - 10 p.m.</h3>
                    <h3>Sunday: 6 a.m. - 10 p.m.</h3>
                    <div class="col">
                    <h2>Location</h2>
                    <h3>123 Avenue of the Americas<br>New York City, NY 20013</h3>
                    <a href="https://www.google.com/maps/dir/Current+Location/123+Avenue+of+the+Americas,+New+York,+NY+10013/" class="button">Get Directions</a>
                </div>
                </div>
                 <div class="col">
                    <h2>Phone</h2>
                    <h3>234-567-8910</h3>
                    <a href="tel:234-567-8910" class="button mobile">Call</a>
                    <h2>Email</h2>
                    <h3>sales:<br class="mobile"/> <a href="mailto:cyclefitness@howderek.com">cyclefitness@howderek.com</a></h3>
                    <h3>press:<br class="mobile"/> <a href="mailto:press@howderek.com">press@howderek.com</a></h3>
                    <h3>legal:<br class="mobile"> <a href="mailto:legal@howderek.com">legal@howderek.com</a></h3>
                </div>
            </div>
            <br>
        </div>
        <div class="col">
            <form name="contact" method="post" action="form.php">
                <h2>Let's get in touch.</h2>
                <input type="text" name="Name" placeholder="&nbsp;Name" class="form-control"><br>
                <input type="text" name="Email" placeholder="&nbsp;Email" class="form-control"><br>
                <input type="text" name="Subject" placeholder="&nbsp;Subject" class="form-control"><br>
                <textarea name="Message" cols="50" rows="13" placeholder="Message" class="form-control"></textarea><br>
                <input type="submit" name="submit" value="Send" class="form-control">
            </form>
        </div>
    </div>
</section>
    
<footer>
                <div class="row">
                    <div class="col">
                        <h3>questions</h3>
                        <p>Whether you are a triathalon champ, a relaxed stroller, or first-time cyclist, we have the answers for you.</p>
                        <a href="faq.php" class="button">FAQ</a>
                    </div>
                    <div class="col">
                        <h3>events</h3>
                        <p>We give weekly seminars on bicycling and we also invite you to join us on bicycle trips. Adventure with us.</p>
                        <a href="events.php" class="button">UPCOMING EVENTS</a>
                    </div>
                    <div class="col">
                        <h3>location</h3>
                        <address>123 Avenue of the Americas<br>New York City, NY 20013</address>
                        <p>234-567-8910</p>
                        <p></p>
                        <a href="contact.php" class="button">CONTACT US</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Copyright &copy; 2015 Derek Howard; All rights reserved. Background image is in the public domain.</p>
                    </div>
                </div>
            </footer>
            
        </div>
        
        <!-- modal dialogs !-->
        <div class="hidden" id="modals">
            <div data-modal="getYourBike">

            </div>
        </div>
    
        <script src="scripts/script.js"></script>
        <script>
            CycleFitness.buildEventsPage();
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-44187713-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>
