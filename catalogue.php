
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grown: Catalogue</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <?php require_once("nav.php") ?>
    <div class="main">
        <div class="catalogue">
            <h2>Teste de Tristesse</h2>
            <div class="catalogue_1">
            <div class="picture"><a href="sadness.php"><img src="images/menu/sadness.png" alt="sadness test menu"></a></div>
                <div class="text">
                    <p>Explorer plus sur votre était émotionnelle actuel. J'usqu'a quel point etes vous triste, pourquoi et comment le résoudre.</p>
                    <div class="button"><a href="sadness.php"><button class="btn-1" type="submit">Start</button></a></div> 
                </div>
            </div>

            <h2>Motivation</h2>
            <div class="catalogue_1">
                <div class="picture"><a href="#"><img src="images/menu/motivation.png" alt="motivation menu"></a></div>
                <div class="text"> 
                    <p>Motivez vous, develoopez de la discipline et atteingné vos objectifs. Il est plus que temps d'atteindre votre prime. Travaillez sur vous pour vous !</p>
                    <div class="button"><a href="#motivation.php"><button class="btn-1">Start</button></a></div> 
                </div>
            </div>
            <!-- Debut Placement de produit personnelle -->
             <div class="pub">
                <h2>Contribuez Positivement</h2>
                <div class="pub_perso">
                    <div class="perso_ 1"><p>Contribuez au dévéloppement du projet d'un jeune comme vous ou vos proches en paertageant cette resource <!-- <img class="emoji" src="images/menu/emoji2.png" alt="emojie de joie"> --></p></div>
                    <div class="perso_2"><a href="#share"><button class="btn-1">Partager</button></a></div>
                </div>
            </div>
            <!-- Fin Placement de produit personnelle -->

            <h2>Teste d'amour</h2>
            <div class="catalogue_1"> 
                <div class="picture"><a href="#"><img src="images/menu/love.png" alt="friend ship test menu"></a></div>
                <div class="text"> 
                    <p>Découvrez beaucoup plus sur vos sentiments et clarifiez les. Sonts t'ils réel et saint ou non ?</p>
                    <div class="button"><a href="#ove.php"><button class="btn-1">Start</button></a></div> 
                </div>
            </div>

            <h2>Teste d'amitié</h2>
            <div class="catalogue_1">
                <div class="picture"><a href="#"><img src="images/menu/friendship.png" alt="friend ship test menu"></a></div>
                <div class="text">
                    <p>Testez les connaissances de votre amité avec vos proches. Et decouvrez j'usqu'ou on vous connais !</p>
                    <div class="button"><a href="friend.php"><button class="btn-1">Start</button></a></div>       
                </div>
            </div>
        </div>
    </div>
    <br><br> <br> <br> <br><br> <br><br>
        <br> <br> <br><br> <br><br> <br> <br> <br><br> <br><br> <br> 
    <?php require_once("footer.php") ?>
</body>
</html>