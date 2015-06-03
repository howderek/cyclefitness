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
            <?php if ($func != '') echo "CycleFitness.".$func."();" ?>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
             m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-44187713-1', 'auto');
            ga('send', 'pageview');
        </script>
    </body>

</html>