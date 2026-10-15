<?php
/**
 * Shared masthead (top-level nav + both mega panels).
 * Requires: $nav_current - '' | 'index' | 'about' | 'process' | 'products' | 'services' | 'corporate' | 'contact'.
 */
$nav_current = $nav_current ?? '';
$sera_active = static fn(string $key): string => $nav_current === $key ? ' active' : '';
$sera_current = static fn(string $key): string => $nav_current === $key ? ' aria-current="page"' : '';
?>
    <nav class="navbar navbar-expand-xl sera-navbar sticky-top" data-sera-navbar aria-label="Main navigation">
        <div class="container sera-navbar-inner">
            <a class="navbar-brand" href="index.php">
                <img class="brand-logo" src="./assets/images/logo.png" alt="Serra Aqua - Rivar Industries" width="480" height="134" decoding="async">
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation menu">
                <i class="bi bi-list" aria-hidden="true"></i>
            </button>

            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav align-items-xl-center" data-mega-nav>

                    <li class="nav-item">
                        <a class="nav-link<?= $sera_active('index') ?> text-white"<?= $sera_current('index') ?> href="index.php">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link<?= $sera_active('about') ?> text-white"<?= $sera_current('about') ?> href="about.php">About</a>
                    </li>

                    <li class="nav-item nav-item--panel" data-mega>
                        <button class="nav-link nav-link--trigger<?= $sera_active('process') ?> text-white" type="button" data-mega-trigger
                            aria-expanded="false" aria-controls="megaProcess"<?= $sera_current('process') ?>>
                            Process
                            <i class="bi bi-chevron-down nav-caret" aria-hidden="true"></i>
                        </button>

                        <div class="mega-panel" id="megaProcess" data-mega-panel hidden>
                            <div class="container mega-panel-inner">
                                <div class="mega-grid">
                                    <div class="mega-intro">
                                        <p class="label">Purification</p>
                                        <h2 class="mega-title">Ten controlled stages</h2>
                                        <p class="mega-copy">Source water is treated as a controlled sequence rather
                                            than a single filter step. Each stage exists to protect the one after it.</p>
                                        <a class="mega-cta-link" href="process.php">
                                            Explore the full process
                                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    <div class="mega-col">
                                        <p class="mega-col-title">Pre-treatment</p>
                                        <ul class="mega-list">
                                            <li>
                                                <a class="mega-link" href="process.php#source-water-treatment">
                                                    <span class="mega-num">01</span>
                                                    <span class="mega-link-title">Source Water Treatment</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link" href="process.php#sand-filtration">
                                                    <span class="mega-num">02</span>
                                                    <span class="mega-link-title">Sand Filtration</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link" href="process.php#activated-carbon-filtration">
                                                    <span class="mega-num">03</span>
                                                    <span class="mega-link-title">Activated Carbon Filtration</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link" href="process.php#micron-filtration">
                                                    <span class="mega-num">04</span>
                                                    <span class="mega-link-title">Micron Filtration</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mega-col">
                                        <p class="mega-col-title">Core purification</p>
                                        <ul class="mega-list">
                                            <li>
                                                <a class="mega-link" href="process.php#reverse-osmosis">
                                                    <span class="mega-num">05</span>
                                                    <span class="mega-link-title">Reverse Osmosis</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link" href="process.php#uv-sterilization">
                                                    <span class="mega-num">06</span>
                                                    <span class="mega-link-title">UV Sterilization</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link" href="process.php#ozonation">
                                                    <span class="mega-num">07</span>
                                                    <span class="mega-link-title">Ozonation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mega-col">
                                        <p class="mega-col-title">Finishing &amp; packing</p>
                                        <ul class="mega-list">
                                            <li>
                                                <a class="mega-link" href="process.php#mineral-tds-ph-balancing">
                                                    <span class="mega-num">08</span>
                                                    <span class="mega-link-title">Mineral / TDS / pH Balancing</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link" href="process.php#hygienic-storage">
                                                    <span class="mega-num">09</span>
                                                    <span class="mega-link-title">Hygienic Storage</span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link" href="process.php#automated-bottling-sealing">
                                                    <span class="mega-num">10</span>
                                                    <span class="mega-link-title">Automated Bottling &amp; Sealing</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mega-foot">
                                    <p class="mega-foot-text">Filtration staged to protect downstream equipment, with
                                        recorded batch checks before packs reach storage.</p>
                                    <a class="mega-foot-link" href="corporate-water-supply.php">
                                        Corporate &amp; bulk supply
                                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item nav-item--panel" data-mega>
                        <button class="nav-link nav-link--trigger<?= $sera_active('products') ?> text-white" type="button" data-mega-trigger
                            aria-expanded="false" aria-controls="megaProducts"<?= $sera_current('products') ?>>
                            Products
                            <i class="bi bi-chevron-down nav-caret" aria-hidden="true"></i>
                        </button>

                        <div class="mega-panel" id="megaProducts" data-mega-panel hidden>
                            <div class="container mega-panel-inner">
                                <div class="mega-grid">
                                    <div class="mega-intro">
                                        <p class="label">Pack Sizes</p>
                                        <h2 class="mega-title">Five pack sizes. One purified source.</h2>
                                        <p class="mega-copy">From a 20 litre jar for the home to a 250 ml bottle for
                                            a meeting table, packed to the same standard every time.</p>
                                        <a class="mega-cta-link" href="products.php">
                                            View all products
                                            <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>

                                    <div class="mega-col">
                                        <p class="mega-col-title">Jar &amp; dispenser</p>
                                        <ul class="mega-list">
                                            <li>
                                                <a class="mega-link mega-link--pack"
                                                    href="20l-water.php">
                                                    <span class="mega-pack">20<span class="mega-pack-unit">L</span></span>
                                                    <span class="mega-link-body">
                                                        <span class="mega-link-title">Water Jar</span>
                                                        <span class="mega-link-note">Home &amp; office supply</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mega-col">
                                        <p class="mega-col-title">Everyday bottles</p>
                                        <ul class="mega-list">
                                            <li>
                                                <a class="mega-link mega-link--pack"
                                                    href="2l-water.php">
                                                    <span class="mega-pack">2<span class="mega-pack-unit">L</span></span>
                                                    <span class="mega-link-body">
                                                        <span class="mega-link-title">Water Bottle</span>
                                                        <span class="mega-link-note">Family table use</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link mega-link--pack"
                                                    href="1l-water.php">
                                                    <span class="mega-pack">1<span class="mega-pack-unit">L</span></span>
                                                    <span class="mega-link-body">
                                                        <span class="mega-link-title">Water Bottle</span>
                                                        <span class="mega-link-note">Standard office &amp; retail</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="mega-col">
                                        <p class="mega-col-title">Meeting &amp; individual</p>
                                        <ul class="mega-list">
                                            <li>
                                                <a class="mega-link mega-link--pack"
                                                    href="500ml-water.php">
                                                    <span class="mega-pack">500<span class="mega-pack-unit">ml</span></span>
                                                    <span class="mega-link-body">
                                                        <span class="mega-link-title">Water Bottle</span>
                                                        <span class="mega-link-note">Meeting table &amp; visitors</span>
                                                    </span>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="mega-link mega-link--pack"
                                                    href="250ml-water.php">
                                                    <span class="mega-pack">250<span class="mega-pack-unit">ml</span></span>
                                                    <span class="mega-link-body">
                                                        <span class="mega-link-title">Water Bottle</span>
                                                        <span class="mega-link-note">Servings, events &amp; travel</span>
                                                    </span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="mega-foot">
                                    <p class="mega-foot-text">Not sure which size fits your requirement? Share the pack
                                        size, quantity and frequency and we will confirm a schedule.</p>
                                    <a class="btn btn-primary btn-sm" href="order.php">
                                        Request a quote
                                        <i class="bi bi-arrow-right" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link<?= $sera_active('services') ?> text-white"<?= $sera_current('services') ?> href="services.php">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= $sera_active('corporate') ?> text-white"<?= $sera_current('corporate') ?> href="corporate-water-supply.php">Corporate Supply</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link<?= $sera_active('contact') ?> text-white"<?= $sera_current('contact') ?> href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item nav-item--cta">
                        <a class="btn btn-primary" href="order.php">Enquire Now</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
