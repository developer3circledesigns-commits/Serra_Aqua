/* SERRA AQUA RIVAR INDUSTRIES PVT LTD — main.js
   Navbar behaviour, back to top, product enquiry modal, form UX */

(function () {
    'use strict';

    var ENQUIRY_ENDPOINT = 'forms/enquiry-submit.php';
    var PHONE = '+917397265829';
    var EMAIL = 'info@seraaqua.com';
    var reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    function $(selector, scope) {
        return (scope || document).querySelector(selector);
    }

    function $all(selector, scope) {
        return Array.prototype.slice.call((scope || document).querySelectorAll(selector));
    }

    /* ---------------------------------------------------------------
       Navbar shadow after scroll
       --------------------------------------------------------------- */
    var navbar = $('[data-sera-navbar]');

    function onScroll() {
        if (!navbar) {
            return;
        }
        navbar.classList.toggle('is-scrolled', window.scrollY > 12);

        var toTop = $('[data-to-top]');
        if (toTop) {
            toTop.classList.toggle('is-visible', window.scrollY > 500);
        }
    }

    var ticking = false;
    window.addEventListener('scroll', function () {
        if (ticking) {
            return;
        }
        ticking = true;
        window.requestAnimationFrame(function () {
            onScroll();
            ticking = false;
        });
    }, { passive: true });
    onScroll();

    /* ---------------------------------------------------------------
       Close collapsed menu after choosing a link

       Mega-menu triggers are excluded. On mobile they open a panel inside
       the collapsed nav, so treating one as a navigation choice would
       collapse the menu out from under it.
       --------------------------------------------------------------- */
    $all('.sera-navbar .nav-link:not([data-mega-trigger])').forEach(function (link) {
        link.addEventListener('click', function () {
            var collapse = $('#mainNav');
            if (collapse && collapse.classList.contains('show') && window.bootstrap) {
                window.bootstrap.Collapse.getOrCreateInstance(collapse).hide();
            }
        });
    });

    /* ---------------------------------------------------------------
       Mega menu — Process and Products

       Hover intent, keyboard, Escape, outside clicks and the mobile
       accordion. Bootstrap's dropdown is deliberately not used here: its
       Popper writes inline offsets onto the menu, which fight a panel that
       has to span the full viewport width, and hover intent needs a delay
       that a click toggle cannot provide.

       Opening removes the hidden attribute, forces a layout read, then adds
       .is-open so the transition has a start value. Closing drops .is-open
       first and only sets hidden after the transition window, which is what
       stops the panel snapping shut while it is still on screen.
       --------------------------------------------------------------- */
    var megaNav = $('[data-mega-nav]');
    var megaItems = megaNav ? $all('[data-mega]', megaNav) : [];
    var HOVER_OPEN_DELAY = 60;
    var HOVER_CLOSE_DELAY = 220;
    var HIDE_WAIT = 200;

    function megaTrigger(item) {
        return $('[data-mega-trigger]', item);
    }

    function megaPanel(item) {
        return $('[data-mega-panel]', item);
    }

    function isMegaOpen(item) {
        return megaTrigger(item).getAttribute('aria-expanded') === 'true';
    }

    function showMega(item) {
        var panel = megaPanel(item);

        megaItems.forEach(function (other) {
            if (other !== item && isMegaOpen(other)) {
                hideMega(other);
            }
        });

        window.clearTimeout(panel.hideTimer);
        panel.hidden = false;
        void panel.offsetHeight;
        panel.classList.add('is-open');
        megaTrigger(item).setAttribute('aria-expanded', 'true');
    }

    function hideMega(item) {
        var panel = megaPanel(item);

        megaTrigger(item).setAttribute('aria-expanded', 'false');
        panel.classList.remove('is-open');
        item.openedByHover = false;

        window.clearTimeout(panel.hideTimer);
        panel.hideTimer = window.setTimeout(function () {
            if (!panel.classList.contains('is-open')) {
                panel.hidden = true;
            }
        }, HIDE_WAIT);
    }

    function hideAllMega() {
        megaItems.forEach(function (item) {
            window.clearTimeout(item.hoverOpenTimer);
            window.clearTimeout(item.hoverCloseTimer);

            if (isMegaOpen(item)) {
                hideMega(item);
            }
        });
    }

    if (megaItems.length) {
        var canHover = window.matchMedia('(hover: hover) and (pointer: fine)');

        megaItems.forEach(function (item) {
            var trigger = megaTrigger(item);

            trigger.addEventListener('click', function () {
                /* A panel the pointer already opened must not read as "close"
                   the moment the trigger is clicked. Closing by click only
                   applies where hover is unavailable. */
                if (isMegaOpen(item) && item.openedByHover) {
                    return;
                }

                if (isMegaOpen(item)) {
                    hideMega(item);
                } else {
                    showMega(item);
                }
            });

            item.addEventListener('mouseenter', function () {
                if (!canHover.matches) {
                    return;
                }

                window.clearTimeout(item.hoverOpenTimer);
                /* Cancelling the pending close is what keeps a panel open when
                   the pointer travels down off the trigger into the panel:
                   any close started on the way must be abandoned, not left to
                   fire once the panel is open again. */
                window.clearTimeout(item.hoverCloseTimer);
                item.hoverOpenTimer = window.setTimeout(function () {
                    showMega(item);
                    item.openedByHover = true;
                }, HOVER_OPEN_DELAY);
            });

            item.addEventListener('mouseleave', function () {
                if (!canHover.matches) {
                    return;
                }

                window.clearTimeout(item.hoverOpenTimer);
                window.clearTimeout(item.hoverCloseTimer);
                item.hoverCloseTimer = window.setTimeout(function () {
                    if (isMegaOpen(item)) {
                        hideMega(item);
                    }
                }, HOVER_CLOSE_DELAY);
            });

            item.addEventListener('focusin', function () {
                showMega(item);
            });

            item.addEventListener('focusout', function (event) {
                if (!item.contains(event.relatedTarget)) {
                    hideMega(item);
                }
            });
        });

        document.addEventListener('keydown', function (event) {
            if (event.key !== 'Escape') {
                return;
            }

            var open = megaItems.filter(isMegaOpen)[0];

            if (!open) {
                return;
            }

            hideMega(open);
            megaTrigger(open).focus();
        });

        document.addEventListener('click', function (event) {
            if (!megaNav.contains(event.target)) {
                hideAllMega();
            }
        });

        document.addEventListener('focusin', function (event) {
            if (!megaNav.contains(event.target)) {
                hideAllMega();
            }
        });

        var navCollapse = $('#mainNav');

        if (navCollapse) {
            navCollapse.addEventListener('hidden.bs.collapse', hideAllMega);
        }

        /* Only a breakpoint change needs to close panels — reacting to every
           resize would shut them on mobile scroll, where the URL bar resizes
           the viewport. */
        var wideEnough = window.matchMedia('(min-width: 1200px)');

        if (typeof wideEnough.addEventListener === 'function') {
            wideEnough.addEventListener('change', hideAllMega);
        } else if (typeof wideEnough.addListener === 'function') {
            wideEnough.addListener(hideAllMega);
        }
    }

    /* ---------------------------------------------------------------
       Measure the chrome above the hero so the carousel can fill the
       viewport height that is actually left over.

       The top contact bar is static and the navbar is sticky, so both
       count. Skipped while the mobile menu is open, because the expanded
       nav would otherwise inflate the measurement and shrink the hero.
       --------------------------------------------------------------- */
    var topContactBar = $('.top-contact-bar');
    var mainNav = $('#mainNav');

    function measureChrome() {
        if (mainNav && mainNav.classList.contains('show')) {
            return;
        }

        var height = (topContactBar ? topContactBar.offsetHeight : 0) +
            (navbar ? navbar.offsetHeight : 0);

        document.documentElement.style.setProperty('--chrome-h', height + 'px');
    }

    var chromeTicking = false;

    function scheduleChrome() {
        if (chromeTicking) {
            return;
        }

        chromeTicking = true;
        window.requestAnimationFrame(function () {
            measureChrome();
            chromeTicking = false;
        });
    }

    measureChrome();
    window.addEventListener('load', measureChrome);
    window.addEventListener('resize', scheduleChrome);

    if (window.ResizeObserver) {
        var chromeObserver = new ResizeObserver(scheduleChrome);

        if (topContactBar) {
            chromeObserver.observe(topContactBar);
        }

        if (navbar) {
            chromeObserver.observe(navbar);
        }
    }

    /* ---------------------------------------------------------------
       Hero carousel — autoplay, manual controls and a pause toggle.

       Order matters: data-bs-ride="carousel" starts the cycle inside the
       Bootstrap Carousel constructor, so the instance has to exist before
       we pause it. The global prefers-reduced-motion rule only shortens
       transitions, it does not stop JS-driven autoplay, so leaving the
       cycle running would be a WCAG 2.2.2 failure for those users.
       Manual prev / next / indicator clicks still work when paused.
       --------------------------------------------------------------- */
    var heroCarousel = $('[data-hero-carousel]');

    if (heroCarousel && window.bootstrap) {
        var carousel = window.bootstrap.Carousel.getOrCreateInstance(heroCarousel);
        var pauseToggle = $('[data-carousel-pause]', heroCarousel);
        var slideVideos = Array.prototype.slice.call(heroCarousel.querySelectorAll('.hero-slide-bg'));

        /* Videos carry data-src rather than src so nothing is fetched until a
           slide is actually shown; the poster paints in the meantime. Only the
           active slide is left playing — four simultaneous decoders is a real
           cost on low-power devices. reduceMotion keeps the poster only. */
        function playSlideVideo(video) {
            if (!video) {
                return;
            }

            if (!video.getAttribute('src')) {
                video.setAttribute('src', video.getAttribute('data-src'));
                video.load();
            }

            if (reduceMotion) {
                return;
            }

            var attempt = video.play();

            if (attempt && typeof attempt.catch === 'function') {
                attempt.catch(function () {
                    /* Autoplay refused: the poster stays visible, which is an
                       acceptable fallback and must not surface as an error. */
                });
            }
        }

        function syncSlideVideos() {
            var activeItem = heroCarousel.querySelector('.carousel-item.active');

            slideVideos.forEach(function (video) {
                var isActive = !!activeItem && activeItem.contains(video);

                if (isActive) {
                    playSlideVideo(video);
                } else {
                    video.pause();
                }
            });
        }

        heroCarousel.addEventListener('slid.bs.carousel', syncSlideVideos);

        /* syncSlideVideos must also run once up front: with the cycle paused for
           reduceMotion no slid event ever fires, and slide 1 would otherwise
           never get its src. */
        syncSlideVideos();

        function setPausedState(paused) {
            if (!pauseToggle) {
                return;
            }

            pauseToggle.setAttribute('aria-pressed', paused ? 'true' : 'false');
            pauseToggle.setAttribute('aria-label', paused ? 'Play slideshow' : 'Pause slideshow');

            var icon = pauseToggle.querySelector('i');

            if (icon) {
                icon.className = paused ? 'bi bi-play-fill' : 'bi bi-pause-fill';
            }
        }

        if (reduceMotion) {
            carousel.pause();
            setPausedState(true);
        } else {
            carousel.cycle();
            setPausedState(false);
        }

        if (pauseToggle) {
            pauseToggle.addEventListener('click', function () {
                if (pauseToggle.getAttribute('aria-pressed') === 'true') {
                    carousel.cycle();
                    setPausedState(false);
                } else {
                    carousel.pause();
                    setPausedState(true);
                }
            });
        }
    }

    /* ---------------------------------------------------------------
       Back to top
       --------------------------------------------------------------- */
    var toTop = $('[data-to-top]');

    if (toTop) {
        toTop.addEventListener('click', function () {
            window.scrollTo({
                top: 0,
                behavior: reduceMotion ? 'auto' : 'smooth'
            });
        });
    }

    /* ---------------------------------------------------------------
       Pre-fill tel / mailto / whatsapp links from config
       --------------------------------------------------------------- */
    $all('[data-tel-primary]').forEach(function (el) {
        el.setAttribute('href', 'tel:' + PHONE);
    });
    $all('[data-mail]').forEach(function (el) {
        el.setAttribute('href', 'mailto:' + EMAIL);
    });

    /* ---------------------------------------------------------------
       Product enquiry modal
       --------------------------------------------------------------- */
    var modalEl = $('[data-enquiry-modal]');
    var productField = modalEl ? $('[name="product"]', modalEl) : null;

    $all('[data-enquire-product]').forEach(function (trigger) {
        trigger.addEventListener('click', function (event) {
            event.preventDefault();
            if (!modalEl || !window.bootstrap) {
                return;
            }
            if (productField) {
                productField.value = trigger.getAttribute('data-enquire-product') || '';
            }
            window.bootstrap.Modal.getOrCreateInstance(modalEl).show();
        });
    });

    /* ---------------------------------------------------------------
       Toggle custom product input when "Custom" is selected
       --------------------------------------------------------------- */
    $all('select[name="product"]').forEach(function (select) {
        select.addEventListener('change', function () {
            var customInput = select.parentNode.querySelector('.product-custom-input');
            if (!customInput) {
                return;
            }
            if (select.value === 'Custom') {
                customInput.style.display = 'block';
                customInput.focus();
            } else {
                customInput.style.display = 'none';
                customInput.value = '';
            }
        });
    });

    /* ---------------------------------------------------------------
       Generic enquiry / quote AJAX submit
       --------------------------------------------------------------- */
    function setAlert(container, type, message) {
        if (!container) {
            return;
        }
        var alert = document.createElement('div');
        alert.className = 'alert alert-' + type;
        alert.setAttribute('role', 'status');
        alert.textContent = message;
        container.innerHTML = '';
        container.appendChild(alert);
    }

    function validateField(field) {
        var value = (field.value || '').trim();
        var valid = true;

        if (field.hasAttribute('required') && value === '') {
            valid = false;
        } else if (field.type === 'email' && value !== '') {
            valid = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(value);
        } else if (field.type === 'tel' && value !== '') {
            valid = /^[0-9+\-\s()]{8,18}$/.test(value);
        }

        field.classList.toggle('is-invalid', !valid);
        return valid;
    }

    $all('form[data-ajax-form]').forEach(function (form) {
        var alertScope = form.closest('.modal-body, section, .container') || document;
        var alertBox = $('[data-form-alert]', alertScope);
        var submit = $('[type="submit"]', form);
        var submitLabel = submit ? submit.innerHTML : '';

        $all('input, select, textarea', form).forEach(function (field) {
            field.addEventListener('input', function () {
                field.classList.remove('is-invalid');
            });
        });

        form.addEventListener('submit', function (event) {
            event.preventDefault();

            var fields = $all('input, select, textarea', form).filter(function (field) {
                return field.type !== 'hidden' && field.type !== 'submit';
            });

            var firstInvalid = null;
            fields.forEach(function (field) {
                if (!validateField(field) && !firstInvalid) {
                    firstInvalid = field;
                }
            });

            if (firstInvalid) {
                firstInvalid.focus();
                setAlert(alertBox, 'danger', 'Please check the highlighted fields and try again.');
                return;
            }

            submit.disabled = true;
            if (submit) {
                submit.innerHTML = '<span class="spinner-border spinner-border-sm" aria-hidden="true"></span> Submitting...';
            }

            var payload = new FormData(form);

            fetch(form.getAttribute('action') || ENQUIRY_ENDPOINT, {
                method: 'POST',
                body: payload,
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
                .then(function (response) {
                    return response.json().catch(function () {
                        return { success: false, message: 'Unable to submit your request. Please try again.' };
                    });
                })
                .then(function (data) {
                    if (data && data.success) {
                        setAlert(alertBox, 'success', data.message || 'Thank you. Your enquiry has been received. Our team will contact you shortly.');
                        form.reset();
                        if (modalEl && window.bootstrap) {
                            window.bootstrap.Modal.getOrCreateInstance(modalEl).hide();
                        }
                    } else {
                        setAlert(alertBox, 'danger', (data && data.message) || 'Unable to submit your request. Please try again.');
                    }
                })
                .catch(function () {
                    setAlert(alertBox, 'danger', 'Unable to submit your request. Please try again, or call us on ' + PHONE + '.');
                })
                .finally(function () {
                    submit.disabled = false;
                    if (submit) {
                        submit.innerHTML = submitLabel;
                    }
                });
        });
    });
})();