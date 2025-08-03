


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping</title>
    <link rel="stylesheet" href="assets/css/shopping.css">
</head>
<body>
    <header>
        <h1>Nos abonnements</h1>
    </header>
    <main>
        <section class="offersContainer">
            <!-- création d'une class offersContainer qui va contenir mes autres box Offre -->
            <div class="offerContainer">
                <!-- création d'une class offerContainer -->
                <h2>Shopping Starter</h2>
                <p class="price">Gratuit</p>
                <!-- la class price me permet de mettre une font-weight au prix au lieu d'écire un h3 -->
                 <!-- ul et li pour lister les avantages dont l'utilisateur bénéficie -->
                <ul>
                    <li>
                        Ajouter jusqu'à 20 articles
                    </li>
                    <li>
                        Catégoriser les produits
                    </li>
                    <li>
                        Marquer les articles comme achetés
                    </li>
                </ul>
                <!-- je créer un form au lieu d'un btn car pour le prochain btn j'y ai mis un lien -->
                <form action="">
                    <input type="submit" value="Sélectionné" class="firstButton">
                </form>
            </div>
            <div class="offerContainer">
                <h2>Shopping Premium</h2>
                <p class="price">5 €/mois </p>
                <!-- ul et li pour lister les avantages dont l'utilisateur peut beneficier -->
                <ul>
                    <li>
                        Article illimités
                    </li>
                    <li>
                        Suggestions automatiques
                    </li>
                    <li>
                        Partage de la liste
                    </li>
                </ul>
                <!-- form sous forme de btn lié a mon paypal -->
                <form action="https://paypal.me/YBuyukaydin">
                    <input type="submit" value="S'abonner" class="secondButton">
                </form>
            </div>
        </section>
    </main>
    <footer>
        <h3>Merci pour votre soutien !</h3>
    </footer>
    
</body>
</html>