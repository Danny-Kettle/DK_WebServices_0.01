<?php 


$title = "Contact";
$description ="Contact DK Web Services about Web Development, CMS & Platforms, Hosting & Security or Web Design. <br>To get a quick reply contact me today!";

include_once 'includes/transparent_header.include.php';

echo <<<END
    <div id="contactPageContainer">
        <div id="contactTop">
            <div class="overlay"></div>
            <section>
                <h1 class="slide-up">Contact</h1>
            </section>
        </div>  

        <div class="container">
            <section id="formContainer" class="flex-col slide-right">
                <h2>Ready? Let's Talk.</h2>
END;

if(isset($_GET['message_sent'])){
    echo '<h3 style="color:green;">Thank you for getting in touch. Expect a reply within 48 hours.</h3></section></div>
    </div>';
}
else{
if(isset($_GET['message_failed'])){
    echo '<h3 style="color:red; margin-bottom:2rem;">Message Failed ... Please try again.</h3>';
};
echo <<<END
    <form class="flex-col" method="POST" action="../contactForm.php" id="contactForm">
        <div class="flex-col">
            <input class="input-text" style="margin-right:2rem;" name="firstname" type="text" placeholder="First Name" required>    
            <input class="input-text" name="surname" type="text" placeholder="Surname" required>    
        </div>
        <input class="input-text" name="email" type="text" placeholder="Email Address" required>
        <input  id="inputTel" class="input-text" name="tel" type="tel" placeholder="Contact Number" required> 
        <select name="service" required>
            <option value=""  disabled selected hidden>Service</option>
            <option value="webDevelopment">Web Development</option>
            <option value="cms">CMS & Platforms</option>            
            <option value="hosting">Hosting & Security</option>            
            <option value="webDesign">Web Design</option>                        
        </select>
        <textarea class="input-text" name="message" placeholder="Message" form="contactForm" required></textarea>
        <div class="g-recaptcha" id="rcaptcha"  data-sitekey="6Le0FE8eAAAAAN0x3PYpzYEosYXP1aFHpIksxo7y"></div>
        <div class="button-container-2">
            <span class="mas">SEND MESSAGE</span>
            <button name="submit" type="submit">SEND MESSAGE</button>
        </div>
    </form>
</section>
</div>
</div>
END;
}




include_once 'includes/footer.include.php';

?>