<?php
require_once '../../app/Classes/FileHandler.php';
require_once '../../app/Classes/VehicleActions.php';
require_once '../../app/Classes/VehicleBase.php';
require_once '../../app/Classes/VehicleManager.php';

use App\Classes\VehicleManager;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $manager = new VehicleManager($_POST['name'], $_POST['type'], $_POST['price'], $_POST['image']);
    $manager->addVehicle($manager->getDetails());
    header("Location: ../index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Add Vehicle</title></head>
<body>
    <h2>Add New Vehicle</h2>
    <form method="POST">
        <label>Name: <input type="text" name="name" required></label><br>
        <label>Type: <input type="text" name="type" required></label><br>
        <label>Price: <input type="number" name="price" required></label><br>
        <label>Image URL: <input type="text" name="image" required></label><br>
        <button type="submit">Add Vehicle</button>
    </form>
    <a href="../index.php">Back</a>
</body>
</html>
