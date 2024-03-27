<!DOCTYPE html>
<html>
<head>
    <title>catgirls</title>
    <style>
        body {
            background-color: #222;
            color: #fff;
            text-align: center;
        }

        .boxLeft {
            border: none;
            padding: 30px;
            display: inline-block;
            vertical-align: top;
            background-color: #333;
            max-width: 500px;
            width: 160px;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
            height: 300px;
            margin-left: -10px;
            margin-top: 45px;
        }

        .ColorRed {
            text-shadow: 2px 5px 4px red;
            color: red;
        }

        .ColorMagenta {
            color: magenta;
            text-shadow: 2px 5px 4px magenta;
        }

        .top-btn {
            position: absolute;
            top: 10px;
            left: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
            white-space: nowrap; /* Added property to prevent text wrapping */
        }

        .RightBtn {
            margin-left: -10px;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            cursor: pointer;
            white-space: nowrap;
            width: 100px;
            display: inline-block;
            text-align: center;
        }

        .RightBtn:hover {
            background-color: #0056b3;
        }

        .top-btn:hover {
            background-color: #0056b3;
        }

        .preview-box {
            border: none;
            padding: 10px;
            margin: 10px;
            display: inline-block;
            vertical-align: top;
            background-color: #333;
            max-width: 200px;
            width: 100%;
            box-sizing: border-box;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
        }

        .preview-box img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            /* Define the desired size for the preview images */
            width: 150px;
            height: 150px;
        }

        .preview-box h3 {
            margin: 0;
            word-wrap: n-resize;
            word-break: break-all;
            /* Add this property to break long words */
            white-space: nowrap; /* Added property to prevent text wrapping */
            overflow: hidden; /* Added property to prevent text wrapping */
            text-overflow: ellipsis; /* Added property to truncate long text with ellipsis */
        }

        .preview-box a {
            display: block;
            margin-top: 10px;
            background-color: #007bff;
            color: #fff;
            padding: 5px 10px;
            text-align: center;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            transition: background-color 0.3s ease;
            white-space: nowrap; /* Added property to prevent text wrapping */
        }

        .preview-box a:hover {
            background-color: #0056b3;
        }

        .textstyles2 {
            color: white;
            top: 10px;
            left: 5px;
            text-shadow: 2px 2px 4px #fff;
            font-size: 20px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
    <meta charset="UTF-8">
    <title>fr</title>
    <meta property="og:title" content="Uploader">
    <meta property="og:description" content="this is a free uploading website with little uploading compacity since its hosted off of replit">
    <meta property="og:type" content="website">
</head>
<body>
  
    <div class="boxLeft">
        <div>
            <h1 class="textstyles2"><span class="ColorRed">Pages</span></h1>
        </div>
  
        <div style="margin-top: 10px;">
            <a href="#" class="RightBtn">Upload mods</a>
        </div>
        
        <div style="margin-top: 10px;">
            <a href="index.php" class="RightBtn">Main</a>
        </div>
    </div>

    <?php
    $images_dir = 'images/';
    $files = scandir($images_dir);
    foreach ($files as $file) {
        if ($file != '.' && $file != '..') {
            $file_path = $images_dir . $file;
            $file_type = mime_content_type($file_path);

            echo "<div class=\"preview-box\">";
            echo "<h3>$file</h3>";
            echo "<img src=\"$file_path\" alt=\"$file\">";
            $file_size = filesize($file_path);
            $file_size_MB = round(($file_size / (1024 * 1024)), 2);
            echo '<p>Size: ' . $file_size_MB . ' MB</p>';
            echo '<p>Type: ' . $file_type . '</p>';
            echo "<a href=\"$file_path\" download>Download</a>";
            echo "</div>";
        }
    }
    ?>

<script>
    var uploadBtn = document.getElementById('uploadBtn');
    uploadBtn.addEventListener('click', function() {
        window.location.href = 'fr.php';
    });

    var Stats = document.getElementById('Stats');
    Stats.addEventListener('click', function() {
        window.location.href = 'index.php';
    });
</script>
</body>
</html>
