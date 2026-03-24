<?php
$chemin = '../';
$dossier_css = '../css/';
$dossier_js = '../js/';
$page_active = 'team';
$titre_page = 'Efrei | Equipe Enseignante';
$css_en_plus = ['team.css'];

require_once '../includes/header.php';
?>

<section class="team-hero">
    <div class="team-hero-header">
        <div class="hero-left">
            <span class="dash"></span>
            <p>Depuis plus de 10 ans, nous vous accompagnons dans votre insertion des études supérieures mais aussi
                votre insertion professionnel. Découvrez notre équipe enseignante au travers de votre formation !
            </p>
        </div>
        <div class="hero-right">
            <h1>Avec vous,<br>au quotidien</h1>
        </div>
    </div>

    <div class="team-hero-image-wrapper">
        <div class="team-badge">Votre équipe du Département Informatique</div>
        <img src="../img/bg-1.png" alt="Group photo" class="team-main-image">
    </div>
</section>

<section class="timeline-container">

    <div class="row row-left">
        <img class="avatar"
            src="https://images.unsplash.com/photo-1552058544-f2b08422138a?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
            alt="Frederick Meunier">
        <div class="dot line-1-dot"></div>
        <div class="line-segment line-1"></div>
        <div class="info">
            <h3>Frederick Meunier</h3>
            <h4>Directeur de l'Efrei</h4>
            <div class="quote-wrapper">
                <span class="quote-icon">❝</span>
                <div class="quote-box">
                    Lorem ipsum dolor sit amet. Et quisquam delectus qui cupiditate debitis a facilis optio. Id iure
                    maxime qui assumenda omnis cum sequi iste ut internos incidunt.
                </div>
            </div>
        </div>
    </div>

    <div class="row row-left row-no-margin">
        <img class="avatar"
            src="https://images.unsplash.com/photo-1542909168-82c3e7fdca5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
            alt="Christophe">

        <div class="dot line-1-dot"></div>

        <div class="line-segment line-1"></div>
        <div class="info">
            <h3>Christophe</h3>
            <h4>Responsable de formation</h4>
            <span class="since">Depuis 2022</span>
            <div class="quote-wrapper">
                <span class="quote-icon">❝</span>
                <div class="quote-box">
                    Lorem ipsum dolor sit amet. Et quisquam delectus qui cupiditate debitis a facilis optio. Id iure
                    maxime qui assumenda omnis cum sequi iste ut internos incidunt.
                </div>
            </div>
        </div>
    </div>

    <div class="curve-row">
        <svg preserveAspectRatio="none" viewBox="0 0 500 100">
            <path d="M 0,0 C 0,80 500,20 500,100" fill="none" stroke="#B8C8FB" stroke-width="2"
                vector-effect="non-scaling-stroke"></path>
        </svg>
    </div>

    <div class="row row-right-aligned row-curve-margin">

        <div class="line-segment line-2"></div>
        <img class="avatar"
            src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
            alt="Caroline">
        <div class="dot line-2-dot"></div>
        <div class="info">
            <h3>Caroline</h3>
            <h4>Coordinatrice</h4>
            <span class="since">Depuis 2022</span>
            <div class="quote-wrapper">
                <span class="quote-icon">❝</span>
                <div class="quote-box">
                    Lorem ipsum dolor sit amet. Et quisquam delectus qui cupiditate debitis a facilis optio. Id iure
                    maxime qui assumenda omnis cum sequi iste ut internos incidunt.
                </div>
            </div>
        </div>
    </div>

    <div class="row row-right-inverted">
        <div class="line-segment line-2"></div>
        <div class="info">
            <h3>Johnny</h3>
            <h4>Coordinateur</h4>
            <span class="since">Depuis 2022</span>
            <div class="quote-wrapper">
                <span class="quote-icon">❝</span>
                <div class="quote-box">
                    Lorem ipsum dolor sit amet. Et quisquam delectus qui cupiditate debitis a facilis optio. Id iure
                    maxime qui assumenda omnis cum sequi iste ut internos incidunt.
                </div>
            </div>
        </div>
        <div class="dot line-2-dot"></div>
        <img class="avatar"
            src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
            alt="Johnny">
    </div>

    <div class="row row-right-aligned row-no-margin-bottom">
        <img class="avatar"
            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-4.0.3&auto=format&fit=crop&w=200&q=80"
            alt="Sylvain">
        <div class="dot line-2-dot"></div>
        <div class="info">
            <h3>Sylvain</h3>
            <h4>Enseignant</h4>
            <span class="since">Depuis 2022</span>
            <div class="quote-wrapper">
                <span class="quote-icon">❝</span>
                <div class="quote-box">
                    Lorem ipsum dolor sit amet. Et quisquam delectus qui cupiditate debitis a facilis optio. Id iure
                    maxime qui assumenda omnis cum sequi iste ut internos incidunt.
                </div>
            </div>
        </div>
    </div>

</section>

<script src="../js/nav.js"></script>

<?php require_once '../includes/footer.php'; ?>