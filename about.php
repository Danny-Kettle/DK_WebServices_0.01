<?php
$title = 'About';
$description ="I am a young professional filled with ambition. I study <strong>Software Engineering</strong>. Outside of education I spend my time designing and building digital products.";

include_once 'includes/transparent_header.include.php';

echo <<<END
<div id="aboutPageContainer">
    <div id="aboutTop">
        <div class="overlay"></div>
        <section class="container flex-col">
            <div>
                <div class="slide-right">
                    <h6>A few words</h6>
                    <hr class="small-hr">
                    <h1>About Me</h1>
                </div>
            </div>  
        </section>
    </div>
    <div>   
        <div id="aboutIntro" class="flex-col">
            <div id="imageContainer" class="slide-right">
                <img src="../../images/assets/memoji3.png" alt="memoji of website owner">
            </div>

            <section id="aboutIntroText" class="flex-col slide-left">
                <h2>Web Developer</h2>

                <p><b>I'm Danny, a young professional filled with ambition. I have two years of experience in web development. My forte is developing distinguished and polished business/personal websites, accredited by my proficiency in Content Management Systems (CMS), JavaScript, PHP, and HTML/CSS.</b></p>
                <hr class="small-hr">
                <p>Last year, I set out focus on becoming a full stack web developer. After attending training courses and dedicating myself I’ve curated all the necessary skills for success.</p>
            </section>
        </div>

        <div id="aboutQuote" style="margin-top:2rem;" class="flex-col slide-right">
            <hr>
            <h3>“A designer knows he has achieved perfection not when there is nothing left to add, but when there is nothing left to take away”</h3>
            <hr>
        </div>

        <div id="aboutPersonalDesc" >
            <section class="flex-col slide-right">
                <h4>Creative in All Aspects</h4>
                <hr class="small-hr">
                <p>Fueled by energy and boundless enthusiasm, I’m easily inspired to embark on most ventures. I’m passionate & expressive with a natural ability to motivate. Until I believe a task or choice has had necessary thought and perseverance only then will I be satisfied with the result.</p>
                <p>My abundance of energy fuels me in the pursuit of many interests, hobbies & areas of study. I’m a fast learner, able to acquire new skills and juggle different projects with ease.</p>
                <p>I’m a people-person and a natural storyteller. I’m able to inspire and am at my best when I’m sharing my creative expressions with others.</p>
                <p>To read more about my biography, experience, skills, education and much more see the PDF attached bellow:</p>
                <a href="#">Placeholder</a>
                <hr class="small-hr">
            </section>
        </div>
    </div>
</div>

END;

include_once 'includes/footer.include.php';
?>