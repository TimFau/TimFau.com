<html lang="en" class="no-js cookie_used_true">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <title>Tim Fau | Front End Web Developer</title>
        <link rel="stylesheet" media="all" href="css/dest/styles.min.css" />
        <script src="js/plugins/three.r92.min.js"></script>
        <script src="js/plugins/vanta.waves.min.js"></script>
        <script src="js/dest/scripts.min.js" defer></script>
    </head>

    <body>
        <div id="intro" class="intro">
            <div class="container-center">
                <h1>Tim Fau</h1>
                <h3>Front-End Web Developer</h3>
                <ul>
                    <li><a href="https://www.linkedin.com/in/tim-fau-10030151/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://github.com/TimFau" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://codepen.io/TimFau/" target="_blank"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <i class="fa fa-angle-double-down" aria-hidden="true"></i>
        </div>
        
        <div class="work" id="work">
            <div class="container">
                <div id="workCategories">
                    <span id="featured" class="active">Featured</span>
                    <span id="frontEnd">Websites</span>
                    <span id="javascript">Web Apps</span>
                    <span id="design">Design</span>
                    <span id="all">All</span>
                </div>
                <?php include 'portfolioItems.php' ?>
            </div>
        </div>
        
        <div class="contact" id="contact">
            <div class="container">
                <h2>Contact Me</h2>
                <div class="contactForm">
                    <form action="https://formspree.io/xrggnqdg" method="POST">
                        <label for="name">Name</label>
                        <input type="text" name="name">
                        <label for="email">Email</label>
                        <input type="email" name="_replyto">
                        <label for="message">Message</label>
                        <textarea name="message"></textarea>
                        <button type="submit" value="Send">Submit</button>
                    </form>
                </div>
            </div>
        </div>
        
    <style>
    @import url('https://fonts.googleapis.com/css?family=Neuton');
    </style>
    <script src="https://use.fontawesome.com/40e6a83d72.js"></script>
    </body>
  </html>