<?php
if (!isset($chemin))
    $chemin = './';
if (!isset($dossier_js))
    $dossier_js = './js/';
?>
<footer>
    <div class="footer-bg"></div>
    <div class="footer-content">
        <div class="footer-col" style="flex:1.5;padding-right:40px;">
            <h4>Nous contacter</h4>
            <p>accueil@efrei.net</p>
            <p>+33 1 94 72 16 44</p>
        </div>
        <div class="footer-col">
            <h4>Liens utiles</h4>
            <a href="#">Ma rentrée 2026</a>
            <a href="#">Prérequis matériels</a>
            <a href="<?php echo $chemin; ?>pages/cours.php">S'inscrire à une formation</a>
            <a href="#">Parcoursup</a>
        </div>
        <div class="footer-col">
            <h4>Liens utiles</h4>
            <a href="#">Ma rentrée 2026</a>
            <a href="#">Prérequis matériels</a>
            <a href="<?php echo $chemin; ?>pages/cours.php">S'inscrire à une formation</a>
        </div>
        <div class="footer-col">
            <h4>Formations</h4>
            <a href="<?php echo $chemin; ?>pages/cours.php">BTS</a>
            <a href="<?php echo $chemin; ?>pages/cours.php">Bachelor</a>
            <a href="<?php echo $chemin; ?>pages/cours.php">Mastère</a>
        </div>
        <div class="footer-col">
            <h4>Ressources</h4>
            <a href="<?php echo $chemin; ?>pages/cours.php">BTS</a>
            <a href="<?php echo $chemin; ?>pages/cours.php">Bachelor</a>
            <a href="<?php echo $chemin; ?>pages/cours.php">Mastère</a>
        </div>
    </div>
    <div class="footer-bottom">
        <p>© 2026 Efrei - Tous droits réservés | <a href="<?php echo $chemin; ?>pages/about.php"
                style="color:inherit;">À propos</a></p>
    </div>
</footer>
<?php
if (!empty($js_en_plus)) {
    foreach ($js_en_plus as $fichier) {
        echo '<script src="' . $dossier_js . $fichier . '"></script>';
    }
}
?>
<script src="<?php echo $dossier_js; ?>nav.js"></script>
</body>

</html>