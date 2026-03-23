<?php
$chemin = '../';
$dossier_css = '../css/';
$dossier_js = '../js/';
$page_active = 'team';
$titre_page = 'Notre Equipe | Efrei';

$donnees_equipe = json_decode(file_get_contents('../data/team.json'), true);

require_once '../includes/header.php';
?>

<section class="page-header team-bg">
    <div class="container">
        <h1>L'Equipe Pédagogique</h1>
        <p>Des experts passionnés pour vous accompagner tout au long de votre cursus.</p>
    </div>
</section>

<section class="team-section">
    <div class="team-list">
        <?php
        $count = 0;
        foreach ($donnees_equipe as $m):
            $count++;
            $side = ($count % 2 == 1) ? 'left' : 'right';
            ?>
            <div class="member-card <?php echo $side; ?>">
                <div class="member-photo">
                    <img src="<?php echo $m['image']; ?>" alt="<?php echo $m['nom']; ?>">
                </div>
                <div class="member-info">
                    <span class="member-role"><?php echo $m['role']; ?></span>
                    <h3><?php echo $m['nom']; ?></h3>
                    <p class="member-quote">"<?php echo $m['citation']; ?>"</p>
                    <div class="member-desc">
                        <p><?php echo $m['description_longue']; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>