<?php 
require_once('../vendor/algolia/algoliasearch.php');

$client = new \AlgoliaSearch\Client('BG3AX4OCRB', '0a5e0edb3588b17ea4255c35f077e00d');

$index = $client->initIndex('records');

$index->setSettings(array(
  "searchableAttributes" => [
    "brand",
    "name",
    "categories",
    "unordered(description)"
  ],
  "customRanking" => [
    "desc(popularity)"
  ]
));

?>