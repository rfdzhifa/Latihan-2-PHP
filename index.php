<?php
$teamMembers = [
    ["name" => "Rifdah Inas Nazhifah", "role" => "Front End Developer", "image" => "assets/zhifa.jpg", "email" => "rfdnazhifah@gmail.com", "linkedinUrl"=> "https://www.linkedin.com/in/rfdnazhifah/", "linkedinDisplay" => "rfdnazhifah"],
    ["name" => "Rifdah Inas Nazhifah", "role" => "Front End Developer", "image" => "assets/profile.png", "email" => "rfdnazhifah@gmail.com", "linkedinUrl"=> "https://www.linkedin.com/in/rfdnazhifah/", "linkedinDisplay" => "rfdnazhifah"],
    ["name" => "Rifdah Inas Nazhifah", "role" => "Front End Developer", "image" => "assets/profile.png", "email" => "rfdnazhifah@gmail.com", "linkedinUrl"=> "https://www.linkedin.com/in/rfdnazhifah/", "linkedinDisplay" => "rfdnazhifah"],
    ["name" => "Rifdah Inas Nazhifah", "role" => "Front End Developer", "image" => "assets/profile.png", "email" => "rfdnazhifah@gmail.com", "linkedinUrl"=> "https://www.linkedin.com/in/rfdnazhifah/", "linkedinDisplay" => "rfdnazhifah"],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>Story Frame</title>
</head>

<body>
    <div class="title">
        <h1>Meet Our Creative Minds</h1>
        <p>
            Behind every great story is a team of passionate and creative minds. Get
            to know the people behind Story Frame who bring ideas to life with
            stunning visuals!
        </p>
    </div>
    <div class="card-list">
        <?php foreach ($teamMembers as $index => $member): ?>
        <a href="#popup-<?php echo $index; ?>" class="card">
            <img src="<?php echo $member['image']; ?>" alt="<?php echo $member['name']; ?>">
            <div>
                <h3><?php echo $member['name']; ?></h3>
                <p><?php echo $member['role']; ?></p>
            </div>
        </a>
        <?php endforeach; ?>
    </div>

    <!-- Pop-ups -->
    <?php foreach ($teamMembers as $index => $member): ?>
    <div id="popup-<?php echo $index; ?>" class="pop-up">
        <div class="pop-up-content">
            <div class="general-data">
                <h2><?php echo $member['name']; ?></h2>
                <p><?php echo $member['role']; ?></p>
            </div>
            <div class="contact">
                <div>
                    <?php if (isset($member['email'])): ?>
                        <p class=title>Email</p>
                        <p><?php echo $member['email']; ?></p>
                    <?php endif; ?>
                </div>
                <div>
                    <?php if (isset($member['linkedinUrl'])): ?>
                        <p class=title>Linkedin</p>
                        <p><a class=link href="<?php echo $member['linkedinUrl']; ?>" target="_blank"><?php echo $member['linkedinDisplay']; ?></a></p>
                    <?php endif; ?>
                </div>
            </div>
            <a href="#" class="close-btn"><svg class="x" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M19.2806 18.2194C19.3502 18.289 19.4055 18.3718 19.4432 18.4628C19.4809 18.5539 19.5003 18.6514 19.5003 18.75C19.5003 18.8485 19.4809 18.9461 19.4432 19.0372C19.4055 19.1282 19.3502 19.2109 19.2806 19.2806C19.2109 19.3503 19.1281 19.4056 19.0371 19.4433C18.9461 19.481 18.8485 19.5004 18.7499 19.5004C18.6514 19.5004 18.5538 19.481 18.4628 19.4433C18.3717 19.4056 18.289 19.3503 18.2193 19.2806L11.9999 13.0603L5.78055 19.2806C5.63982 19.4213 5.44895 19.5004 5.24993 19.5004C5.05091 19.5004 4.86003 19.4213 4.7193 19.2806C4.57857 19.1399 4.49951 18.949 4.49951 18.75C4.49951 18.551 4.57857 18.3601 4.7193 18.2194L10.9396 12L4.7193 5.78061C4.57857 5.63988 4.49951 5.44901 4.49951 5.24999C4.49951 5.05097 4.57857 4.8601 4.7193 4.71936C4.86003 4.57863 5.05091 4.49957 5.24993 4.49957C5.44895 4.49957 5.63982 4.57863 5.78055 4.71936L11.9999 10.9397L18.2193 4.71936C18.36 4.57863 18.5509 4.49957 18.7499 4.49957C18.949 4.49957 19.1398 4.57863 19.2806 4.71936C19.4213 4.8601 19.5003 5.05097 19.5003 5.24999C19.5003 5.44901 19.4213 5.63988 19.2806 5.78061L13.0602 12L19.2806 18.2194Z" fill="black" />
</svg></a>
        </div>
    </div>
    <?php endforeach; ?>
</body>

</html>