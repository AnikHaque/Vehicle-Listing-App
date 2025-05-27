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
    $manager->editVehicle($_GET['id'], [
        'name' => $_POST['name'],
        'type' => $_POST['type'],
        'price' => $_POST['price'],
        'image' => $_POST['image']
    ]);
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Vehicle</title></head>
<body>
    <h2>Edit Vehicle</h2>
    <form method="POST">
        <label>Name: <input type="text" name="name" value="<?= $vehicle['name'] ?>" required></label><br>
        <label>Type: <input type="text" name="type" value="<?= $vehicle['type'] ?>" required></label><br>
        <label>Price: <input type="number" name="price" value="<?= $vehicle['price'] ?>" required></label><br>
        <label>Image URL: <input type="text" name="image" value="<?= $vehicle['image'] ?>" required></label><br>
        <button type="submit">Update Vehicle</button>
    </form>
    <a href="../index.php">Back</a>
</body>
</html>
