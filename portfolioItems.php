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
    2 => array(
        "name" => "Home2 Retail Site",
        "description" => "Worked as the Frontend Developer on this project for my employer. I took the PSD design & implemented the frontend components with our internal framework, including the styling & interactivity on the homepage.",
        "categories" => array(
            "featured", "frontend"
        ),
        "skills" => array (
            "HTML", "CSS", "Javascript"
        ),
        "image" => "h2.jpg",
        "websiteURL" => "http://blankrefer.com/?https://www.shophome2.com/",
        "sourceURL" => "",
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
    ),
    4 => array(
        "name" => "Numotus",
        "description" => "Numotus wanted a one page responsive website to showcase his music/shows and establish a professional online presence. I built a one-page site from scratch and then used Couch CMS to give him an easy way to manage his own content. He wanted the video playlist to be a central element on the site, so I added it above the floating nav bar in the starting viewport. Most of the content is aggregated from his various online handles leading to minimal site maintenance.",
        "categories" => array(
            "design", "frontend"
        ),
        "skills" => array (
            "HTML", "CSS"
        ),
        "image" => "numotus.jpg",
        "websiteURL" => "https://numotus.com/",
        "sourceURL" => "",
        "featured" => false
    ),
    5 => array(
        "name" => "Random Quote Machine",
        "description" => "Project for Free Code Camp's Front End Libraries Project.
        <span><strong>Objective: </strong>To build a 'quote machine' using React that generates a new quote every time you click a button and that allows you to share it on Twitter. View full objective <a href='https://www.freecodecamp.org/learn/front-end-libraries/front-end-libraries-projects/build-a-random-quote-machine' target='_blank'>here</a>.</span>",
        "categories" => array(
            "javascript"
        ),
        "skills" => array (
            "CSS", "Javascript"
        ),
        "image" => "random_quote_machine.jpg",
        "websiteURL" => "https://timfau.github.io/random-quote-machine/",
        "sourceURL" => "https://github.com/TimFau/random-quote-machine/",
        "featured" => false
    ),
    6 => array(
        "name" => "Drum Machine",
        "description" => "Project for Free Code Camp's Front End Libraries Project. <span><strong>Objective: </strong>To build a 'drum machine' using React with 9 clickable drum pag elements that play an audio sample on click. They should also be triggered using keys on the keyboard and show the sound & key in the display when played. View full objective <a href='https://www.freecodecamp.org/learn/front-end-libraries/front-end-libraries-projects/build-a-drum-machine' target='_blank'>here</a>.</span>",
        "categories" => array(
            "javascript"
        ),
        "skills" => array (
            "CSS", "Javascript", "React"
        ),
        "image" => "drum_machine.jpg",
        "websiteURL" => "https://timfau.github.io/drum-machine/",
        "sourceURL" => "https://github.com/TimFau/drum-machine",
        "featured" => false
    ),
    7 => array(
        "name" => "Pomodoro Clock",
        "description" => " Project for Free Code Camp's Front End Libraries Project. <span><strong>Objective: </strong>To build a functioning Pomodoro clock using React. View full objective <a href='https://www.freecodecamp.org/learn/front-end-libraries/front-end-libraries-projects/build-a-pomodoro-clock' target='_blank'>here</a>.</span>",
        "categories" => array(
            "javascript"
        ),
        "skills" => array (
            "CSS", "Javascript", "React"
        ),
        "image" => "pomodoro_clock.jpg",
        "websiteURL" => "https://codepen.io/TimFau/full/abbGaLJ",
        "sourceURL" => "",
        "featured" => false
    )
);
?>
<!-- Render Portfolio Items -->
<?php for($i = 0; $i < count($portfolioItems); $i++): ?>
    <div class="portfolio-item<?php 
        for($j = 0; $j < count($portfolioItems[$i]["categories"]); $j++) {
            echo ' ' . $portfolioItems[$i]["categories"][$j] . '-project ';
        }
        echo ($portfolioItems[$i]["featured"] ? 'show' : 'hide')
        ?>">
        <div class="img">
            <img class="screen" src="images/portfolio/<?php echo $portfolioItems[$i]["image"] ?>">
            <img class="monitor" src="images/cutout_screen.png">
        </div>
        <div class="meta">
            <h3><?php echo $portfolioItems[$i]["name"] ?></h3>
            <h4><em><?php 
            $skillsCount = count($portfolioItems[$i]["skills"]);
            for($k = 0; $k < $skillsCount; $k++){
                echo $portfolioItems[$i]["skills"][$k] . ($k < $skillsCount - 1 ? ' | ' : '');
            }
            ?></em></h4>
            <p><?php echo $portfolioItems[$i]["description"] ?></p>
            <?php if ($portfolioItems[$i]["websiteURL"] !== ""): ?>
                <button><a href="<?php echo $portfolioItems[$i]["websiteURL"] ?>" target="_blank">View Website</a></button>
            <?php endif ?>
            <?php if ($portfolioItems[$i]["sourceURL"] !== ""): ?>
                <button><a href="<?php echo $portfolioItems[$i]["sourceURL"] ?>" target="_blank">View Source</a></button>
            <?php endif ?>
        </div>
    </div>
<? endfor ?>