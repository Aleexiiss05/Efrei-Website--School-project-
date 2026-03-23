var navHamburger = document.querySelector('.nav-hamburger');
var navLinks = document.querySelector('.nav-links');

if (navHamburger && navLinks) {
    navHamburger.onclick = function () {
        var isOpen = navLinks.classList.toggle('mobile-open');
        navHamburger.classList.toggle('open', isOpen);

        if (isOpen) {
            document.body.style.overflow = 'hidden';
        } else {
            document.body.style.overflow = '';
        }
    };

    var links = navLinks.querySelectorAll('a');
    for (var i = 0; i < links.length; i++) {
        links[i].onclick = function () {
            navLinks.classList.remove('mobile-open');
            navHamburger.classList.remove('open');
            document.body.style.overflow = '';
        };
    }
}

var tabParis = document.getElementById('tabParis');
var tabVillejuif = document.getElementById('tabVillejuif');
var contentParis = document.getElementById('contentParis');
var contentVillejuif = document.getElementById('contentVillejuif');

if (tabParis && tabVillejuif && contentParis && contentVillejuif) {
    tabParis.onclick = function () {
        tabParis.classList.add('active');
        tabVillejuif.classList.remove('active');
        contentParis.style.display = 'flex';
        contentVillejuif.style.display = 'none';
    };

    tabVillejuif.onclick = function () {
        tabVillejuif.classList.add('active');
        tabParis.classList.remove('active');
        contentVillejuif.style.display = 'flex';
        contentParis.style.display = 'none';
    };
}
