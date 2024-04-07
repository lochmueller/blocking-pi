<?php

$currentDir = dirname(__FILE__);


$piHole = '';
foreach (new DirectoryIterator($currentDir . '/Apps') as $fileInfo) {
    if ($fileInfo->isDot()) continue;

    $piHole .= "# [" . $fileInfo->getBasename() . "]";

    $content = file_get_contents($currentDir . '/Apps/' . $fileInfo->getFilename());
    $domains = explode("\n", $content);
    foreach ($domains as $domain) {
        if (empty($domain)) {
            continue;
        }
        $piHole .= "\n0.0.0.0 " . $domain;
    }
    $piHole .= "\n\n";
}

file_put_contents($currentDir . '/Blocklist/PiHole.txt', $piHole);