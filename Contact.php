<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>

<header>
    <h1>Contact Me</h1>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="Education.php">Education</a></li>
        <li><a href="Hobby.php">Hobby</a></li>
        <li><a href="Gallery.php">Gallery</a></li>
        <li><a href="Contact.php">Contact</a></li>
        <li><a href="Calculation.php">Calculator</a></li>
    </ul>
</nav>

<main>
    <section>
        <article>
			<div class="contact">
            <h2>Contact Me</h2>
            <p>Feel free to reach out to me using the contact form below.</p>
            </div>
			<form>
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required><br>
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                <label for="message">Message:</label><br>
                <textarea id="message" name="message" rows="4" cols="50" required></textarea><br>
                <input type="submit" value="Submit">
            </form><br>
			
			<div class="contact">
				<p>And Follow my Social!</p>
				<a href=".../" target="_blank"><img src="image/fb.png" alt="Facebook"></a>
				<a href="..." target="_blank"><img src="image/int.png" alt="Instagram"></a>
			</div>
			
        
		</article>
    </section>
</main>

<footer>	
    <p>Assignment CSC541 Hazim Syazani</p>
</footer>

</body>