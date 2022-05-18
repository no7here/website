<?php

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

$artwork = $lastfm[0]["recenttracks"]["track"][0]["image"][2]["#text"];

if ( empty( $artwork ) ) {
    $artwork = "/assets/art.png";
}

$trackInfo = [
    "name"       => $lastfm[0]["recenttracks"]["track"][0]["name"],
    "album"      => $lastfm[0]["recenttracks"]["track"][0]["album"]["#text"],
    "artist"     => $lastfm[0]["recenttracks"]["track"][0]["artist"]["#text"],
    "albumArt"   => $artwork,
    "status"     => $status
];

if ( !empty($lastfm[0]["recenttracks"]["track"][0]["@attr"]["nowplaying"]) ) {
    $trackInfo["nowPlaying"] = $lastfm[0]["recenttracks"]["track"][0]["@attr"]["nowplaying"];
    $trackInfo["status"] = "Now Playing:";
}

?>

<!DOCTYPE html>

<html lang="en" class="h-100">
    <head>
        <title>not here</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="title" content="not here">
        <meta name="description" content="Hey! I'm not here, a developer from the UK.">

        <meta property="og:type" content="website">
        <meta property="og:title" content="not here">
        <meta property="og:url" content="https://not-here.dev">
        <meta property="og:image" itemprop="image" content="/assets/pic.gif">
        <meta property="og:description" content="Hey! I'm not here, a developer from the UK.">

        <meta property="twitter:card" content="summary">
        <meta property="twitter:title" content="not here">
        <meta property="twitter:url" content="https://not-here.dev">
        <meta property="twitter:description" content="Hey! I'm not here, a developer from the UK.">

        <link rel="icon" href="/assets/pic.gif">
        <link rel="stylesheet" href="/assets/style.css">
    </head>
    <body class="d-flex h-100 text-white bg-black">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                    <h3 class="show-anim float-md-start mb-0"><a style="color: white; text-decoration: none;" class="link-underline" href="/">not here</a></h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="/labs">Labs</a>
                        <a class="nav-link" href="/projects">Projects</a>
                        <a class="nav-link" href="/contact">Contact</a>
                    </nav>
                </div>
            </header>
            <main class="px-3">
                <figure class="music-align">
                    <div class="music-cover-hover">
                        <a class="music-link-profile" href="https://open.spotify.com/user/zp8o4bf6stiyic8w713dtxqe2?si=6726264e5a574002" target="_blank">
                            <img class="music-align-cover" alt="Check out my Spotify profile!" width="200" height="200" src="<?php echo $trackInfo["albumArt"]; ?>">
                            <div><p style="color: white; text-decoration: none;" class="link-underline">My Spotify Profile!</p></div>
                        </a>
                    </div>
                    <figcaption>
                        <h4 class="show-anim music-align-text"><?php echo $trackInfo["status"]; ?></h4><br>
                        <h2 class="show-anim music-align-text"><?php echo $trackInfo["name"]; ?></h2>
                        <h5 class="show-anim music-align-text"><?php echo $trackInfo["album"]; ?> • <?php echo $trackInfo["artist"]; ?></h5>
                    </figcaption>
                </figure>
            </main>
            <footer class="mt-auto text-white-50">
                <p style="text-align:center;">not here | Copyright &copy; 2022 all rights reserved | watch the video <a style="text-decoration: none;" class="text-white-50 link-underline" href="https://www.youtube.com/watch?v=TUvcVBUv0rg" target="_blank">here</a></p>
            </footer>
            <video autoplay muted playsinline loop id="video">
                <source src="/assets/video.mp4" type="video/mp4">
                It looks like your browser isn"t letting me play a cool car video in the background :/
                You can watch it on YouTube though, through the link at the bottom of the page :)
            </video>
        </div>
    </body>
</html>