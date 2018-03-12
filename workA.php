<!DOCTYPE html>
<html>
<head>
    <title>MadLibs</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="container">
        <img src="logo.png">
        <nav id="menu">
            <ul>
                <li><a href="index.php">Er heerst paniek...</a></li>
                <li><a href="onkunde.php">Onkunde</a></li>
            </ul>
        </nav>
    </header>
    
    <main>
        <h3>Er heerst paniek...</h3>
            <div id="tekst">
                <p>	Er heerst paniek in het koninkrijk <?= $_POST['ant3'] ?>. Koning <?= $_POST['ant6'] ?> is ten einde raad en als koning Egmond ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?= $_POST['ant2'] ?>.</p>
				<p>"<?= $_POST['ant2'] ?>! Het is een ramp! Het is een schande!"</p>
				<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>
				<p>"Mijn <?= $_POST['ant1'] ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?= $_POST['ant5'] ?> voor hem gekocht!"</p>
				<p>"Majesteit, uw <?= $_POST['ant1'] ?> komt vast vanzelf weer terug?"</p>
				<p>"Ja, da's leuk en aardig, maar hoe moet ik in de tussentijd <?= $_POST['ant8'] ?> leren?"</p>
				<p>"Maar Sire, daar kunt u toch uw <?= $_POST['ant7'] ?> voor gebruiken."</p>
				<p>"<?= $_POST['ant2'] ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."</p>
				<p>"<?= $_POST['ant4'] ?>, Sire"</p>
            </div>
    </main>
    <footer>
        <h4>by Livv - 2018</h4>
    </footer>
</body>
</html>