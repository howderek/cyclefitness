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
                    <a href="index.php"><h1>Cycle Fitness</h1></a>
                </div>
                <div id="social" class="desktop">
                    <h1><a href="https://facebook.com/howderek"><span class="fa fa-facebook-square facebook"></span></a> <a href="https://twitter.com/howderek97"><span class="fa fa-twitter-square twitter"></span></a> <a href="https://instagram.com/howderek"><span class="fa fa-instagram instagram"></span></a></h1>
                </div>
                <nav class="desktop">
                    <a href="faq.php" <?php if ($active=='FAQ'): ?>class="active"<?php endif ?>>FAQ</a>
                    <a href="events.php" <?php if ($active=='Events'): ?>class="active"<?php endif ?>>Events</a>
                    <a href="contact.php" <?php if ($active=='Contact'): ?>class="active"<?php endif ?>>Contact</a>
                    <a id="close" class="mobile" href="">Close Navigation</a>
                </nav>
                <div id="dropdown" class="mobile">
                    <!-- Three bars for hamburger menu !-->
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </header>