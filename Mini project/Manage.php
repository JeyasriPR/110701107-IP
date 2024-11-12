<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Students</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Student Management</h1>
        <form method="POST" action="">
            <input type="text" name="student_name" placeholder="Enter student name" required>
            <button type="submit">Add Student</button>
        </form>

        <ul>
            <?php foreach ($_SESSION['students'] as $index => $student): ?>
                <li>
                    <?php echo htmlspecialchars($student); ?>
                    <a href="?delete=<?php echo $index; ?>">Delete</a>
                </li>
            <?php endforeach; ?>
        </ul>

        <p><a href="home.php">Back to Home</a></p>
    </div>
</body>
</html>