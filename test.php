<?php
error_reporting(0);

$pbc = new \UniversityOfFlorida\PbcClass\PbcClass();

$result = $pbc->hw();
print($result);

$result = $pbc->client->request('getProtocol', array('protocolNo' => 'OCR20002'));
print($pbc->prettify_object($result));
