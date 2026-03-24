<?php
$chemin = './';
$dossier_css = './css/';
$dossier_js = './js/';
$page_active = 'accueil';
$titre_page = 'Efrei | Département Informatique';
$css_en_plus = ['carousel.css', 'about.css'];
$js_en_plus = ['carousel.js'];

require_once 'includes/header.php';
?>

<section class="hero">
    <div class="hero-content">
        <div class="hero-tag slide-tag">
            EFREI MEET YOUR FUTURE 2026
            <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                stroke-linecap="round" stroke-linejoin="round">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7 7 17 7 17 17"></polyline>
            </svg>
        </div>
        <h1>Département Informatique<br>de l'Efrei</h1>
        <p>L'Efrei, Grande École d'ingénieurs généraliste et d'experts du numérique depuis 90 ans, entre dans une
            nouvelle ère, celle d'un pôle majeur du numérique en Île-de-France et en région bordelaise. Ce projet
            ambitieux s'ancre dans une collaboration solide avec l'Université Paris Panthéon-Assas, dont l'Efrei
            fait partie depuis 2022 en tant qu'établissement composante.</p>
    </div>
    <img src="./img/main.png" alt="Main illustration" class="hero-image">
</section>

<section class="carousel-section">
    <div class="carousel" id="mainCarousel" role="region" aria-label="Carrousel EFREI">
        <div class="carousel-track-wrapper">
            <div class="carousel-track" id="carouselTrack">

                <div class="carousel-slide active">
                    <div class="slide-bg"
                        style="background-image:url('https://images.unsplash.com/photo-1562774053-701939374585?w=1400&q=80&auto=format&fit=crop')">
                    </div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <span class="slide-tag">Excellence académique</span>
                        <h2>Former les ingénieurs<br>de demain</h2>
                        <p>Nos programmes alliant théorie et pratique préparent nos étudiants aux défis
                            technologiques actuels et futurs.</p>
                    </div>
                </div>

                <div class="carousel-slide">
                    <div class="slide-bg"
                        style="background-image:url('https://images.unsplash.com/photo-1523240795612-9a054b0db644?w=1400&q=80&auto=format&fit=crop')">
                    </div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <span class="slide-tag">Vie étudiante</span>
                        <h2>Un campus vivant<br>et connecté</h2>
                        <p>Clubs, hackathons, associations — la vie à l'EFREI va bien au-delà des salles de cours.
                        </p>
                    </div>
                </div>

                <div class="carousel-slide">
                    <div class="slide-bg"
                        style="background-image:url('https://images.unsplash.com/photo-1531482615713-2afd69097998?w=1400&q=80&auto=format&fit=crop')">
                    </div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <span class="slide-tag">International</span>
                        <h2>Ouverts sur<br>le monde</h2>
                        <p>Plus de 200 universités partenaires à travers le monde pour des échanges enrichissants
                            dès la 2e année.</p>
                    </div>
                </div>

                <div class="carousel-slide">
                    <div class="slide-bg"
                        style="background-image:url('https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?w=1400&q=80&auto=format&fit=crop')">
                    </div>
                    <div class="slide-overlay"></div>
                    <div class="slide-content">
                        <span class="slide-tag">Innovation</span>
                        <h2>Recherche &amp; Innovation<br>au cœur de l'EFREI</h2>
                        <p>Laboratoires de pointe, projets industriels et partenariats avec les plus grandes
                            entreprises françaises.</p>
                    </div>
                </div>

            </div>
        </div>

        <button class="carousel-btn carousel-prev" id="carouselPrev" aria-label="Slide précédente">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="15 18 9 12 15 6"></polyline>
            </svg>
        </button>
        <button class="carousel-btn carousel-next" id="carouselNext" aria-label="Slide suivante">
            <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"
                stroke-linecap="round" stroke-linejoin="round">
                <polyline points="9 18 15 12 9 6"></polyline>
            </svg>
        </button>

        <div class="carousel-dots" id="carouselDots">
            <button class="carousel-dot active" aria-label="Slide 1"></button>
            <button class="carousel-dot" aria-label="Slide 2"></button>
            <button class="carousel-dot" aria-label="Slide 3"></button>
            <button class="carousel-dot" aria-label="Slide 4"></button>
        </div>
    </div>
</section>

<section class="info-section">
    <div class="info-content">
        <h2>Quelques chiffres...</h2>
    </div>
    <div class="features-grid">
        <div class="feature-card">
            <div class="stat-header">
                <h3>10</h3>
                <span class="card-badge">formations</span>
            </div>
            <p>Nous vous proposons 10 formations possible en BTS,<br> Bachelor et Master.</p>
        </div>
        <div class="feature-card">
            <div class="stat-header">
                <h3>Stage &amp; Alternance</h3>
                <span class="card-badge">à partir de la 3ème année</span>
            </div>
            <p>Des stages de découverte en entreprise sont possible à 3 initial, avec un accompagnement complet.
                Vous avez également la possibilité de faire votre formation en Alternance et de bénéficier de
                certains avantages.</p>
        </div>
        <div class="feature-card">
            <div class="stat-header">
                <h3>95%</h3>
                <span class="card-badge">taux de réussite</span>
            </div>
            <p>A l'Efrei, vos années d'études supérieures sont assurés par l'enseignement et le suivi qu'on vous
                apporte.</p>
        </div>
        <div class="feature-card">
            <div class="stat-header">
                <h3>9 000€</h3>
                <span class="card-badge">coût d'une année</span>
            </div>
            <p>Tout frais confondus, votre année aura un coût de 9 000€.<br>En alternance, l'année coûtera environ
                11 000€ mais cela est aux frais de l'entreprise.</p>
        </div>
        <div class="feature-card">
            <div class="stat-header">
                <h3>6 mois d'échange</h3>
                <span class="card-badge">à l'étranger</span>
            </div>
            <p>Grâce à notre programme d'échange universitaire, vous avez la possibilité d'étudier dans un autre
                pays pendant 6 mois. Vous pouvez en faire la demande dès la 2ème année.</p>
        </div>
        <div class="feature-card">
            <div class="stat-header">
                <h3>100%</h3>
                <span class="card-badge">taux d'insertion professionnelle</span>
            </div>
            <p>Après leur cursus, tous nos élèves ont su s'insérer dans le monde professionnel, en France ou à
                l'étranger.</p>
        </div>
    </div>
</section>

<section class="location-section">
    <h2>Où sommes-nous ?</h2>
    <div class="tabs">
        <button class="tab active" id="tabParis">Campus Paris</button>
        <button class="tab" id="tabVillejuif">Campus Villejuif</button>
    </div>
    <div id="contentParis" class="history-inner" style="margin-top: 20px;">
        <div class="history-content">
            <h2>Campus de Paris</h2>
            <p>Notre Campus est facilement accessible depuis la station de Métro Villejuif Louis-Aragon. Il est
                situé à seulement 5 minutes à pieds.<br>Vous pouvez également y accéder depuis le Tramway.</p>
            <ul class="features">
                <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                    </svg> 24 Bd Marechal, Villejuif 94200</li>
                <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                        <circle cx="9" cy="7" r="4"></circle>
                        <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                    </svg> 5 000 élèves</li>
                <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z">
                        </path>
                    </svg> 21 500 m2</li>
                <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M3 2v7c0 1.1.9 2 2 2h4a2 2 0 0 0 2-2V2"></path>
                        <path d="M7 2v20"></path>
                        <path d="M21 15V2v0a5 5 0 0 0-5 5v6c0 1.1.9 2 2 2h3Zm0 0v7"></path>
                    </svg> Restaurant universitaire (CROUS)</li>
            </ul>
        </div>
        <div class="history-image-wrapper">
            <img src="./img/image3.png" alt="Campus Paris Efrei" class="history-img" style="height: 340px;">
        </div>
    </div>

    <div id="contentVillejuif" class="history-inner" style="margin-top: 20px; display: none;">
        <div class="history-content">
            <h2>Campus de Villejuif</h2>
            <p>Notre deuxième pôle d'enseignement situé au cœur de la ville, offrant des infrastructures modernes.
                Situé à proximité immédiate des transports en commun.</p>
            <ul class="features">
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg> Espace de recherche
                </li>
                <li>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg> Laboratoires de pointe
                </li>
            </ul>
        </div>
        <div class="history-image-wrapper">
            <img src="./img/image3.png" alt="Campus Villejuif Efrei" class="history-img" style="height: 340px;">
        </div>
    </div>
</section>

<script>
    var btnParis = document.getElementById('tabParis');
    var btnVillejuif = document.getElementById('tabVillejuif');
    var contentParis = document.getElementById('contentParis');
    var contentVillejuif = document.getElementById('contentVillejuif');

    btnParis.onclick = function () {
        btnParis.classList.add('active');
        btnVillejuif.classList.remove('active');
        contentParis.style.display = 'flex';
        contentVillejuif.style.display = 'none';
    };

    btnVillejuif.onclick = function () {
        btnVillejuif.classList.add('active');
        btnParis.classList.remove('active');
        contentVillejuif.style.display = 'flex';
        contentParis.style.display = 'none';
    };
</script>

<script src="./js/carousel.js"></script>
<script src="./js/nav.js"></script>

<?php require_once 'includes/footer.php'; ?>