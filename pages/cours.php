<?php
$chemin = '../';
$dossier_css = '../css/';
$dossier_js = '../js/';
$page_active = 'cours';
$titre_page = 'Efrei | Cours & Formations';
$css_en_plus = ['cours.css'];

$formulaire_envoye = false;
$erreurs = [];
$succes = "";
$valeurs = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formulaire_envoye = true;

    $prenom = trim($_POST['prenom'] ?? '');
    $nom = trim($_POST['nom'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $age = trim($_POST['age'] ?? '');
    $formation = $_POST['formation'] ?? '';

    $valeurs['prenom'] = $prenom;
    $valeurs['nom'] = $nom;
    $valeurs['email'] = $email;
    $valeurs['age'] = $age;
    $valeurs['formation'] = $formation;

    if ($prenom == "") {
        $erreurs[] = "Le prénom est obligatoire.";
    }
    if ($nom == "") {
        $erreurs[] = "Le nom est obligatoire.";
    }
    if ($email == "") {
        $erreurs[] = "L'email est obligatoire.";
    }
    if ($formation == "") {
        $erreurs[] = "Veuillez choisir une formation.";
    }

    $fichiers_ok = 0;

    if (isset($_FILES['certificat']) && $_FILES['certificat']['error'] == 0) {
        $ext = strtolower(pathinfo($_FILES['certificat']['name'], PATHINFO_EXTENSION));
        if ($ext == 'pdf' || $ext == 'jpg' || $ext == 'png') {
            if ($_FILES['certificat']['size'] <= 2000000) {
                $fichiers_ok++;
            } else {
                $erreurs[] = "Le certificat est trop lourd.";
            }
        } else {
            $erreurs[] = "Le certificat doit être un PDF ou une image.";
        }
    }

    if (isset($_FILES['motivation']) && $_FILES['motivation']['error'] == 0) {
        $ext = strtolower(pathinfo($_FILES['motivation']['name'], PATHINFO_EXTENSION));
        if ($ext == 'pdf' || $ext == 'jpg' || $ext == 'png') {
            if ($_FILES['motivation']['size'] <= 2000000) {
                $fichiers_ok++;
            }
        }
    }

    if (isset($_FILES['cv']) && $_FILES['cv']['error'] == 0) {
        $ext = strtolower(pathinfo($_FILES['cv']['name'], PATHINFO_EXTENSION));
        if ($ext == 'pdf' || $ext == 'jpg' || $ext == 'png') {
            if ($_FILES['cv']['size'] <= 2000000) {
                $fichiers_ok++;
            }
        }
    }

    if (isset($_FILES['domicile']) && $_FILES['domicile']['error'] == 0) {
        $ext = strtolower(pathinfo($_FILES['domicile']['name'], PATHINFO_EXTENSION));
        if ($ext == 'pdf' || $ext == 'jpg' || $ext == 'png') {
            if ($_FILES['domicile']['size'] <= 2000000) {
                $fichiers_ok++;
            }
        }
    }

    if (count($erreurs) == 0) {
        $succes = "Merci " . htmlspecialchars($prenom) . " " . htmlspecialchars($nom) . " ! Votre candidature pour la formation <strong>" . htmlspecialchars($formation) . "</strong> a bien été reçue. Un email de confirmation vous sera envoyé à l'adresse <strong>" . htmlspecialchars($email) . "</strong>.";
    }
}

require_once '../includes/header.php';
?>

<section class="formations-hero">
    <div class="formations-text">
        <h1>Nos différentes<br>formations</h1>
        <p>Nous vous proposons plusieurs formations dans notre pôle Expert du Numérique, découvrez nos formations à
            travers nos portes ouvertes de l'année 2026 !</p>
    </div>
    <div class="formations-image">
        <img src="../img/bg-1.png" alt="Étudiants diplômés">
    </div>
</section>

<section class="cards-section">
    <div class="formation-card">
        <div class="card-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <rect x="8" y="2" width="8" height="6" rx="1" ry="1"></rect>
                <path d="M12 8v4"></path>
                <path d="M8 12H16"></path>
                <path d="M8 12v4"></path>
                <path d="M16 12v4"></path>
                <rect x="4" y="16" width="8" height="6" rx="1" ry="1"></rect>
                <rect x="12" y="16" width="8" height="6" rx="1" ry="1"></rect>
            </svg>
        </div>
        <hr class="card-line">
        <h3>BTS <span>en 2 ans</span></h3>
    </div>
    <div class="formation-card">
        <div class="card-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="16 18 22 12 16 6"></polyline>
                <polyline points="8 6 2 12 8 18"></polyline>
            </svg>
        </div>
        <hr class="card-line">
        <h3>Bachelor <span>en 3 ans</span></h3>
    </div>
    <div class="formation-card">
        <div class="card-icon">
            <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#2c3e50" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
            </svg>
        </div>
        <hr class="card-line">
        <h3>Mastère <span>en 5 ans</span></h3>
    </div>
</section>

<section class="info-details-dark">
    <div class="details-grid">
        <div class="detail-item">
            <h4><span class="blue-dash"></span>Objectifs</h4>
            <ul>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
            </ul>
        </div>
        <div class="detail-item">
            <h4><span class="blue-dash"></span>Prérequis</h4>
            <ul>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
            </ul>
        </div>
        <div class="detail-item">
            <h4><span class="blue-dash"></span>Erasmus+</h4>
            <ul>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
            </ul>
        </div>
        <div class="detail-item">
            <h4><span class="blue-dash"></span>Diplôme</h4>
            <ul>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
            </ul>
        </div>
        <div class="detail-item">
            <h4><span class="blue-dash"></span>Admissions</h4>
            <ul>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
            </ul>
        </div>
        <div class="detail-item">
            <h4><span class="blue-dash"></span>Alternance</h4>
            <ul>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
                <li>Lorem ipsum dolor sit amet. Ea impedit perspiciatis et Quis harum</li>
            </ul>
        </div>
    </div>
</section>

<section class="join-form-section" id="inscription">
    <h2>Rejoignez-nous dès maintenant !</h2>

    <?php if ($erreurs): ?>
        <div class="error-msg">
            <?php foreach ($erreurs as $e):
                echo "<p>$e</p>";
            endforeach; ?>
        </div>
    <?php endif; ?>

    <?php if ($succes): ?>
        <div class="success-msg">
            <p><?php echo $succes; ?></p>
        </div>
    <?php endif; ?>

    <form class="student-form" action="cours.php#inscription" method="POST" enctype="multipart/form-data">
        <div class="form-row">
            <div class="input-group">
                <label>Prénom</label>
                <input type="text" name="prenom" placeholder="Écrivez ici..." value="<?php echo htmlspecialchars($valeurs['prenom'] ?? ''); ?>">
            </div>
            <div class="input-group">
                <label>Nom</label>
                <input type="text" name="nom" placeholder="Écrivez ici..." value="<?php echo htmlspecialchars($valeurs['nom'] ?? ''); ?>">
            </div>
        </div>
        <div class="form-row">
            <div class="input-group">
                <label>Genre</label>
                <div class="radio-group">
                    <div class="radio-item">
                        <input type="radio" id="homme" name="genre" checked>
                        <label for="homme">Homme</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" id="femme" name="genre">
                        <label for="femme">Femme</label>
                    </div>
                </div>
            </div>
            <div class="input-group">
                <label>Email</label>
                <input type="email" name="email" placeholder="exemple@email.com" value="<?php echo htmlspecialchars($valeurs['email'] ?? ''); ?>">
            </div>
        </div>
        <div class="input-group full-width">
            <label>Choix de formation</label>
            <select name="formation">
                <option value="" disabled <?php if (empty($valeurs['formation'])) echo 'selected'; ?>>Choisissez votre formation souhaitée</option>
                <option value="bts" <?php if (($valeurs['formation'] ?? '') == 'bts') echo 'selected'; ?>>BTS</option>
                <option value="bachelor" <?php if (($valeurs['formation'] ?? '') == 'bachelor') echo 'selected'; ?>>Bachelor</option>
                <option value="master" <?php if (($valeurs['formation'] ?? '') == 'master') echo 'selected'; ?>>Mastère</option>
            </select>
        </div>
        <div class="input-group full-width">
            <label>Votre diplôme actuel</label>
            <select>
                <option value="" disabled selected>Choisissez un titre ou diplôme</option>
                <option value="bac">Baccalauréat</option>
                <option value="bac2">Bac +2</option>
                <option value="bac3">Bac +3</option>
            </select>
        </div>
        <div class="input-group full-width">
            <label>Message (facultatif)</label>
            <textarea placeholder="Écrivez ici..." rows="5"></textarea>
        </div>
        <div class="upload-section">
            <label class="upload-title">Fichiers à joindre</label>
            <div class="upload-item">
                <span>Certificat de votre diplôme</span>
                <input type="file" name="certificat">
            </div>
            <div class="upload-item">
                <span>Lettre de motivation</span>
                <input type="file" name="motivation">
            </div>
            <div class="upload-item">
                <span>CV (Curriculum Vitae)</span>
                <input type="file" name="cv">
            </div>
            <div class="upload-item">
                <span>Justificatif de domicile</span>
                <input type="file" name="domicile">
            </div>
        </div>
        <button type="submit" class="submit-btn">Envoyer</button>
    </form>
</section>

<script src="../js/nav.js"></script>

<?php require_once '../includes/footer.php'; ?>