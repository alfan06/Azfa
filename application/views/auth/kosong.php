<?php
$uri = 'http://api.football-data.org/v2/competitions/2021/standings';
$uri2 = 'http://api.football-data.org/v2/teams/66';
$uri3 = 'https://api.football-data.org/v2/teams/66/matches?status=FINISHED';
$uri4 = 'https://api.football-data.org/v2/teams/66/matches?status=SCHEDULED';
$uri5 = 'http://api.football-data.org/v2/competitions/2021/teams';
$opts = array(
    'http' => array(
        'method' => "GET",
        'header' => "X-Auth-Token: 12dd0633a47645b98bf5db455c7ed2bc"
    )
);
// $reqPrefs['http']['method'] = 'GET';
// $reqPrefs['http']['header'] = 'X-Auth-Token: 12dd0633a47645b98bf5db455c7ed2bc';
$stream_context = stream_context_create($opts);

$response = file_get_contents($uri, false, $stream_context);
$response2 = file_get_contents($uri2, false, $stream_context);
$response3 = file_get_contents($uri3, false, $stream_context);
$response4 = file_get_contents($uri4, false, $stream_context);
$response5 = file_get_contents($uri5, false, $stream_context);

var_dump($response5);
// $matches = var_dump($response);
$json = json_decode($response, true);
$json2 = json_decode($response2, true);
$json3 = json_decode($response3, true);
$json5 = json_decode($response5, true);

// var_dump($json2);

$standing = $json['standings'][0]['table'];
$teams = $json2['squad'];
$recent = $json3['matches'];

$image = $json5['teams'];
?>