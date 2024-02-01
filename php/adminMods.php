<?php
include_once('DatabaseConnection.php');
include_once('UserRepository.php');

// Instantiate the UserRepository class
$userRepository = new UserRepository();

// Get admin modification logs
$adminLogs = $userRepository->getAdminLogs();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifications Dashboard</title>
    <!-- Add your stylesheets and other head elements here -->
</head>

<body>
    <h1>Admin Modifications</h1>

    <!-- Display admin modification logs -->
    <table border="1">
        <thead>
            <tr>
                <th>Action Type</th>
                <th>Action Description</th>
                <th>Timestamp</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($adminLogs as $log) : ?>
                <tr>
                    <td><?php echo $log['action_type']; ?></td>
                    <td><?php echo $log['action_description']; ?></td>
                    <td><?php echo $log['timestamp']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <!-- Add other dashboard elements as needed -->

    <!-- Add your scripts and other body elements here -->
</body>

</html>
<style>
        body {
            font-family: Arial, sans-serif;
        }

        h1 {
            color: #333;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
        h1{
            text-align: center;
        }
</style>