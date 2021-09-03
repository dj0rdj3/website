<?php
include "config.php";

$sql = "SELECT * FROM blog WHERE published=1 ORDER BY id DESC";
$rs = mysqli_query($con, $sql);

$images = json_decode(file_get_contents('../resources/photos.json'), true);
$bg = $images[array_rand($images)];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DJ0RDJ3's blog">
    <meta property="og:url" content="https://krstic.dev/blog">
    <meta name="theme-color" content="#00ff00">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/resources/css/style.css" type="text/css" rel="stylesheet" />
    <title>DJ0RDJ3's blog</title>
</head>

<body style="background-image: url('<?php echo $bg ?>');">
    <div class="wrapper">
        <nav id="blog-nav">
            <a href="/" id="about-link">About</a>
            <a href="/photos" id="photos-link">Photos</a>
            <a href="/blog" id="blog-link">Blog</a>
        </nav>
        <h1>Posts</h1>
        <div class="content">
            <?php if (mysqli_num_rows($rs) > 0) {
                while ($row = mysqli_fetch_array($rs)) {
                    echo '<a class="post" href="post/' . $row['link'] . '">' . $row['title'] . '<span class="arrow">&gt;</span></a>';
                }
                mysqli_free_result($rs);
            } ?>
        </div>
        <a class="swipe" id="cc" href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">All photos on this site
            are mine and licensed under CC BY-NC-SA 4.0</a>
    </div>
</body>

</html>