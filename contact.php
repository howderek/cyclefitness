<?php
$func = "buildEventsPage";
$active = "Contact";
require 'header.php';
?>


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
    
<?php require 'footer.php'; ?>