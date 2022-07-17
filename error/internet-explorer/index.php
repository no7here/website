<?php 

# reject user if user is not using IE

if ((strpos($_SERVER["HTTP_USER_AGENT"], "MSIE")) or (strpos($_SERVER['HTTP_USER_AGENT'], 'Trident/7.0; rv:11.0'))) {} else { header("Location: /"); }

?>

<!DOCTYPE html>
<html lang="en" class="h-100">
    <head>
        <title>not here</title>

        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="title" content="not here">
        <meta name="description" content="Hey! I'm not here. I'm a developer learning Python, PHP, TypeScript & JavaScript.">

        <meta property="og:type" content="website">
        <meta property="og:title" content="not here">
        <meta property="og:url" content="https://not-here.dev">
        <meta property="og:image" itemprop="image" content="/assets/icon/favicon.jpg">
        <meta property="og:description" content="Hey! I'm not here, a developer from the UK learning Python, PHP & JavaScript.">

        <meta property="twitter:card" content="summary">
        <meta property="twitter:title" content="not here">
        <meta property="twitter:url" content="https://not-here.dev">
        <meta property="twitter:description" content="Hey! I'm not here, a developer from the UK learning Python, PHP & JavaScript.">

        <link rel="icon" href="/assets/icon/favicon.jpg">
        <link rel="stylesheet" href="/assets/style.css">
    </head>
    <body class="d-flex h-100 text-white bg-black">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
            <header class="mb-auto">
                <div>
                    <h3 class="float-md-start mb-0"><?php if (date("d") == 7 and date("m") == 8) { echo "🎉 &nbsp;"; } ?>not here</h3>
                </div>
            </header>
            <main class="px-3">
                <h1><img src="/assets/icon/cross.png" width="50" height="50" style="vertical-align: top;"> Internet Explorer Detected.</h1>
                <p class="about">Support for Internet Explorer is being dropped (see <a class="link-underline" href="https://docs.microsoft.com/en-us/lifecycle/announcements/internet-explorer-11-end-of-support">here</a>), and as a result, this website does not support Internet Explorer.<br><br>You can access this website using any modern browser, such as Safari, Edge, Chrome or Firefox.</p>
            </main>
            <footer class="mt-auto text-center text-white-50">
                <p>not here | Copyright &copy; <?php echo date("Y") ?> all rights reserved</p>
            </footer>
        </div>
    </body>
</html>