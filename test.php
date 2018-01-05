<?php
error_reporting(0);

$pbc = new \UniversityOfFlorida\PbcClass\PbcClass();

$result = $pbc->hw();
print($result);

// $result = $pbc->client->request('getProtocol', array('protocolNo' => 'OCR20002'));
// print($pbc->prettify_object($result));

// $result = $pbc->client->request('getProtocolSubjects', array('ProtocolNo' => 'OCR20002'));
// print($pbc->prettify_object($result));

// createProtocol
$protocolNo = 'OCR21902';
$input = array(
    'ProtocolImportData' => array(
        'ProtocolNo' => $protocolNo,
        'IrbNo' => '',
        'Library' => 'Academic Health Center',
        'Department' => 'MD-CTSI',
        'OrganizationalUnit' => 'Academic Health Center',
        'Title' => 'Send Rx',
        'ShortTitle' => 'Send Rx',
        'ProtocolType' => 'Other',
        'EstimatedCompletionDate' => '2018-07-01',
    ),
);

$input = json_decode(json_encode($input));

print("<p>createProtocol</p>");
$result = $pbc->client->request('createProtocol', $input);
print($pbc->prettify_object($result));

$input = json_decode(json_encode(array('protocolNo' => $protocolNo)));

print("<p>getProtocol</p>");
$result = $pbc->client->request('getProtocol', $input);
print($pbc->prettify_object($result));
