<?php
include "config.php";

$link = mysqli_real_escape_string($con, $_GET['link']);
$sql = "SELECT * FROM blog WHERE link='{$link}'";
$rs = mysqli_query($con, $sql);
$row = mysqli_fetch_array($rs);

$images = json_decode(file_get_contents('../resources/photos.json'), true);
$bg = $images[array_rand($images)];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="<?php echo $row['title'] ?>">
    <meta property="og:url" content="https://krstic.dev/blog/post/<?php echo $link ?>">
    <meta name="theme-color" content="#00ff00">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/resources/css/style.css" type="text/css" rel="stylesheet" />
    <title><?php echo $row['title'] ?></title>
</head>

<body style="background-image: url('<?php echo $bg ?>');" class="blog-post">
    <div class="wrapper">
        <nav id="blog-nav">
            <a href="/" id="about-link">About</a>
            <a href="/photos" id="photos-link">Photos</a>
            <a href="/blog" id="blog-link">Blog</a>
        </nav>
        <h1><?php echo $row['title'] ?></h1>
        <div class="content">
            <a href="https://krstic.dev/blog/" class="swipe back">&lt; Posts</a>
            <?php echo $row['content'];
            mysqli_free_result($rs); ?>
        </div>
        <a class="swipe" id="cc" href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">All photos on this site
            are mine and licensed under CC BY-NC-SA 4.0</a>
    </div>
</body>

</html>