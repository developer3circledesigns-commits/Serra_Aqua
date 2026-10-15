<?php
/**
 * Shared closing scripts.
 * Requires: $bootstrap_js  - full <script> tag string for the Bootstrap bundle.
 * Optional:  $extra_scripts - array of extra script srcs (e.g. ['assets/js/process.js']).
 *                            Omit to load only Bootstrap plus the site scripts below.
 *            $site_scripts  - set to false to skip animations.js / main.js (legal pages).
 */
$bootstrap_js = $bootstrap_js ?? '';
$site_scripts = $site_scripts ?? true;
?>
<?= $bootstrap_js ?>
<?php foreach ($extra_scripts ?? [] as $sera_extra_script): ?>
    <script src="<?= $sera_extra_script ?>" defer></script>
<?php endforeach; ?>
<?php if ($site_scripts): ?>
    <script src="assets/js/animations.js"></script>
    <script src="assets/js/main.js"></script>
<?php endif; ?>