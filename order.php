<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Order / Enquiry | Serra Aqua Rivar Industries</title>
    <meta name="description" content="Place an enquiry or request a quote for packaged drinking water from Serra Aqua Rivar Industries.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#004F4A">
    <link rel="canonical" href="https://seraaqua.com/order.php">
    <?php include __DIR__ . '/partials/head-common.php'; ?>
    <?php include __DIR__ . '/partials/head-end.php'; ?>
<body>
    <?php include __DIR__ . '/partials/topbar.php'; ?>
    <?php $nav_current = ''; ?>
    <?php include __DIR__ . '/partials/nav.php'; ?>
    <main id="main-content">
        <section class="section section--tint-1" aria-labelledby="order-hero-heading">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="label">Order / Enquiry</p>
                    <h1 id="order-hero-heading">Request Your Supply</h1>
                    <p>Complete the form below and our team will confirm availability, pricing, and a delivery plan.</p>
                </div>
                <form action="forms/enquiry-submit.php" method="post" data-ajax-form novalidate>
                    <input type="hidden" name="source" value="order-page">
                    <div class="row g-3">
                        <div class="col-md-6"><label class="form-label">Full Name *</label><input type="text" class="form-control" name="name" required></div>
                        <div class="col-md-6"><label class="form-label">Phone *</label><input type="tel" class="form-control" name="phone" required></div>
                        <div class="col-md-6"><label class="form-label">Email *</label><input type="email" class="form-control" name="email" required></div>
                        <div class="col-md-6"><label class="form-label">Company Name</label><input type="text" class="form-control" name="company"></div>
                        <div class="col-md-6"><label class="form-label">Product</label><select class="form-select" name="product">
                        <option value="">Select product</option><option value="20 L Water Jar">20 L Water Jar</option><option value="2 L Water Bottle">2 L Water Bottle</option><option value="1 L Water Bottle">1 L Water Bottle</option><option value="500 ml Water Bottle">500 ml Water Bottle</option><option value="250 ml Water Bottle">250 ml Water Bottle</option>
                        <option value="Custom">Custom</option>
                    </select>
                    <input type="text" class="form-control mt-2 product-custom-input" name="product_custom" placeholder="Enter custom product" style="display:none;"></div>
                        <div class="col-md-6"><label class="form-label">Required Quantity</label><input type="text" class="form-control" name="quantity" placeholder="e.g. 10 jars / 100 bottles"></div>
                        <div class="col-12"><label class="form-label">Preferred Delivery Location</label><input type="text" class="form-control" name="location"></div>
                        <div class="col-12"><label class="form-label">Message</label><textarea class="form-control" name="message" rows="4"></textarea></div>
                    </div>
                    <div class="d-flex flex-wrap justify-content-end gap-3 mt-4">
                        <button type="submit" class="btn btn-primary">Send Enquiry</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>
    <?php $cta_mode = 'link'; ?>
    <?php include __DIR__ . '/partials/mobile-cta.php'; ?>
    <?php $to_top_class = ''; ?>
    <?php include __DIR__ . '/partials/to-top.php'; ?>
    <?php
    $bootstrap_js = '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>';
    ?>
    <?php include __DIR__ . '/partials/scripts.php'; ?>
</body>
</html>



