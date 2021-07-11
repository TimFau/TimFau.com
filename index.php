<!DOCTYPE html>
<html lang="en" class="no-js cookie_used_true">
    <head>
        <meta charset="UTF-8" name="viewport" content="width=device-width,initial-scale=1.0">
        <meta name="description" content="Tim Fau - Front End Web Developer Portfolio">
        <meta name="keywords" content="Tim Fau, Front-End Web Developer, Web Developer">
        <meta name="author" content="Tim Fau">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tim Fau - Front End Web Developer Portfolio</title>
        <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
        <link rel="manifest" href="site.webmanifest">
        <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
        <meta name="msapplication-TileColor" content="#da532c">
        <meta name="theme-color" content="#ffffff">
        <link rel="stylesheet" media="all" href="css/dest/styles.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="js/dest/scripts.min.js" defer></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js" integrity="sha512-A7AYk1fGKX6S2SsHywmPkrnzTZHrgiVT7GcQkLGDe2ev0aWb8zejytzS8wjo7PGEXKqJOrjQ4oORtnimIRZBtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    </head>

    <body>
        <div id="hero" class="hero">
            <div class="container-center">
                <h1 data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">Tim Fau</h1>
                <h2 data-aos="fade-up" data-aos-delay="400" data-aos-duration="750">Front-End Web Developer</h2>
                <ul data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
                    <li><a href="https://www.linkedin.com/in/tim-fau-10030151/" rel="noreferrer" target="_blank" aria-label="LinkedIn"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                    <li><a href="https://github.com/TimFau" rel="noreferrer" target="_blank" aria-label="Github"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                    <li><a href="https://codepen.io/TimFau/" rel="noreferrer" target="_blank" aria-label="CodePen"><i class="fa fa-codepen" aria-hidden="true"></i></a></li>
                </ul>
            </div>
            <div class="cta-wrapper">
                <div class="cta-container">
                    <i class="fa fa-angle-double-down" aria-hidden="true"></i>
                </div>
            </div>
        </div>
        
        <div class="projects-container" id="projects" data-aos="fade-up" data-aos-delay="200" data-aos-duration="500">
            <div class="headline-container">
                <h3 class="headline">Projects</h3>
            </div>
            <?php include 'portfolioItems.php' ?>
        </div>
        
        <footer>
            <div class="links">
                <a href="TimFau_Resume.pdf" class="button white" download>Resume</a>
                <a href="mailto:contact@timfau.com" class="button white contact-button">Contact Me</a>
            </div>
            <span class="copyright">&copy; <?php echo date("Y"); ?> Tim Fau</span>
        </footer>
    <script src="https://use.fontawesome.com/40e6a83d72.js"></script>
    </body>
  </html>