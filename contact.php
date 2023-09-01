<!DOCTYPE html>
<html>
<head>
    <title>Contact Us - UMaT SCC</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link rel="stylesheet" type="text/css" href="contact.css">
</head>
<body>
    <header>    
        <nav>
            <img src="images/fresh_logo.png" alt="UMaT_logo">
            <ul>
                <li><a href="benedict.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="events.php">Events</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="view.php">View_Message</a></li>
            </ul>
        </nav>
        <h1 class = "hero">Contact UMaT SCC</h1>
        
    </header>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="contact-left">
                        <img src="images/email.png" alt="mail"> 
                        benedictcobbah@gmail.com
                    </p>
                    <p>
                        <img src="images/telephone.png" alt="telephone" style="background-color: rgb(255, 255, 255);"> 
                        0558244617
                    </p>
                    <div class="info">
                        <img src="images/insta.png" alt="instagram">
                        <img src="images/facebook.png" alt="facebook">
                        <img src="images/linkedin.png" alt="whatsapp">
                    </div>
                    
                </div>
                <div class="contact-right">
                    <form action="insert.php" method="POST">
                        <input type="text" name="name" placeholder="Your Name" required>
                        <input type="email" name= "email" placeholder="Your Email" required>
                        <textarea rows="6" name = "message" placeholder="Your Message"></textarea>
                        <button type="submit" name = "submit" class="btn">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <p>For inquiries, please contact us at: contact@umat.church.edu.gh</p>
    <footer>
        <p>&copy; 2023 Our church website All rights reserved.</p>
    </footer>
</body>
</html>
