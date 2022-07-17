<?php

set_error_handler("errors", E_WARNING);

try {
    $user     = "";
    $key      = "";
    $status   = "Last Played:";
    $recent   = "https://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=" . $user . "&&limit=2&api_key=" . $key . "&format=json";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $recent);
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER["HTTP_USER_AGENT"]);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 0);
    curl_setopt($ch, CURLOPT_TIMEOUT, 10);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array("Accept: application/json"));

    $response = curl_exec($ch);
    $lastfm[] = json_decode($response, true);

    curl_close($ch);

    $trackInfo = [
        "name"       => $lastfm[0]["recenttracks"]["track"][0]["name"],
        "album"      => $lastfm[0]["recenttracks"]["track"][0]["album"]["#text"],
        "artist"     => $lastfm[0]["recenttracks"]["track"][0]["artist"]["#text"],
        "status"     => $status,
        "artwork"    => $lastfm[0]["recenttracks"]["track"][0]["image"][2]["#text"];
    ];

    if (!empty($lastfm[0]["recenttracks"]["track"][0]["@attr"]["nowplaying"])) {
        $trackInfo["nowPlaying"] = $lastfm[0]["recenttracks"]["track"][0]["@attr"]["nowplaying"];
        $trackInfo["status"] = "Now Playing:";
    }

    if (!empty($response)) {

        echo "<div class=\"box-music music-box\"><img src=\"" . $trackInfo["artwork"] . "\" style=\"width:150px;height:150px;\"><p class=\"box-music-status\">". $trackInfo["status"] . "</p><h1>" . $trackInfo["name"] . "</h1><p class=\"box-music-info\">" . $trackInfo["album"] . " • " . $trackInfo["artist"] . "</p></div>";

    } else {

        echo "<div class=\"box-error music-box\"><h1>An error occurred.</h1><p>An error occurred when fetching tracks from the last.fm API to display here.</p></div>";

    }

} catch (Error) {

    echo "<div class=\"box-error music-box\"><h1>An error occurred.</h1><p>An error occurred when fetching tracks from the last.fm API to display here.</p></div>";
    
}

function errors($errno, $errstr) {} ?>
