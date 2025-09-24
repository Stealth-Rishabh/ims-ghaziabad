<?php
// Minimal redirector that strips GA linker params
$target = 'https://erp.ims-ghaziabad.ac.in/admin';
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');
header('Location: ' . $target, true, 302);
exit;


