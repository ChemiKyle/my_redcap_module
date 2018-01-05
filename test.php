<?php
error_reporting(0);

$pbc = new \UniversityOfFlorida\PbcClass\PbcClass();

$result = $pbc->hw();
print($result);

$result = $pbc->query();
print("<pre>" . print_r($result, true) ."</pre>");
