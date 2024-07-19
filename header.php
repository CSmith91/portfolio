<!-- header.php -->
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?php echo $pageTitle; ?></title> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="icon" href="./images/favicon_io/favicon.ico" type="image/x-icon">
</head> 
<header>
    <h1 id="home-link"><a href="./portfolio.php">Chris Smith's Portfolio</a></h1>
    <p><i>Note that the root of this domain is blank as it is sometimes used for building websites 'offline' while a pre-existing live website is running for less technical clients to view.</i></p>
    <div class="menu-toggle">
        <img src="./images/white-burger.png" alt="Menu">
    </div>        
    <nav>
        <ul>
            <li><a href="./portfolio.php">Skills</a></li>
            <li><a href="./projects.php">Projects</a></li>
            <li><a href="./projects.php#education-certificates">Education & Certificates</a></li>
            <li><a href="./projects.php#personal-projects">Personal Projects</a></li>
            <li><a href="./projects.php#hobbies">Hobbies</a></li>
            <li><a href="./contact.php">Contact Me</a></li>
            <button id="menu-close"> X </button>
        </ul>
    </nav>
    <a href="#top" class="back-to-top" id="backToTop">
        <img src="./images/white-up.png" alt="&#8679">
        </a>          
</header>