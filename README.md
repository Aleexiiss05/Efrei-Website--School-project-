# Site Web – Département Informatique de l'EFREI 🎓

Projet scolaire réalisé dans le cadre de nos cours de développement web à l'EFREI. L'objectif était de créer un site vitrine pour présenter le département Informatique de notre école.

---

## Présentation du projet

J'ai créé un site web multi-pages en HTML/CSS/PHP qui présente le département informatique de l'EFREI. Le site contient plusieurs pages avec des infos sur les formations, l'équipe enseignante, et la vie étudiante. J'ai essayé de faire quelque chose de propre et moderne.

---

## Pages du site

- **Accueil** (`index.php`) — page principale avec un carousel d'images, des chiffres clés et une section localisation avec deux campus
- **À propos** (`pages/about.php`) — présentation générale de l'école
- **Cours** (`pages/cours.php`) — liste des formations disponibles
- **Notre équipe** (`pages/team.php`) — présentation des membres de l'équipe / profs

---

## Structure des fichiers

```
Efrei-Website--School-project-/
│
├── index.php               # Page d'accueil
│
├── pages/
│   ├── about.php           # Page à propos
│   ├── cours.php           # Page des cours
│   └── team.php            # Page de l'équipe
│
├── includes/
│   ├── header.php          # En-tête commun à toutes les pages (nav)
│   └── footer.php          # Pied de page commun
│
├── css/
│   ├── styles.css          # Styles globaux
│   ├── carousel.css        # Styles du carousel
│   ├── about.css           # Styles page about
│   ├── cours.css           # Styles page cours
│   └── team.css            # Styles page team
│
├── js/
│   ├── carousel.js         # Script du carousel
│   ├── nav.js              # Script de la navigation
│   └── about.js            # Script page about
│
└── img/
    ├── logo.png
    ├── main.png
    └── ...
```

---

## Technologies utilisées

- **HTML5** — structure des pages
- **CSS3** — mise en forme et responsive design
- **PHP** — pour la gestion des includes (header/footer communs) et éviter la répétition de code
- **JavaScript Vanilla** — carousel interactif, navigation, onglets dynamiques

Pas de framework, pas de librairie externe (à part quelques icônes SVG inline). J'ai tout fait à la main.

---

## Comment lancer le projet

Il faut un serveur local qui supporte PHP. J'ai utilisé **WAMP** pendant le développement.

1. Cloner ou télécharger le repo
2. Placer le dossier dans `C:\wamp64\www\`
3. Lancer WAMP et s'assurer que le serveur Apache est bien démarré (icône verte)
4. Ouvrir un navigateur et aller sur :

```
http://localhost/Efrei-Website--School-project-/
```

---

## Ce que j'ai fait

- Mise en place d'une structure PHP avec header et footer mutualisés pour éviter de copier-coller le code de navigation sur chaque page
- Carousel d'images fonctionnel avec navigation par boutons et points
- Section "chiffres clés" avec les stats de l'école
- Système d'onglets pour switcher entre les deux campus (Paris / Villejuif)
- Design responsive (ça s'adapte au mobile)
- Plusieurs pages de contenu : cours, équipe, à propos

---

## Auteur

Projet réalisé par Alexis étudiant du département Informatique de l'EFREI Paris.

> *Projet scolaire – Année 2025/2026*
