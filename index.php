<?php
$name = $mailFrom = $subject= $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = input($_POST['name']);
    $mailFrom = input($_POST['mail']);
    $subject = input($_POST['subject']);
    $message = input($_POST['message']);
}

    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $mailFrom = $_POST['mail'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

    $mailTo = 'contact@sandrawara.se';
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/scroll.js"></script>
    <title>Sandra Wara</title>
</head>

<body>

    <div class="flex">
        <section class="about">
            <p class="textAbout"> I love to make <span class="focus-in-contract-bck"> beautiful</span> <br> and <br>
                <span class="focus-in-contract-bck"> functional</span><br>websites.</p>

        </section>


        <img class="profileImg" src="image/profil.jpg" alt="Reterior web page image">
        <a href="#" id="scroll-down" address="true"></a>

    </div>

    <section class="portfolio">
        <div class="portfolioHeader">
            <h1>Portfolio</h1>
        </div>
        <div class="flexbox">
            <div class="box">
                <div class="boxImg">
                    <img src="image/reterior.png" alt="Reterior web page image">
                </div>
            </div>

            <div class="textBox">
                <h2>Reterior</h2>
                <p class="portfolioText">Web design project where a theme in WordPress was created for a
                    fictional company, learning all basics and more about WordPress.
                </p>
                <a href="https://sandrawara.se/reterior/" class="button" target="_blank">Visit</a>
            </div>


        </div>
        <a href="#" id="scroll-down2" address="true"></a>
    </section>

    <section class="more">
        <div class="portfolioHeader">
            <h1>Portfolio</h1>
        </div>
        <div class="flexbox">
            <div class="box">
                <div class="boxImg2">
                    <img src="image/spelhörnan.png" alt="Spelhörnan web page image">
                </div>
            </div>

            <div class="textBox">
                <h2>Spelväljaren</h2>
                <p class="portfolioText">Examination project where an application in Vue.js was created and integrated
                    into a WordPress theme, learning how Vue.js is working together with WordPress as a plugin.
                </p>
                <a href="http://spel.westart.nu/" class="button2" target="_blank">Visit</a>
            </div>


        </div>

        <a href="#" id="scroll-down3" address="true"></a>
    </section>

    <section class="contact">

        <div class="contact-info">
            <h1>Contact me</h1>
            <form class="contact-form" action="index.php" method="POST">
                <input type="text" name="name" placeholder="Your Name*" required />
                <input type="email" name="mail" placeholder="Email Address*" required />
                <input type="text" name="subject" placeholder="Subject" />
                <textarea name="message" placeholder="Type your Message*" required></textarea>
                <button class="submit-btn" type="submit" name="submit">Send</button>
            </form>
        </div>
    </section>

    <footer>
        &#169; Sandra Wara 2020
    </footer>

</body>

</html>