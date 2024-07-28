<!DOCTYPE html> 
<html lang="en"> 
    <?php 
    $pageTitle = "Portfolio";
    include 'header.php';
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Collect form data
        $name = htmlspecialchars($_POST['name']);
        $email = htmlspecialchars($_POST['email']);
        $comment = htmlspecialchars($_POST['comment']);
        
        // Define the recipient email address
        $to = "csmith.ex.91@gmail.com";
        
        // Define the email subject
        $subject = "New Contact Form Submission";
        
        // Define the email body
        $body = "Name: $name\n";
        $body .= "Email: $email\n";
        $body .= "Comment: $comment\n";
        
        // Define the email headers
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        
        // Send the email
        if (mail($to, $subject, $body, $headers)) {
            echo "Email sent successfully";
        } else {
            echo "Failed to send email.";
        }
    }
    ?>
    <link rel="stylesheet" href="./css/contact.css">
<body>
    <main>
        <section id="contact-container">
            <h2>Contact Me</h2>
            <div id="container">
                <!-- php form goes here -->
                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required><br>
                    <label for="email">E-mail:</label>
                    <input type="email" id="email" name="email" required><br>
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" rows="5" cols="40" required></textarea><br>
                    <input type="submit">
                </form>
            </div>
        </section>
    </main>

    <script src="./js/portfolio.js"></script>

    <footer><?php    
    include 'footer.php';
    ?>
    </footer>

    </body> 
</html>