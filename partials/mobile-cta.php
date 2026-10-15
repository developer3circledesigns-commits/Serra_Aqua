    <div class="mobile-cta-bar d-md-none" role="region" aria-label="Quick contact">
        <a class="btn btn-outline-primary" data-tel-primary href="#"><i class="bi bi-telephone" aria-hidden="true"></i> Call</a>
        <a class="btn btn-outline-primary" href="https://wa.me/9197397265829" target="_blank" rel="noopener"><i class="bi bi-whatsapp" aria-hidden="true"></i> WhatsApp</a>
        <?php if ($cta_mode === 'link'): ?>
        <a class="btn btn-primary" href="order.php"><i class="bi bi-send" aria-hidden="true"></i> Enquire</a>
        <?php else: ?>
        <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#enquiryModal"><i class="bi bi-chat-left-text" aria-hidden="true"></i> Enquire</button>
        <?php endif; ?>
    </div>
