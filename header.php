<!-- header.php -->
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title><?php echo $pageTitle; ?></title> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/stylesheet.css">
    <link rel="stylesheet" href="./css/menu.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/carousel.css">
    <link rel="icon" href="./images/favicon_io/favicon.ico" type="image/x-icon">
</head> 
<header>
    <div class="top-strip-container">
        <h1 id="home-link"><a href="./portfolio.php">Chris Smith's Portfolio</a></h1>
        <div class="top-strip">
            <div class="mode-div" id="lightbulb">
                <img id="moon" src="./images/moon-white.png" alt="dark-mode">
                <img id="sun" src="./images/sun-white.png" alt="light-mode" class="hidden">
            </div>
        </div>
    </div>
    
    <p><i>Note that the root of this domain is blank as it is sometimes used for building websites 'offline' while a pre-existing live website is running for less technical clients to view.</i></p>
    <div class="menu-toggle">
        <img src="./images/white-burger.png" alt="Menu">
    </div>        
    <nav>
        <ul>
            <li><a href="./portfolio.php">Skills</a></li>
            <li><a href="./projects.php">Projects</a></li>
            <!-- <ul class="dropdown">
                <li><a href="./projects.php#email">Email</a></li>
                <li><a href="./projects.php#phone">Phone</a></li>
                <li><a href="./projects.php#social">Social Media</a></li>
            </ul> -->
            <li><a href="./projects.php#education-certificates">Education & Certificates</a></li>
            <li><a href="./projects.php#personal-projects">Personal Projects</a></li>
            <li><a href="./projects.php#hobbies">Hobbies</a></li>
            <li><a href="./contact.php">Contact Me</a></li>
            <button id="menu-close"> X </button>
        </ul>
    </nav>
    <!-- <button id="color-picker-tab">Change Colors</button>
    <div id="style-div" class="dropdown-content">
        <h3>Select Main Color:</h3>
        <div class="color-picker" id="main-color-picker">
            // colour options
        </div>
        <h3>Select Secondary Color:</h3>
        <div class="color-picker" id="secondary-color-picker">
            // colour options
        </div>
    </div> -->
    <!-- <div id='lightbulb-div'>
        <div id='lightbulb'>
            <img id='switch-dark' src="./images/lightbulb-white.png" alt="swap-to-light-mode">
            <img id='switch-light' src="./images/lightbulb-black.png" alt="swap-to-dark-mode" class="hidden">
        </div>
    </div> -->
    <a href="#top" class="back-to-top" id="backToTop">
        <img src="./images/white-up.png" alt="&#8679">
        </a>  
    <script src='./js/color.js'></script>       
    <script src='./js/light.js'></script>   
</header>