<?php
$images = json_decode(file_get_contents('resources/photos.json'), true);
$bg = $images[array_rand($images)];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DJ0RDJ3's personal site">
    <meta property="og:url" content="https://krstic.dev">
    <meta name="theme-color" content="#00ff00">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/resources/css/style.css" type="text/css" rel="stylesheet" />
    <link href="/resources/fontawesome/all.min.css" rel="stylesheet">
    <title>DJ0RDJ3's personal page</title>
</head>

<body style="background-image: url('<?php echo $bg ?>');">
    <div class="wrapper">
        <nav id="about-nav">
            <a href="/" id="about-link">About</a>
            <a href="/photos" id="photos-link">Photos</a>
            <a href="/blog" id="blog-link">Blog</a>
        </nav>
        <div id="about-window">
            <h1>About me!</h1>
            <p id="separator-bottom">Hi, my name is Đorđe, I'm 17<br />and I'm from Serbia. I am a:</p>
            <ul class="about-data">
                <li>Programmer</li>
                <li>Photographer</li>
                <li>Electronics nerd</li>
                <li>Linux enthusiast</li>
                <li>System admin</li>
            </ul>
            <div id="line"></div>
            <p>You can find me on:</p>
            <ul class="about-data">
                <li><i class="fab fa-discord"></i> <a href="http://discord.com/users/241694485694775296/" target="_blank">Discord: DJ0RDJ3#7258</a></li>
                <li><i class="fab fa-github"></i> <a href="https://github.com/dj0rdj3/" target="_blank">GitHub: dj0rdj3</a></li>
                <li><i class="far fa-envelope"></i> Email: dj0rdj3 &lt;at&gt; pm.me</li>
            </ul>
        </div>
        <a id="cc" href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">All photos on this site
            are mine and licensed under CC BY-NC-SA 4.0</a>
    </div>
</body>

</html>