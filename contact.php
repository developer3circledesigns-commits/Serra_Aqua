<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <title>Contact | Serra Aqua Rivar Industries</title>
    <meta name="description" content="Contact Serra Aqua Rivar Industries for packaged drinking water enquiries, corporate supply, and delivery scheduling.">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#004F4A">
    <link rel="canonical" href="https://seraaqua.com/contact.php">
    <?php include __DIR__ . '/partials/head-common.php'; ?>
    <?php include __DIR__ . '/partials/head-end.php'; ?>
<body>
    <?php include __DIR__ . '/partials/topbar.php'; ?>
    <?php $nav_current = 'contact'; ?>
    <?php include __DIR__ . '/partials/nav.php'; ?>
    <main id="main-content">
        <section class="section section--tint-1" aria-labelledby="contact-hero-heading">
            <div class="container">
                <div class="section-head" data-reveal>
                    <p class="label">Contact</p>
                    <h1 id="contact-hero-heading">Get In Touch</h1>
                    <p>Reach us for product enquiries, corporate supply plans, and delivery scheduling.</p>
                </div>
            </div>
        </section>
        <section class="section" aria-labelledby="contact-info-heading">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5" data-reveal>
                        <h2 id="contact-info-heading">Contact Details</h2>
                        <ul class="spec-list">
                            <li><span class="spec-key">Phone</span><span class="spec-value">+91 7397265829</span></li>
                            <li><span class="spec-key">Email</span><span class="spec-value">info@seraaqua.com</span></li>
                            <li><span class="spec-key">WhatsApp</span><span class="spec-value">+91 7397265829</span></li>
                            <li><span class="spec-key">Hours</span><span class="spec-value">Mon–Sat, 9 AM–7 PM</span></li>
                        </ul>
                    </div>
                    <div class="col-lg-7" data-reveal>
                        <h2>Send an Enquiry</h2>
                        <form action="forms/contact-submit.php" method="post" data-ajax-form novalidate>
                            <div class="row g-3">
                                <div class="col-md-6"><label class="form-label">Full Name *</label><input type="text" class="form-control" name="name" required></div>
                                <div class="col-md-6"><label class="form-label">Email *</label><input type="email" class="form-control" name="email" required></div>
                                <div class="col-md-6"><label class="form-label">Phone *</label><input type="tel" class="form-control" name="phone" required></div>
                                <div class="col-md-6"><label class="form-label">Subject *</label><input type="text" class="form-control" name="subject" required></div>
                                <div class="col-12"><label class="form-label">Message *</label><textarea class="form-control" name="message" rows="5" required></textarea></div>
                            </div>
                            <div class="d-flex flex-wrap justify-content-end gap-3 mt-4">
                                <button type="submit" class="btn btn-primary" style="background-color:#00295d;">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include __DIR__ . '/partials/footer.php'; ?>
    <?php
    $enquiry_source  = 'contact-enquiry-modal';
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



