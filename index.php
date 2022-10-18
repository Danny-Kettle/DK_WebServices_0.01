<?php

$title = "Homepage";
$description ="DK Web Services collaborates with small- to medium-sized businesses and start-ups within & around <strong>Cheshire/ Manchester</strong>.Contact me for a free consultation!";

include_once 'includes/header.include.php';
    
echo <<<END

<section id="welcomeContainer"> 
    <h3>Hi, my name is Danny, I create <strong>Profesional</strong> and <strong>Functional</strong> websites for your needs</h3>
</section>
<div id="top">
    <div class="overlay"></div>
    <div class="container">
        <div class="flex-row">
            <div id="whatIDoContainer" class="flex-col slide-right">
                <section class="flex-col">
                    <h2>What I do</h2>
                    <hr>
                    <h4>I collaborate with small- to medium-sized businesses and start-ups. To develop/design the ideal website for their personal or business needs.</h4>
                </section>  
                <div class="button-container-2">
                    <span class="mas">LEARN MORE</span>
                    <button class="service-btn" type="button" name="Hover">LEARN MORE</button>
                </div>
            </div>
            <img id="asset156" class="slide-left" src="../../images/assets/156.png" alt="illustration">
        </div>
    </div>
</div>

<section id="welcomeContainer2"> 
    <img src="../../images/assets/147.png" alt="Illustration">
    <h3>Hi, my name is Danny, I create <strong>Profesional</strong> and <strong>Functional</strong> websites for your needs</h3>
</section>

<div id="serviceContainer">
    <div class="overlay"></div>
    <div id="servicesOverlay" class="flex-col">
        <section id="servicesSectionHeader" class="slide-right">
            <h1>Services</h1>
            <hr>
        </section>
        <div id="servicesInnerContainer" class="flex-col slide-up">
            <div class="service flex-col">
                <img src="../../images/assets/22.png" alt="Illustration for Web Development">
                <h2>Web Development</h2>
                <p>I excel in building websites with maximum flexibility and ease-of-use.</p>
            </div>
            <div class="service flex-col">
                <img src="../../images/assets/196.png" alt="Illustration for Hosting & Security">
                <h2>Hosting & Security</h2>
                <p>Your website is critical to your business, so you can’t afford downtime.</p>
            </div>
            <div class="service flex-col">
                <img src="../../images/assets/102.png" alt="Illustration for CMS & Platforms">
                <h2>CMS & Platforms</h2>
                <p>Wondering whether to build your website using open source content management system.</p>
            </div>
            <div class="service flex-col">
                <img src="../../images/assets/117.png" alt="Illustration for Web Design">
                <h2>Web Desgin</h2>
                <p>I build visually stunning websites that elevate your brand, engage visitors, and create conversions.</p>
            </div>
        </div>
        <span>
            <div class="button-container-2 slide-left">
                <span class="mas">LEARN MORE</span>
                <button class="service-btn" type="button" name="Hover">LEARN MORE</button>
            </div>
        </span>
    </div>  
</div>


<section id="aboutContainer" class="flex-col">  
    <img id="aboutPic" class="slide-right" src="../../images/assets/memoji2.png" alt="memoji of site owner">
    <div class="aboutOverlay slide-left flex-col">
        <h4>About Me</h4>
        <h2>Hello.</h2>
        <p>I’m Danny and I am a young professional filled with ambition. I currently attend university where I study software engineering. Outside of education I spend most of my time designing and building digital products.</p>
        <img src="../../images/assets/signature.png" alt="Owners Signature">
        <div class="button-container-2">
            <span class="mas">READ MORE</span>
            <button class="about-btn" type="button" name="Hover">READ MORE</button>
        </div>
    </div>
</section>

END;

include_once 'includes/footer.include.php';


?>