<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble List - Gestionnaire de tâches</title>
    <!-- Lien vers notre fichier CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Link vers le fichier script js ! -->
     <script src="assets/js/script.js" defer></script>
</head>
<body>
    <!-- Conteneur principal qui divise l'écran en deux parties -->
    <div class="container">
        
        <!-- SIDEBAR GAUCHE  -->
        <aside class="sidebar">
            <!-- Section des filtres -->
            <div class="filters">
                <!-- Filtre Priorité avec icône d'exclamation rouge -->
                <div class="filter-item priority-filter">
                    <div class="filter-icon priority-icon">
                        <span class="exclamation">!</span>
                    </div>
                    <span class="filter-text">Priorité</span>
                </div>
                
                <!-- Filtre Classe -->
                <div class="filter-item">
                    <div class="filter-icon">
                        <span class="icon-text">C</span>
                    </div>
                    <span class="filter-text">CLASSE</span>
                </div>
                
                <!-- Filtre Rendez-vous -->
                <div class="filter-item">
                    <div class="filter-icon">
                        <span class="icon-text">R</span>
                    </div>
                    <span class="filter-text">RENDEZ-VOUS</span>
                </div>
                
                <!-- Filtre Shopping -->
                <div class="filter-item">
                    <div class="filter-icon">
                        <span class="icon-text">S</span>
                    </div>
                    <span class="filter-text">SHOPPING</span>
                </div>
            </div>
        </aside>

        <!-- !!!!! je ne sais pas quoi rajouter a ce moment la !!!!   -->
        
        <!--  - Zone de droite -->
        <main class="main-content">
            <!--  avec le poisson et le titre -->
            <header class="header">
                <div class="header-content">
                    <!-- Image du LOGO -->
                    <div class="fish-image-container">
                        <img src="assets/images/logo clean bubble.png" alt="Poisson qui lit un livre">
                    </div>
                    
                    <!-- Titre  -->
                    <h1 class="main-title">
                        <span class="title-background">Bubble list</span>
                    </h1>
                </div>
            </header>
            
            <!-- Bouton principal pour créer une nouvelle liste -->
            <div class="action-section">
                <button class="new-list-btn">
                    <div class="bubble-icon"></div>
                    <span class="btn-text">NOUVELLE LIST</span>
                </button>
            </div>
            
            <!-- Zone où les listes apparaîtront (vide pour le momnt) -->
            <div class="lists-container">

                <!-- Les listes seront ajoutées la !!!!!!!  -->
                <div class="empty-state">
                    <p>Aucune liste créée pour le moment</p>
                </div>
            </div>
        </main>
    </div>
    
    <!-- Pied-pied  -->
    <footer class="footer">
        <p class="copyright">© 2025 - TYM - NECTON</p>
    </footer>
    
    <!-- Lien vers JScrpt -->
    <script src="assets/js/script.js"></script>
</body>
</html>