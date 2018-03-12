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
            <form action="workB.php" method="POST">
            <div  id="tekst">
                <div class="form-group">
                    <label>Wat zou je graag willen kunnen?</label>
                    <input type="text" name="antw1">
                </div>
                <div class="form-group">
                    <label>Met welke persoon kun je goed opschieten?</label>
                    <input type="text" name="antw2">
                </div>
                <div class="form-group">
                    <label>Wat is je favoriete getal?</label>
                    <input type="text" name="antw3">
                </div>
                <div class="form-group">
                    <label>Wat heb je altijd bij je als je op vakantie gaat?</label>
                    <input type="text" name="antw4">
                </div>
                <div class="form-group">
                    <label>Wat is je beste persoonlijke eigenschap?</label>
                    <input type="text" name="antw5">
                </div>
                <div class="form-group">
                    <label>Wat is je slechtste persoonlijke eigenschap?</label>
                    <input type="text" name="antw6">
                </div>
                <div class="form-group">
                    <label>Wat is het ergste dat je kan overkomen?</label>
                    <input type="text" name="antw7">
                </div>
                
                <div class="form-group">
                    <label></label>
                    <input type="submit" name="submit">
                </div>
            </div>
            </form>
        
    </main>
    <footer>
        <h4>by Livv - 2018</h4>
    </footer>
</body>
</html>