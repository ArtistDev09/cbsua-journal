<?php
require 'bootstrap.php';
$submission = Services::get('submission')->get(9);
if (!$submission) {
    echo "NO_SUBMISSION\n";
    exit;
}
echo "submission=" . $submission->getId() . PHP_EOL;
echo "bestId=" . $submission->getBestId() . PHP_EOL;
$publication = $submission->getCurrentPublication();
echo "publication=" . ($publication ? $publication->getId() : 'none') . PHP_EOL;
if ($publication) {
    $galleys = $publication->getData('galleys');
    echo "galleys=" . count((array) $galleys) . PHP_EOL;
    foreach ((array) $galleys as $galley) {
        $file = $galley->getFile();
        echo 'galley:' . $galley->getId() . ' urlPath=' . $galley->getData('urlPath') . ' best=' . $galley->getBestGalleyId() . ' file=' . ($file ? $file->getId() : 'none') . PHP_EOL;
    }
}
