<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Profile</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
        $name = "John Doe";
        $title = "Web Developer";
        $description = "I am a passionate web developer with experience in creating dynamic and responsive websites. I love coding and learning new technologies.";
        $email = "john.doe@example.com";
        $phone = "+123456789";
        $profile_image = "images/profile.jpg";
    ?>
    <div class="profile-container">
        <div class="profile-header">
            <img src="<?php echo $profile_image; ?>" alt="Profile Picture">
            <h1><?php echo $name; ?></h1>
            <h2><?php echo $title; ?></h2>
        </div>
        <div class="profile-content">
            <p><?php echo $description; ?></p>
            <ul class="contact-info">
                <li>Email: <?php echo $email; ?></li>
                <li>Phone: <?php echo $phone; ?></li>
            </ul>
        </div>
    </div>
</body>
</html>
