<?php
require_once '../../app/Classes/FileHandler.php';
require_once '../../app/Classes/VehicleActions.php';
require_once '../../app/Classes/VehicleBase.php';
require_once '../../app/Classes/VehicleManager.php';

use App\Classes\VehicleManager;

$manager = new VehicleManager("N/A", "N/A", 0, "");
$vehicles = $manager->getVehicles();
$vehicle = null;

foreach ($vehicles as $v) {
    if ($v['id'] === $_GET['id']) {
        $vehicle = $v;
        break;
    }
}

if (!$vehicle) {
    echo "Vehicle not found.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $manager->deleteVehicle($_GET['id']);
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Delete Vehicle</title></head>
<body>
    <h2>Delete Vehicle</h2>
    <p>Are you sure you want to delete <strong><?= $vehicle['name'] ?></strong>?</p>
    <form method="POST">
        <button type="submit">Yes, Delete</button>
        <a href="../index.php">Cancel</a>
    </form>
</body>
</html>
