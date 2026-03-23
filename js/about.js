(function () {
    'use strict';

    var questions = document.querySelectorAll('.faq-question');

    if (!questions.length) return;

    questions.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var isOpen = btn.getAttribute('aria-expanded') === 'true';
            var answer = btn.nextElementSibling;

            questions.forEach(function (otherBtn) {
                if (otherBtn !== btn) {
                    otherBtn.setAttribute('aria-expanded', 'false');
                    var otherAnswer = otherBtn.nextElementSibling;
                    if (otherAnswer) otherAnswer.classList.remove('open');
                }
            });

            if (isOpen) {
                btn.setAttribute('aria-expanded', 'false');
                answer.classList.remove('open');
            } else {
                btn.setAttribute('aria-expanded', 'true');
                answer.classList.add('open');
            }
        });
    });
}());
