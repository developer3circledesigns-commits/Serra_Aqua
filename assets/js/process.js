/* SERRA AQUA RIVAR INDUSTRIES PVT LTD — process.js
   Stage reveal staggering, video play/pause on view, rail progress. */

(function () {
    'use strict';

    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    var stages = Array.prototype.slice.call(document.querySelectorAll('.stage'));
    var videos = Array.prototype.slice.call(document.querySelectorAll('.stage video, .media video'));

    function activateVideo(video) {
        if (reduceMotion) {
            return;
        }
        if (!video.getAttribute('src') && video.hasAttribute('data-src')) {
            video.setAttribute('src', video.getAttribute('data-src'));
        }
        var playPromise = video.play();
        if (playPromise !== undefined) {
            playPromise.catch(function () { /* autoplay restrictions */ });
        }
    }

    function deactivateVideo(video) {
        if (video && !video.paused) {
            video.pause();
        }
    }

    if (!('IntersectionObserver' in window) || reduceMotion) {
        videos.forEach(function (video) {
            if (!video.getAttribute('src') && video.hasAttribute('data-src')) {
                video.setAttribute('src', video.getAttribute('data-src'));
            }
        });
        return;
    }

    var stageObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            var stage = entry.target;
            var video = stage.querySelector('video');
            if (entry.isIntersecting) {
                if (video) { activateVideo(video); }
            } else if (video) {
                deactivateVideo(video);
            }
        });
    }, { threshold: 0.25, rootMargin: '0px 0px -10% 0px' });

    stages.forEach(function (stage) {
        stageObserver.observe(stage);
    });

    /* Hero figure video: start when visible */
    var heroVideos = Array.prototype.slice.call(document.querySelectorAll('main .media video'));
    var heroObserver = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
            if (entry.isIntersecting) {
                activateVideo(entry.target);
                heroObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 0.2 });

    heroVideos.forEach(function (video) {
        if (!video.closest('.stage')) {
            heroObserver.observe(video);
        }
    });
})();
