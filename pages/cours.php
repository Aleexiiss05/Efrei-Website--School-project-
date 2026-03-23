<?php
$chemin = '../';
$dossier_css = '../css/';
$dossier_js = '../js/';
$page_active = 'cours';
$titre_page = 'Cours & Formations | Efrei';

$donnees_formations = json_decode(file_get_contents('../data/formations.json'), true);

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
        $succes = "Candidature envoyée ! Merci " . $prenom . ", vous avez choisi la formation : " . $formation . ". (" . $fichiers_ok . " fichiers reçus)";
    }
}

require_once '../includes/header.php';
?>

<section class="page-header">
    <div class="container">
        <h1>Nos Formations</h1>
        <p>Découvrez nos programmes en informatique, du BTS au Mastère.</p>
    </div>
</section>

<section class="feature-section">
    <div class="features-grid">
        <?php foreach ($donnees_formations as $f): ?>
            <div class="feature-card">
                <div class="card-icon"><?php echo $f['icone']; ?></div>
                <h3><?php echo $f['nom']; ?></h3>
                <p class="card-info"><?php echo $f['duree']; ?> - <?php echo $f['description']; ?></p>

                <div class="card-details">
                    <p><strong>Objectifs :</strong></p>
                    <ul>
                        <?php foreach ($f['objectifs'] as $obj): ?>
                            <li><?php echo $obj; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <?php if ($f['alternance']): ?>
                    <span class="card-badge">Alternance OK</span>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="contact-form" id="inscription">
    <div class="form-box">
        <h2>Inscription en ligne</h2>

        <?php if ($erreurs): ?>
            <div class="error-msg">
                <?php foreach ($erreurs as $e):
                    echo "<p>$e</p>"; endforeach; ?>
            </div>
        <?php endif; ?>

        <?php if ($succes): ?>
            <div class="success-msg">
                <p><?php echo $succes; ?></p>
            </div>
        <?php endif; ?>

        <form action="cours.php#inscription" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <div class="form-group">
                    <label>Prénom</label>
                    <input type="text" name="prenom" value="<?php echo htmlspecialchars($valeurs['prenom'] ?? ''); ?>">
                </div>
                <div class="form-group">
                    <label>Nom</label>
                    <input type="text" name="nom" value="<?php echo htmlspecialchars($valeurs['nom'] ?? ''); ?>">
                </div>
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($valeurs['email'] ?? ''); ?>">
            </div>

            <div class="form-group">
                <label>Formation</label>
                <select name="formation">
                    <option value="">Sélectionner...</option>
                    <?php foreach ($donnees_formations as $f): ?>
                        <option value="<?php echo $f['nom']; ?>" <?php if (($valeurs['formation'] ?? '') == $f['nom'])
                               echo 'selected'; ?>>
                            <?php echo $f['nom']; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>

            <div class="file-uploads">
                <p>Ajouter vos documents (PDF, JPG - Max 2Mo) :</p>
                <div class="upload-item">
                    <label>Certificat</label>
                    <input type="file" name="certificat">
                </div>
                <div class="upload-item">
                    <label>Motivation</label>
                    <input type="file" name="motivation">
                </div>
                <div class="upload-item">
                    <label>CV</label>
                    <input type="file" name="cv">
                </div>
                <div class="upload-item">
                    <label>Domicile</label>
                    <input type="file" name="domicile">
                </div>
            </div>

            <button type="submit" class="submit-btn">Envoyer</button>
        </form>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>