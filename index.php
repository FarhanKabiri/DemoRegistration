<?php include "db.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Demo Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Theme Toggle Button -->
    <div class="theme-toggle">
  <button onclick="toggleTheme()" id="theme-icon" title="Toggle Theme">🌙</button>
</div>
<div class="welcome-ribbon" id="welcomeRibbon">
    👋 Welcome to Student Registration!
</div>



    <p><a href="students.php">View Registered Students</a></p>
    <h2>Student Registration</h2>

    <?php include "slots.php"; ?>
    <form action="submit.php" method="POST">
        ID: <input type="text" name="id" required pattern="\d{8}" placeholder="8-digit Student ID"><br>
        First Name: <input type="text" name="first_name" required pattern="[A-Za-z]+" placeholder="Your first name"><br>
        Last Name: <input type="text" name="last_name" required pattern="[A-Za-z]+" placeholder="Your last name"><br>
        Project Title: <input type="text" name="project_title" required placeholder="Your project name"><br>
        Email: <input type="email" name="email" required placeholder="example@domain.com"><br>
        Phone: <input type="text" name="phone" pattern="\d{3}-\d{3}-\d{4}" required placeholder="Format: 999-999-9999"><br>
        Time Slot: 
        <select name="slot_id" required>
            <?php foreach ($slots as $slot): ?>
                <?php if ($slot['available'] > 0): ?>
                    <option value="<?= $slot['id'] ?>">
                        <?= $slot['slot_time'] ?> (<?= $slot['available'] ?> seats left)
                    </option>
                <?php endif; ?>
            <?php endforeach; ?>
        </select><br><br>
        <input type="submit" value="Register">
    </form>

    <script src="theme.js"></script>
</body>
</html>
