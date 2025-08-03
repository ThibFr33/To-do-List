<?php
session_start();
// unset($_SESSION["lists"]);


if (!isset($_SESSION["lists"])) {
    $_SESSION["lists"] = [];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $title = htmlspecialchars(trim($_POST["title"] ?? ''));
    $tasks = $_POST["tasks"] ?? [];


    $tasksInfos = [];
    foreach ($tasks as $task) {
        $text = htmlspecialchars(trim($task["text"] ?? ''));
        $importance = $task["importance"] ?? 'moyenne';
        if (!empty($text)) {
            $tasksInfos[] = [
                "text" => $text,
                "importance" => $importance,
                "created_at" => time()
            ];
        }
    }

    usort($tasksInfos, function($a, $b) {
        return $a["created_at"] <=> $b["created_at"];
    });

    if (!empty($title) && count($tasksInfos) > 0) {
        $_SESSION["lists"][] = [
            "title" => $title,
            "tasks" => $tasksInfos
        ];
    }
}

$lists = $_SESSION['lists'];
$lists = array_reverse($lists);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bubble List - Gestionnaire de tâches</title>
    <!-- Lien vers notre fichier CSS  -->
    <link rel="stylesheet" href="assets/css/style.css">
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
                <form method="POST" id="listForm">
                    <input type="text" name="title" placeholder="Nom de la liste..." required />
                    <div id="tasksContainer">
                        <div class="task-item">
                            <input type="text" name="tasks[0][text]" placeholder="Ajouter une tâche..." required class="task-text"/>
                            <select name="tasks[0][importance]" required>
                                <option value="haute">Priorité haute</option>
                                <option value="moyenne" selected>Priorité moyenne</option>
                                <option value="basse">Priorité basse</option>
                            </select>
                        </div>
                    </div>
                    <button type="button" id="addTaskBtn">Ajouter une tâche</button>
                    <button type="submit" class="new-list-btn">
                        <div class="bubble-icon"></div>
                        <span class="btn-text">Créer la liste</span>
                    </button>
                </form>


            </div>
            
            <!-- Zone où les listes apparaîtront -->
            <div class="lists-container">
                <?php if (empty($lists)) { ?>
                    <div class="empty-state">
                        <p>Aucune liste créée pour le moment</p>
                    </div>
                <?php }else{ ?>
                    <?php foreach ($lists as $list) { ?>
                        <div class="list">
                            <h3><?= htmlspecialchars($list["title"]) ?></h3>
                            <ul>
                                <?php foreach ($list["tasks"] as $index => $task) { ?>
                                    <li class="task <?= htmlspecialchars($task['importance']) ?>">
                                        <input type="checkbox" class="task-checkbox" <?= !empty($task["completed"]) ? "checked" : "" ?>>
                                        <span class="priority-dot"></span>
                                        <span class="task-text"><?= htmlspecialchars($task["text"]) ?></span>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                    <?php } ?>
                <?php } ?>
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
            
                                           

                                        
