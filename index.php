<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management System</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>Student Management System</h1>

    <form action="add_student.php" method="POST">

        <label>Student Name</label>
        <input type="text" name="name" required>
        <br>

        <label>Email</label>
        <input type="email" name="email" required>
        <br>

        <label>Phone</label>
        <input type="text" name="phone" required>
        <br>

        <label>Department</label>
        <input type="text" name="department" required>
        <br>

        <label>Semester</label>
        <input type="number" name="semester" required>
        <br>

        <label>Address</label>
        <input type="text" name="address" required>
        <br>

        <button type="submit">Add Student</button>

    </form>

</body>
</html>