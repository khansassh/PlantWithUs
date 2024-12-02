<?php
include('db_config.php');

$plant_id = isset($_GET['plant_id']) ? $_GET['plant_id'] : 0;

$sql = "SELECT * FROM plants WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $plant_id);
$stmt->execute();
$plant_result = $stmt->get_result();
$plant = $plant_result->fetch_assoc();

$sql_activities = "SELECT * FROM plant_activities WHERE plant_id = ? ORDER BY day ASC";
$stmt_activities = $conn->prepare($sql_activities);
$stmt_activities->bind_param("i", $plant_id);
$stmt_activities->execute();
$activities_result = $stmt_activities->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $plant['plant_name']; ?> Information</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #4CAF50;
            padding: 20px;
            color: white;
            text-align: center;
        }

        .plant-info {
            margin: 20px;
            padding: 20px;
            background-color: white;
            border-radius: 5px;
        }

        .plant-info h2 {
            margin: 0;
            font-size: 2rem;
        }

        .activity-table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }

        .activity-table th, .activity-table td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }

        .activity-table th {
            background-color: #7fc17f;
            color: white;
        }
    </style>
</head>
<body>

<div class="header">
    <h1><?php echo $plant['plant_name']; ?> Information</h1>
</div>

<div class="plant-info">
    <p><strong>Description:</strong> <?php echo $plant['plant_description']; ?></p>

    <table class="activity-table">
        <thead>
            <tr>
                <th>Day</th>
                <th>Activity</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($activity = $activities_result->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $activity['day']; ?></td>
                    <td><?php echo $activity['activity_description']; ?></td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

</body>
</html>
