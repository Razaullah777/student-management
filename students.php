    <?php

require "db.php";

$sql = "SELECT * FROM students";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>All Students</title>

    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <h1>All Students</h1>

    <table border="1" cellpadding="10">

        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Department</th>
            <th>Semester</th>
            <th>Address</th>
        </tr>

        <?php while ($student = mysqli_fetch_assoc($result)) { ?>

        <tr>
            <td><?php echo $student['id']; ?></td>
            <td><?php echo $student['name']; ?></td>
            <td><?php echo $student['email']; ?></td>
            <td><?php echo $student['phone']; ?></td>
            <td><?php echo $student['department']; ?></td>
            <td><?php echo $student['semester']; ?></td>
            <td><?php echo $student['address']; ?></td>
        </tr>

        <?php } ?>

    </table>

</body>
</html>