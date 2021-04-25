<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.publicapis.org/entries',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));

$response = curl_exec($curl);

curl_close($curl);


$data = json_decode($response);
  
echo "<b>Total APIs: $data->count </b><br>";
$entries = $data->entries[0]->API;

foreach ($data->entries as $value) {
  echo "API Name: <b>$value->API </b><br>";
}

?>