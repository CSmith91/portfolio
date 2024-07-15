<html>
<body>

<section id="contact">
    <h2>Contact Me</h2>
    <!-- php form goes here -->
    <form  method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        Name: <input type="text" name="name"><br>
        E-mail: <input type="text" name="email"><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>

        <input type="submit">
        </form>
</section>

</body>
</html>
