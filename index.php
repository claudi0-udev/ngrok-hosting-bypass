<?php
    include 'keys.php';

    $keys = new Keys();

    $url = "https://api.ngrok.com/tunnels";
    $headers = array(
        "authorization: Bearer " . $keys->ngrok_token,
        "ngrok-version: 2"
    );

    $opts = array(
        'http' => array(
            'method' => 'GET',
            'header' => implode("\r\n", $headers),
        ),
    );

    $context = stream_context_create($opts);

    $response = file_get_contents($url, false, $context);

    $json = json_decode($response, true);

    $tunnels = $json['tunnels'];

    for($i = 0; $i < count($tunnels); $i++) {
        $t = $tunnels[$i]['public_url'];
        if(strpos($t, 'https') === 0)
        {
            $s = "Location: " . $t;
            header($s);
            exit();
        }
    }
?>
