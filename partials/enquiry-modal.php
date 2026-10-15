<?php
/**
 * Shared enquiry modal.
 * Requires: $enquiry_source (string), $enquiry_heading (string), $enquiry_product (string, '' = none).
 */
$serra_products = [
    '20 L Water Jar' => '20 L Water Jar',
    '2 L Water Bottle' => '2 L Water Bottle',
    '1 L Water Bottle' => '1 L Water Bottle',
    '500 ml Water Bottle' => '500 ml Water Bottle',
    '250 ml Water Bottle' => '250 ml Water Bottle',
];
?>
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalTitle" aria-hidden="true" data-enquiry-modal>
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header"><h2 class="modal-title" id="enquiryModalTitle"><?= $enquiry_heading ?></h2><button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button></div>
                <div class="modal-body">
                    <div data-form-alert class="mb-3"></div>
                    <form action="forms/enquiry-submit.php" method="post" data-ajax-form novalidate>
                        <input type="hidden" name="source" value="<?= $enquiry_source ?>">
                        <div class="row g-3">
                            <div class="col-md-6"><label class="form-label" for="enqName">Full Name *</label><input type="text" class="form-control" id="enqName" name="name" required autocomplete="name"><div class="invalid-feedback">Please enter your full name.</div></div>
                            <div class="col-md-6"><label class="form-label" for="enqPhone">Phone *</label><input type="tel" class="form-control" id="enqPhone" name="phone" required autocomplete="tel"><div class="invalid-feedback">Please enter a valid phone number.</div></div>
                            <div class="col-md-6"><label class="form-label" for="enqEmail">Email *</label><input type="email" class="form-control" id="enqEmail" name="email" required autocomplete="email"><div class="invalid-feedback">Please enter a valid email.</div></div>
                            <div class="col-md-6"><label class="form-label" for="enqCompany">Company Name</label><input type="text" class="form-control" id="enqCompany" name="company" autocomplete="organization"></div>
                            <div class="col-md-6"><label class="form-label" for="enqProduct">Product</label>
                                <select class="form-select" name="product" id="enqProduct">
                                    <option value="">Select product</option>
<?php foreach ($serra_products as $serra_p): ?>
                                    <option value="<?= $serra_p ?>"<?= $serra_p === $enquiry_product ? ' selected' : '' ?>><?= $serra_p ?></option>
<?php endforeach; ?>
                                    <option value="Custom">Custom</option>
                                </select>
                                <input type="text" class="form-control mt-2 product-custom-input" name="product_custom" placeholder="Enter custom product" style="display:none;">
                            </div>
                            <div class="col-md-6"><label class="form-label" for="enqQty">Required Quantity</label><input type="text" class="form-control" id="enqQty" name="quantity" placeholder="e.g. 10 jars / 100 bottles"></div>
                            <div class="col-12"><label class="form-label" for="enqLoc">Preferred Delivery Location</label><input type="text" class="form-control" id="enqLoc" name="location"></div>
                            <div class="col-12"><label class="form-label" for="enqMsg">Message</label><textarea class="form-control" id="enqMsg" name="message" rows="4" placeholder="Any specific requirements?"></textarea></div>
                        </div>
                        <div class="d-flex flex-wrap justify-content-end gap-3 mt-4">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-primary">Send Enquiry</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
