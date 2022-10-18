<?php 

$title = "Services";
$description = "DK Web Services offers web development, web design, hosting & security, SEO, Content Managment System (CMS)/ Platforms. <br>Find out the details about each service.";
include_once 'includes/transparent_header.include.php';

echo <<<END

<div id="servicesTop">
    <div class="overlay"></div>
    <section class="container">
        <h1 class="">What do I offer</h1>
    </section>
</div>

<div id="serviceDescContainer" class="flex-col">
    <div class="serviceDesc flex-col">
        <div class="image-container">
            <img src="../../images/assets/22.png" alt="Illustration for Web Development">
        </div>
        <div class="serviceText">
            <section class="flex-col">    
                <h2>Web Development</h2>
                <hr class="small-hr">
                <p><strong>I excel in building websites with maximum flexibility and ease-of-use.</strong></p>
                <p>With elegant performance across every platform, the websites I build offer the functionality you need to grow and manage your business.</p>
                <p>Looking for an entirely unique website?</p>
                <hr class="small-hr">
                <div class="button-container-2">
                    <span class="mas">GET QUOTE</span>
                    <button class="contact-btn" type="button" name="Hover">GET QUOTE</button>
                </div>
            </section>
        </div>
    </div>
    <hr class="seperator">

    <div class="serviceDesc flex-col">
        <div class="image-container">
            <img src="../../images/assets/196.png" alt="Illustration for Hosting">
        </div>
        <div class="serviceText">
            <section class="flex-col">    
                <h2>Hosting & Security</h2>
                <hr class="small-hr">
                <p><strong>Your website is critical to your business, so you can’t afford downtime.</strong></p>
                <p>I ensure the websites hosted with me are safeguarded, stable & secure. Expect seamless operations and minimal outages.</p>
                <hr class="small-hr">
                <div class="button-container-2">
                    <span class="mas">GET QUOTE</span>
                    <button class="contact-btn" type="button" name="Hover">GET QUOTE</button>
                </div>
            </section>
        </div>
    </div>
    <hr class="seperator">

    <div class="serviceDesc flex-col">
        <div class="image-container">
            <img src="../../images/assets/102.png" alt="Illustration for CMS & Platforms">
        </div>

        <div class="serviceText">
            <section class="flex-col">    
                <h2>CMS & Platforms</h2>
                <hr class="small-hr">
                <p><strong>Wondering whether to build your website using a content management system?</strong></p>
                <p>There is no right answer: we can discuss your needs and preferences and help you decide which is the best option for you. With experience, I can accurately advise the right course of action for your personal or business needs.</p>
                <p>Click on <strong>Get Quote</strong> to setup this venture.</p>
                <hr class="small-hr">
                <div class="button-container-2">
                    <span class="mas">GET QUOTE</span>
                    <button  class="contact-btn" type="button" name="Hover">GET QUOTE</button>
                </div>
            </section>
        </div>
    </div>
    <hr class="seperator">

    <div class="serviceDesc flex-col">
        <div class="image-container">
            <img src="../../images/assets/117.png" alt="Illustration for Web Design">
        </div>
        
        <div class="serviceText">
            <section class="flex-col">    
                <h2>Web Design</h2>
                <hr class="small-hr">
                <p><strong>I build visually stunning websites that elevate your brand, engage visitors, and create conversions.</strong></p>
                <p>My design execution emphasizes an attractive and consistent look and feel, intuitive layout and navigation, clear and effective communication, and an accessible, responsive environment.</p>
                <hr class="small-hr">
                <div class="button-container-2">
                    <span class="mas">GET QUOTE</span>
                    <button class="contact-btn" type="button" name="Hover">GET QUOTE</button>
                </div>
            </section>
        </div>
    </div>
</div>

END;

include_once 'includes/footer.include.php';
?>