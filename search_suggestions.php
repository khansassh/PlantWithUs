<?php
include('db_config.php');

$query = isset($_GET['query']) ? $_GET['query'] : '';

if (!empty($query)) {
    $sql = "SELECT * FROM plants WHERE plant_name LIKE ? LIMIT 5";
    $stmt = $conn->prepare($sql);
    $search_param = "%" . $query . "%"; 
    $stmt->bind_param("s", $search_param);
    $stmt->execute();
    $result = $stmt->get_result();

    $plants = [];
    while ($row = $result->fetch_assoc()) {
        $plants[] = $row;
    }

    echo json_encode($plants);
}
?>
