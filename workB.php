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
        <h3>Onkunde</h3>
            <div id="tekst">
               <p> Er zijn veel mensen die niet kunnen <?= $_POST['antw1'] ?>. Neem nou <?= $_POST['antw2'] ?>. Zelfs met de hulp van een <?= $_POST['antw4'] ?> of zelfs <?= $_POST['antw3'] ?> kan <?= $_POST['antw2'] ?> niet <?= $_POST['antw1'] ?>. Dat heeft niet te maken met een gebrek aan <?= $_POST['antw5'] ?>, maar met een te veel aan <?= $_POST['antw6'] ?>. <?= $_POST['antw6'] ?> leidt tot <?= $_POST['antw7'] ?> en dat is niet goed als je wilt <?= $_POST['antw1'] ?>. Helaas voor <?= $_POST['antw2'] ?>.</p>
            </div>
    </main>
    <footer>
        <h4>by Livv - 2018</h4>
    </footer>
</body>
</html>