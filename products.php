<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Products | Serra Aqua Rivar Industries</title>
    <meta name="description" content="Packaged drinking water products from Serra Aqua Rivar Industries — 20 L, 2 L, 1 L, 500 ml and 250 ml pack sizes for homes, offices and institutions.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#004F4A">
    <link rel="canonical" href="https://seraaqua.com/products.php">
    <?php include __DIR__ . '/partials/head-common.php'; ?>
    <?php include __DIR__ . '/partials/head-end.php'; ?>
<body>
    <?php include __DIR__ . '/partials/topbar.php'; ?>
    <?php $nav_current = 'products'; ?>
    <?php include __DIR__ . '/partials/nav.php'; ?>
    <main id="main-content">
        <section class="section section--tint-1" aria-labelledby="products-hero-heading">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="label">Our Products</p>
                    <h1 id="products-hero-heading">Packaged Drinking Water Solutions</h1>
                    <p>Choose from our five pack sizes — purified, balanced and hygienically sealed.</p>
                </div>
                <div class="row g-4 align-items-stretch">
                    <div class="col-md-6 col-lg-4" data-reveal><article class="feature-card h-100"><i class="bi bi-cup" aria-hidden="true"></i><h3>20 L Water Jar</h3><p>Everyday home and office supply on scheduled or bulk requirements.</p><a class="mega-cta-link" href="20l-water.php">View details →</a></article></div>
                    <div class="col-md-6 col-lg-4" data-reveal><article class="feature-card h-100"><i class="bi bi-cup-straw" aria-hidden="true"></i><h3>2 L Water Bottle</h3><p>Family-sized bottle for daily table use.</p><a class="mega-cta-link" href="2l-water.php">View details →</a></article></div>
                    <div class="col-md-6 col-lg-4" data-reveal><article class="feature-card h-100"><i class="bi bi-cup-hot" aria-hidden="true"></i><h3>1 L Water Bottle</h3><p>Standard office and retail bottle.</p><a class="mega-cta-link" href="1l-water.php">View details →</a></article></div>
                    <div class="col-md-6 col-lg-4" data-reveal><article class="feature-card h-100"><i class="bi bi-cup" aria-hidden="true"></i><h3>500 ml Water Bottle</h3><p>Meeting-table and visitor refreshment size.</p><a class="mega-cta-link" href="500ml-water.php">View details →</a></article></div>
                    <div class="col-md-6 col-lg-4" data-reveal><article class="feature-card h-100"><i class="bi bi-cup-hot" aria-hidden="true"></i><h3>250 ml Water Bottle</h3><p>Individual serving size for events and travel.</p><a class="mega-cta-link" href="250ml-water.php">View details →</a></article></div>
                </div>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>
    <?php
    $enquiry_source  = 'products-enquiry-modal';
    $enquiry_heading = 'Request Enquiry';
    $enquiry_product = '';
    ?>
    <?php include __DIR__ . '/partials/enquiry-modal.php'; ?>
    <?php $cta_mode = 'modal'; ?>
    <?php include __DIR__ . '/partials/mobile-cta.php'; ?>
    <?php $to_top_class = ''; ?>
    <?php include __DIR__ . '/partials/to-top.php'; ?>
    <?php
    $bootstrap_js = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>';
    ?>
    <?php include __DIR__ . '/partials/scripts.php'; ?>
</body>
</html>



