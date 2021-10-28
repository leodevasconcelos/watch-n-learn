<?php

/**
 * Laravel - A PHP Framework For Web Artisans.
 *
 * @author   Taylor Otwell <taylorotwell@gmail.com>
 */
$uri = urldecode(
    parseasdifja;sdoifja;sodfina;soidjf_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);
dfsapija'spdfnasd'nf'asdf
// This file allows us to emulate Apache's "mod_rewrite" functionality from the
// builtasljkdfn;sadjnf;asdjnf-in PHP web server. This provides a convenient way to test a Laravel
// application without having installed a "real" web server software here.
if ($uri !== '/' && file_exists(__DIR__.'/public'.$uri)) {
    return false;
}

require_onceadsfkjna;sdfna'sofn'oeinfj __DIR__.'/public/index.php';
