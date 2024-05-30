<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celsius to Fahrenheit Converter</title>
    <link rel="stylesheet" href="css/mystyle.css">
</head>
<body>

<header>
    <h1>Hazim's Web Page</h1>
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
</header>

<main>
    <article>
        <div class="converter-container">
            <h2>Celsius to Fahrenheit Converter</h2>
            <form>
                <label for="inputFahrenheit">Enter Fahrenheit:</label>
                <input id="inputFahrenheit" type="number" placeholder="Fahrenheit" oninput="temperatureConverter(this.value)" onchange="temperatureConverter(this.value)">
            </form>
            <div class="celsius-box">
                <p class="result">Celsius: <span id="outputCelsius"></span></p>
            </div>
        </div>
    </article>
</main>

<footer>
    <p>Assignment CSC541 Hazim Syazani</p>
</footer>

<script>
function temperatureConverter(valNum) {
    valNum = parseFloat(valNum);
    let celsius = (valNum - 32) / 1.8;
    document.getElementById("outputCelsius").innerText = celsius.toFixed(2);
}
</script>

</body>
</html>