<?php
if (!isset($chemin))
    $chemin = './';
if (!isset($dossier_css))
    $dossier_css = './css/';
if (!isset($dossier_js))
    $dossier_js = './js/';
if (!isset($page_active))
    $page_active = '';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php if (isset($titre_page)) {
        echo $titre_page;
    } else {
        echo 'Efrei | Département Informatique';
    } ?>
    </title>
    <link rel="stylesheet" href="<?php echo $dossier_css; ?>styles.css">
    <?php
    if (!empty($css_en_plus)) {
        foreach ($css_en_plus as $fichier) {
            echo '<link rel="stylesheet" href="' . $dossier_css . $fichier . '">';
        }
    }
    ?>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav>
        <a href="<?php echo $chemin; ?>index.php" class="logo">
            <img src="<?php echo $chemin; ?>img/logo.png" alt="Logo Efrei">
        </a>
        <div class="nav-links">
            <a href="<?php echo $chemin; ?>index.php" <?php if ($page_active == 'accueil')
                   echo 'class="active"'; ?>>Accueil</a>
            <a href="<?php echo $chemin; ?>pages/cours.php"
                class="flex-link <?php if ($page_active == 'cours')
                    echo 'active'; ?>">Cours &amp; Formations
                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                    stroke-linecap="round" stroke-linejoin="round">
                    <polyline points="6 9 12 15 18 9"></polyline>
                </svg>
            </a>
            <a href="<?php echo $chemin; ?>pages/team.php" <?php if ($page_active == 'team')
                   echo 'class="active"'; ?>>Equipe enseignants</a>
            <a href="<?php echo $chemin; ?>pages/about.php" <?php if ($page_active == 'about')
                   echo 'class="active"'; ?>>A
                propos</a>
        </div>
        <a href="#" class="student-space">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="#0056b3" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round" style="fill:#0056b3;">
                <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <span>Mon espace<br>Etudiant</span>
        </a>
        <button class="nav-hamburger" aria-label="Menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>
    </nav>