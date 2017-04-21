<?php
declare(strict_types=1);
$csv = fopen('C:\\users\\michael\\syllables.csv', 'r');
$vowels = fgetcsv($csv);
$results = array();
while (($row = fgetcsv($csv)) !== false) {
    foreach ($row as $i => $content) {
        if ($i !== 0 && $content !== '') {
            $results[] = ucfirst("$vowels[$i]$row[0]");
        }
    }
}
sort($results);
var_export(array_unique($results));
