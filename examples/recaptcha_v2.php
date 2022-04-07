<?php

set_time_limit(610);

require(__DIR__ . '/../src/autoloader.php');

$solver = new \TwoCaptcha\TwoCaptcha('bd4edf72fb928f2b60a4058834e90f53');

try {
    $result = $solver->recaptcha([
        'sitekey' => '6Le-wvkSVVABCPBMRTvw0Q4Muexq1bi0DJwx_mJ-',
        'url'     => 'https://mysite.com/page/with/recaptcha',
    ]);
} catch (\Exception $e) {
    die($e->getMessage());
}

die('Captcha solved: ' . $result->code);
