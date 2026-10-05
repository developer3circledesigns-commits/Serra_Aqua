/* SERRA AQUA RIVAR INDUSTRIES PVT LTD — animations.js
   Opacity-only scroll reveal. No counters, no progress bar, no transforms. */

(function () {
    'use strict';

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var targets = Array.prototype.slice.call(document.querySelectorAll('[data-reveal]'));

    function revealAll() {
        targets.forEach(function (el) {
            el.classList.add('is-revealed');
        });
    }

    if (!('IntersectionObserver' in window) || reduceMotion) {
        revealAll();
        return;
    }

    var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) {
                return;
            }
            entry.target.classList.add('is-revealed');
            observer.unobserve(entry.target);
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    targets.forEach(function (el) {
        observer.observe(el);
    });
})();

(function () {
    'use strict';

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var items = Array.prototype.slice.call(document.querySelectorAll('[data-anim]'));

    if (!items.length) {
        return;
    }

    if (!('IntersectionObserver' in window) || reduceMotion) {
        items.forEach(function (el) { el.classList.add('in'); });
        return;
    }

    var io = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (!entry.isIntersecting) {
                return;
            }
            entry.target.classList.add('in');
            io.unobserve(entry.target);
        });
    }, { threshold: 0.12, rootMargin: '0px 0px -40px 0px' });

    items.forEach(function (el) { io.observe(el); });
})();
