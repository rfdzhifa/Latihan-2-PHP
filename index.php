<?php include 'team.php'; ?>

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
    <?php displayTeamCards($teamMembers); ?>
    </div>

    <!-- Pop-up -->
    <?php displayPopups($teamMembers); ?>
</body>

</html>