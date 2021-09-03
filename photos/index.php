<?php
$images = json_decode(file_get_contents('../resources/photos.json'), true);
$thumbs = json_decode(file_get_contents('../resources/thumbs.json'), true);
$bg = $images[array_rand($images)];
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta property="og:type" content="website">
    <meta property="og:title" content="DJ0RDJ3's photos">
    <meta property="og:url" content="https://krstic.dev/photos">
    <meta name="theme-color" content="#00ff00">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/resources/css/style.css" type="text/css" rel="stylesheet" />
    <script src="/resources/js/jquery-3.5.1.min.js"></script>
    <title>DJ0RDJ3's photos</title>
</head>

<body style="background-image: url('<?php echo $bg ?>');">
    <div class="wrapper">
        <nav id="photos-nav">
            <a href="/" id="about-link">About</a>
            <a href="/photos" id="photos-link">Photos</a>
            <a href="/blog" id="blog-link">Blog</a>
        </nav>
        <h1>Photos I made</h1>
        <div class="photos-container">
            <?php
            foreach ($thumbs as $i) {
                echo '<div class="tile" style="background: url(' . $i . ') 50% 50% / cover no-repeat"></div>';
            };
            ?>
        </div>

        <div id="preview">
            <span id="close">&times;</span>
            <img id="preview-content">
        </div>

        <script>
            $('.tile').on('click', function() {
                let modal = document.getElementById("preview");
                let modalImg = document.getElementById("preview-content");

                modal.style.display = "block";
                modalImg.src = this.style.backgroundImage.slice(4, -1).replace(/"/g, "").replace("thumbs", "photos");
                $('body').css({
                    position: "fixed",
                    overflow: "hidden"
                });

                let span = document.getElementById("close")[0];

                $('#close').on('click', function() {
                    modal.style.display = "none";
                    $('body').css({
                        position: "initial",
                        overflow: "visible"
                    });
                });
            });
        </script>
        <a id="cc" href="https://creativecommons.org/licenses/by-nc-sa/4.0/" target="_blank">All photos on this site
            are mine and licensed under CC BY-NC-SA 4.0</a>
    </div>
</body>

</html>