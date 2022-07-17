<?php 

# reject request if user is using IE

if ((strpos($_SERVER["HTTP_USER_AGENT"], "MSIE")) or (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0'))) header("Location: /error/internet-explorer");

?>

<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <title>not here</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="title" content="not here">
        <meta name="description" content="I'm a 16 year old musician and developer from the UK.">

        <meta property="og:type" content="website">
        <meta property="og:title" content="not here">
        <meta property="og:url" content="https://not-here.dev">
        <meta property="og:image" itemprop="image" content="/assets/icon/favicon.jpg">
        <meta property="og:description" content="I'm a 16 year old musician and developer from the UK.">

        <meta property="twitter:card" content="summary">
        <meta property="twitter:title" content="not here">
        <meta property="twitter:url" content="https://not-here.dev">
        <meta property="twitter:description" content="I'm a 16 year old musician and developer from the UK.">

        <link rel="icon" href="/assets/icon/favicon.jpg">
        <link rel="stylesheet" href="/assets/style.css">
        <script src="http://code.jquery.com/jquery-3.1.1.js"></script>
    </head>
    <body class="d-flex h-100 text-white bg-black">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
            <div style="animation-delay: .90s;" class="slide-down">
                    <h3 class="text-center float-md-start mb-0"><a class="link-underline" href="/"><?php if (date("d") == 7 and date("m") == 8) { echo "🎉 &nbsp;"; } ?>not here</a></h3>
                    <nav class="nav nav-masthead justify-content-center float-md-end">
                        <a class="nav-link" href="/">Home</a>
                        <a class="nav-link" href="/about">About</a>
                        <a class="nav-link" href="/projects">Projects</a>
                        <a class="nav-link" href="/contact">Contact</a>
                    </nav>
                </div>
            </header>
            <main class="px-3"><br>
                <h1 class="slide-up">About me.</h1><br>
                <h4 style="animation-delay: .12s" class="slide-up">Experience as a Developer.</h4>
                <p>
                    <ul>
                        <li style="animation-delay: .22s" class="slide-up">Check out my GitHub profile on the projects page for some projects.</li>
                        <li style="animation-delay: .24s" class="slide-up">Experience in Python, Javascript, PHP, SQL, HTML & CSS</li>
                        <li style="animation-delay: .26s" class="slide-up">Worked with discord.py & guilded.py.</li>
                        <li style="animation-delay: .28s" class="slide-up">Worked as a full stack developer.</li>
                        <li style="animation-delay: .30s" class="slide-up">Been coding since I was 9.</li>
                        <li style="animation-delay: .32s" class="slide-up">Currently learning Swift.</li>
                    </ul>
                </p>
                <h4 style="animation-delay: .42s" class="slide-up">Experience as a Musician.</h4>
                <p>
                    <ul>
                        <li style="animation-delay: .52s" class="slide-up">Played in many concerts/festivals such as Suffolk Festival of Performing Arts.</li>
                        <li style="animation-delay: .54s" class="slide-up">Played front desk of 2nd violins for Rugby Youth Orchestra.</li>
                        <li style="animation-delay: .56s" class="slide-up">Working towards grade 7 piano.</li>
                        <li style="animation-delay: .58s" class="slide-up">Achieved grade 5 singing.</li>
                        <li style="animation-delay: .60s" class="slide-up">Achieved grade 7 violin.</li>
                    </ul>
                </p>
                <h4 style="animation-delay: .70s" class="slide-up">Wanna know more?</h4>
                <p style="animation-delay: .80s" class="slide-up about">Contact me using the contact page and I'll get back to you as soon as I can.</p><br>
            </main>
            <footer class="mt-auto">
                <p style="animation-delay: .90s;" class="text-center slide-up text-white-50">not here | Copyright &copy; <?php echo date("Y") ?> all rights reserved<?php if (date("d") == 4 and date("m") == 5) {} else if (date("d") == 5 and date("m") == 11) {} else if (date("d") == 31 and date("m") == 10) {} else if (date("d") == 11 and date("m") == 6) {} else { ?> | watch the video <a style="text-decoration: none;" class="text-white-50 link-underline" href="<?php if (date("d") == 1 and date("m") == 4) { echo "https://www.youtube.com/watch?v=dQw4w9WgXcQ"; } else if (date("d") == 4 and date("m") == 7) { echo "https://www.youtube.com/watch?v=MAnRzeTlMGc"; } else { echo "https://www.youtube.com/watch?v=TUvcVBUv0rg"; } ?>" target="_blank">here</a><?php } ?></p>
            </footer>
            <?php if (date("d") == 1 and date("m") == 1) {
                
                echo "<div class=\"firework\"><div class=\"pyro\"><div class=\"before\"></div><div class=\"after\"></div></div></div> <video preload=\"none\" id=\"back-ground\" autoplay muted playsinline loop><source src=\"/assets/video.mp4\" type=\"video/mp4\"></video>"; 
            
            }else if (date("d") == 14 and date("m") == 2) {

                # if it is Valentines Day, show falling hearts

                echo "<video preload=\"none\" id=\"back-ground\" autoplay muted playsinline loop><source src=\"/assets/video.mp4\" type=\"video/mp4\"></video><div class=\"snowflake\">❤️</div><div class=\"snowflake\">❤️</div><div class=\"snowflake\">❤️</div><div class=\"snowflake\">❤️</div><div class=\"snowflake\">❤️</div><div class=\"snowflake\">❤️</div><div class=\"snowflake\">❤️</div>";

            } else if (date("d") == 1 and date("m") == 4) {

                # if it is April Fools, show a rick roll

                echo "<iframe id=\"back-ground\" src=\"https://www.youtube.com/embed/dQw4w9WgXcQ?controls=0&autoplay=1&mute=1&modestbranding=1&playsinline=1&playlist=dQw4w9WgXcQ&loop=1\"></iframe>";

            } else if (date("d") == 4 and date("m") == 5) {

                # if it is May the 4th, show star wars themed page

                echo "<script src=\"/assets/javascript/hyperdrive.js\" type=\"text/javascript\"></script>";

            } else if (date("d") == 11 and date("m") == 6) {

                # if it is the Queen's birthday, show the Queen and confetti
                
                echo "<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script><script src=\"/assets/javascript/confetti.js\" type=\"text/javascript\"></script><img id=\"back-ground\" src=\"/assets/images/queen.jpg\">"; 
                
            } else if (date("d") == 4 and date("m") == 7) {

                # if it is Independence Day, show Florida man

                echo "<iframe id=\"back-ground\" src=\"https://www.youtube.com/embed/MAnRzeTlMGc?controls=0&autoplay=1&mute=1&modestbranding=1&playsinline=1&playlist=MAnRzeTlMGc&loop=1\"></iframe>";

            } else if (date("d") == 7 and date("m") == 8) {

                # if it is my birthday, show confetti

                echo "<script src=\"https://code.jquery.com/jquery-3.2.1.min.js\"></script><script src=\"/assets/javascript/confetti.js\" type=\"text/javascript\"></script><video preload=\"none\" id=\"back-ground\" autoplay muted playsinline loop><source src=\"/assets/video.mp4\" type=\"video/mp4\"></video>";

            } else if (date("d") == 31 and date("m") == 10) {

                # if it is Halloween, show person riding horse in forest

                echo "<div class=\"hide-overflow\"><div id=\"background\"></div><svg class=\"moon\" xmlns=\"http://www.w3.org/2000/svg\" xmlns:xlink=\"http://www.w3.org/1999/xlink\" viewBox=\"0 0 100 100\" width=\"100\" height=\"100\"><circle r=\"30\" fill=\"#fff\" cx=\"70\" cy=\"70\"/></svg><div class=\"back ground\"></div><div class=\"mid ground\"></div><div class=\"frontmid ground\"></div><div class=\"front ground\"></div><div class=\"horseman\"></div></div>";

            } else if (date("d") == 5 and date("m") == 11) {

                # if it is Guy Fawkes Day, show campfire and fireworks

                echo "<div class=\"campfire-background\"><div class=\"pyro\"><div class=\"before\"></div><div class=\"after\"></div></div><div class=\"stage\"><div class=\"campfire\"><div class=\"sparks\"><div class=\"spark\"></div><div class=\"spark\"></div><div class=\"spark\"></div><div class=\"spark\"></div><div class=\"spark\"></div><div class=\"spark\"></div><div class=\"spark\"></div><div class=\"spark\"></div></div><div class=\"logs\"><div class=\"log\"><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div></div><div class=\"log\"><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div></div><div class=\"log\"><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div></div><div class=\"log\"><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div></div><div class=\"log\"><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div></div><div class=\"log\"><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div></div><div class=\"log\"><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div><div class=\"streak\"></div></div></div><div class=\"sticks\"><div class=\"stick\"></div><div class=\"stick\"></div><div class=\"stick\"></div><div class=\"stick\"></div></div><div class=\"fire\"><div class=\"fire__red\"><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div></div><div class=\"fire__orange\"><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div></div><div class=\"fire__yellow\"><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div></div><div class=\"fire__white\"><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div><div class=\"flame\"></div></div></div></div></div></div>";

            } else if ((date("d") >= 15 or date("d") <= 25) and date("m") == 12) {

                # if it is Christmas, show snow

                echo "<script src=\"/assets/javascript/snow.js\" type=\"text/javascript\"></script><video preload=\"none\" id=\"back-ground\" autoplay muted playsinline loop><source src=\"/assets/video.mp4\" type=\"video/mp4\"></video>";

            } else {

                # else just show normal car vid in background
                
                echo "<video preload=\"none\" id=\"back-ground\" autoplay muted playsinline loop><source src=\"/assets/video.mp4\" type=\"video/mp4\"></video>"; 
                
            } ?>
        </div>
    </body>
</html>