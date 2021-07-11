<!-- Add Portfolio Items -->
<?php
$portfolioItems = array(
    0 => array(
        "name" => "Language Learning App",
        "description" => "A personal project I'm working on to help me practice vocabulary and grammar for new languages, pulling the words from Google Sheets documents. Idea came after seeing this tip. I liked having a list to add all the words I wanted to learn, but wanted a way to quiz myself on them. Project still in development; I have a lot of ideas for functionality I still want to add and I'm still adressing some bugs.",
        "categories" => array(
            "featured", "javascript"
        ),
        "skills" => array (
            "CSS", "Javascript", "React"
        ),
        "image" => "language_learning_app.jpg",
        "websiteURL" => "https://timfau.github.io/language-learning-app/",
        "sourceURL" => "https://github.com/TimFau/language-learning-app",
        "featured" => true
    ),
    1 => array(
        "name" => "Shop Sonesta",
        "description" => "Worked as a Frontend Developer on this project for my employer. Based on the PSD design, I implemented & styled the frontend components with our internal design framework. Coded the homepage animations with GSAP.",
        "categories" => array(
            "featured", "CSS", "javascript"
        ),
        "skills" => array (
            "HTML", "CSS", "Javascript"
        ),
        "image" => "son.jpg",
        "websiteURL" => "https://blankrefer.com/?https://www.shopsonesta.com/index.aspx",
        "sourceURL" => "",
        "featured" => true
    ),
    2 => array(
        "name" => "Rockin’ With Purpose",
        "description" => "Rockin’ with Purpose is a music blog geared towards promoting Christian Rock and Roll with purpose. They were  looking for a hip new image for the site, taking it from a simple free-template blog to a scalable, hip web magazine. I designed the new logo, branding & website design and built a Wordpress theme using <a href='https://underscores.me/'><i>underscores</i></a> as the foundation.",
        "categories" => array(
            "featured", "design", "frontend"
        ),
        "skills" => array (
            "HTML", "CSS", "PHP", "Wordpress"
        ),
        "image" => "rockin_with_purpose.jpg",
        "websiteURL" => "https://rockinwithpurpose.com/",
        "sourceURL" => "https://github.com/TimFau/Rockin-With-Purpose-Theme-",
        "featured" => true
    ),
    3 => array(
        "name" => "The Puttytribe",
        "description" => "The Puttytribe is a member-only online community for multipotentialites. Their old website was powered by Ning, which they wanted to get away from in favor of a solution with more freedom and room to develop as needed. I got the opportunity to join their team as the Front End Web Developer as we built a custom solution with WordPress and Discourse.",
        "categories" => array(
            "featured", "frontend"
        ),
        "skills" => array (
            "HTML", "CSS", "Javascript", "Wordpress"
        ),
        "image" => "puttytribe.jpg",
        "websiteURL" => "https://faudesign.com/the-puttytribe/",
        "sourceURL" => "",
        "featured" => true
    )
);
?>
<!-- Render Portfolio Items -->
<?php for($i = 0; $i < count($portfolioItems); $i++): ?>
    <div class="portfolio-item-wrapper <?php 
        for($j = 0; $j < count($portfolioItems[$i]["categories"]); $j++) {
            echo ' ' . $portfolioItems[$i]["categories"][$j] . '-project ';
        }
        echo ($portfolioItems[$i]["featured"] ? 'show' : 'hide')
        ?>">
        <div class="portfolio-item">
            <div class="img" data-aos="fade-right" data-aos-delay="700">
                <img class="screen" src="images/portfolio/<?php echo $portfolioItems[$i]["image"] ?>" alt="">
                <img class="monitor" src="images/cutout_screen.png" alt="">
            </div>
            <div class="meta" data-aos="fade-left" data-aos-delay="600" data-aos-duration="700">
                <h3><?php echo $portfolioItems[$i]["name"] ?></h3>
                <h4><em><?php 
                $skillsCount = count($portfolioItems[$i]["skills"]);
                for($k = 0; $k < $skillsCount; $k++){
                    echo $portfolioItems[$i]["skills"][$k] . ($k < $skillsCount - 1 ? ' | ' : '');
                }
                ?></em></h4>
                <p><?php echo $portfolioItems[$i]["description"] ?></p>
                <div class="button-container">
                    <?php if ($portfolioItems[$i]["websiteURL"] !== ""): ?>
                        <a href="<?php echo $portfolioItems[$i]["websiteURL"] ?>" target="_blank" rel="noreferrer" class="button">View Website</a>
                    <?php endif ?>
                    <?php if ($portfolioItems[$i]["sourceURL"] !== ""): ?>
                        <a href="<?php echo $portfolioItems[$i]["sourceURL"] ?>" target="_blank" rel="noreferrer" class="button">Github Repo</a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
<? endfor ?>