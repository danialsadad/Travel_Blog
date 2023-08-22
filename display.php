<!DOCTYPE html>
<html>
<head>
    <title>Image Display with CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 50px;
        }

        .image-container {
            max-width: 600px;
            margin: 0 auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .image-container img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }

        .no-image {
            color: #888;
            font-size: 18px;
            margin: 20px;
        }
    </style>
</head>
<body>
    <h1>Image Display with CSS</h1>

    <?php
    $conn = mysqli_connect($servername, $username, $password, $databaseName);

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $query = "SELECT * FROM $tableName ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($conn, $query);

    $imageSrc = "placeholder.jpg"; 

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $image_name = $row['image_name'];
        $imageSrc = "uploads/$image_name";
    }

    mysqli_close($conn);
    ?>

    <?php if ($imageSrc !== "placeholder.jpg"): ?>
        <div class="image-container">
            <img src="<?php echo $imageSrc; ?>" alt="<?php echo $image_name; ?>">
        </div>
    <?php else: ?>
        <div class="no-image">No image found.</div>
    <?php endif; ?>
</body>
</html>