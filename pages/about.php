<?php
$chemin = '../';
$dossier_css = '../css/';
$dossier_js = '../js/';
$page_active = 'about';
$titre_page = 'A Propos | Efrei';

$faq = array(
    array(
        "q" => "Comment s'inscrire ?",
        "r" => "Vous pouvez vous inscrire directement via notre formulaire en ligne sur la page 'Cours & Formations'."
    ),
    array(
        "q" => "Où se situent les campus ?",
        "r" => "Nous avons deux campus principaux à Villejuif, accessibles en métro (ligne 7) et en tramway."
    ),
    array(
        "q" => "L'alternance est-elle possible ?",
        "r" => "Oui, la plupart de nos formations (BTS, Bachelor, Mastère) proposent un parcours en alternance."
    ),
    array(
        "q" => "Quels sont les débouchés ?",
        "r" => "Nos diplômés travaillent dans la cybersécurité, le développement web, l'IA et le management de projets IT."
    )
);

require_once '../includes/header.php';
?>

<section class="page-header about-bg">
    <div class="container">
        <h1>À propos de l'Efrei</h1>
        <p>Une école d'ingénieurs tournée vers l'avenir depuis plus de 90 ans.</p>
    </div>
</section>

<section class="history-section">
    <div class="history-content">
        <h2>Notre Histoire</h2>
        <p>Fondée en 1936, l'Efrei a su rester à l'avant-garde des grandes technologies. Elle a toujours focalisé
            pleinement dans le numérique et intègre désormais plus de 20 000 alumni. École composante d'un grand
            ensemble comme Panthéon-Assas Université, les diplômes sont reconnus en France et à l'International.</p>
    </div>
</section>

<section class="faq-section">
    <div class="container">
        <h2>Questions fréquentes</h2>
        <div class="faq-list">
            <?php foreach ($faq as $item): ?>
                <div class="faq-item">
                    <h3><?php echo $item['q']; ?></h3>
                    <p><?php echo $item['r']; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<?php require_once '../includes/footer.php'; ?>