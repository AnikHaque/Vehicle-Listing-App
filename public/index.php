<?php
require_once '../app/Classes/FileHandler.php';
require_once '../app/Classes/VehicleActions.php';
require_once '../app/Classes/VehicleBase.php';
require_once '../app/Classes/VehicleManager.php';

use App\Classes\VehicleManager;

$manager = new VehicleManager("N/A", "N/A", 0, "");

$vehicles = $manager->getVehicles();
?>

<!DOCTYPE html>
<html>
<head><title>Vehicle Listing</title></head>
<body>
    <h1>Vehicle Listing</h1>
    <a href="views/add.php">Add Vehicle</a>
    <ul>
        <?php foreach ($vehicles as $v): ?>
            <li>
                <strong><?= $v['name'] ?></strong> (<?= $v['type'] ?>) - $<?= $v['price'] ?><br>
                <img src="<?= $v['image'] ?>" width="100"><br>
                <a href="views/edit.php?id=<?= $v['id'] ?>">Edit</a> |
                <a href="views/delete.php?id=<?= $v['id'] ?>">Delete</a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
