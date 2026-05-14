<?php
$html = file_get_contents('https://windows.php.net/downloads/pecl/releases/mongodb/');
preg_match_all('/href=\"([0-9]+\.[0-9]+\.[0-9]+[^\/]*)\/\"/', $html, $matches);
foreach ($matches[1] as $match) {
    echo $match . "\n";
}
